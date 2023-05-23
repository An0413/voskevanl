<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Administration;

class AdministrationController extends Controller
{
    public function __invoke()
    {
        $administration = Administration::all();
        $worker = Worker::where('worker_id', '=', 1)->get();
        $images = Images::where('gallery_id', '=', 7)->get();
        return view('buildings.administration', compact('administration', 'worker', 'images'));
    }
}
