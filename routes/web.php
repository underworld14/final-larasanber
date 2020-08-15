<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', 'TagController@index')->name('home');
Route::get('/tag/{tag}', 'TagController@show');
Route::get('/question', 'Question\QuestionController@index');
Route::get('/question/{question}/detail', 'Question\QuestionController@show');

// authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('/question/create', 'Question\QuestionController@create');
    Route::post('/question', 'Question\QuestionController@store');
});