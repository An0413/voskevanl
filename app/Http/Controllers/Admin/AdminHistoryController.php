<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorehRequest;
use App\Http\Requests\Admin\UpdatehRequest;
use App\Models\History;
use App\Models\Images;
use App\Models\Itok;
use Illuminate\Http\Request;
use App\Models\Buildings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminHistoryController extends Controller
{
    public function index()
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $history = History::all();
        $images = Images::where('gallery_id', '=', 6)->get();
        return view('admin.main.history', compact('history', 'images'));
    }

    public function create()
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        return view('admin.main.historycreate');

    }
    public function edit($history_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $history = History::where('id', $history_id)->first();
        return view('admin.main.historyedit', compact('history'));
    }

    public function update(UpdatehRequest $request, $history_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $history = History::where('id', $history_id)->first();
        $data = $request->validated();
        $data['history_status'] = 3;
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('public/assets/img/history');
            $path_arr = explode('/', $imagePath);
            $imageName = end($path_arr);
            $request->image->move(public_path('assets/img/history'), $imageName);
            $data['image'] = $imageName;

            $deleted_image_data = [
                'path' => 'assets/img/history/'.$history->image,
                'from_table' => 'history',
                'table_id' =>  $history->id
            ];
            DB::table('deleted_images')->insert($deleted_image_data);
        }

        DB::table('history')
            ->where('id', $history_id)
            ->update($data);

        return redirect()->route('admin_history');

    }

    public function delete($history_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $history = History::where('id', $history_id)->first();
        DB::table('history')
            ->where('id', $history_id)
            ->update(['history_status' => 3]);

        return redirect()->route('admin_history', $history->history_id);
    }
    public function store(StorehRequest $request)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $data = $request->validated();
        $data['seq']=1;
        $data['history_status'] = 2;
        $data['url'] = '';
        $imagePath = $request->file('image')->store('public/assets/img/history');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->image->move(public_path('assets/img/history'), $imageName);
        $data['image'] = $imageName;
        History::firstOrCreate($data);
        return redirect()->route('admin_history');
    }

}
