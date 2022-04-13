<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('measurement/home');
});

Route::get('/measurements', function () {
    return view('measurement/list');
});

Route::get('/measurements/new', function () {
    return view('measurement/form');
});
