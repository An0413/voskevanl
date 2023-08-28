    <?php

use App\Http\Controllers\Admin\AdminBuildingsController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminSightsController;
use App\Http\Controllers\Admin\EverydayAdminController;
    use App\Http\Controllers\Admin\EverydayGalleryController;
    use App\Http\Controllers\Admin\Main\IndexaController;
use App\Http\Controllers\Admin\Main\MainController;
use App\Http\Controllers\Admin\Main\InfoController;
use App\Http\Controllers\Admin\Main\GalleryController;
use App\Http\Controllers\Admin\Main\LoginController;
use App\Http\Controllers\Buildings\AdministrationController;

use App\Http\Controllers\Buildings\SportsschoolController;
use App\Http\Controllers\Buildings\AmbulanceController;
use App\Http\Controllers\Everyday\EverydayController;
    use App\Http\Controllers\Itok\ItokController;
    use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminChurchController;
use App\Http\Controllers\Glxavor\GlxavorController;
use App\Http\Controllers\History\HistoryController;
use App\Http\Controllers\Admin\AdminHistoryController;
use App\Http\Controllers\Everyday\LifeReadController;
    use App\Http\Controllers\News\NewsiController;
    use App\Http\Controllers\Sights\SightsController;
use App\Http\Controllers\Sights\SightsiController;
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


Route::group(['namespase' => 'Buildings', 'prefix' => 'buildings'], function () {
    Route::get('/', BindexController::class)->name('buildings.buildings');
    Route::get('/kindergarten', KinderController::class)->name('buildings.kindergarten');
    Route::get('/school', SchoolController::class)->name('buildings.school');

    Route::get('/administration', AdministrationController::class)->name('buildings.administration');
    Route::get('/ambulance', AmbulanceController::class)->name('buildings.ambulance');

    Route::get('/church', [ChurchController::class, 'index'])->name('buildings.church');
    Route::get('/sportsschool', SportsschoolController::class)->name('buildings.sportsschool');


    Route::group(['namespase' => 'Culture', 'prefix' => 'culture'], function () {
        Route::get('/', CultureController::class)->name('buildings.culture');
        Route::get('/ametist', AmetistController::class)->name('buildings.culture.ametist');
        Route::get('/carate', CarateController::class)->name('buildings.culture.carate');
        Route::get('/fineart', FineartController::class)->name('buildings.culture.fineart');
        Route::get('/guitar', GuitarController::class)->name('buildings.culture.guitar');
    });
});
Route::group(['namespase' => 'Itok', 'prefix' => 'itok'], function () {
    Route::get('/', ItokController::class)->name('itok.itok');
});

Route::group(['namespase' => 'Everyday', 'prefix' => 'everyday_life'], function () {
    Route::get('/', EverydayController::class)->name('everyday.ife');
    Route::get('/{news_id}', LifeReadController::class)->where('news_id', '[0-9]+')->name('everyday.news');
});

Route::group(['namespase' => 'History', 'prefix' => 'history'], function () {
    Route::get('/', HistoryController::class)->name('history.history');
});
Route::group(['namespase' => 'Sights', 'prefix' => 'sights'], function () {
    Route::get('/', SightsController::class)->name('sights.sights');
    Route::get('/{sights_id}', SightsiController::class)->where('sights_id', '[0-9]+')->name('sights_detail');
});

Route::group(['namespase' => 'Glxavor'], function () {
    Route::get('/', [GlxavorController::class, 'index'])->name('glxavor.glxavor');
});

Route::group(['namespase' => 'News', 'prefix' => 'news'], function () {
    Route::get('/', NewsController::class)->name('news.news');
    Route::get('/{news_id}', NewsiController::class)->where('news_id', '[0-9]+');
});

Route::post('/message_to_user', [GlxavorController::class, 'email_to_user'])->name('message_to_user');

Route::post('/get_workers', [LoginController::class, 'get_workers']);
Route::post('/change_message_status',  [AdminMessageController::class, 'change_status']);

