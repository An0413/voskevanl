<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Itok;
use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Buildings;

class NewsController extends Controller
{
    public function __invoke()
    {
        $news = News::all();
        return view('news.news', compact('news'));
    }
}
