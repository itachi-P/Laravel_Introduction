<?php

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('hello', function () {
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});
*/

Route::get('hello', 'HelloController@index');
Route::get('singleaction', 'SingleActionController');

