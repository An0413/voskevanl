<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Main_info;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helper;


class IndexaController extends Controller
{
    public function index($worker_id)
    {

        if (!Auth::user()){
            return redirect('admin/login');
        }
//        if (Auth::)
        $worker = Worker::where('worker_id',  $worker_id)->where('status', 2)->get();

        $images = Images::where('gallery_id',  $worker_id)->where('status', 2)->get();

        $info = Main_info::where('menu_id', $worker_id)->where('status', 2)->get();

        $admin_info = Helper::getAdmin();

        return view('admin.main.index', compact('worker', 'admin_info','images', 'info', 'worker_id'));
    }
}
