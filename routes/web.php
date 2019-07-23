<?php

Route::get('/', 'TestController@welcome')->name('home');;
Route::get('/catalogs', 'TestController@catalogs')->name('catalogs');;
Route::get('/projects', 'TestController@projects')->name('projects');;
Route::get('/contact', 'TestController@contact')->name('contact');;

Auth::routes();

Route::get('admin/products', 'ProductController@index'); //Listado
Route::get('admin/products/create', 'ProductController@create'); //Crear nuevo
Route::post('admin/products', 'ProductController@store'); //registrar

Route::get('/home', 'HomeController@index')->name('home');
 