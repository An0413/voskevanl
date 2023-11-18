<?php

namespace App\Http\Controllers\Everyday;

use App\Helper;
use App\Http\Controllers\Controller;
use App\Models\Everyday_news;
use App\Models\EverydayComments;
use App\Models\Itok;
use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Buildings;

class LifeReadController extends Controller
{
    public function __invoke(int $news_id)
    {
        $news = Everyday_news::where('id', $news_id)->where('status', 1)->get();
        $recent_news = Everyday_news::where('id', '!=', $news_id)->where('status', 1)->orderBy('id', 'desc')->limit(5)->get();
        $users = Helper::getUsers();
        $comments = EverydayComments::where('news_id', $news_id)->where('status',1)->get();
        return view('everyday.liferead', compact('news', 'recent_news', 'users', 'comments'));
    }
}
