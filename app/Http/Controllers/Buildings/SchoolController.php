<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use App\Models\Barekamavansh;
use App\Models\Baxanissh;
use App\Models\Images;
use App\Models\Jujevansh;
use App\Models\Kotish;
use App\Models\Teacher;
use App\Models\Voskevanish;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function __invoke()
    {
        $school = School::all();
        $voskevan = Voskevanish::all();
        $baxanis = Baxanissh::all();
        $jujevan= Jujevansh::all();
        $koti = Kotish::all();
        $barekamavan = Barekamavansh::all();
        $worker = Worker::where('worker_id', '=', 3)->get();
        $images = Images::all();
        return view('buildings.school', compact('school', 'voskevan', 'baxanis', 'jujevan', 'koti', 'barekamavan', 'worker', 'images'));
    }
}

