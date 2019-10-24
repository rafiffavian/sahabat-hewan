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

Route::get('/', 'User\LoginController@index');


Route::get('/daftarkomunitas', function () {
    return view('modul.komunitas.daftarkomunitas');
});


Route::get('/profilteman', function () {
    return view('modul.user.detailprofilteman');
});


Route::resource('/user', 'User\EnduserController', ['names' => 'enduser']);
Route::resource('/login', 'User\LoginController');
Route::resource('/verifikasi', 'User\VerifikasiController');

Route::resource('/forgot', 'User\ForgotController');
Route::post('/forgot/requestPassword', 'User\ForgotController@requestPassword')->name('requestPassword');
Route::get('/resetPassword/{key}/{id}', 'User\ForgotController@resetPassword')->name('resetPassword');
Route::post('/resetPassword', 'User\ForgotController@reset')->name('reset');
Route::get('/password', 'User\ForgotController@resetPasswordForm')->name('resetPasswordForm');

Route::middleware(['auth'])->group(function(){
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
    Route::post('/pelaporan-upload', 'User\PelaporanController@fileUpload')->name('pelaporan.fileUpload');
    Route::resource('/caridokter', 'User\CaridokterController');
    Route::resource('/teman', 'User\TemanController');
    Route::get('/teman/hubungi/{id}', 'User\AdoptionController@hubungi')->name('teman.hubungi');
    Route::get('/teman/whatsapp/{id}', 'User\AdoptionController@whatsapp')->name('teman.whatsapp');
    Route::get('/listdoctor', 'User\CaridokterController@listdoctor')->name('listdoctor.index');
    Route::resource('dashboard/admin', 'Admin\AdminController');
    Route::resource('dashboard/comunity', 'Admin\ComunityController');
    Route::get('/dashboard/comunity-grafik/grafik','Admin\ComunityController@graphic')->name('comunity.grafik');
    Route::resource('dashboard/event', 'Admin\EventController');
    Route::get('/dashboard/event-grafik/grafik','Admin\EventController@graphic')->name('event.grafik');
    Route::resource('dashboard/user', 'Admin\UserController');
    

    Route::resource('dashboard/report', 'Admin\ReportController');
    Route::get('/dashboard/report/detail/{id}', 'Admin\ReportController@sukses')->name('detail.sukses');
    Route::get('/dashboard/report-berhasil/', 'Admin\ReportController@berhasil')->name('laporan.berhasil');
    Route::get('/dashboard/report/table/berhasil','Admin\ReportController@tableberhasil')->name('laporan.tableberhasil');
    Route::get('/dashboard/grafik-berhasil','Admin\ReportController@grafikberhasil')->name('laporan.grafikberhasil');

    Route::get('/dashboard/grafik','Admin\ReportController@grafik')->name('laporan.grafik');
    Route::resource('dashboard/finddoctor', 'Admin\FinddoctorController');
    Route::resource('dashboard/daftarkomunitas', 'Admin\DafkomController');
    Route::get('/dashboard/doctor-grafik/grafik','Admin\FinddoctorController@graphic')->name('doctor.grafik');
    Route::resource('dashboard/dopsiadmin', 'Admin\DopsiadminController');
    Route::get('/dashboard/adopsi/grafik','Admin\DopsiadminController@grafik')->name('adopsi.grafik');
});	   
    




