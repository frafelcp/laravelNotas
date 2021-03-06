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

Route::get('notes', 'NotasController@index');

Route::get('notes/create', 'NotasController@create');
Route::post('notes', 'NotasController@store');

Route::get('notes/{note}', 'NotasController@show')->where('note', '[0-9]+');