<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Main_info;
use App\Models\News;
use App\Models\User;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helper;
use Illuminate\Support\Facades\DB;


class IndexaController extends Controller
{
    public function index($worker_id)
    {

        $admin_info = Helper::getAdmin();

        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $positions = [];
        if ($admin_info['role'] === 0) {
            $worker = DB::table('workers')->whereIn('status', [2, 3])->get();

            $images = DB::table('gallery')->whereIn('status', [2, 3])->get();;

            $info = DB::table('main_infos')->whereIn('status', [2, 3])->get();;

            $news = DB::table('news')->whereIn('status', [2, 3])->get();

            $positions_arr = WorkerPosition::all()->toArray();
            foreach ($positions_arr as $item) {
                $positions[$item['id']] = $item['title'];
            }
        }


        return view('admin.main.index', compact('worker', 'admin_info', 'images', 'info', 'worker_id', 'news','positions'));
    }

    public function worker($worker_id)
    {

        $admin_info = Helper::getAdmin();

        $worker = Worker::where('id', $worker_id)->where('status', 1)->first();

        $images = Images::where('gallery_id', $worker_id)->where('status', 1)->get();

        $info = Main_info::where('menu_id', $worker_id)->where('status', 1)->get();

        return view('admin.main.workered', compact('worker_id', 'admin_info', 'worker', 'images', 'info'));
    }

    public function submit($id, $table_id)
    {
        $update_status = 1;

        $tables = ['workers', 'main_infos', 'gallery', 'news'];

        $info = DB::table($tables[$table_id])->where('id', $id)->first();

        if ($info->status === 3) {
            $update_status = 0;
        }

        DB::table($tables[$table_id])->where('id', $id)->update(['status' => $update_status]);

        return redirect()->back();
    }

    public function info($id)
    {

        $admin_info = Helper::getAdmin();

        $info = Main_info::where('id', $id)->where('status', 1)->first();

        return view('admin.main.infoshow', compact('id', 'admin_info', 'info'));
    }

    public function gallery($worker_id)
    {

        $admin_info = Helper::getAdmin();

        $images = Images::where('id', $worker_id)->where('status', 1)->first();

        return view('admin.main.galleryshow', compact('worker_id', 'admin_info', 'images'));
    }

    public function news($id)
    {

        $admin_info = Helper::getAdmin();

        $news = News::where('id', $id)->first();

        return view('admin.main.newsshow', compact('id', 'admin_info', 'news'));
    }
}
