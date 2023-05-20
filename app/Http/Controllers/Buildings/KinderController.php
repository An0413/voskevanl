<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Kindergarten;

class KinderController extends Controller
{
    public function __invoke()
    {
        $worker = Worker::where('worker_id', '=', 3)->get();
        return view('buildings.kindergarten', compact('worker'));
    }
}


