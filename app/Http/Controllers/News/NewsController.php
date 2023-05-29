<?php

namespace App\Http\Controllers\News;

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
        $news = Newsm::all();
        return view('news.news', compact('news'));
    }
}
