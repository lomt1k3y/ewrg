<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;


// Route::get('/home', [App\Http\Controllers\controlller::class, 'home']);


Route::get('/home', [HomeController::class, 'show']);

Route::get('/reg', [RegistrController::class, 'form']);
Route::group( [ 'middleware' => 'admin', 'prefix' => 'admin' ], function () {
    }); // админский роут

Route::get('/kat', [KatalogController::class, 'kat']
)->where (['num1'=>'[0-9]+']);
