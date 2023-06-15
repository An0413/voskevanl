<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorecRequest;
use App\Http\Requests\Admin\StoreGalleryRequest;
use App\Http\Requests\Admin\UpdatecRequest;
use App\Models\Church;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Helper;


class AdminChurchController extends Controller
{
    public function index()
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }

        $worker_id = 11;
        $church = Church::all();

        $images = Gallery::where('gallery_id', $worker_id)->get();

        $admin_info = Helper::getAdmin();

        return view('admin.main.church', compact('admin_info', 'worker_id', 'images', 'church'));
    }

    public function create()
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }

        $admin_info = Helper::getAdmin();

        return view('admin.main.churchcreate', compact('admin_info'));

    }

    public function edit($church_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $church = Church::where('id', $church_id)->first();

        $admin_info = Helper::getAdmin();

        return view('admin.main.churchedit', compact('church','admin_info'));
    }

    public function update(UpdatecRequest $request, $church_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $church = Church::where('id', $church_id)->first();
        $data = $request->validated();
        $data['status'] = 3;
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('public/assets/img/church');
            $path_arr = explode('/', $imagePath);
            $imageName = end($path_arr);
            $request->image->move(public_path('assets/img/church'), $imageName);
            $data['image'] = $imageName;

            $deleted_image_data = [
                'path' => 'assets/img/church/'.$church->image,
                'from_table' => 'church',
                'table_id' =>  $church->id
            ];
            DB::table('deleted_images')->insert($deleted_image_data);
        }

        DB::table('churches')
            ->where('id', $church_id)
            ->update($data);

        return redirect()->route('admin_church');

    }

    public function delete($church_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $church = Church::where('id', $church_id)->first();
        DB::table('churches')
            ->where('id', $church_id)
            ->update(['status' => 3]);

        return redirect()->route('admin_church', $church->church_id);
    }
    public function store(StorecRequest $request)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['seq']=1;
        $data['status'] = 2;

        $imagePath = $request->file('img')->store('public/assets/img/church');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->img->move(public_path('assets/img/church'), $imageName);
        $data['img'] = $imageName;

        Church::firstOrCreate($data);
        return redirect()->route('admin_church');
    }

    public function storeGallery(StoreGalleryRequest $request, $worker_id, $tab)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['gallery_id'] = $worker_id;
        $data['user_id'] = Auth::user()->id;
//        $data['status'] = 2;
        $imagePath = $request->file('image')->store('public/assets/img/gallery');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->image->move(public_path('assets/img/gallery'), $imageName);
        $data['src'] = $imageName;
        unset($data['image']);
        DB::table('gallery')->insert($data);
        return redirect()->route('worker_info', $worker_id);
    }

}
