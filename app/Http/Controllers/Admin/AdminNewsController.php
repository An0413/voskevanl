<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\UpdateRequest;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\News;
use App\Models\Status;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Sodium\compare;
use App\Helper;


class AdminNewsController extends Controller
{
    public function index()
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $user_id = auth()->user()->getAuthIdentifier();
        $news = News::where('user_id', $user_id)->orderBy('id', 'desc')->get();
        $admin_info = Helper::getAdmin();

        return view('admin.news.show', compact('user_id', 'news','admin_info'));
    }


    public function create()
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }

        $admin_info = Helper::getAdmin();

        return view('admin.news.create', compact('admin_info'));

    }


    public function edit($news_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $news = News::where('id', $news_id)->first();
        $admin_info = Helper::getAdmin();

        return view('admin.news.edit', compact('news', 'admin_info'));
    }

    public function update(UpdateRequest $request, $news_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $news = News::where('id', $news_id)->first();
        $data = $request->validated();

        $data['status'] = 2;
        $data['edit_user_id'] = Auth::user()->id;
        if ($request->file('img')) {
            $imagePath = $request->file('img')->store('public/assets/img/news');
            $path_arr = explode('/', $imagePath);
            $imageName = end($path_arr);
            $request->img->move(public_path('assets/img/news'), $imageName);
            $data['img'] = $imageName;

            $deleted_image_data = [
                'path' => 'assets/img/news/'.$news->img,
                'from_table' => 'news',
                'table_id' =>  $news->id
            ];
            DB::table('deleted_images')->insert($deleted_image_data);
        }

        DB::table('news')
            ->where('id', $news_id)
            ->update($data);

        return redirect()->route('news_list');

    }

    public function delete($news_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $news = News::where('id', $news_id)->first();
        DB::table('news')
            ->where('id', $news_id)
            ->update(['status' => 3]);

        return redirect()->route('news_list', $news->news_id);
    }


    public function store(StoreRequest $request)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        $data['edit_user_id'] = Auth::user()->id;
        $data['status'] = 2;
        $data['url'] = '';
        $imagePath = $request->file('img')->store('public/assets/img/news');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->img->move(public_path('assets/img/news'), $imageName);
        $data['img'] = $imageName;
        News::firstOrCreate($data);
        return redirect()->route('news_list');
    }
}
