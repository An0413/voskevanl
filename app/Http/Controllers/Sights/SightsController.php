<?php

namespace App\Http\Controllers\Sights;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Sights;
use Illuminate\Http\Request;
use App\Models\Buildings;

class SightsController extends Controller
{
    public function __invoke()
    {

        $sights = Sights::all();
        return view('sights.sights', compact('sights'));
    }
}
