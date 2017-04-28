<?php

Route::get('/', function () {

    // $ses = Session::for('test', 'asdas');

    // return session('test');
    // return dd(session());
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('post', 'PostController');

Route::get('post/{post}/delete', ['as' => 'post.delete', 'uses' => 'PostController@delete']);
