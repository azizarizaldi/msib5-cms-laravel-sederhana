<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

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

// Router Landing
Route::get('/',[HomeController::class , 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
// Router CMS
Route::middleware('auth')->group(function() {
    Route::group(['prefix' => 'category' , 'as' => 'category.'], function(){
        Route::get('/',[CategoryController::class , 'index'])->name('index');
        Route::post('/store',[CategoryController::class , 'store'])->name('store');
        Route::get('/delete/{banner}',[CategoryController::class , 'destroy'])->name('destroy');
    });
});

Route::get('/dashboard',[DashboardController::class , 'index'])->name('dashboard');
Route::get('/news',[NewsController::class , 'index'])->name('news');

