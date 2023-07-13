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


Route::name('home.')->controller(\App\Http\Controllers\HomeController::class)->group(function (){
   Route::get('/', 'index')->name('index');
});




Route::prefix('admin/')->name('admin.')->group(function (){
   Route::resource('tour',\App\Http\Controllers\Admin\tours\ToursController::class);
});


