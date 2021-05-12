<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecruiterController;
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

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/nosotros', [PageController::class, 'nosotros'])->name('nosotros');

Route::get('/companydata', [PageController::class, 'companydata'])->name('companydata');

Route::get('/developerdata', [PageController::class, 'developerdata'])->name('developerdata');


Route::resource('recruiter', RecruiterController::class);

//developer
Route::resource('developer', DeveloperController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    $users =User::all();
    return view('dashboard', ['users'=>$users]);
})->name('dashboard');


