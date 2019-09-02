<?php
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index')
    ->middleware('helo');
Route::post('hello', 'HelloController@post');
