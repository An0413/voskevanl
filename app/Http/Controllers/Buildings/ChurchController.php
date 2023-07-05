<?php

namespace App\Http\Controllers\Buildings;

use App\Http\Controllers\Controller;
use App\Models\Church;
use App\Models\Images;
use Illuminate\Http\Request;
use App\Models\Kindergarten;

class ChurchController extends Controller
{
    public function index()
    {

        $church = Church::first();
        $images = Images::where('gallery_id', 11)->orderBy('main_image', 'desc')->where('status', '=', 1)->get();
        return view('buildings.church', compact('church', 'images'));
    }
}
