<?php

namespace App\Http\Controllers\Itok;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\Services;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class ItokController extends Controller
{
    public function __invoke()
    {
        $imagesg = Images::where('gallery_id', '=', 5)->where('main_image', '=', 0)->get();
        $imagesg1 = Images::where('gallery_id', '=', 50)->get();
        $images0 = Images::where('gallery_id', '=', 5)->where('main_image', '=', 1)->get();
        $itok = Itok::where('seq', '=', 1)->get();
        $itokm = Itok::where('seq', '=', 2)->get();
        $worker = Worker::where('worker_id', '=', 5)->get();
        $info = Main_info::where('menu_id', '=', 5)->get();
        $services = Services::all();
        return view('itok.itok', compact('worker', 'itok', 'itokm', 'imagesg', 'imagesg1', 'images0', 'services', 'info'));
    }
}
