<?php

namespace App\Http\Controllers\Buildings\Culture;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use App\Models\Culturem;
use App\Models\Culturex;
use App\Models\Images;
use App\Models\Main_info;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class CultureController extends Controller
{
    public function __invoke()
    {
        $worker = Worker::where('worker_id', '=', 6)->get();
        $culturem = Culturex::all();
        $images = Images::where('gallery_id', '=', 2)->get();
        $info = Main_info::where('menu_id', '=', 2)->get();
        $culture = Culturem::all();
        return view('buildings.culture.culture', compact('worker', 'culturem', 'images', 'culture', 'info'));
    }

}
