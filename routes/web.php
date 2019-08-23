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
//Views
Route::get('/', function () {
    return view('welcome');
});
Route::get('/altaElementos', function () {
    return view('forms/altaElementos');
});
Route::get('/listaElementos', function () {
    return view('lists/listaElementos');
});

Auth::routes();


//Endpoints
Route::get('/home', 'HomeController@index')->name('home');

