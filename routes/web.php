<?php

use App\Http\Controllers\Admin\Main\IndexaController;
use App\Http\Controllers\Admin\Main\MainController;
use App\Http\Controllers\Admin\Main\InfoController;
use App\Http\Controllers\Admin\Main\GalleryController;
use App\Http\Controllers\Admin\Main\LoginController;
use App\Http\Controllers\Buildings\AdministrationController;

use App\Http\Controllers\Buildings\SportsschoolController;
use App\Http\Controllers\Buildings\AmbulanceController;
use App\Http\Controllers\Itok\ItokController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Glxavor\GlxavorController;
use App\Http\Controllers\History\HistoryController;
use App\Http\Controllers\News\NewsiController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Buildings\BindexController;
use App\Http\Controllers\Buildings\KinderController;
use App\Http\Controllers\Buildings\Culture\AmetistController;
use App\Http\Controllers\Buildings\Culture\CarateController;
use App\Http\Controllers\Buildings\Culture\CultureController;
use App\Http\Controllers\Buildings\Culture\FineartController;
use App\Http\Controllers\Buildings\Culture\GuitarController;
use App\Http\Controllers\Buildings\SchoolController;
use App\Http\Controllers\Buildings\ChurchController;



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

    Route::get('/administration',  AdministrationController::class)->name('buildings.administration');
    Route::get('/ambulance',  AmbulanceController::class)->name('buildings.ambulance');

    Route::get('/church',  ChurchController::class)->name('buildings.church');
    Route::get('/sportsschool',  SportsschoolController::class)->name('buildings.sportsschool');


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
    Route::get('/',  [GlxavorController::class, 'index'])->name('glxavor.glxavor');
});

Route::group(['namespase' => 'News', 'prefix' => 'news'], function (){
    Route::get('/',  NewsController::class)->name('news.news');
    Route::get('/{news_id}',  NewsiController::class)->where('news_id', '[0-9]+');
});

Route::post('/message_to_user', [GlxavorController::class, 'email_to_user'])->name('message_to_user');

Route::post('/get_workers', [LoginController::class, 'get_workers']);

Route::group(['namespase' => 'Admin', 'prefix' => 'admin'], function (){
    Route::get('/',  [IndexaController::class, 'index'])->name('admin');
    Route::get('/info/{id}',  [MainController::class, 'index'])->where('id', '[0-9]+')->name('worker_info');
    Route::get('/create/{id}/{tab}',  [MainController::class, 'create'])->where('id', '[0-9]+')->where('tab', '[a-zA-Z]+')->name('worker_create');
    Route::post('/worker/store/{id}', [MainController::class, 'store'])->where('id', '[0-9]+')->name('worker_store');
    Route::post('/info/store', [MainController::class, 'storei'])->name('info_store');
    Route::post('/gallery/store', [MainController::class, 'storeg'])->name('gallery_store');
    Route::get('/worker/edit/{worker_id}',  [MainController::class, 'edit_worker'])->where('worker_id', '[0-9]+')->name('worker_edit');
    Route::post('/worker/update/{worker_id}',  [MainController::class, 'update'])->where('worker_id', '[0-9]+')->name('worker_update');
    Route::get('/worker/delete/{worker_id}',  [MainController::class, 'delete'])->where('worker_id', '[0-9]+')->name('worker_delete');

    Route::get('/info/edit/{info_id}',  [InfoController::class, 'edit'])->where('info_id', '[0-9]+')->name('info_edit');
    Route::post('/info/update/{info_id}',  [InfoController::class, 'update'])->where('info_id', '[0-9]+')->name('info_update');
    Route::get('/info/delete/{info_id}',  [InfoController::class, 'delete'])->where('info_id', '[0-9]+')->name('info_delete');

    Route::get('/gallery/edit/{gallery_id}',  [GalleryController::class, 'edit'])->where('gallery_id', '[0-9]+')->name('gallery_edit');
    Route::post('/gallery/update/{gallery_id}',  [GalleryController::class, 'update'])->where('gallery_id', '[0-9]+')->name('gallery_update');
    Route::get('/gallery/delete/{gallery_id}',  [GalleryController::class, 'delete'])->where('gallery_id', '[0-9]+')->name('gallery_delete');

    Route::get('/register',  [LoginController::class, 'register'])->name('register');
    Route::post('/register_user',  [LoginController::class, 'registerUser'])->name('register_user');

    Route::get('/login',  [LoginController::class, 'index'])->name('login');
    Route::post('/login',  [LoginController::class, 'login'])->name('login_check');

    Route::get('/news/create', [AdminNewsController::class, 'create'])->name('news_create');
    Route::post('/news/store', [AdminNewsController::class, 'store'])->name('news_store');
    Route::get('/news/show/',  [AdminNewsController::class, 'index'])->name('news_list');
    Route::get('/news/edit/{news_id}',  [AdminNewsController::class, 'edit'])->where('news_id', '[0-9]+')->name('news_edit');
    Route::post('/news/update/{news_id}',  [AdminNewsController::class, 'update'])->where('news_id', '[0-9]+')->name('news_update');
    Route::post('/news/delete/{news_id}',  [AdminNewsController::class, 'delete'])->where('news_id', '[0-9]+')->name('news_delete');
});

Auth::routes();

