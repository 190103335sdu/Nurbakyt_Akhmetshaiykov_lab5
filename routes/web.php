<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\StudentController;

//shows name
Route::get('/name/{id}', [StudentController::class, 'display_name']);

//shows date of birth
Route::get('/date/{id}', [StudentController::class, 'display_date']);

//shows age
Route::get('/age/{id}', [StudentController::class, 'display_age']);
