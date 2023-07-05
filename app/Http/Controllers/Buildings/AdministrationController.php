<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Main_info;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Administration;

class AdministrationController extends Controller
{
    public function __invoke()
    {
        $administration = Main_info::where('menu_id', '=', 7)->where('status', '=', 1)->get();
        $worker = Worker::where('worker_id', '=', 7)->where('status', '=', 1)->get();
        $images = Images::where('gallery_id', '=', 7)->where('status', '=', 1)->get();
        return view('buildings.administration', compact('administration', 'worker', 'images'));
    }
}
