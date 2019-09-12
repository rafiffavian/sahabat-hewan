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


Route::get('/laporkomunitas', function () {
    return view('modul.pelaporan.komunitas');
});

Route::get('/daftarkomunitas', function () {
    return view('modul.komunitas.daftarkomunitas');
});

Route::get('/dokter', function () {
    return view('modul.pelaporan.dokter');
});


Route::get('/profilteman', function () {
    return view('modul.user.detailprofilteman');
});

Route::get('/info', function () {
    return view('modul.setting.info');
});
Route::get('/gantipassword', function () {
    return view('modul.setting.gantipassword');
});    
Route::get('/daftar', function () {
    return view('modul.signinup.daftar');
});
Route::get('/adopsi', function () {
    return view('modul.adopsi.index');
});


Route::resource('/user', 'User\EnduserController', ['names' => 'enduser']);
Route::resource('/login', 'User\LoginController');
Route::resource('/komunitas', 'User\UserkomController');
Route::resource('/event', 'User\UsereventController');
Route::resource('/detailprofile', 'User\ProfileController');

Route::group(['prefix' => 'dashboard'], function(){
    
    Route::resource('/admin', 'Admin\AdminController');
    Route::resource('/comunity', 'Admin\ComunityController');
    Route::resource('/event', 'Admin\EventController');
    Route::resource('/user', 'Admin\UserController');
});


