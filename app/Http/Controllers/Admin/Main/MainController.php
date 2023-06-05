<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index($worker_id,$group_id = 0)
    {
        $worker = Worker::where('worker_id',  $worker_id)->where('status', 1)->get();
        $images = Images::where('gallery_id',  $worker_id)->get();
        $info = Main_info::where('menu_id', $worker_id)->where('group_id', $group_id)->get();
        return view('admin.main.show', compact('worker', 'images', 'info'));
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


        return redirect(route('worker_info', $worker->worker_id));
    }

    public function delete($worker_id)
    {
        $worker = Worker::where('id', $worker_id)->first();
        DB::table('workers')
            ->where('id', $worker_id)
            ->update(['status' => 0]);


        return redirect(route('worker_info', $worker->worker_id));
    }

}
