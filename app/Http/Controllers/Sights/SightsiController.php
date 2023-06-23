<?php

namespace App\Http\Controllers\Sights;

use App\Helper;
use App\Http\Controllers\Controller;
use App\Models\Itok;
use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Buildings;

class SightsiController extends Controller
{
    public function __invoke(int $sights_id)
    {
        $sights = News::where('id', $sights_id)->where('status', 1)->get();
//        $recent_news = News::where('id', '!=', $sights_id)->where('status', 1)->orderBy('id', 'desc')->limit(5)->get();
        $users = Helper::getUsers();
        return view('sights.sightsi', compact('sights',  'users'));
    }
}
