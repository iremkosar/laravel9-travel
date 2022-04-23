<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

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
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminHome');
//Admin Category Routes
Route::get('/admin/category', [AdminCategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create', [AdminCategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store', [AdminCategoryController::class, 'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}', [AdminCategoryController::class, 'update'])->name('admin_category_update');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');