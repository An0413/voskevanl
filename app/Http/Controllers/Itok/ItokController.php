<?php

namespace App\Http\Controllers\Itok;

use App\Http\Controllers\Controller;
use App\Models\Itok;
use Illuminate\Http\Request;
use App\Models\Buildings;

class ItokController extends Controller
{
    public function __invoke()
    {
        $itok = Itok::all();
        return view('itok.itok', compact('itok'));
    }
}
