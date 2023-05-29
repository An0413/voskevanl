<?php

namespace App\Http\Controllers\Glxavor;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class GlxavorController extends Controller
{
    public function __invoke()
    {
        $worker = Worker::where('worker_id', '=', 5)->get();
        $images = Images::where('gallery_id', '=', 1)->get();
        $imagesg = Images::where('main_image', '=', 1)->where('gallery_id', '=', 1)->get();
        return view('glxavor.glxavor', compact('images', 'worker', 'imagesg'));

    }
}
