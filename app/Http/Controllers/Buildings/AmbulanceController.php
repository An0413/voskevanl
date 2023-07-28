<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use App\Models\Ambulance;
use App\Models\Images;
use App\Models\Main_info;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Administration;

class AmbulanceController extends Controller
{
    public function __invoke()
    {
        $ambulance = Main_info::where('menu_id', '=', 10)->where('status', '=', 1)->orderBy('seq','desc')->get();
        $worker = Worker::where('worker_id', '=', 10)->where('status', '=', 1)->orderBy('seq', 'asc')->get();
        $images = Images::where('gallery_id', '=', 10)->where('status', '=', 1)->get();
        return view('buildings.ambulance', compact('ambulance', 'worker', 'images'));
    }
}
