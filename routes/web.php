<?php
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Itok\ItokController;
use App\Http\Controllers\Glxavor\GlxavorController;
use App\Http\Controllers\History\HistoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Buildings\BindexController;
use App\Http\Controllers\Buildings\KinderController;
use App\Http\Controllers\Buildings\Culture\AmetistController;
use App\Http\Controllers\Buildings\Culture\CarateController;
use App\Http\Controllers\Buildings\Culture\CultureController;
use App\Http\Controllers\Buildings\Culture\FineartController;
use App\Http\Controllers\Buildings\Culture\GuitarController;
use App\Http\Controllers\Buildings\SchoolController;



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


Route::group(['namespase' => 'Buildings', 'prefix' => 'buildings'], function (){
    Route::get('/',  BindexController::class)->name('buildings.buildings');
    Route::get('/kindergarten',  KinderController::class)->name('buildings.kindergarten');
    Route::get('/school',  SchoolController::class)->name('buildings.school');

    Route::group(['namespase' => 'Culture', 'prefix' => 'culture'], function (){
        Route::get('/', CultureController::class)->name('buildings.culture');
        Route::get('/ametist', AmetistController::class)->name('buildings.culture.ametist');
        Route::get('/carate', CarateController::class)->name('buildings.culture.carate');
        Route::get('/fineart', FineartController::class)->name('buildings.culture.fineart');
        Route::get('/guitar', GuitarController::class)->name('buildings.culture.guitar');
    });
});
Route::group(['namespase' => 'Itok', 'prefix' => 'itok'], function (){
    Route::get('/',  ItokController::class)->name('itok.itok');
});

Route::group(['namespase' => 'History', 'prefix' => 'history'], function (){
    Route::get('/',  HistoryController::class)->name('history.history');
});

Route::group(['namespase' => 'Glxavor'], function (){
    Route::get('/',  GlxavorController::class)->name('glxavor.glxavor');
});


Auth::routes();

