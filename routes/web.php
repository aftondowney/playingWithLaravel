<?php

Route::get('/', function() {
    return view('welcome');
})->name('home');

Route::post('/signup', [
    'uses' =>'UserController@postSignUp',
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' =>'UserController@postSignIn',
    'as' => 'signin'
]);

Route::get('/dashboard', [
    'uses' => 'UserController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);
