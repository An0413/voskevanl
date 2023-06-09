<?php

namespace App\Http\Controllers\Buildings\Culture;

use App\Http\Controllers\Controller;
use App\Models\Carate;
use App\Models\Culture;
use App\Models\Culturem;
use App\Models\Images;
use App\Models\Main_info;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class CarateController extends Controller
{
    public function __invoke()
    {

        $images = Images::where('gallery_id', '=', 51)->get();
        $imagesg = Images::where('main_image', '=', 1)->where('gallery_id', '=', 51)->get();
        $worker = Worker::where('worker_id', '=', 15)->get();
        $info = Main_info::where('menu_id', '=', 15 )->get();

        return view('buildings.culture.carate', compact('worker', 'imagesg', 'images', 'info'));
    }

}
