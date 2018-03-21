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

Route::post('/fruits/create', 'FruitController@store');
Route::get('/fruits/create', 'FruitController@create');
Route::get('fruits', 'FruitController@index');
Route::get('/fruits/edit/{id}', 'FruitController@edit');
Route::post('fruits/edit/{id}', 'FruitController@update');
Route::delete('fruits/{id}', 'FruitController@destroy');
Route::get('/fruits/show/{id}', 'FruitController@show');