<?php

use App\Http\Controllers\Buildings\SchoolController;
use App\Models\Kindergarten;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Buildings\BindexController;
use App\Http\Controllers\Buildings\KinderController;
use App\Http\Controllers\Itok\ItokController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespase' => 'Main'], function (){
    Route::get('/',  IndexController::class)->name('layouts.main');
});

Route::group(['namespase' => 'Buildings', 'prefix' => 'buildings'], function (){
    Route::get('/',  BindexController::class)->name('buildings.buildings');
    Route::get('/kindergarten',  KinderController::class)->name('buildings.kindergarten');
    Route::get('/school',  SchoolController::class)->name('buildings.school');
});
Route::group(['namespase' => 'Itok', 'prefix' => 'itok'], function (){
    Route::get('/',  ItokController::class)->name('itok.itok');
});


Auth::routes();

