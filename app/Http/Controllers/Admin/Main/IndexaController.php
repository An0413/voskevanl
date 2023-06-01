<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\Request;

class IndexaController extends Controller
{
    public function index()
    {
        $worker = Worker::where('worker_id', '=', 5)->get();
        return view('admin.main.index', compact('worker'));
    }
}
