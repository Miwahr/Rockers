<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/add_band_form', 'BandController@add_form')->name('add_band_form')->middleware('auth');
Route::get('/add_band', 'BandController@add')->name('add_band')->middleware('auth');
Route::get('/show_all_bands', 'BandController@show_all')->name('show_all_bands');
Route::get('/show_band/{id}', 'BandController@show_band')->name('show_band');

Route::get('/add_rocker_form', 'RockerController@add_form')->name('add_rocker_form')->middleware('auth');
Route::get('/add_rocker', 'RockerController@add')->name('add_rocker')->middleware('auth');
Route::get('/show_all_rockers', 'RockerController@show_all')->name('show_all_rockers');

Route::get('/add_membership_form', 'MemberShipController@add_form')->name('add_membership_form')->middleware('auth');
Route::get('/add_membership', 'MemberShipController@add')->name('add_membership')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
