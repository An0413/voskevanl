<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kindergarten;

class KinderController extends Controller
{
    public function __invoke()
    {
        $kindergarten = Kindergarten::all();
        return view('buildings.kindergarten', compact('kindergarten'));
    }
}
