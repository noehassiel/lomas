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

Route::get('/', [
    'uses'=>'App\Http\Controllers\FrontController@index', 
    'as' => 'index' 
]);

Route::get('/conocenos', [
    'uses'=>'App\Http\Controllers\FrontController@conoce',
    'as' => 'conoce'
]);

Route::get('/equipo', [
    'uses'=>'App\Http\Controllers\FrontController@equipo',
    'as' => 'equipo'
]);

Route::get('/contacto', [
    'uses'=>'App\Http\Controllers\FrontController@contacto',
    'as' => 'contacto'
]);

