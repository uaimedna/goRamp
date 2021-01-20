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
    return view('home');
});

Route::get('/currentOrders', 'OrdersController@currentUserOrders')
    ->middleware('can:viewCurrentUser,App\Orders')
    ->name('orders.current');
Route::get('/allOrders', 'OrdersController@allOrders')
    ->middleware('can:viewAll,App\Orders')
    ->name('orders.all');
Route::get('/allOrdersWithTrash', 'OrdersController@allOrdersWithTrash')
    ->middleware('can:viewAllWithTrash,App\Orders')
    ->name('orders.allWithTrash');
Route::get('/allTrashOrders', 'OrdersController@allTrashOrders')
    ->middleware('can:viewTrash,App\Orders')
    ->name('orders.allTrash');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('auth.login');
Route::get('/logout', 'Auth\LoginController@logout')->name('auth.logout');
Route::post('/postLogin', 'Auth\LoginController@login')->name('auth.postLogin');
