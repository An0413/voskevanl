<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Kindergarten;

class KinderController extends Controller
{
    public function __invoke()
    {
        $imagesg = Images::where('gallery_id', '=', 9)->where('main_image', '=', 1)->get();
        $kindergarten = Kindergarten::all();
        $images = Images::where('gallery_id', '=', 9)->where('main_image', '=', 0)->get();
        $worker = Worker::where('worker_id', '=', 4)->get();
        return view('buildings.kindergarten', compact('worker', 'images', 'kindergarten', 'imagesg'));
    }
}


