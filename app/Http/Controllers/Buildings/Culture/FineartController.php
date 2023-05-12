<?php

namespace App\Http\Controllers\Buildings\Culture;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use App\Models\Culturem;
use Illuminate\Http\Request;
use App\Models\Buildings;

class FineartController extends Controller
{
    public function __invoke()
    {
        return view('buildings.culture.fineart');
    }

}
