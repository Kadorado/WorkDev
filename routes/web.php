<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\JobDevController;
use App\Http\Controllers\TecnologyController;
use App\Http\Controllers\FilterController;


use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CandidateController;
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

// PageController
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/nosotros', [PageController::class, 'nosotros'])->name('nosotros');
Route::get('/vacantes/{vacancy:Title}', [PageController::class, 'vacancy'])->name('vacancy');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Recruiter and Developer controller

Route::middleware(['auth:sanctum', 'verified'])->get('/jobsdetails/{jobdetail:Title}/{id:id}', [JobDevController::class, 'jobdetail'])->name('jobdetail');

Route::middleware(['auth:sanctum', 'verified'])->resource('vacante', VacancyController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('/ofertas', JobDevController::class);



Route::middleware(['auth:sanctum', 'verified'])->resource('companydata', RecruiterController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/developerdata', [DeveloperController::class, 'developerdata'])->name('developerdata');

Route::middleware(['auth:sanctum', 'verified'])->resource('skills', SkillController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('recruiter', RecruiterController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('developer', DeveloperController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('education', EducationController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('tecnologies', TecnologyController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('applications', ApplicationController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/board', [RecruiterController::class, 'board'])->name('board');

Route::middleware(['auth:sanctum', 'verified'])->get('/editDeveloper', [DeveloperController::class, 'editDeveloper'])->name('editdeveloper');

Route::middleware(['auth:sanctum', 'verified'])->get('/candidates/{id:id}', [CandidateController::class, 'getCandidates'])->name('candidates');




// Filter controller

Route::middleware(['auth:sanctum', 'verified'])->get('/ofert/filterBy', [FilterController::class,'filterby'])->name('filterby');

Route::middleware(['auth:sanctum', 'verified'])->get('/ofert/filterByCurrency', [FilterController::class,'filterbyCurrency'])->name('filterbyCurrency');

