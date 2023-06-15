<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreGalleryRequest;
use App\Http\Requests\Admin\StorehRequest;
use App\Http\Requests\Admin\UpdatehRequest;
use App\Models\History;
use App\Models\Gallery;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminHistoryController extends Controller
{
    public function index()
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $worker_id = 6;
        $history = History::all();
        $images = Gallery::where('gallery_id', $worker_id)->get();
        return view('admin.main.history', compact('history', 'images', 'worker_id'));
    }

    public function create()
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        return view('admin.main.historycreate');

    }
    public function edit($history_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $history = History::where('id', $history_id)->first();
        return view('admin.main.historyedit', compact('history'));
    }

    public function update(UpdatehRequest $request, $history_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $history = History::where('id', $history_id)->first();
        $data = $request->validated();
        $data['history_status'] = 3;
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('public/assets/img/history');
            $path_arr = explode('/', $imagePath);
            $imageName = end($path_arr);
            $request->image->move(public_path('assets/img/history'), $imageName);
            $data['image'] = $imageName;

            $deleted_image_data = [
                'path' => 'assets/img/history/'.$history->image,
                'from_table' => 'history',
                'table_id' =>  $history->id
            ];
            DB::table('deleted_images')->insert($deleted_image_data);
        }

        DB::table('history')
            ->where('id', $history_id)
            ->update($data);

        return redirect()->route('admin_history');

    }

    public function delete($history_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $history = History::where('id', $history_id)->first();
        DB::table('history')
            ->where('id', $history_id)
            ->update(['history_status' => 3]);

        return redirect()->route('admin_history', $history->history_id);
    }
    public function store(StorehRequest $request, $worker_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['seq']=1;
        $data['history_status'] = 2;
        $data['url'] = '';
        $data['menu_id'] = $worker_id;
        $data['user_id'] = Auth::user()->id;
        $imagePath = $request->file('image')->store('public/assets/img/history');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->image->move(public_path('assets/img/history'), $imageName);
        $data['image'] = $imageName;
        History::firstOrCreate($data);
        return redirect()->route('admin_history');
    }

    public function storeGallery(StoreGalleryRequest $request, $worker_id, $tab)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['gallery_id'] = $worker_id;
        $data['user_id'] = Auth::user()->id;
//        $data['status'] = 2;
        $imagePath = $request->file('image')->store('public/assets/img/gallery');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->image->move(public_path('assets/img/gallery'), $imageName);
        $data['src'] = $imageName;
        unset($data['image']);
        DB::table('gallery')->insert($data);
        return redirect()->route('worker_info', $worker_id);
    }

}
