<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NextController;
use App\Http\Controllers\TestingController;

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/', [NextController::class,'showHome'])->name('Home');
// Route::get('/user', [NextController::class,'showUser'])->name('User');

// if you can pass the value controller throgh route

// Route::get('/', [NextController::class,'showHome'])->name('home');
// Route::get('/blog', [NextController::class,'showblog'])->name('blog');
// Route::get('/user/{id}', [NextController::class,'showUser'])->name('users');


// we can also use group fun

Route::controller(NextController::class)->group(function(){

    
Route::get('/', 'showHome')->name('home');
Route::get('/blog','showblog')->name('blog');
Route::get('/user/{id}','showUser')->name('users');
});



Route::get('/test',TestingController::class)->name('tst');