Route::group(['namespase' => 'Admin', 'prefix' => 'admin'], function (){
    Route::get('/{worker_id}',  [IndexaController::class, 'index'])->where('worker_id', '[0-9]+')->name('admin');
    Route::post('/confirm_worker/{worker_id}',  [IndexaController::class, 'changestatus'])->where('worker_id', '[0-9]+')->name('confirm_worker');
    Route::get('/{worker_id}/worker',  [IndexaController::class, 'worker'])->where('worker_id', '[0-9]+')->name('workered');
    Route::get('/{worker_id}/info',  [IndexaController::class, 'info'])->where('worker_id', '[0-9]+')->name('info_show');
    Route::get('/{worker_id}/gallery',  [IndexaController::class, 'gallery'])->where('worker_id', '[0-9]+')->name('gallery_show');
    Route::get('/{worker_id}/sights_gallery',  [IndexaController::class, 'sights_gallery'])->where('worker_id', '[0-9]+')->name('sights_gallery_show');
    Route::get('/{worker_id}/news',  [IndexaController::class, 'news'])->where('worker_id', '[0-9]+')->name('news_show');
    Route::get('/{worker_id}/sights',  [IndexaController::class, 'sights'])->where('worker_id', '[0-9]+')->name('sights_show');
    Route::get('/submit/{id}/{table_id}',  [IndexaController::class, 'submit'])->where('id', '[0-9]+')->where('table_id', '[0-9]+')->name('submit');
    Route::post('/refuse/{id}/{table_id}',  [IndexaController::class, 'refuse'])->where('id', '[0-9]+')->where('table_id', '[0-9]+')->name('refuse');
    Route::get('/refuse',  [IndexaController::class, 'refuse'])->name('refuse_sample');
    Route::get('/news',  [AdminNewsController::class, 'index'])->name('admin_news');
    Route::get('/everyday',  [EverydayAdminController::class, 'index'])->name('admin_everyday');

    Route::get('/everyday/create', [EverydayAdminController::class, 'create'])->name('everyday_create');
    Route::post('/everyday/store', [EverydayAdminController::class, 'store'])->name('everyday_store');
    Route::get('/everyday/edit/{news_id}', [EverydayAdminController::class, 'edit'])->where('news_id', '[0-9]+')->name('everyday_edit');
    Route::post('/everyday/update/{news_id}', [EverydayAdminController::class, 'update'])->where('news_id', '[0-9]+')->name('everyday_update');
    Route::delete('/everyday/delete/{news_id}', [EverydayAdminController::class, 'delete'])->where('news_id', '[0-9]+')->name('everyday_delete');

    Route::get('/everyday/gallery/create', [EverydayAdminController::class, 'create_gallery'])->name('everyday_gallery_create');
    Route::post('/everyday/gallery/store', [EverydayAdminController::class, 'store_gallery'])->name('everyday_gallery_store');
    Route::get('/everyday/gallery/edit/{id}', [EverydayAdminController::class, 'edit_gallery'])->where('id', '[0-9]+')->name('everyday_gallery_edit');
    Route::post('/everyday/gallery/update/{id}', [EverydayAdminController::class, 'update_gallery'])->where('id', '[0-9]+')->name('everyday_gallery_update');
    Route::get('/everyday/gallery/delete/{id}', [EverydayAdminController::class, 'delete_gallery'])->where('id', '[0-9]+')->name('everyday_gallery_delete');

    Route::get('/history/create', [AdminHistoryController::class, 'create'])->name('history_create');
    Route::post('/history/store', [AdminHistoryController::class, 'store'])->name('history_store');
    Route::get('/history', [AdminHistoryController::class, 'index'])->name('admin_history');
    Route::get('/history/edit/{history_id}', [AdminHistoryController::class, 'edit'])->where('history_id', '[0-9]+')->name('history_edit');
    Route::post('/history/update/{history_id}', [AdminHistoryController::class, 'update'])->where('history_id', '[0-9]+')->name('history_update');
    Route::delete('/history/delete/{history_id}', [AdminHistoryController::class, 'delete'])->where('history_id', '[0-9]+')->name('history_delete');

    Route::get('/buildings/create', [AdminBuildingsController::class, 'create'])->name('buildings_create');
    Route::post('/buildings/store', [AdminBuildingsController::class, 'store'])->name('buildings_store');
    Route::get('/buildings', [AdminBuildingsController::class, 'index'])->name('admin_buildings');
    Route::get('/buildings/edit/{buildings_id}', [AdminBuildingsController::class, 'edit'])->where('buildings_id', '[0-9]+')->name('buildings_edit');
    Route::post('/buildings/update/{buildings_id}', [AdminBuildingsController::class, 'update'])->where('buildings_id', '[0-9]+')->name('buildings_update');
    Route::delete('/buildings/delete/{buildings_id}', [AdminBuildingsController::class, 'delete'])->where('buildings_id', '[0-9]+')->name('buildings_delete');


    Route::get('/church/create', [AdminChurchController::class, 'create'])->name('church_create');
    Route::post('/church/store', [AdminChurchController::class, 'store'])->name('church_store');
    Route::get('/church', [AdminChurchController::class, 'index'])->name('admin_church');
    Route::get('/church/edit/{church_id}', [AdminChurchController::class, 'edit'])->where('church_id', '[0-9]+')->name('church_edit');
    Route::post('/church/update/{church_id}', [AdminChurchController::class, 'update'])->where('church_id', '[0-9]+')->name('church_update');
    Route::delete('/church/delete/{church_id}', [AdminChurchController::class, 'delete'])->where('church_id', '[0-9]+')->name('church_delete');

    Route::get('/info/{worker_id}', [MainController::class, 'index'])->where('worker_id', '[0-9]+')->name('worker_info');
    Route::get('/create/{id}/{tab}', [MainController::class, 'create'])->where('id', '[0-9]+')->where('tab', '[a-zA-Z]+')->name('worker_create');
    Route::post('/worker/store/{id}', [MainController::class, 'store'])->where('id', '[0-9]+')->name('worker_store');
    Route::post('/info/store/{id}/{tab}', [MainController::class, 'storeInfo'])->where('id', '[0-9]+')->where('tab', '[a-zA-Z]+')->name('info_store');
    Route::get('/gallery/create/{id}/{tab}', [MainController::class, 'createGallery'])->where('id', '[0-9]+')->where('tab', '[a-zA-Z]+')->name('gallery_create');
    Route::post('/gallery/store/{id}/{tab}', [MainController::class, 'storeGallery'])->where('id', '[0-9]+')->where('tab', '[a-zA-Z]+')->name('gallery_store');
    Route::get('/worker/edit/{worker_id}', [MainController::class, 'edit_worker'])->where('worker_id', '[0-9]+')->name('worker_edit');
    Route::post('/worker/update/{worker_id}', [MainController::class, 'update'])->where('worker_id', '[0-9]+')->name('worker_update');
    Route::get('/worker/delete/{worker_id}', [MainController::class, 'delete'])->where('worker_id', '[0-9]+')->name('worker_delete');

    Route::get('/info/edit/{info_id}', [InfoController::class, 'edit'])->where('info_id', '[0-9]+')->name('info_edit');
    Route::post('/info/update/{info_id}', [InfoController::class, 'update'])->where('info_id', '[0-9]+')->name('info_update');
    Route::get('/info/delete/{info_id}', [InfoController::class, 'delete'])->where('info_id', '[0-9]+')->name('info_delete');

    Route::get('/gallery/edit/{gallery_id}', [GalleryController::class, 'edit'])->where('gallery_id', '[0-9]+')->name('gallery_edit');
    Route::post('/gallery/update/{gallery_id}', [GalleryController::class, 'update'])->where('gallery_id', '[0-9]+')->name('gallery_update');
    Route::get('/gallery/delete/{gallery_id}', [GalleryController::class, 'delete'])->where('gallery_id', '[0-9]+')->name('gallery_delete');

    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register_user', [LoginController::class, 'registerUser'])->name('register_user');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin_logout');
    Route::post('/login_check', [LoginController::class, 'login'])->name('login_check');

    Route::get('/message', [AdminMessageController::class, 'index'])->name('admin_message');

    Route::get('/news/create', [AdminNewsController::class, 'create'])->name('news_create');
    Route::post('/news/store', [AdminNewsController::class, 'store'])->name('news_store');
    Route::get('/news/show/', [AdminNewsController::class, 'index'])->name('news_list');
    Route::get('/news/edit/{news_id}', [AdminNewsController::class, 'edit'])->where('news_id', '[0-9]+')->name('news_edit');
    Route::post('/news/update/{news_id}', [AdminNewsController::class, 'update'])->where('news_id', '[0-9]+')->name('news_update');
    Route::delete('/news/delete/{news_id}', [AdminNewsController::class, 'delete'])->where('news_id', '[0-9]+')->name('news_delete');

    Route::get('/sights/create', [AdminSightsController::class, 'create'])->name('sights_create');
    Route::post('/sights/store', [AdminSightsController::class, 'store'])->name('sights_store');

  Route::get('/sights/show/', [AdminSightsController::class, 'index'])->name('admin_sights');

    Route::get('/sights/gallery/{id}', [AdminSightsController::class, 'gallery'])->where('id', '[0-9]+')->name('sights_gallery');
    Route::get('/sights/gallery_create/{id}', [AdminSightsController::class, 'gallery_create'])->where('id', '[0-9]+')->name('sights_gallery_create');
    Route::post('/sights/gallery_store/{id}', [AdminSightsController::class, 'gallery_store'])->where('id', '[0-9]+')->name('sights_gallery_store');
    Route::get('/sights/gallery_edit/{id}', [AdminSightsController::class, 'gallery_edit'])->where('id', '[0-9]+')->name('sights_gallery_edit');
    Route::post('/sights/gallery_update/{id}', [AdminSightsController::class, 'gallery_update'])->where('id', '[0-9]+')->name('sights_gallery_update');
    Route::delete('/sights/gallery_delete/{id}', [AdminSightsController::class, 'gallery_delete'])->where('id', '[0-9]+')->name('sights_gallery_delete');

    Route::get('/sights/edit/{sights_id}', [AdminSightsController::class, 'edit'])->where('sights_id', '[0-9]+')->name('sights_edit');
    Route::post('/sights/update/{sights_id}', [AdminSightsController::class, 'update'])->where('sights_id', '[0-9]+')->name('sights_update');
    Route::delete('/sights/delete/{sights_id}', [AdminSightsController::class, 'delete'])->where('sights_id', '[0-9]+')->name('sights_delete');
});

Auth::routes();

