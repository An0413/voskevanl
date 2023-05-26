<?php

namespace App\Http\Controllers\Buildings\Culture;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use App\Models\Culturem;
use App\Models\Fineart;
use App\Models\Guitar;
use App\Models\Images;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class FineartController extends Controller
{
    public function __invoke()
    {
        $fineart = Fineart::all();
        $images = Images::where('gallery_id', '=', 53)->get();
        $imagesg = Images::where('gallery_id', '=', 53)->where('main_image', '=', 1)->get();
        $worker = Worker::where('worker_id', '=', 9)->get();
        return view('buildings.culture.fineart', compact('fineart', 'images', 'imagesg','worker'));
    }

}
