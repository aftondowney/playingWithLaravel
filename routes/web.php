<?php

Route::get('/', function() {
    return view('welcome');
});

Route::post('/signup', [
    'uses' =>'UserController@postSignUp',
    'as' => 'signup'
]);
