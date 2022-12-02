<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HigherEducationController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\FellowshipController;
use App\Http\Controllers\CompletedResearchController;
use App\Http\Controllers\OngoingResearchController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\OrganizationController;




use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index'])->name('front');
Route::post('/search', [App\Http\Controllers\FrontEndController::class, 'searchData'])->name('search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('about', AboutController::class);
Route::resource('service', ServiceController::class);
Route::resource('expertise', ExpertiseController::class);
Route::resource('mission', MissionController::class);
Route::resource('contact', ContactController::class);
Route::resource('higher-education', HigherEducationController::class);
Route::resource('internship', InternshipController::class);
Route::resource('training', TrainingController::class);
Route::resource('fellowship', FellowshipController::class);
Route::resource('completed-research', CompletedResearchController::class);
Route::resource('ongoing-research', OngoingResearchController::class);
Route::resource('publication', PublicationController::class);
Route::resource('organization', OrganizationController::class);


