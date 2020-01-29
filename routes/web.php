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
    return view('welcome');
});


Route::get('/show_drinks', 'DrinkController@index');

Route::get('/order', function () {
    return view('order');
});

Route::get('/order/{orderID}', 'OrderController@show');

Route::get('/history', 'HistoryController@index');

Route::post('/history', 'HistoryController@store');

Route::get('/history/{student_id}', 'HistoryController@show');



