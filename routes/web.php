<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReportsController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function(){
    //return 'Hello All to my Page*****';
    return '<h1>Hello All to my Page*****</h1>';
});

Route::get('/user/{id}',[PagesController::class,'user']);

Route::get('/cal/{num1}/{num2}', [PagesController::class,'cal']);

Route::get('/about',[PagesController::class,'about']);

Route::get('/index',[PagesController::class,'admin']);  

Route::get('/service',[PagesController::class,'service']);  

Route::resource('reports', ReportsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
