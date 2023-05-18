<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use App\Models\Ambulance;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Administration;

class AmbulanceController extends Controller
{
    public function __invoke()
    {
        $ambulance = Ambulance::all();
        $worker = Worker::where('worker_id', '=', 2)->get();
        return view('buildings.ambulance', compact('ambulance', 'worker'));
    }
}
