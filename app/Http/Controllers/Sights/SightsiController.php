<?php

namespace App\Http\Controllers\Sights;

use App\Helper;
use App\Http\Controllers\Controller;
use App\Models\Sights;
use App\Models\SightsGallery;
use Illuminate\Http\Request;
use App\Models\Buildings;

class SightsiController extends Controller
{
    public function __invoke(int $sights_id)
    {
        $sights_gallery = SightsGallery::where('sight_id', $sights_id)->where('status', 1)->orderBy('id', 'desc')->get();
        $sights_detail = Sights::where('id', $sights_id)->where('status', 1)->orderBy('id', 'desc')->get();
        $users = Helper::getUsers();
        return view('sights.sightsi', compact( 'users', 'sights_gallery', 'sights_detail'));
    }
}
