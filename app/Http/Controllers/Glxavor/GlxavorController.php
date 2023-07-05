<?php

namespace App\Http\Controllers\Glxavor;

use App\Helper;
use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Messages;
use App\Models\News;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;
use App\Http\Requests\Main\MessageRequest;

class GlxavorController extends Controller
{
    public function index()
    {
        $news = News::where('status', 1)->orderBy('id', 'desc')->limit(6)->get();
        $worker = Worker::where('worker_id', '=', 5)->where('status', '=', 1)->get();
        $images = Images::where('gallery_id', '=', 1)->where('status', '=', 1)->get();
        $users = Helper::getUsers();
        return view('glxavor.glxavor', compact('images', 'worker', 'news', 'users'));
    }

    public function email_to_user(MessageRequest $request){

        $data = $request->validated();

        Messages::create($data);

        return json_encode(['ok' => 'Շնորհակալություն']);
    }
}
