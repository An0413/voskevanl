<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\UpdateGalleryRequest;
use App\Http\Requests\Main\UpdateInfoRequest;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Gallery;
use App\Models\Main_info;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
//    public function index($worker_id)
//    {
//        $worker = Worker::where('worker_id', '=', $worker_id)->where('status', 1)->get();
//        $images = Images::where('gallery_id', '=', $worker_id)->get();
//        $info = Itok::all();
//        return view('admin.main.show', compact('worker', 'images', 'info'));
//    }

    public function edit($gallery_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $images = Images::where('id', $gallery_id)->first();

        return view('admin.main.editgallery', compact('images'));
    }

    public function update($gallery_id, UpdateGalleryRequest $request)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $images = Images::where('id', $gallery_id)->first();
        $data = $request->validated();

        $imagePath = $request->file('img')->store('public/assets/img/gallery');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->img->move(public_path('assets/img/gallery'), $imageName);
        $data['src'] = $imageName;
        unset($data['img']);

        DB::table('gallery')
            ->where('id', $gallery_id)
            ->update($data);


        if ($images['gallery_id'] == 6){
            return redirect()->route('admin_history');
        }
        return redirect(route('worker_info', $images['menu_id']));
    }

    public function delete($gallery_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $gallery = Gallery::where('id', $gallery_id)->first();

        DB::table('gallery')
            ->where('id', $gallery_id)
            ->update(['status' => 3]);


        return redirect()->route('admin_history');
    }

}
