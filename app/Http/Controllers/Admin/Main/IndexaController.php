<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexaController extends Controller
{
    public function index()
    {
        $admin_info = $this->getAdmin();
        $worker = Worker::where('worker_id', '=', 5)->get();
        return view('admin.main.index', compact('worker', 'admin_info'));
    }

    public function getAdmin(){
        if (!Auth::user()->id){
            redirect()->route('login');
        }

        $user_id = Auth::user()->id;
        $admin_info = User::where('id', $user_id)->first()->toArray();
        if (!$admin_info){
            header("Location: login");
        }
        $admin = Worker::where('id',  $admin_info['worker_id'])->first()->toArray();
        if (!$admin){
            header("Location: login");
        }

        $admin_info = array_merge($admin_info, $admin);
        return $admin_info;
    }
}
