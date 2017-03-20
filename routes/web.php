<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Home
Route::get('/', 'HomeController@index');

// Auth
Auth::routes();

// User
Route::get('/mypage', 'UserController@index');

// Ranking
Route::resource(
    'ranking',
    'RankingController',
    [
        'only' => ['index', 'create', 'show', 'store'],
    ]
);

Route::get('/ranking/{id}/post', 'PostController@create');

// Post
Route::resource(
    'post',
    'PostController',
    [
        'only' => ['create', 'store'],
    ]
);
