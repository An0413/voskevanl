<?php

namespace App\Http\Controllers\Buildings\Culture;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use App\Models\Culturem;
use Illuminate\Http\Request;
use App\Models\Buildings;

class CultureController extends Controller
{
    public function __invoke()
    {
        $culture = Culture::all();
        $culturem = Culturem::all();
        return view('buildings.culture.culture', compact('culture', 'culturem'));
    }
}
