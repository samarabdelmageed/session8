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

Route::get('/', function () {
    return view('welcome');
});

Route::get('testHome',function(){
    return view('testHome');
})->name('testHome');

Route::get('about',function(){
    return view('about');
})->name('about');

Route::get('contactUs',function(){
    return view('contactUs');
})->name('contactUs');

Route::get('guards',function(){
    return view('guards');
})->name('guards');

Route::get('services',function(){
    return view('services');
})->name('services');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');
