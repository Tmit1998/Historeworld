<?php

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

Route::get('/backend/dashboard', function () {
    return view('backend.dashboard');
});


Route::get('/backend/products', function () {
    return view('backend.products.index');
});

Route::get('/backend/products', function () {
    return view('backend/products/create');
});



// Route::prefix('backend.products.')->group(function () {

//   Route::get('index' , [\App\Http\Controllers\Backend\ProductController::class , 'index'])->name('products.index');
//   Route::get('create' , [\App\Http\Controllers\Backend\ProductController::class , 'create'])->name('products.create');

// });

// Route::group([
//     'namespace' => 'Backend',
//     'prefix' => 'admin'
// ], function (){
//     // Trang dashboard - trang chủ admin
//     // Route::get('/dashboard', [\App\Http\Controllers\Backend\DasashboardController::class , 'dashboard'])->name('backend.dashboard');
//     // Quản lý sản phẩm
//     Route::group(['prefix' => 'products'], function(){
//        Route::get('/', [\App\Http\Controllers\Backend\ProductController::class , 'index'])->name('backend.products.index');
//        Route::get('/create', [\App\Http\Controllers\Backend\ProductController::class , 'create'])->name('backend.products.create');
//        Route::get('/edit', [\App\Http\Controllers\Backend\ProductController::class , 'edit'])->name('backend.products.edit');
//        Route::put('/update', [\App\Http\Controllers\Backend\ProductController::class , 'update'])->name('backend.products.update');
//        Route::delete('/destroy', [\App\Http\Controllers\Backend\ProductController::class , 'destroy'])->name('backend.products.destroy');
//     });
//     //Quản lý người dùng
//     // Route::group(['prefix' => 'users'], function(){
//     //     Route::get('/', 'UserController@index')->name('backend.user.index');
//     //     Route::get('/create', 'UserController@create')->name('backend.user.create');
//     // });
// });