<?php

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
    return view('master');
});

Route::get('/lapor', function () {
    return view('modul.pelaporan.index');
});

Route::get('/komunitas', function () {
    return view('modul.komunitas.index');
});

Route::get('/event', function () {
    return view('modul.event.index');
});

Route::get('/profilteman', function () {
    return view('modul.user.detailprofilteman');
});

