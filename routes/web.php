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


Route::get('/daftarkomunitas', function () {
    return view('modul.komunitas.daftarkomunitas');
});


Route::get('/profilteman', function () {
    return view('modul.user.detailprofilteman');
});



	Route::resource('/user', 'User\EnduserController', ['names' => 'enduser']);
    Route::resource('/login', 'User\LoginController');
    Route::get('/myinfo', 'User\MyinfoController@edit')->name('myinfo.edit');
    Route::put('/myinfo-update/{id}', 'User\MyinfoController@update')->name('myinfo.update');
    Route::get('/changepassword', 'User\ChangepasswordController@edit')->name('changepassword.edit');
    Route::put('/changepassword-update/{id}', 'User\ChangepasswordController@update')->name('changepassword.update');
    Route::resource('/komunitas', 'User\UserkomController');
    Route::resource('/event', 'User\UsereventController',['names' => 'userevent']);
    Route::resource('/detailprofile', 'User\ProfileController');
    Route::get('/hewan/{id}', 'User\ProfileController@hewan')->name('detail.hewan');
    Route::put('/hewan/update/{id}', 'User\ProfileController@updatehewan')->name('detail.updatehewan');
    Route::delete('/hewan/delete/{id}', 'User\ProfileController@deletehewan')->name('detail.deletehewan');
    Route::resource('/adoption', 'User\AdoptionController');
    Route::resource('/pelaporan', 'User\PelaporanController');
    Route::resource('/caridokter', 'User\CaridokterController');
    Route::resource('/teman', 'User\TemanController');
    Route::get('/teman/hubungi/{id}', 'User\AdoptionController@hubungi')->name('teman.hubungi');
    Route::get('/teman/whatsapp/{id}', 'User\AdoptionController@whatsapp')->name('teman.whatsapp');
    Route::get('/listdoctor', 'User\CaridokterController@listdoctor')->name('listdoctor.index');
   
    





Route::group(['prefix' => 'dashboard'], function(){
    
    Route::resource('/admin', 'Admin\AdminController');
    Route::resource('/comunity', 'Admin\ComunityController');
    Route::resource('/event', 'Admin\EventController');
    Route::resource('/user', 'Admin\UserController');
    Route::resource('/report', 'Admin\ReportController');
    Route::resource('/finddoctor', 'Admin\FinddoctorController');
    Route::resource('/dopsiadmin', 'Admin\DopsiadminController');
});


