<?php
// Routing public views

Route::get('/', 'PagesController@index');
Route::post('/mail', 'PagesController@sendMail');
Route::get('/all', 'PagesController@allnews');
Route::get('/category/{category}', 'PagesController@category');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/article/{id}', 'PagesController@article');
Route::post('/article/{id}', 'PagesController@comment');

// Routing admin views

// Route::get('/admin', 'AdminController@signin');
Route::get('/admin/dashboard', 'AdminController@dashboard')->middleware('is_admin'); //not yet
Route::get('/admin/posts', 'AdminController@posts')->middleware('is_admin');
Route::get('/admin/posts/new', 'AdminController@newPost')->middleware('is_admin');
Route::post('/admin/posts/save', 'AdminController@savePost')->middleware('is_admin');
Route::get('/admin/posts/edit/{id}', 'AdminController@editPost')->middleware('is_admin');
Route::put('/admin/posts/update/{id}', 'AdminController@updatePost')->middleware('is_admin');
Route::delete('/admin/posts/delete/{id}', 'AdminController@deletePost')->middleware('is_admin');
Route::get('/admin/category', 'AdminController@category')->middleware('is_admin'); //not yet
Route::get('/admin/users', 'AdminController@users')->middleware('is_admin'); //not yet
Route::get('/admin/users/new', 'AdminController@newUser')->middleware('is_admin');
Route::post('/admin/users/save', 'AdminController@saveUser')->middleware('is_admin');
Route::get('/admin/users/edit/{id}', 'AdminController@editUser')->middleware('is_admin');
Route::put('/admin/users/update/{id}', 'AdminController@updateUser')->middleware('is_admin');
Route::delete('/admin/users/delete/{id}', 'AdminController@deleteUser')->middleware('is_admin');
Route::get('/admin/admins', 'AdminController@admins')->middleware('is_admin');
Route::get('/admin/profile', 'AdminController@profile')->middleware('is_admin');
Route::get('/admin/profile/edit', 'AdminController@editProfile')->middleware('is_admin');
Route::put('/admin/profile', 'AdminController@updateProfile')->middleware('is_admin');

// Routing auth
Auth::routes();
Route::get('/home', 'HomeController@index');