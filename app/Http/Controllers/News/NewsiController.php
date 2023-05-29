<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Itok;
use App\Models\News;
use App\Models\Newsm;
use Illuminate\Http\Request;
use App\Models\Buildings;

class NewsiController extends Controller
{
    public function __invoke()
    {
        $news = News::where('id', '=', 6)->get();
        $newsm = Newsm::all();
        return view('news.newsi', compact('news','newsm'));
    }
}
