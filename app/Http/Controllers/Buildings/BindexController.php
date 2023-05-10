<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buildings;

class BindexController extends Controller
{
    public function __invoke()
    {
        $buildings = Buildings::all();
        return view('buildings.buildings', compact('buildings'));
    }
}
