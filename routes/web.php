<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

Route::middleware(['auth', 'user-access:doctor'])->group(function () {
  
    Route::get('/doctor/home', [HomeController::class, 'doctorHome'])->name('doctor.home');
});

Route::middleware(['auth', 'user-access:developer'])->group(function () {
  
    Route::get('/developer/home', [HomeController::class, 'develperHome'])->name('developer.home');
});

Route::middleware(['auth', 'user-access:marketing'])->group(function () {
  
    Route::get('/marketing/home', [HomeController::class, 'marketingHome'])->name('marketing.home');
});
