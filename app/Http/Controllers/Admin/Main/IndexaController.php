<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Main_info;
use App\Models\User;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helper;


class IndexaController extends Controller
{
    public function index($worker_id)
    {

        $admin_info = Helper::getAdmin();

        if (!Auth::user()){
            return redirect('admin/login');
        }

        if ($admin_info['role'] === 0){
            $worker = Worker::where('worker_id',  $worker_id)->where('status', 1)->get();

            $images = Images::where('gallery_id',  $worker_id)->where('status', 1)->get();

            $info = Main_info::where('menu_id', $worker_id)->where('status', 1)->get();
        }


        return view('admin.main.index', compact('worker', 'admin_info','images', 'info', 'worker_id'));
    }

    public function worker($worker_id){

        $admin_info = Helper::getAdmin();

        $worker = Worker::where('id',  $worker_id)->where('status', 1)->first();

        $images = Images::where('gallery_id',  $worker_id)->where('status', 1)->get();

        $info = Main_info::where('menu_id', $worker_id)->where('status', 1)->get();

        return view('admin.main.workered', compact('worker_id', 'admin_info', 'worker','images', 'info'));
    }

//    public function changestatus(){
//
//        if ($worker)
//
//        return view('admin.main.index', compact('worker_id'));
//    }

    public function info($id){

        $admin_info = Helper::getAdmin();

        $info = Main_info::where('id', $id)->where('status', 1)->first();

        return view('admin.main.infoshow', compact('id', 'admin_info', 'info'));
    }

    public function gallery($worker_id){

        $admin_info = Helper::getAdmin();

        $images = Images::where('id',  $worker_id)->where('status', 1)->first();

        return view('admin.main.galleryshow', compact('worker_id', 'admin_info', 'images'));
    }
}
