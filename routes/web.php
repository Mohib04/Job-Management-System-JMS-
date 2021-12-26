<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\JobController;
use App\Http\Controllers\frontend\EmployerController;
use App\Http\Controllers\frontend\CandidateController;
use App\Http\Controllers\frontend\BlogController;

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

//Home
Route::get('/', function () {
    return view('pages.frontend.home.home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Jobs
Route::resource('job', JobController::class);

//Employer
Route::resource('employer', EmployerController::class);

//Candidate
Route::resource('candidate', CandidateController::class);

//Blog
Route::resource('blog', BlogController::class);
