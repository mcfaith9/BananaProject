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
Route::get('/tasks','TaskController@index');
Route::get('/create','TaskController@create');
Route::post('/tasks','TaskController@store');
Route::get('/task/{id}/edit','TaskController@edit');
Route::put('/task/{id}','TaskController@update');
Route::get('/task/{id}','TaskController@destroy');

//Assign Phone & Person
// Route::get('/pptable','PersonController@showList');
Route::get('/person', 'PersonController@create');
Route::get('/pptable','PersonController@index');
Route::post('/person', 'PersonController@store');
Route::get('/delete/{id}','PersonController@destroy');
Route::get('/edit/{id}/edit','PersonController@edit');
Route::put('/edit/{id}','PersonController@update');

Route::post('/assign', 'PersonController@assign');
//Route::get('/person','PersonController@create');
//Route::post('/pptable','PersonController@store');
//Route::get('/task/{id}/edit','PersonController@edit');
//Route::put('/task/{id}','PersonController@update');
//Route::delete('/task/{id}','PersonController@destroy');

Route::post('/phone','PhoneController@store');
Route::get('/phone','PhoneController@create');
Route::get('/phone','PhoneController@index');