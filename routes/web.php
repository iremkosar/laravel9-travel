<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Laravel\Jetstream\Rules\Role;
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

/* Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about'); */

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::post('/logincheck', [HomeController::class, 'loginCheck'])->name('loginCheck');
Route::get('/login', [HomeController::class, 'login'])->name('login');


Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminHome')->middleware('auth');
Route::get('/admin/login', [App\Http\Controllers\Admin\HomeController::class, 'login'])->name('adminLogin');
Route::post('/admin/logincheck', [App\Http\Controllers\Admin\HomeController::class, 'loginCheck'])->name('adminLoginCheck');
Route::get('/admin/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('adminLogout');
Route::post('/logincheck', [HomeController::class, 'loginCheck'])->name('loginCheck');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');