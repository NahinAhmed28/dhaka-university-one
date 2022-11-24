<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index'])->name('front');
Route::post('/search', [App\Http\Controllers\FrontEndController::class, 'searchData'])->name('search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('/abouts', \App\Http\Controllers\AboutController::class);
Route::resource('/services', \App\Http\Controllers\ServiceController::class);
Route::resource('/expertises', \App\Http\Controllers\ContactController::class);

