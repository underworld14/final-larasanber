<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', 'TagController@index')->name('home');
Route::get('/tag/{tag}', 'TagController@show');
Route::get('/question', 'QsController@index');
Route::get('/question/{question}/detail', 'QsController@show');

// authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('/question/create', 'QsController@create');
    Route::post('/question', 'QsController@store');
    Route::post('/question/{question}/answer', 'QsController@createanswer');
    Route::post('/question/{question}/comment', 'QsController@createcomment');
});