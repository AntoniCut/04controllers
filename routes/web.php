<?php

    //  **********************************************************
    //  **********  /routes/web.php  **********  Rutas  **********
    //  **********************************************************


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//  **********  Ruta 'user/index'  **********
Route::get('/', [UserController::class, 'index'])->name('user.index');

//  **********  Ruta user/create  **********
Route::get('/create', [UserController::class, 'create'])->name('user.create');











