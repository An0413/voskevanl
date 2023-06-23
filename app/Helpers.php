<?php

namespace App;

use App\Models\User;
use App\Models\Worker;
use Illuminate\Support\Facades\Auth;

class Helper
{

    public static function getAdmin()
    {
        if (Auth::user()) {

            $user_id = Auth::user()->id;
            $admin_info = User::where('id', $user_id)->first()->toArray();
            if (!$admin_info) {
                header("Location: login");
            }
            $admin = Worker::where('id', $admin_info['worker_id'])->first()->toArray();
            if (!$admin) {
                header("Location: login");
            }

            $admin_info = array_merge($admin_info, $admin);
            return $admin_info;
        }
        return [];
    }

    public static function getUserInfo($user_id)
    {
        if (Auth::user()) {
            $admin_info = User::where('id', $user_id)->first()->toArray();
            if (!$admin_info) {
                header("Location: login");
            }
            $admin = Worker::where('id', $admin_info['worker_id'])->first()->toArray();
            if (!$admin) {
                header("Location: login");
            }

            $admin_info = array_merge($admin_info, $admin);
            return $admin_info;
        }
        return [];
    }

    public static function getUsers()
    {
        $admin_info = User::with('workers')->get()->toArray();
        if (!$admin_info) {
            header("Location: login");
        }
        $res = [];
        foreach ($admin_info as $value) {
            $res[$value['id']] = $value;
        }

        return $res;
    }
}

?>
