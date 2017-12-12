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


Route::get('/home', 'HomeController@index');

//Taks
Route::resource('task', 'TaskController');
Route::get('/create','TaskController@create');
Route::post('/tasks','TaskController@store');
//Route::get('/create', function(){
//  return view('task.create');
//});