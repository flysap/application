<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Flysap\Application\Controllers'], function() {

    Route::get('login', ['as' => 'login', 'uses' => 'AuthController@getLogin']);
    Route::post('login', ['as' => 'post_login', 'uses' => 'AuthController@postLogin']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);

});

Route::group(['prefix' => 'admin', 'namespace' => 'Flysap\Application\Controllers', 'middleware' => 'role:admin'], function() {

    Route::get('/', ['as' => 'home', 'uses' => 'AdminController@main']);

});