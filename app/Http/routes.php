<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('profile','UserController@getProfile');
Route::post('profile', 'UserController@updateAvatar');
Route::auth();

Route::get('dashboard', function () {
    return 'dashboard under construction paghuwat';
});

Route::get('clipboard', function () {
    return 'dashboard under construction paper paghuwat';
});

Route::get('/home', 'HomeController@index');

//Comments
Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);