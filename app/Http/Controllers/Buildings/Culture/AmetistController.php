<?php

namespace App\Http\Controllers\Buildings\Culture;

use App\Http\Controllers\Controller;
use App\Models\Ametist;
use App\Models\Carate;
use App\Models\Culture;
use App\Models\Culturem;
use App\Models\Images;
use App\Models\Main_info;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class AmetistController extends Controller
{
    public function __invoke()
    {
        $images = Images::where('gallery_id', '=', 12)->where('main_image', '=', 0)->get();
        $imagesg = Images::where('gallery_id', '=', 12)->where('main_image', '=', 1)->get();
        $worker = Worker::where('worker_id', '=', 12)->get();
        $info = Main_info::where('menu_id', '=', 12)->get();

        return view('buildings.culture.ametist', compact('imagesg', 'worker', 'images', 'info'));
    }

}
