<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexaController extends Controller
{
    public function __invoke()
    {
        return view('admin.main.index');
    }
}
