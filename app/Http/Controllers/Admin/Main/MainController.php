<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index($worker_id)
    {
        $worker = Worker::where('worker_id', '=', $worker_id)->get();
        return view('admin.main.show', compact('worker'));
    }
}
