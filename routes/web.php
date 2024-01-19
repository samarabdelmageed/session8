<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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


Route::get('guards',function(){
    return view('guards');
})->name('guards');

Route::get('services',function(){
    return view('services');
})->name('services');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');
Route::post('sendMail', [Controller::class, 'sendMail'])->name('sendMail');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('contactUs', [Controller::class, 'contactUs'])->name('contactUs');

    });

