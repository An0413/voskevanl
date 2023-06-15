<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\UpdateInfoRequest;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Helper;


class InfoController extends Controller
{
//    public function index($worker_id)
//    {
//        $worker = Worker::where('worker_id', '=', $worker_id)->where('status', 1)->get();
//        $images = Images::where('gallery_id', '=', $worker_id)->get();
//        $info = Itok::all();
//        return view('admin.main.show', compact('worker', 'images', 'info'));
//    }

    public function edit($info_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $info = Main_info::where('id', $info_id)->first();
        $admin_info = Helper::getAdmin();


        return view('admin.main.editi', compact('info',admin_info));
    }

    public function update($info_id, UpdateInfoRequest $request)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $info = Main_info::where('id', $info_id)->first();
        $data = $request->validated();
        DB::table('main_infos')
            ->where('id', $info_id)
            ->update($data);



        return redirect(route('worker_info', $info['menu_id']));
    }

    public function delete($info_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $info = Main_info::where('id', $info_id)->first();
//        $worker = Worker::where('id', $info_id)->first();
        DB::table('main_infos')
            ->where('id', $info_id)
            ->update(['status' => 0]);

        return redirect(route('worker_info',  $info['menu_id']));
    }

}
