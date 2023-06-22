<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Sights\SightsController;
use App\Http\Requests\Admin\StoreGalleryRequest;
use App\Http\Requests\Admin\StoresRequest;
use App\Http\Requests\Admin\UpdatesRequest;
use App\Models\Gallery;
use App\Models\Messages;
use App\Models\Role;
use App\Models\Sights;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Helper;


class AdminMessageController extends Controller
{
    public function index()
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $admin_info = Helper::getAdmin();
        $worker_id = $admin_info['role'];
        $roles_obj = Role::all();
        $roles = [];
        foreach ($roles_obj as $val){
            $roles[$val->id] = $val['name_arm'];
        }
        if ($worker_id) {
            $message = Messages::where('message_to', $worker_id)->orderBy('status', 'DESC')->orderBy('id', 'DESC')->get();
        }else{
            $message = Messages::orderBy('status', 'DESC')->orderBy('id', 'DESC')->get();
        }
        return view('admin.main.message', compact('worker_id', 'admin_info', 'message', 'roles'));
    }
}
