<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


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
//Route::group(funtion(){
//
//})
Route::get('/', [MainController::class,'index'])->name('index');
Route::get('/stores', [MainController::class,'stores'])->name('stores');
Route::get('/map', [MainController::class,'map'])->name('map');
Route::get('/news', [MainController::class,'news'])->name('news');
Route::get('/store/{id}', [MainController::class,'store'])->name('store');
//Route::get('/welcome', 'MainController@index')->name('index');
//Route::get('/', function () {
//    return view('front');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
