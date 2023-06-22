<?php

namespace App\Http\Controllers\News;

use App\Helper;
use App\Http\Controllers\Controller;
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
        return view('news.newsi', compact('news', 'recent_news', 'users'));
    }
}
