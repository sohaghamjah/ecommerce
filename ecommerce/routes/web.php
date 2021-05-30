<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\ProductController;
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
    // Admin profile
    Route::get('profile', [AdminController::class, 'profile']) -> name('profile');
    Route::post('update/profile/data', [AdminController::class, 'profileData']) -> name('update.profile');
    Route::get('photo', [AdminController::class, 'showPhoto']) -> name('showPhoto');
    Route::post('update/photo', [AdminController::class, 'updatePhoto']) -> name('update.photo');
    Route::get('password', [AdminController::class, 'showPassword']) -> name('showPassword');
    Route::post('update/password', [AdminController::class, 'updatePassword']) -> name('update.password');

    // Admin Brands

    Route::get('brands', [BrandController::class, 'index']) -> name('brands');
    Route::post('brand/store', [BrandController::class, 'store']) -> name('brand.store');
    Route::get('brand/edit/{id}', [BrandController::class, 'edit']);
    Route::post('update/brand', [BrandController::class, 'update']) -> name('update.brand');
    Route::get('brand/delete/{id}', [BrandController::class, 'destroy']);

    // Admin Categories

    Route::get('categories', [CategoryController::class, 'index']) -> name('categories');
    Route::post('categories/store', [CategoryController::class, 'store']) -> name('categories.store');
    Route::get('categories/edit/{id}', [CategoryController::class, 'edit']) -> name('categories.edit');
    Route::post('categories/update', [CategoryController::class, 'update']) -> name('categories.update');
    Route::get('categories/delete/{id}', [CategoryController::class, 'destroy']);

    // Admin sub categories

    Route::get('categories/sub-category', [CategoryController::class, 'subindex']) -> name('sub-category');
    Route::post('categories/sub-category/store', [CategoryController::class, 'substore']) -> name('sub-category.store');
    Route::get('sub-categories/edit/{id}', [CategoryController::class, 'subedit']) -> name('sub-categories.edit');
    Route::post('sub-categories/update', [CategoryController::class, 'subupdate']) -> name('sub-categories.update');
    Route::get('sub-categories/delete/{id}', [CategoryController::class, 'subdestroy']);

    // Admin sub sub categories
    Route::get('categories/sub-sub-category', [CategoryController::class, 'subSubIndex']) -> name('sub-sub-category');
    Route::get('categories/sub-category/ajax/{id}', [CategoryController::class, 'subCatAjax']);
    Route::post('categories/sub-sub-category/store', [CategoryController::class, 'subSubStore']) -> name('sub--sub-category.store');
    Route::get('sub-sub-categories/edit/{id}', [CategoryController::class, 'subSubEdit']) -> name('sub-sub-categories.edit');
    Route::post('sub-sub-categories/update', [CategoryController::class, 'subSubUpdate']) -> name('sub-sub-categories.update');
    Route::get('sub-sub-categories/delete/{id}', [CategoryController::class, 'subSubDestroy']);

    // Admin product route
    Route::get('product/add-product', [ProductController::class, 'index']) -> name('add-product');
    Route::post('product/store', [ProductController::class, 'store']) -> name('product.store');
    Route::get('sub-subcategory/ajax/{id}', [ProductController::class, 'subSubCatAjax']);
    Route::get('product/manage-product', [ProductController::class, 'manageProduct']) -> name('manage-product');
    Route::get('product/manage-product/edit/{id}', [ProductController::class, 'edit']) -> name('product.edit');
    Route::post('product/manage-product/update', [ProductController::class, 'update']) -> name('product.update');
    Route::post('product/manage-product/multi-image/update', [ProductController::class, 'multiImageUpdate']) -> name('product.multi-img.update');
    Route::post('product/manage-product/main-thumb/update', [ProductController::class, 'mainThumbUpdate']) -> name('product.main-thumb.update');
    Route::get('product/manage-product/multi-img/delete/{id}', [ProductController::class, 'multiImageDelete']);
    Route::get('product/manage_product/inactive/{id}', [ProductController::class, 'productInactive']);
    Route::get('product/manage_product/active/{id}', [ProductController::class, 'productActive']);
    Route::get('product/manage_product/show/{id}', [ProductController::class, 'showProduct']) -> name('product.show');

    // =====================SLider Route=====================

    Route::get('slider', [SliderController::class, 'index']) -> name('slider.index');
    Route::post('slider/store', [SliderController::class, 'store']) -> name('slider.store');


});

// ================ User Route =======================
Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'User'], function(){
    Route::get('dashboard', [UserController::class, 'index']) -> name('dashboard');
    Route::post('update/profile', [UserController::class, 'updateProfile']) -> name('update.profile');
    Route::get('photo', [UserController::class, 'ShowPhoto']) -> name('showPhoto');
    Route::post('update/photo', [UserController::class, 'updatePhoto']) -> name('update.photo');
    Route::get('password', [UserController::class, 'showPassword']) -> name('showPassword');
    Route::post('update/password', [UserController::class, 'updatePassword']) -> name('update.password');
});

// ================ FrontEnd Route =======================
Route::get('/', [IndexController::class, 'index']);
