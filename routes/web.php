<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

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



Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/companies', \App\Http\Controllers\CompanyController::class);
Route::resource('/categories', \App\Http\Controllers\CategoryController::class);

