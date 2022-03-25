<?php

use App\Http\Controllers\HomeController;
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


Route:: get('/',[HomeController::class,'showHome']);
Route:: get('/home',[HomeController::class,'showHome']);
Route::get('/login',[HomeController::class,'showLogin']);
Route::get('/register',[HomeController::class,'showRegister']);
Route::post('/login',[HomeController::class,'showLoginOk']);