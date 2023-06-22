<?php

namespace App\Http\Controllers\News;

use App\Helper;
use App\Http\Controllers\Controller;
use App\Models\Itok;
use App\Models\News;
use App\Models\Newsm;
use Illuminate\Http\Request;
use App\Models\Buildings;

class NewsController extends Controller
{
    public function __invoke()
    {
        $count_per_page = 4;
        $news = News::where('status', 1)->orderBy('id', 'desc')->paginate($count_per_page);
        $users = Helper::getUsers();
        return view('news.news', compact('news', 'count_per_page', 'users'));
    }
}
