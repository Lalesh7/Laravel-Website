<?php

use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\Frontend\HomeController;
use App\Http\COntrollers\Frontend\AboutController;
use App\Http\COntrollers\Frontend\Blog1Controller;
use App\Http\COntrollers\Frontend\ContactController;
use App\Http\COntrollers\Frontend\LoginController;
use App\Http\COntrollers\Frontend\ServicesController;
use App\Http\COntrollers\Frontend\TeamController;
use App\Http\COntrollers\Frontend\BlogController;


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
Route::get('/about',[AboutController::class,'index']);
Route::get('/blog_1',[Blog1Controller::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
Route::get('/services',[ServicesController::class,'index']);
Route::get('/team',[TeamController::class,'index']);
