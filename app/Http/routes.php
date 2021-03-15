<?php


Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'admin', 'prefix' => '/admin'], function () {
    Route::group(['middleware' => 'auth-admin'], function () {
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    });
    Route::post('/login', 'AdminController@login')->name('admin.login');
    Route::get('/login', 'AdminController@formlogin')->name('admin.formlogin');
    Route::get('/register', 'AdminController@formRegister')->name('admin.formRegister');
    Route::post('/register', 'AdminController@register')->name('admin.register');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');
});

Route::get('/login/facebook', 'SocialiteController@redirectToProvider')->name('login.facebook');
Route::get('/login/facebook/callback', 'SocialiteController@handleProviderCallback')->name('login.facebook.callback');

Route::auth();

Route::get('/home', 'HomeController@index');
