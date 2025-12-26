<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>'guest'],function(){

    Route::get('/register',[AuthController::class,'loadregister'])->name('register');
    Route::post('/register',[AuthController::class,'saveuser'])->name('saveuser');
    
    Route::get('/',[AuthController::class,'loadlogin'])->name('loadlogin');
    Route::post('/',[AuthController::class,'userlogin'])->name('userlogin');
});
Route::group(['middleware'=>'userAuth'],function(){
Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');
});

  Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::group(['middleware'=>'isAuthenticate'],function(){
  Route::get('/subscription',[SubscriptionController::class,'subscription'])->name('subscription');
});


