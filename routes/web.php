<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', '\App\Http\Controllers\IndexController@index')->name('home');
Route::get('/category/{id}', '\App\Http\Controllers\CategoriesController@index')->name('category');
Route::get('/products/{product}', '\App\Http\Controllers\ProductsController@index')->name('product');
Route::get('about', '\App\Http\Controllers\IndexController@about')->name('about');
Route::get('contact', '\App\Http\Controllers\IndexController@contact')->name('contact');
Route::post('contact_form', '\App\Http\Controllers\IndexController@contact_form')->name('contact_form');





//Route::get('/admin', '\App\Http\Controllers\Admin\IndexController@index')->name('admin');
Route::get('/admin/img', '\App\Http\Controllers\Admin\IndexController@img')->name('admin.logo');
//Route::post('/admin/form', '\App\Http\Controllers\Admin\IndexController@form')->name('admin.form');

//************************************************************
// Admin panel
//************************************************************
Route::prefix('admin')->name('admin.')/*->middleware(['auth', 'admin'])*/->group(function (){

//    Route::get('config', '\App\Http\Controllers\Admin\IndexController@index')->name('config');
//    Route::post('config/form', '\App\Http\Controllers\Admin\IndexController@form')->name('config.form');

    Route::resource('config', \App\Http\Controllers\Admin\ConfigController::class);
    Route::resource('messages', \App\Http\Controllers\Admin\MessagesController::class);
    Route::resource('banners', \App\Http\Controllers\Admin\BannersController::class);
    Route::resource('main_banners', \App\Http\Controllers\Admin\MainBannerController::class);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoriesController::class);
    Route::resource('products', \App\Http\Controllers\Admin\ProductsController::class);
    Route::delete('/products/{product}/images', '\App\Http\Controllers\Admin\ProductsController@destroyImage')
        ->name('products.images.destroy');
    Route::delete('/products/{product}/images_2', '\App\Http\Controllers\Admin\ProductsController@destroyImage_2')
        ->name('products.images_2.destroy');
    Route::delete('/products/{product}/images_pr/{image}', '\App\Http\Controllers\Admin\ProductsController@destroyImages')
        ->name('products.images_pr.destroy');
    Route::delete('/config/{config}/image', '\App\Http\Controllers\Admin\ConfigController@destroyImage')
        ->name('config.image.destroy');

});
//******************************************************************


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
