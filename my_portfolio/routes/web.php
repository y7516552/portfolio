<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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



Route::get('/',[FrontController::class,'index'])->name('index');

Route::post('/contact',[FrontController::class,'contact'])->name('contact');

Route::prefix('/portfolio')->group(function(){
    // Route::get('/',[FrontController::class,'portfolio'])->name('portfolio');
    Route::get('/1',[FrontController::class,'fitness'])->name('fitness');
    Route::get('/2',[FrontController::class,'weather'])->name('weather');
    Route::get('/3',[FrontController::class,'game'])->name('game');
    Route::get('/4',[FrontController::class,'info'])->name('info');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->middleware(['auth'])->group(function(){
    
});
