<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreGalleryRequest;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\StoreWorkerRequest;
use App\Http\Requests\Admin\StoreInfoRequest;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\News;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Helper;


class MainController extends Controller
{
    public function index($worker_id = 0)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }

        $admin_info = Helper::getAdmin();
        if ($admin_info['role'] != 1) {
            $worker_id = $admin_info['worker_id'];
        }

        $worker = Worker::where('worker_id', $worker_id)->where('status', '>', 0)->orderBy('seq', 'asc')->get();
        $images = Images::where('gallery_id', $worker_id)->where('status', '>', 0)->get();


        $info = Main_info::where('menu_id', $worker_id)->where('status', '>', 0)->get();
        $admin_info = Helper::getAdmin();

        return view('admin.main.show', compact('worker', 'images', 'info', 'worker_id', 'admin_info'));
    }

    public function edit_worker($worker_id)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $worker = Worker::where('id', $worker_id)->first();
        $worker_positions = WorkerPosition::whereIn('area', [0, $worker->worker_id])->get();

        $admin_info = Helper::getAdmin();

        return view('admin.main.edit', compact('worker', 'worker_positions', 'admin_info'));
    }

    public function update($worker_id, UpdateWorkerRequest $request)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $worker = Worker::where('id', $worker_id)->first();
        $data = $request->validated();
        if (isset($data['img'])) {
            if ($data['img']) {
                $imagePath = $request->file('img')->store('public/assets/img/worker');
                $path_arr = explode('/', $imagePath);
                $imageName = end($path_arr);
                $request->img->move(public_path('assets/img/worker'), $imageName);
                $data['img'] = $imageName;
            } else {
                $data['img'] = '';
            }
        } else {
            $data['img'] = '';
        }

        $up_data = ['status' => 2, 'edit_user_id' => Auth::user()->id,
            'seq' => $data['seq'],
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'position' => $data['position'],
            'fb_link' => $data['fb_link'],
            'mail_link' => $data['mail_link'],
            'in_link' => $data['in_link'],
            'insta_link' => $data['insta_link'],
        ];
        if ($data['img']){
            $up_data['img'] = $data['img'];
        }

        DB::table('workers')
            ->where('id', $worker_id)
            ->update($up_data);


        return redirect()->route('worker_info', $worker->worker_id);
    }

    public function delete($worker_id)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $worker = Worker::where('id', $worker_id)->first();
        DB::table('workers')
            ->where('id', $worker_id)
            ->update(['status' => 3, 'edit_user_id' => Auth::user()->id]);


        return redirect()->route('worker_info', $worker->worker_id);
    }

    public function create($area, $tab)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }

        $worker_positions = WorkerPosition::whereIn('area', [0, $area])->get();

        $admin_info = Helper::getAdmin();


        return view('admin.main.create', compact(['worker_positions', 'tab', 'area', 'admin_info']));
    }

    public function store(StoreWorkerRequest $request, $worker_id)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        $data['edit_user_id'] = Auth::user()->id;
        $data['worker_id'] = $worker_id;
        $imagePath = $request->file('img')->store('public/assets/img/worker');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->img->move(public_path('assets/img/worker'), $imageName);
        $data['img'] = $imageName;
        $data['status'] = 2;
        DB::table('workers')->insert($data);
        return redirect()->route('worker_info', $worker_id);
    }

    public function storeInfo(StoreInfoRequest $request, $worker_id, $tab)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['menu_id'] = $worker_id;
        $data['user_id'] = Auth::user()->id;
        $data['status'] = 2;
        $data['edit_user_id'] = Auth::user()->id;
        DB::table('main_infos')->insert($data);
        return redirect()->route('worker_info', $worker_id);
    }

    public function createGallery($area, $tab)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }

        $admin_info = Helper::getAdmin();
        return view('admin.main.createGallery', compact(['tab', 'area'], 'admin_info'));


        //       return view('admin.main.create', compact(['tab', 'area']));

    }

    public function storeGallery(StoreGalleryRequest $request, $worker_id, $tab)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['gallery_id'] = $worker_id;
        $data['user_id'] = Auth::user()->id;
        $data['edit_user_id'] = Auth::user()->id;
        $imagePath = $request->file('image')->store('public/assets/img/gallery');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->image->move(public_path('assets/img/gallery'), $imageName);
        $data['src'] = $imageName;
        $data['status'] = 2;
        unset($data['image']);
        DB::table('gallery')->insert($data);
        return redirect()->route('worker_info', $worker_id);
    }

}
