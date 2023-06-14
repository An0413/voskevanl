<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helper;
class IndexaController extends Controller
{
    public function index()
    {
        $admin_info = Helper::getAdmin();

        $worker = Worker::where('worker_id', '=', 5)->get();
        return view('admin.main.index', compact('worker', 'admin_info'));
    }
}
