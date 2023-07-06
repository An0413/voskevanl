<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Sights\SightsController;
use App\Http\Requests\Admin\StoreGalleryRequest;
use App\Http\Requests\Admin\StoresRequest;
use App\Http\Requests\Admin\UpdatesRequest;
use App\Http\Requests\Main\UpdateGalleryRequest;
use App\Models\Gallery;
use App\Models\Sights;
use App\Models\SightsGallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Helper;


class AdminSightsController extends Controller
{
    public function index()
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $worker_id = 31;
        $sights = Sights::all();

        $admin_info = Helper::getAdmin();

        return view('admin.main.sights', compact('sights', 'worker_id', 'admin_info'));
    }

    public function create()
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }

        $admin_info = Helper::getAdmin();

        return view('admin.main.sightscreate', compact('admin_info'));

    }

    public function edit($sights_id)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $sights = Sights::where('id', $sights_id)->first();

        $admin_info = Helper::getAdmin();

        return view('admin.main.sightsedit', compact('sights', 'admin_info'));
    }

    public function update(UpdatesRequest $request, $sights_id)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $sights = Sights::where('id', $sights_id)->first();
        $data = $request->validated();
        $data['status'] = 2;
        $data['edit_user_id'] = Auth::user()->id;
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('public/assets/img/sights');
            $path_arr = explode('/', $imagePath);
            $imageName = end($path_arr);
            $request->image->move(public_path('assets/img/sights'), $imageName);
            $data['image'] = $imageName;

            $deleted_image_data = [
                'path' => 'assets/img/sights/' . $sights->image,
                'from_table' => 'sights',
                'table_id' => $sights->id
            ];
            DB::table('deleted_images')->insert($deleted_image_data);
        }

        DB::table('sights')
            ->where('id', $sights_id)
            ->update($data);

        return redirect()->route('admin_sights');

    }

    public function delete($sights_id)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $sights = Sights::where('id', $sights_id)->first();
        DB::table('sights')
            ->where('id', $sights_id)
            ->update(['status' => 3]);

        return redirect()->route('admin_sights', $sights->$sights_id);
    }

    public function store(StoresRequest $request)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['seq'] = 1;
        $data['status'] = 2;
        $data['user_id'] = Auth::user()->id;
        $data['edit_user_id'] = Auth::user()->id;
        $data['image'] = '';
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('public/assets/img/sights');
            $path_arr = explode('/', $imagePath);
            $imageName = end($path_arr);
            $request->image->move(public_path('assets/img/sights'), $imageName);
            $data['image'] = $imageName;
        }
        Sights::firstOrCreate($data);
        return redirect()->route('admin_sights');
    }

    public function gallery($id)
    {
        $images = SightsGallery::where('sight_id', $id)->get();
        $admin_info = Helper::getAdmin();

        return view('admin.main.sightsgallery', compact('id', 'images', 'admin_info'));
    }

    public function gallery_create($sight_id)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }

        $admin_info = Helper::getAdmin();

        return view('admin.main.createSightGallery', compact('sight_id', 'admin_info'));
    }

    public function gallery_delete($id)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $images = SightsGallery::where('id', $id)->first();
        DB::table('sights_galleries')
            ->where('id', $id)
            ->update(['status' => 3]);
        return redirect()->route('sights_gallery', $images->sight_id);
    }

    public function gallery_edit($id)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $images = SightsGallery::where('id', $id)->first();

        $admin_info = Helper::getAdmin();

        return view('admin.main.editSightGallery', compact('images', 'admin_info'));
    }

    public function gallery_update(UpdateGalleryRequest $request, $sights_id)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $images = SightsGallery::where('id', $sights_id)->first();
        $data = $request->validated();

        $user_info = Helper::getUserInfo(Auth::user()->id);

        if ($user_info['role'] == 1) {
            $users = [Auth::user()->id, $images->user_id];
        } else {
            $users = [Auth::user()->id];
        }

        $imagePath = $request->file('img')->store('public/assets/img/sights');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->img->move(public_path('assets/img/sights'), $imageName);

        DB::table('sights_galleries')
            ->where('id', $sights_id)
            ->whereIn('user_id', $users)
            ->update(['image' => $imageName, 'status' => 2]);

        return redirect()->route('sights_gallery', $images->sight_id);
    }


    public function gallery_store(StoreGalleryRequest $request, $sight_id)
    {
        if (!Auth::user()) {
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['seq'] = 1;
        $data['sight_id'] = $sight_id;
        $data['user_id'] = Auth::user()->id;
        $data['edit_user_id'] = Auth::user()->id;
        $data['status'] = 2;
        $imagePath = $request->file('image')->store('public/assets/img/sights');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->image->move(public_path('assets/img/sights'), $imageName);
        $data['image'] = $imageName;
//        unset($data['image']);
        DB::table('sights_galleries')->insert($data);
        return redirect()->route('sights_gallery', $sight_id);
    }

}
