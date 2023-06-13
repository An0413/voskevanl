<?php

namespace App\Http\Controllers\Admin\Church;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Images;
use App\Models\Itok;
use Illuminate\Http\Request;
use App\Models\Buildings;

class ChurchController extends Controller
{
    public function index()
    {
        return view('admin.main.church');
    }
}
