<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Homecontroller;
use App\Http\Controllers\Frontend\AboutMeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\BlogController;

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
Route::get('/',[HomeController::class,'index']);
// Route::get('/aboutme',[AboutMeController::class,'index']);
// Route::get('/contact',[ContactController::class,'index']);
// Route::get('/portfolio',[PortfolioController::class,'index']);
// Route::get('/blog',[BlogController::class,'index']);
