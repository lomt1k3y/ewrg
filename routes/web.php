<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;


// Route::get('/home', [App\Http\Controllers\controlller::class, 'home']);


Route::get('/home', [HomeController::class, 'show']);

Route::get('/reg', [RegistrController::class, 'form']);


