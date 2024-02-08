<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreeverydayGalleryRequest;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\UpdateRequest;
use App\Http\Requests\Main\UpdateGalleryRequest;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Models\Everyday;
use App\Models\Everyday_news;
use App\Models\Gallery;
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


class EverydayAdminController extends Controller
{
    public function index()
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $user_id = auth()->user()->getAuthIdentifier();
        $news = Everyday_news::orderBy('id', 'desc')->get();
        $admin_info = Helper::getAdmin();

        return view('admin.everyday.show', compact('user_id', 'news','admin_info',));
    }


    public function create()
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }

        $admin_info = Helper::getAdmin();

        return view('admin.everyday.create', compact('admin_info'));

    }


    public function edit($news_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $news = Everyday_news::where('id', $news_id)->first();
        $admin_info = Helper::getAdmin();

        return view('admin.everyday.edit', compact('news', 'admin_info'));
    }

    public function update(UpdateRequest $request, $news_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $news = Everyday_news::where('id', $news_id)->first();
        $data = $request->validated();

        $data['status'] = 2;
        $data['edit_user_id'] = Auth::user()->id;
        if ($request->file('img')) {
            $imagePath = $request->file('img')->store('public/assets/img/gallery');
            $path_arr = explode('/', $imagePath);
            $imageName = end($path_arr);
            $request->img->move(public_path('assets/img/gallery'), $imageName);
            $data['img'] = $imageName;

            $deleted_image_data = [
                'path' => 'assets/img/gallery/'.$news->img,
                'from_table' => 'everyday_news',
                'table_id' =>  $news->id
            ];
            DB::table('deleted_images')->insert($deleted_image_data);
        }

        DB::table('everyday_news')
            ->where('id', $news_id)
            ->update($data);

        return redirect()->route('admin_everyday');

    }

    public function delete($news_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $news = Everyday_news::where('id', $news_id)->first();
        DB::table('everyday_news')
            ->where('id', $news_id)
            ->update(['status' => 3]);

        return redirect()->route('admin_everyday', $news->news_id);
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
        $imagePath = $request->file('img')->store('public/assets/img/gallery');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->img->move(public_path('assets/img/gallery'), $imageName);
        $data['img'] = $imageName;
        Everyday_news::firstOrCreate($data);
        return redirect()->route('admin_everyday');
    }

    public function edit_gallery($id){
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $images = Everyday::where('id', $id)->first();
        $admin_info = Helper::getAdmin();

        return view('admin.everyday.editgallery', compact('images', 'admin_info'));
    }

    public function update_gallery($id, UpdateGalleryRequest $request){
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $images = Everyday::where('id', $id)->first();
        $data = $request->validated();

        $imagePath = $request->file('img')->store('public/assets/img/gallery');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->img->move(public_path('assets/img/gallery'), $imageName);
        $data['src'] = $imageName;
        unset($data['img']);

        DB::table('everyday')
            ->where('id', $id)
            ->update(['status' => 2, 'src' => $imageName, 'edit_user_id' => Auth::user()->id]);


        return redirect()->back();
    }

    public function delete_gallery($id){
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $gallery = Everyday::where('id', $id)->first();

        DB::table('everyday')
            ->where('id', $id)
            ->update(['status' => 3,'edit_user_id' => Auth::user()->id
            ]);


        return redirect()->back();

    }

    public function create_gallery(){
        if (!Auth::user()) {
            return redirect('admin/login');
        }

        $admin_info = Helper::getAdmin();


        return view('admin.everyday.creategallery', compact('admin_info'));

    }

    public function store_gallery(StoreeverydayGalleryRequest $request){
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $admin_info = Helper::getAdmin();

        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        $data['edit_user_id'] = Auth::user()->id;
        $imagePath = $request->file('image')->store('public/assets/img/gallery');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->image->move(public_path('assets/img/gallery'), $imageName);
        $data['src'] = $imageName;
        $data['status'] = 2;
        unset($data['image']);
        DB::table('everyday')->insert($data);
        return redirect()->route('admin_everyday', compact('admin_info'));

    }
}
