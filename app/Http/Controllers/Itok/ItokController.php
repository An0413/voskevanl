<?php

namespace App\Http\Controllers\Itok;

use App\Http\Controllers\Controller;
use App\Models\Itok;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Models\Buildings;

class ItokController extends Controller
{
    public function __invoke()
    {
        $worker = Worker::where('worker_id', '=', 5)->get();
        return view('itok.itok', compact('worker'));
    }
}
