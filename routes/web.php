<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\roomController;
use App\Http\Controllers\AuthController;
/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard/',[dashboardController::class,'index'])->name('dashboard');
Route::get('dashboard/room/',[roomController::class,'index']);
Route::get('/ajax-paginate',[dashboardController::class,'ajax_paginate'])->name('ajax.paginate');
Route::get('manage/dashboard/',[dashboardController::class,'main'])->name('main');


//User Auth
Route::get('register/',[AuthController::class,'index'])->name('user.register');
Route::post('store/user/',[AuthController::class,'store'])->name('user.store');
Route::get('user/login',[AuthController::class,'login'])->name('user.login');
Route::post('user/login/store',[AuthController::class,'loginStore'])->name('login.store');

