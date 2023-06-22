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

//    public function create()
//    {
//        if (!Auth::user()){
//            return redirect('admin/login');
//        }
//
//        $admin_info = Helper::getAdmin();
//
//        return view('admin.main.sightscreate', compact('admin_info'));
//
//    }
//    public function edit($sights_id)
//    {
//        if (!Auth::user()){
//            return redirect('admin/login');
//        }
//        $sights = Sights::where('id', $sights_id)->first();
//
//        $admin_info = Helper::getAdmin();
//
//        return view('admin.main.sightsedit', compact('sights','admin_info'));
//    }
//
//    public function update(UpdatesRequest $request, $sights_id)
//    {
//        if (!Auth::user()){
//            return redirect('admin/login');
//        }
//        $sights = Sights::where('id', $sights_id)->first();
//        $data = $request->validated();
//        $data['status'] = 3;
//        if ($request->file('image')) {
//            $imagePath = $request->file('image')->store('public/assets/img/sights');
//            $path_arr = explode('/', $imagePath);
//            $imageName = end($path_arr);
//            $request->image->move(public_path('assets/img/sights'), $imageName);
//            $data['image'] = $imageName;
//
//            $deleted_image_data = [
//                'path' => 'assets/img/sights/'.$sights->image,
//                'from_table' => 'sights',
//                'table_id' =>  $sights->id
//            ];
//            DB::table('deleted_images')->insert($deleted_image_data);
//        }
//
//        DB::table('sights')
//            ->where('id', $sights_id)
//            ->update($data);
//
//        return redirect()->route('admin_sights');
//
//    }
//
//    public function delete($sights_id)
//    {
//        if (!Auth::user()){
//            return redirect('admin/login');
//        }
//        $sights = Sights::where('id', $sights_id)->first();
//        DB::table('sights')
//            ->where('id', $sights_id)
//            ->update(['status' => 3]);
//
//        return redirect()->route('admin_sights', $sights->$sights_id);
//    }
//    public function store(StoresRequest $request)
//    {
//        if (!Auth::user()){
//            return redirect('admin/login');
//        }
//        $data = $request->validated();
//        $data['seq']=1;
//        $data['status'] = 2;
//        $data['user_id'] = Auth::user()->id;
//        $imagePath = $request->file('image')->store('public/assets/img/sights');
//        $path_arr = explode('/', $imagePath);
//        $imageName = end($path_arr);
//        $request->image->move(public_path('assets/img/sights'), $imageName);
//        $data['image'] = $imageName;
//        Sights::firstOrCreate($data);
//        return redirect()->route('admin_sights');
//    }
//
//    public function storeGallery(StoreGalleryRequest $request, $worker_id, $tab)
//    {
//        if (!Auth::user()){
//            return redirect('admin/login');
//        }
//        $data = $request->validated();
//        $data['gallery_id'] = $worker_id;
//        $data['user_id'] = Auth::user()->id;
////        $data['status'] = 2;
//        $imagePath = $request->file('image')->store('public/assets/img/gallery');
//        $path_arr = explode('/', $imagePath);
//        $imageName = end($path_arr);
//        $request->image->move(public_path('assets/img/gallery'), $imageName);
//        $data['src'] = $imageName;
//        unset($data['image']);
//        DB::table('gallery')->insert($data);
//        return redirect()->route('worker_info', $worker_id);
//    }
//
}
