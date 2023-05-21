<?php

namespace App\Http\Controllers\Buildings\Culture;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use App\Models\Culturem;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class CultureController extends Controller
{
    public function __invoke()
    {
        $worker = Worker::where('worker_id', '=', 6)->get();
        $culturem = Culturem::all();
        return view('buildings.culture.culture', compact('worker', 'culturem'));
    }

}
