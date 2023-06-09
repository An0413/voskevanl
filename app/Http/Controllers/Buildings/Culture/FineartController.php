<?php

namespace App\Http\Controllers\Buildings\Culture;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use App\Models\Culturem;
use App\Models\Fineart;
use App\Models\Guitar;
use App\Models\Images;
use App\Models\Main_info;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class FineartController extends Controller
{
    public function __invoke()
    {

        $images = Images::where('gallery_id', '=', 53)->get();
        $imagesg = Images::where('gallery_id', '=', 53)->where('main_image', '=', 1)->get();
        $worker = Worker::where('worker_id', '=', 13)->get();
        $info = Main_info::where('menu_id', '=', 13 )->get();

        return view('buildings.culture.fineart', compact( 'images', 'imagesg','worker', 'info'));
    }

}
