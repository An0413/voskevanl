<?php

namespace App\Http\Controllers\History;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Images;
use App\Models\Itok;
use Illuminate\Http\Request;
use App\Models\Buildings;

class HistoryController extends Controller
{
    public function __invoke()
    {

        $history = History::all();
        $images = Images::where('gallery_id', '=', 6)->get();
        return view('history.history', compact('history', 'images'));
    }
}
