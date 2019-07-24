<?php

Route::get('/', 'TestController@welcome')->name('home');;
Route::get('/catalogs', 'TestController@catalogs')->name('catalogs');;
Route::get('/projects', 'TestController@projects')->name('projects');;
Route::get('/contact', 'TestController@contact')->name('contact');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products', 'ProductController@index'); //Listado
Route::get('/admin/products/create', 'ProductController@create'); //Crear nuevo
Route::post('/admin/products', 'ProductController@store'); //registrar
Route::get('/admin/products/{id}/edit', 'ProductController@edit'); //Formulario de edición
Route::post('/admin/products/{id}/edit','ProductController@update'); //actualizar
Route::delete('/admin/products/{id}', 'ProductController@destroy'); //Form eliminar

//Put patch delete

 