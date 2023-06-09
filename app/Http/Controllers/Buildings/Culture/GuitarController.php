<?php

namespace App\Http\Controllers\Buildings\Culture;

use App\Http\Controllers\Controller;
use App\Models\Carate;
use App\Models\Culture;
use App\Models\Culturem;
use App\Models\Guitar;
use App\Models\Images;
use App\Models\Main_info;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class GuitarController extends Controller
{
    public function __invoke()
    {
        $images = Images::where('gallery_id', '=', 52)->get();
        $imagesg = Images::where('gallery_id', '=', 52)->where('main_image', '=', 1)->get();
        $worker = Worker::where('worker_id', '=', 14)->get();
        $info = Main_info::where('menu_id', '=', 14 )->get();

        return view('buildings.culture.guitar', compact( 'images', 'imagesg','worker', 'info'));
    }

}
