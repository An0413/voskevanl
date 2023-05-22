<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function __invoke()
    {
        $school = School::all();
        $images = Images::where('gallery_id', '=', 8)->get();
        $worker = Worker::where('worker_id', '=', 3)->get();
        return view('buildings.school', compact('school', 'worker','images'));
    }
}

