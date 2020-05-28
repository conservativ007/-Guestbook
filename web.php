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


  Route::match(['post', 'get'] ,'/book', 'BookController@show');
  Route::match(['post', 'get'] ,'/booka', 'BookController@admin');
  Route::get('/book/edit/{id}', 'BookController@edit');
  Route::match(['post', 'get'], '/book/save', 'BookController@save');
  Route::match(['post', 'get'], '/book/delete/{id}', 'BookController@delete');
