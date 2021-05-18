<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\DeveloperController;
use App\Models\User;
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


Route::get('/vacantes/{vacancy:Title}', [PageController::class, 'vacancy'])->name('vacancy');

Route::resource('vacante', VacancyController::class);

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/nosotros', [PageController::class, 'nosotros'])->name('nosotros');

Route::resource('companydata', RecruiterController::class);

Route::get('/developerdata', [PageController::class, 'developerdata'])->name('developerdata');

// Route::resource('recruiter', RecruiterController::class);

Route::resource('developer', DeveloperController::class);

Route::get('/board', [RecruiterController::class, 'board'])->name('board');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


