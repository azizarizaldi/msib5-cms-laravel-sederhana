<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/',[HomeController::class , 'index'])->name('home');
Route::get('/login',[LoginController::class , 'index'])->name('login');
Route::get('/dashboard',[DashboardController::class , 'index'])->name('dashboard');
Route::get('/categories',[CategoriesController::class , 'index'])->name('categories');
Route::get('/news',[NewsController::class , 'index'])->name('news');