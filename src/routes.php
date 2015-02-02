<?php

Route::get('/firecat', array('as' => 'start',
    'uses' => 'Anecka\Firecat\Controllers\HomeController@showStart'));

Route::controller('signup', 'Anecka\Firecat\Controllers\RegistrationController');

Route::controller('login', 'Anecka\Firecat\Controllers\SessionController');

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
    Route::get('/', 'Anecka\Firecat\Controllers\FcadminController@getIndex');

    Route::get('/users', 'Anecka\Firecat\Controllers\FcadminController@getUsers');
});
//Route::controller('fcadmin', 'Anecka\Firecat\Controllers\FcadminController');


Route::get('/logout', array('as' => 'logout',
    'uses' => 'Anecka\Firecat\Controllers\SessionController@getLogout'));

Route::get('password/reset', array(
  'uses' => 'Anecka\Firecat\Controllers\PasswordController@remind',
  'as' => 'password.remind'
));

Route::post('password/reset', array(
  'uses' => 'Anecka\Firecat\Controllers\PasswordController@request',
  'as' => 'password.request'
));

Route::get('password/reset/{token}', array(
  'uses' => 'Anecka\Firecat\Controllers\PasswordController@reset',
  'as' => 'password.reset'
));

Route::post('password/reset/{token}', array(
  'uses' => 'Anecka\Firecat\Controllers\PasswordController@update',
  'as' => 'password.update'
));

/*
Route::get('/firecat', function() {
    //return View::make('Anecka\Firecat\Controllers\HomeController@showStart');
    return View::make('firecat::start');
    //echo " package test";
});
*/
