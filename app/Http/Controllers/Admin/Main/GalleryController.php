<?php

namespace App\Http\Controllers\Admin\Main;

use     App\Http\Controllers\Controller;
use App\Http\Requests\Main\UpdateGalleryRequest;
use App\Http\Requests\Main\UpdateInfoRequest;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
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
        $images = Images::where('id', $gallery_id)->first();

        return view('admin.main.editgallery', compact('images'));
    }

    public function update($gallery_id, UpdateGalleryRequest $request)
    {
        $images = Images::where('id', $gallery_id)->first();
        $data = $request->validated();
        DB::table('gallery')
            ->where('id', $gallery_id)
            ->update($data);



        return redirect(route('worker_info', $images['menu_id']));
    }

    public function delete($info_id)
    {
        $worker = Worker::where('id', $info_id)->first();
        DB::table('workers')
            ->where('id', $info_id)
            ->update(['status' => 0]);


        return redirect(route('worker_info', $worker->worker_id));
    }

}
