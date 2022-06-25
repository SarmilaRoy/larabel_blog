<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\RequestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::view('about','about');
//Route::view('contact','/contact');

Route::get('/users',[UsersController::class,'index']);

Route::get('data',[RequestController::class,'textRequest']);

Route::view('login','request');




route::get('dbUsers',[RequestController::class,'dbConnect']);