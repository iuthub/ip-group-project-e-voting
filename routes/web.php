<?php
// Routing public views

Route::get('/', 'PagesController@index');
Route::get('/all', 'PagesController@allnews');
Route::get('/category/{category}', 'PagesController@category');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/article/{id}', 'PagesController@article');

// Routing admin views

Route::get('/admin', 'AdminController@signin');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/posts', 'AdminController@posts');
Route::get('/admin/posts/update', 'AdminController@update');
Route::get('/admin/posts/new', 'AdminController@newPost');
Route::post('/admin/posts/save', 'AdminController@savePost');
Route::get('/admin/category', 'AdminController@category');
Route::get('/admin/users', 'AdminController@users');