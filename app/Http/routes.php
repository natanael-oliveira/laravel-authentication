<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'admin', 'prefix' => '/admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::post('/login', 'AdminController@login')->name('admin.login');
    Route::get('/login', 'AdminController@formlogin')->name('admin.formlogin');
    Route::post('/register', 'AdminController@formRegister')->name('admin.formRegister');
    Route::post('/logout', 'AdminController@logout')->name('admin.logout');
});
