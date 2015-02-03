<?php

Route::get('/firecat', array('as' => 'start',
    'uses' => 'Anecka\Firecat\Controllers\HomeController@showStart'));

Route::controller('signup', 'Anecka\Firecat\Controllers\RegistrationController');

Route::controller('login', 'Anecka\Firecat\Controllers\SessionController');

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
    Route::get('/', 'Anecka\Firecat\Controllers\FcadminController@getIndex');

    Route::resource('users', 'Anecka\Firecat\Controllers\UserController');
});
//Route::controller('fcadmin', 'Anecka\Firecat\Controllers\FcadminController');


Route::get('/logout', array('as' => 'logout',
    'uses' => 'Anecka\Firecat\Controllers\SessionController@getLogout'));

/*
Route::get('/firecat', function() {
    //return View::make('Anecka\Firecat\Controllers\HomeController@showStart');
    return View::make('firecat::start');
    //echo " package test";
});
*/
