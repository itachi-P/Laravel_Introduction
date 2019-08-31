<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index');
/*
Route::get('hello', function() {
    
});
*/
Route::get('singleaction', 'SingleActionController');

