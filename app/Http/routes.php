<?php

Route::get('/', 'HomeController@index');

Route::post('posts/{posts}/share', ['as' => 'posts.share', 'uses' => 'PostController@share']);
Route::resource('posts', 'PostController', ['except' => ['index', 'create']]);

Route::controller('auth', 'Auth\AuthController');
