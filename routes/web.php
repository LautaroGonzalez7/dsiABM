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


//Users

Route::get('/users/create', function (){
    return view('users/create');
});




//Categories
Route::get('categories/create', function () {
    return view('categories/create');
});
Route::get('/categories/{id}/edit', function () {
    return view('categories/edit');
});
Route::get('/categories/index', function (){
    return view('categories/index');
});

//Resources
Route::get('/resources/create', function (){
    return view('resources/create');
});
Route::get('/resources/{id}/edit', function (){
    return view('categories/edit');
});
Route::get('/resources/index', function (){
    return view('categories/index');
});

//Loans
Route::get('/loans/create', function (){
    return view('loans/create');
});
Route::get('/loans/{id}/edit', function (){
    return view('loans/edit');
});
Route::get('/loans/index', function (){
    return view('loans/index');
});

//Endpoints
Route::post('/categories','\Presentation\Http\Controllers\CategoryController@store');
Route::put('/categories/{id}', '\Presentation\Http\Controllers\CategoryController@update');
Route::delete('categories/{id}', '\Presentation\Http\Controllers\CategoryController@destroy')->name('profile.destroy');


//Users
Route::post('/users','\Presentation\Http\Controllers\UserController@store');


//Resources
Route::post('/resources','\Presentation\Http\Controllers\ResourceController@store');
Route::put('/resources/{id}', '\Presentation\Http\Controllers\ResourceController@update');
Route::delete('resources/{id}', '\Presentation\Http\Controllers\ResourceController@destroy')->name('profile.destroy');


//Loans
Route::post('/loans','\Presentation\Http\Controllers\LoanController@store');
Route::put('/loans/{id}', '\Presentation\Http\Controllers\LoanController@update');
Route::delete('loans/{id}', '\Presentation\Http\Controllers\LoanController@destroy')->name('profile.destroy');

Auth::routes();


//Endpoints
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('resources', 'ResourceController');
Route::resource('categories', 'CategoryController');
Route::resource('loans', 'LoanController');
Route::resource('users', 'UserController');



Route::get('/', function () {
    return view('welcome');
});

