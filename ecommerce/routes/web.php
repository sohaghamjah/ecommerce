<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//================= Admin Route =====================

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['admin', 'auth'], 'namespace' => 'Admin'], function(){
    Route::get('dashboard', [AdminController::class, 'index']) -> name('dashboard');
});

// ================ User Route =======================
Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'User'], function(){
    Route::get('dashboard', [UserController::class, 'index']) -> name('dashboard');
});

// ================ FrontEnd Route =======================
Route::get('/', [IndexController::class, 'index']);
