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
        $images = Images::where('gallery_id', '=', 9)->get();
        $worker = Worker::where('worker_id', '=', 4)->get();
        return view('buildings.kindergarten', compact('worker', 'images'));
    }
}


