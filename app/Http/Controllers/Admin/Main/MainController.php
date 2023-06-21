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
    public function index($worker_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $worker = Worker::where('worker_id',  $worker_id)->where('status', 1)->get();
        $images = Images::where('gallery_id',  $worker_id)->get();

        $info = Main_info::where('menu_id', $worker_id)->get();
        $admin_info = Helper::getAdmin();

        return view('admin.main.show', compact('worker', 'images', 'info', 'worker_id','admin_info'));
    }

    public function edit_worker($worker_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $worker = Worker::where('id', $worker_id)->first();
        $worker_positions = WorkerPosition::whereIn('area', [0, $worker->worker_id])->get();

        $admin_info = Helper::getAdmin();

        return view('admin.main.edit', compact('worker', 'worker_positions','admin_info'));
    }

    public function update($worker_id, UpdateWorkerRequest $request)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $worker = Worker::where('id', $worker_id)->first();
        $data = $request->validated();
        if (isset($data['img'])) {
            if ($data['img']) {
                unset($data['img']);
            } else {

            }
        }

        DB::table('workers')
            ->where('id', $worker_id)
            ->update($data);


        return redirect()->route('worker_info', $worker->worker_id);
    }

    public function delete($worker_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $worker = Worker::where('id', $worker_id)->first();
        DB::table('workers')
            ->where('id', $worker_id)
            ->update(['status' => 0]);


        return redirect()->route('worker_info', $worker->worker_id);
    }

    public function create($area, $tab){
        if (!Auth::user()){
            return redirect('admin/login');
        }

        $worker_positions = WorkerPosition::whereIn('area', [0, $area])->get();

        $admin_info = Helper::getAdmin();


        return view('admin.main.create', compact(['worker_positions', 'tab', 'area','admin_info']));
    }

    public function store(StoreWorkerRequest $request, $worker_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();

        $data['worker_id'] = $worker_id;
        $imagePath = $request->file('img')->store('public/assets/img/worker');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->img->move(public_path('assets/img/worker'), $imageName);
        $data['img'] = $imageName;
        DB::table('workers')->insert($data);
        return redirect()->route('worker_info', $worker_id);
    }

    public function storeInfo(StoreInfoRequest $request, $worker_id, $tab)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['menu_id'] = $worker_id;
        $data['user_id'] = Auth::user()->id;
        $data['status'] = 1;
        $data['edit_user_id'] = 0;
        DB::table('main_infos')->insert($data);
        return redirect()->route('worker_info', $worker_id);
    }

    public function createGallery($area, $tab){
        if (!Auth::user()){
            return redirect('admin/login');
        }

        return view('admin.main.createGallery', compact(['tab', 'area']));

    }

    public function storeGallery(StoreGalleryRequest $request, $worker_id, $tab)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['gallery_id'] = $worker_id;
        $data['user_id'] = Auth::user()->id;
        $imagePath = $request->file('image')->store('public/assets/img/gallery');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->image->move(public_path('assets/img/gallery'), $imageName);
        $data['src'] = $imageName;
        unset($data['image']);
        DB::table('gallery')->insert($data);
        return redirect()->route('admin_history');
    }

}
