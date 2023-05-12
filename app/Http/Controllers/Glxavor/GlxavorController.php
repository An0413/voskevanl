<?php

namespace App\Http\Controllers\Glxavor;

use App\Http\Controllers\Controller;
use App\Models\Itok;
use Illuminate\Http\Request;
use App\Models\Buildings;

class GlxavorController extends Controller
{
    public function __invoke()
    {
        return view('glxavor.glxavor');
    }
}
