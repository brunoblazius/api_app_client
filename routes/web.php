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
    return view('index');
    });
     
Route::get('/api/v1/clientes/{id?}', 'Clientes@index');
Route::post('/api/v1/clientes', 'Clientes@store');
Route::post('/api/v1/clientes/{id}', 'Clientes@update');
Route::delete('/api/v1/clientes/{id}', 'Clientes@destroy');

Route::get('/api/v1/produtos/{id?}', 'Produtos@index');
Route::post('/api/v1/produtos', 'Produtos@store');
Route::post('/api/v1/produtos/{id}', 'Produtos@update');
Route::delete('/api/v1/produtos/{id}', 'Produtos@destroy');