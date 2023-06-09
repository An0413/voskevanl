<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\StoreWorkerRequest;
use App\Http\Requests\Admin\StoreInfoRequest;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\News;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index($worker_id)
    {
        $worker = Worker::where('worker_id',  $worker_id)->where('status', 1)->get();
        $images = Images::where('gallery_id',  $worker_id)->get();
        $info = Main_info::where('menu_id', $worker_id)->get();
        return view('admin.main.show', compact('worker', 'images', 'info', 'worker_id'));
    }

    public function edit_worker($worker_id)
    {
        $worker = Worker::where('id', $worker_id)->first();
        $worker_positions = WorkerPosition::whereIn('area', [0, $worker->worker_id])->get();
        return view('admin.main.edit', compact('worker', 'worker_positions'));
    }

    public function update($worker_id, UpdateWorkerRequest $request)
    {
        $worker = Worker::where('id', $worker_id)->first();
        $data = $request->validated();
        if (isset($data['img'])) {
            if ($data['img']) {
                unset($data['img']);
            } else {

            }
        }

        DB::table('workers')
            ->where('id', $worker_id)
            ->update($data);


        return redirect()->route('worker_info', $worker->worker_id);
    }

    public function delete($worker_id)
    {
        $worker = Worker::where('id', $worker_id)->first();
        DB::table('workers')
            ->where('id', $worker_id)
            ->update(['status' => 0]);


        return redirect()->route('worker_info', $worker->worker_id);
    }

    public function create($area, $tab){

        $worker_positions = WorkerPosition::whereIn('area', [0, $area])->get();

        return view('admin.main.create', compact(['worker_positions', 'tab', 'area']));
    }

    public function store(StoreWorkerRequest $request,$worker_id)
    {

        $data = $request->validated();

        $data['worker_id'] = $worker_id;
        $imagePath = $request->file('img')->store('public/assets/img/worker');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->img->move(public_path('assets/img/worker'), $imageName);
        $data['img'] = $imageName;
        DB::table('workers')->insert($data);
        return redirect()->route('worker_info', $worker_id);
    }

    public function storeInfo(StoreInfoRequest $request,$worker_id, $tab)
    {
        $data = $request->validated();
        $data['menu_id'] = $worker_id;
        $data['user_id'] = 1;
        DB::table('main_infos')->insert($data);
        return redirect()->route('worker_info', $worker_id);
    }

    public function storeGallery(StoreInfoRequest $request, $worker_id, $tab)
    {
        $data = $request->validated();


        $imagePath = $request->file('img')->store('public/assets/img/about');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->img->move(public_path('assets/img/about'), $imageName);
        $data['img'] = $imageName;
        return redirect()->route('worker_info', $worker_id);
    }

}
