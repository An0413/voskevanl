<?php

namespace App\Http\Controllers\Buildings\Culture;

use App\Http\Controllers\Controller;
use App\Models\Ametist;
use App\Models\Carate;
use App\Models\Culture;
use App\Models\Culturem;
use App\Models\Images;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class AmetistController extends Controller
{
    public function __invoke()
    {
        $ametist = Ametist::all();
        $images = Images::where('gallery_id', '=', 54)->where('main_image', '=', 0)->get();
        $imagesg = Images::where('gallery_id', '=', 54)->where('main_image', '=', 1)->get();
        $worker = Worker::where('worker_id', '=', 10)->get();
        return view('buildings.culture.ametist', compact('imagesg', 'worker', 'ametist', 'images'));
    }

}
