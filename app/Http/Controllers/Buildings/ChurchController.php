<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kindergarten;

class ChurchController extends Controller
{
    public function __invoke()
    {
        return view('buildings.church');
    }
}
