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
Route::get('/task/{id}/edit','TaskController@edit');
Route::put('/task/{id}','TaskController@update');
Route::delete('/task/{id}','TaskController@destroy');

//Assign Phone & Person
Route::resource('/pptable', 'PersonController');
Route::get('/person', 'PersonController@create');
//Route::get('/person','PersonController@create');
//Route::post('/pptable','PersonController@store');
//Route::get('/task/{id}/edit','PersonController@edit');
//Route::put('/task/{id}','PersonController@update');
//Route::delete('/task/{id}','PersonController@destroy');
