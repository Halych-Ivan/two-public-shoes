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



Route::get('/admin', '\App\Http\Controllers\Admin\IndexController@index')->name('admin');
Route::get('/admin/img', '\App\Http\Controllers\Admin\IndexController@img')->name('admin.logo');
Route::post('/admin/form', '\App\Http\Controllers\Admin\IndexController@form')->name('admin.form');




//************************************************************
// Admin panel
//************************************************************
Route::prefix('admin')->name('admin.')/*->middleware(['auth', 'admin'])*/->group(function (){
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);

});





















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
