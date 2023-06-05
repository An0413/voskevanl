<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Main_info;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Kindergarten;

class KinderController extends Controller
{
    public function __invoke()
    {
        $imagesg = Images::where('gallery_id', '=', 9)->where('main_image', '=', 1)->get();
        $images = Images::where('gallery_id', '=', 9)->where('main_image', '=', 0)->get();
        $info = Main_info::where('menu_id', '=', 9)->get();
        $worker = Worker::where('worker_id', '=', 4)->get();

        return view('buildings.kindergarten', compact('worker', 'images', 'imagesg', 'info'));
    }
}


