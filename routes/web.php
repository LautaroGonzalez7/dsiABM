<?php

//Categories
Route::get('/categories/index','\App\Http\Controllers\CategoryController@index')->name('categories.index');
Route::get('/categories/{id}/edit','\App\Http\Controllers\CategoryController@edit')->name('categories.edit');
Route::get('/categories/create','\App\Http\Controllers\CategoryController@create')->name('categories.create');
Route::post('/categories','\App\Http\Controllers\CategoryController@store')->name('categories.store');
Route::put('/categories/{id}', '\App\Http\Controllers\CategoryController@update')->name('categories.update');
Route::delete('categories/{id}', '\App\Http\Controllers\CategoryController@destroy')->name('categories.destroy');

//Resources
Route::get('/resources/index','\App\Http\Controllers\ResourceController@index')->name('resources.index');
Route::get('/resources/{id}/edit','\App\Http\Controllers\ResourceController@edit')->name('resources.edit');
Route::get('/resources/create','\App\Http\Controllers\ResourceController@create')->name('resources.create');
Route::post('/resources','\App\Http\Controllers\ResourceController@store')->name('resources.store');
Route::put('/resources/{id}', '\App\Http\Controllers\ResourceController@update')->name('resources.update');
Route::delete('resources/{id}', '\App\Http\Controllers\ResourceController@destroy')->name('resources.destroy');

//Customers
Route::get('/customers/index','\App\Http\Controllers\CustomerController@index')->name('customers.index');
Route::get('/customers/{id}/edit','\App\Http\Controllers\CustomerController@edit')->name('customers.edit');
Route::get('/customers/create','\App\Http\Controllers\CustomerController@create')->name('customers.create');
Route::post('/customers','\App\Http\Controllers\CustomerController@store')->name('customers.store');
Route::put('/customers/{id}', '\App\Http\Controllers\CustomerController@update')->name('customers.update');
Route::delete('customers/{id}', '\App\Http\Controllers\CustomerController@destroy')->name('customers.destroy');

//Loans
Route::get('/loans/index','\App\Http\Controllers\LoanController@index')->name('loans.index');
Route::get('/loans/{id}/edit','\App\Http\Controllers\LoanController@edit')->name('loans.edit');
Route::get('/loans/create','\App\Http\Controllers\LoanController@create')->name('loans.create');
Route::post('/loans','\App\Http\Controllers\LoanController@store')->name('loans.store');
Route::put('/loans/{id}', '\App\Http\Controllers\LoanController@update')->name('loans.update');
Route::delete('loans/{id}', '\App\Http\Controllers\LoanController@destroy')->name('loans.destroy');

//Users
Route::get('/users/index','\App\Http\Controllers\UserController@index')->name('users.index');
Route::get('/users/{id}/edit','\App\Http\Controllers\UserController@edit')->name('users.edit');
Route::get('/users/create','\App\Http\Controllers\UserController@create');
Route::post('/users','\App\Http\Controllers\UserController@store');
Route::put('/users/{id}', '\App\Http\Controllers\UserController@update');
Route::delete('users/{id}', '\App\Http\Controllers\UserController@destroy');

//home
Route::get('/','\App\Http\Controllers\HomeController@index')->name('home.index');
