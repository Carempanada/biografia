<?php

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

Route::get('/index', function () {
    return "index";
});

Route::get('/nombre-biografia', function () {
    return view('nombre-biografia');
});

Route::get('/habilidades', function () {
    return view('habilidades');
});

Route::get('/vida-laboral', function () {
    return view('vida-laboral');
});

Route::get('/academia', function () {
    return view('academia');
});
