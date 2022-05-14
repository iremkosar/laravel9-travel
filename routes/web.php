<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\AdminPlaceController as AdminPlaceController;
use App\Http\Controllers\Admin\ImageController as AdminImageController;
use App\Http\Controllers\Admin\Setting as Setting;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::post('/logincheck', [HomeController::class, 'loginCheck'])->name('loginCheck');
Route::get('/login', [HomeController::class, 'login'])->name('login');

//Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/', [AdminHomeController::class, 'index'])->name('index');

//General Routes
Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
Route::post('/setting/update', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');



//Admin Category Routes
Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
Route::get('/', 'index')->name('index');
Route::get('/create', 'create')->name('create');
Route::post('/store', 'store')->name('store');
Route::get('/edit/{id}', 'edit')->name('edit');
Route::post('/update/{id}', 'update')->name('update');
Route::get('/destroy/{id}', 'destroy')->name('destroy');
Route::get('/show/{id}', 'show')->name('show');
});

//Admin Place Routes
Route::prefix('/place')->name('place.')->controller(AdminPlaceController::class)->group(function () {
Route::get('/', 'index')->name('index');
Route::get('/create', 'create')->name('create');
Route::post('/store', 'store')->name('store');
Route::get('/edit/{id}', 'edit')->name('edit');
Route::post('/update/{id}', 'update')->name('update');
Route::get('/destroy/{id}', 'destroy')->name('destroy');
Route::get('/show/{id}', 'show')->name('show');
 });

 //Admin Place Image Gallery Routes
Route::prefix('/image')->name('image.')->controller(AdminImageController::class)->group(function () {
    Route::get('/{pid}', 'index')->name('index');
    Route::post('/store/{pid}', 'store')->name('store');
    Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');
     });

});

Route::get('/place/{id}', [HomeController::class, 'place'])->name('place');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');