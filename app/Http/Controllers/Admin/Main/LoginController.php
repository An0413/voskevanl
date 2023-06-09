<?php

namespace App\Http\Controllers\Admin\Main;

use     App\Http\Controllers\Controller;
use App\Http\Requests\Main\LoginRequset;
use App\Http\Requests\Main\UpdateGalleryRequest;
use App\Http\Requests\Main\UpdateInfoRequest;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Http\Requests\Main\UserRegister;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\Role;
use App\Models\User;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.login');
    }

    public function login(LoginRequset $request)
    {
//        $data = $request->validated();
        $data = $request->only('name', 'password');
        if (Auth::attempt($data)) {
            return redirect(route('admin'));
        } else {
            Session::flash('message', 'Խնդրում ենք լրացնել ճիշտ տվյալներ');
            return redirect()->back();
        }
    }

    public function register()
    {
        $roles = Role::all();
        $worker = Worker::all();
        return view('admin.login.register', compact('roles', 'worker'));
    }

    public function registerUser(UserRegister $request)
    {
        $data = $request->validated();
        $data['worker_id'] = $data['worker'];
        unset($data['worker']);

        $user = User::create($data);

        auth()->login($user);
        return redirect()->route('admin');
    }

    public function get_workers(Request $request)
    {
        $role = $request->get('role');
        $workers = Worker::where('worker_id', $role)->get();
        return view('admin.login.workers_list', compact('workers'));
    }

}
