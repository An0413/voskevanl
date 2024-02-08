<?php

namespace App\Http\Controllers\Everyday;

use App\Helper;
use App\Http\Controllers\Controller;
use App\Models\Everyday;
use App\Models\Everyday_news;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\News;
use App\Models\Services;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class EverydayController extends Controller
{
    public function __invoke()
    {
        $count_per_page = 4;
        $news = Everyday_news::where('status', 1)->orderBy('id', 'desc')->paginate($count_per_page);
        $users = Helper::getUsers();


        return view('everyday.life', compact('news','users','count_per_page'));
    }
}
