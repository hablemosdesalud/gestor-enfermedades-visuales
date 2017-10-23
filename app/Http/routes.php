<?php

Route::resource('/',         'FrontController');

Route::resource('apps',      'AppController');
Route::resource('users',     'UserController');
Route::resource('menus',     'MenuController');
Route::resource('posts',     'PostController');
Route::resource('news',      'NewController');
Route::resource('links',     'LinkController');
Route::resource('log',       'LogController');

Route::get('menus/upgrade/{id}',    'MenuController@upgrade');
Route::get('menus/downgrade/{id}',  'MenuController@downgrade');

Route::get('posts/upgrade/{id}',    'PostController@upgrade');
Route::get('posts/downgrade/{id}',  'PostController@downgrade');

Route::get('allmenus/{id}', 'AppController@getAllMenus');
Route::get('allposts/{id}', 'MenuController@getAllPosts');

Route::get('api/post', 'PostController@getPost');
