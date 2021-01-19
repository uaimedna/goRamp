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
    return 'test';
});

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('auth.login');
Route::get('/logout', 'Auth\LoginController@logout')->name('auth.logout');
Route::post('/postLogin', 'Auth\LoginController@login')->name('auth.postLogin');
