<?php

//Categories
Route::get('/categories/index','\App\Http\Controllers\CategoryController@index')->name('categories.index');
Route::get('/categories/{id}/edit','\App\Http\Controllers\CategoryController@edit')->name('categories.edit');
Route::get('/categories/create','\App\Http\Controllers\CategoryController@create');
Route::post('/categories','\App\Http\Controllers\CategoryController@store');
Route::put('/categories/{id}', '\App\Http\Controllers\CategoryController@update');
Route::delete('categories/{id}', '\App\Http\Controllers\CategoryController@destroy');

//Resources
Route::get('/resources/index','\App\Http\Controllers\ResourceController@index')->name('resources.index');
Route::get('/resources/{id}/edit','\App\Http\Controllers\ResourceController@edit')->name('resources.edit');
Route::get('/resources/create','\App\Http\Controllers\ResourceController@create');
Route::post('/resources','\App\Http\Controllers\ResourceController@store');
Route::put('/resources/{id}', '\App\Http\Controllers\ResourceController@update');
Route::delete('resources/{id}', '\App\Http\Controllers\ResourceController@destroy');


//Users
Route::get('/users/index','\App\Http\Controllers\UserController@index')->name('users.index');
Route::get('/users/{id}/edit','\App\Http\Controllers\UserController@edit')->name('users.edit');
Route::get('/users/create','\App\Http\Controllers\UserController@create');
Route::post('/users','\App\Http\Controllers\UserController@store');
Route::put('/users/{id}', '\App\Http\Controllers\UserController@update');
Route::delete('users/{id}', '\App\Http\Controllers\UserController@destroy');

//Loans
Route::get('/loans/index','\App\Http\Controllers\LoanController@index')->name('loans.index');
Route::get('/loans/{id}/edit','\App\Http\Controllers\LoanController@edit')->name('loans.edit');
Route::get('/loans/create','\App\Http\Controllers\LoanController@create');
Route::post('/loans','\App\Http\Controllers\LoanController@store');
Route::put('/loans/{id}', '\App\Http\Controllers\LoanController@update');
Route::delete('loans/{id}', '\App\Http\Controllers\LoanController@destroy');