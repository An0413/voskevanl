<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Main_info;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function __invoke()
    {
        $images = Images::where('gallery_id', '=', 8)->where('main_image', '=', 0)->where('status', '=', 1)->get();
        $imagesg = Images::where('main_image', '=', 1)->where('gallery_id', '=', 8)->where('status', '=', 1)->get();
        $info = Main_info::where('menu_id', '=', 8)->where('status', '=', 1)->orderBy('seq','desc')->get();
        $worker = Worker::where('worker_id', '=', 8)->where('status', '=', 1)->orderBy('seq','desc')->get();

        return view('buildings.school', compact( 'worker','images','imagesg', 'info'));
    }
}

