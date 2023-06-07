<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\News;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminNewsController extends Controller
{
    public function index(){
        $user_id = 1;
//        $user_id = auth()->user()->getAuthIdentifier();
        $news = News::where('user_id', $user_id)->orderBy('id', 'desc')->get();
        return view('admin.news.show', compact('user_id', 'news'));
    }


    public function create(){


        return view('admin.news.create');

    }


    public function edit($news_id){

        $news = News::where('id', $news_id)->first();
        return view('admin.news.edit', compact('news'));
    }

    public function update(UpdateWorkerRequest $request, $news_id)
    {
        $data['user_id'] = 1;
        $data['status'] = 2;
        $data['url'] = '';

        if (isset($data['img'])) {
            if ($data['img']) {
                unset($data['img']);
            } else {

            }
            $news = News::where('id', $news_id)->first();
            $data = $request->validated();
            $news_id->update($data);
            return redirect()->route('news_show', compact('news', 'request'));

        }
    }

    public function delete($news_id){


    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = 1;
        $data['status'] = 2;
        $data['url'] = '';
        $imagePath = $request->file('img')->store('public/assets/img/news');
        $path_arr = explode('/', $imagePath);
        $imageName = end($path_arr);
        $request->img->move(public_path('assets/img/news'), $imageName);
        $data['img'] = $imageName;
        News::firstOrCreate($data);
        return redirect()->route('news_show');
    }
}
