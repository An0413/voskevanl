<?php

namespace App\Http\Controllers\Itok;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class ItokController extends Controller
{
    public function __invoke()
    {
        $imagesg = Images::where('gallery_id', '=', 5)->get();
        $imagesg1 = Images::where('gallery_id', '=', 50)->get();
        $itok = Itok::where('seq', '=', 1)->get();
        $itokm = Itok::where('seq', '=', 2)->get();
        $worker = Worker::where('worker_id', '=', 5)->get();
        return view('itok.itok', compact('worker', 'itok', 'itokm', 'imagesg', 'imagesg1'));
    }
}
