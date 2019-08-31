<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');
/*
Route::get('hello', function() {
    
});
*/
Route::get('singleaction', 'SingleActionController');

