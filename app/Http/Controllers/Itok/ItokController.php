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

        $imagesg = Images::where('gallery_id', '=', 5)->where('main_image', '=', 0)->where('status', '=', 1)->get();
        $images0 = Images::where('gallery_id', '=', 5)->where('main_image', '=', 1)->where('status', '=', 1)->get();
        $worker = Worker::where('worker_id', '=', 5)->where('status', '=', 1)->get();
        $info = Main_info::where('menu_id', '=', 5)->where('status', '=', 1)->orderBy('seq')->get();
        $services = Services::all();

        return view('itok.itok', compact('worker',  'imagesg', 'images0', 'services', 'info'));
    }
}
