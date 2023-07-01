<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use App\Models\Role;
use Illuminate\Http\Request;
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
        foreach ($roles_obj as $val) {
            $roles[$val->id] = $val['name_arm'];
        }

        if ($worker_id) {
            $message = Messages::where('message_to', $worker_id)->orderBy('status', 'DESC')->orderBy('id', 'DESC')->get();
        } else {
            $message = Messages::orderBy('status', 'DESC')->orderBy('id', 'DESC')->get();
        }
        return view('admin.main.message', compact('worker_id', 'admin_info', 'message', 'roles'));
    }

    public function change_status(Request $request)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $data = $request->validate([
            'message' => 'required|integer',
        ]);
        $id = $data['message'];
        $admin_info = Helper::getAdmin();
        $worker_id = $admin_info['role'];
        $message = Messages::where('id', $id)->first();

        DB::table('messages')->where('id', $id)->where('message_to', $worker_id)->update(['status' => 0]);

        echo json_encode(['success']);
    }
}
