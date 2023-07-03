<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorebRequest;
use App\Http\Requests\Admin\UpdatebRequest;
use Illuminate\Http\Request;
use App\Models\Buildings;
use Illuminate\Support\Facades\Auth;
use App\Helper;
use Illuminate\Support\Facades\DB;


class AdminBuildingsController extends Controller
{
    public function index()
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $admin_info = Helper::getAdmin();

        $buildings = Buildings::all();

        return view('admin.main.buildings', compact('admin_info', 'buildings'));
    }

    public function create()
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }

        $admin_info = Helper::getAdmin();

        return view('admin.main.buildingscreate', compact('admin_info'));

    }

    public function edit($buildings_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $buildings = Buildings::where('id', $buildings_id)->first();
        $admin_info = Helper::getAdmin();

        return view('admin.main.buildingsedit', compact('buildings', 'admin_info'));
    }

    public function update(UpdatebRequest $request, $buildings_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $buildings = Buildings::where('id', $buildings_id)->first();
        $data = $request->validated();

        $data['status'] = 3;
        if ($request->file('img')) {
            $imagePath = $request->file('img')->store('public/assets/img/buildings');
            $path_arr = explode('/', $imagePath);
            $imageName = end($path_arr);
            $request->img->move(public_path('assets/img/buildings'), $imageName);
            $data['img'] = $imageName;

            $deleted_image_data = [
                'path' => 'assets/img/buildings/'.$buildings->img,
                'from_table' => 'buildings',
                'table_id' =>  $buildings->id
            ];
            DB::table('deleted_images')->insert($deleted_image_data);
        }

        DB::table('buildings')
            ->where('id', $buildings_id)
            ->update(['status' => 2]);

        return redirect()->route('admin_buildings');

    }

    public function delete($buildings_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $buildings = Buildings::where('id', $buildings_id)->first();
        DB::table('buildings')
            ->where('id', $buildings_id)
            ->update(['status' => 3]);

        return redirect()->route('admin_buildings', $buildings->buildings_id);
    }

    public function store(StorebRequest $request)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();
//        $data['user_id'] = Auth::user()->id;
        $data['seq'] = 1;
        $data['status'] = 2;
        $data['url'] = '';
        $imagePath = $request->file('img')->store('public/assets/img/buildings');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->img->move(public_path('assets/img/buildings'), $imageName);
        $data['img'] = $imageName;
        Buildings::firstOrCreate($data);
        return redirect()->route('admin_buildings');
    }

}
