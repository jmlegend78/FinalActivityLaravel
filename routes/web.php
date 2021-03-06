<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
/*
use App\Http\Controllers\imgcontroller;
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

Route::get('/index',[WebController::class,'index']);
Route::get('/generic',[WebController::class,'generic']);
Route::get('/elements',[WebController::class,'elements']);

