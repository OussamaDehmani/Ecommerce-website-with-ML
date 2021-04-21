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


Route::get('/hello','CarController@test')->name('test');
Route::get('/','CarController@index')->name('index');
Route::get('shop/{id}','CarController@shop')->name('shop');
Route::get('details/{id}','CarController@details')->name('details');
Route::get('/sub/{id}','CarController@view')->name('view');
Route::get('/cart','CarController@cart')->name('cart');
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//cart route
Route::post('/pannier/add', 'CartController@store')->name('cart.store');
Route::get('/pannier/getall', 'CartController@index')->name('cart.index');