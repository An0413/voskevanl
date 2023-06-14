<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\StorewRequest;
use App\Http\Requests\Admin\StoreiRequest;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\News;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index($worker_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $worker = Worker::where('worker_id',  $worker_id)->where('status', 1)->get();
        $images = Images::where('gallery_id',  $worker_id)->get();
        $info = Main_info::where('menu_id', $worker_id)->get();
        return view('admin.main.show', compact('worker', 'images', 'info', 'worker_id'));
    }

    public function edit_worker($worker_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $worker = Worker::where('id', $worker_id)->first();
        $worker_positions = WorkerPosition::whereIn('area', [0, $worker->worker_id])->get();
        return view('admin.main.edit', compact('worker', 'worker_positions'));
    }

    public function update($worker_id, UpdateWorkerRequest $request)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
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
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $worker = Worker::where('id', $worker_id)->first();
        DB::table('workers')
            ->where('id', $worker_id)
            ->update(['status' => 0]);


        return redirect()->route('worker_info', $worker->worker_id);
    }

    public function create($area, $tab){
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $worker_positions = WorkerPosition::whereIn('area', [0, $area])->get();

        return view('admin.main.create', compact(['worker_positions', 'tab', 'area']));
    }

    public function store(StorewRequest $request,$worker_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();

        $data['worker_id'] = $worker_id;
        $data['img'] = $request->file('img')->store('public/assets/img/worker');
        DB::table('workers')->insert($data);
        return redirect()->route('worker_info', $worker_id);
    }

    public function storeInfo(StoreiRequest $request,$worker_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();
        Main_info::firstOrCreate($data);
        return redirect()->route('worker_info', compact('worker_id'));
    }

    public function storeGallery(StoreiRequest $request,$worker_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();
        Images::firstOrCreate($data);
        return redirect()->route('worker_info', compact('worker_id'));
    }

}
