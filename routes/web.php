<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\AdminPlaceController as AdminPlaceController;

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
Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
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


});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');