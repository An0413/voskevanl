<?php

namespace App\Http\Controllers\Admin\Main;

use     App\Http\Controllers\Controller;
use App\Http\Requests\Main\LoginRequset;
use App\Http\Requests\Main\UpdateGalleryRequest;
use App\Http\Requests\Main\UpdateInfoRequest;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
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
    public function login(LoginRequset $request){
//        $data = $request->validated();
        $data = $request->only('name', 'password');
        if (Auth::attempt($data)){
            return redirect(route('admin'));
        }else{
            Session::flash('message', 'Խնդրում ենք լրացնել ճիշտ տվյալներ');
            return redirect()->back();
        }
    }
    public function registr(){
        return view('admin.login.registr');
    }
}
