<?php

namespace App\Http\Controllers\News;

use App\Helper;
use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Itok;
use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Buildings;

class NewsiController extends Controller
{
    public function __invoke(int $news_id)
    {
        $news = News::where('id', $news_id)->where('status', 1)->get();
        $recent_news = News::where('id', '!=', $news_id)->where('status', 1)->orderBy('id', 'desc')->limit(5)->get();
        $users = Helper::getUsers();
        $comments = Comments::where('news_id', $news_id)->where('status',1)->get();
        return view('news.newsi', compact('news', 'recent_news', 'users', 'comments'));
    }

    public function user(UserRequest $request){

        $data = $request->validated();

        Comments::create($data);

        return json_encode(['ok' => 'Շնորհակալություն']);
    }
}
