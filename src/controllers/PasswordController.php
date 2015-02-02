<?php
namespace Anecka\Firecat\Controllers;

use Anecka\Firecat\Models as Models;

class PasswordController extends \BaseController {

  public function remind()
  {
    return \View::make('firecat::password.remind');
  }

  public function request()
  {
  $credentials = array('email' => \Input::get('email'), 'password' => \Input::get('password'));
 
  return \Password::remind($credentials);
  } 

  public function reset($token)
  {
    return \View::make('password.reset')->with('token', $token);
  }

  public function update()
  {
  $credentials = array('email' => \Input::get('email'));
 
  return \Password::reset($credentials, function($user, $password)
  {
    $user->password = \Hash::make($password);
 
    $user->save();
 
    return \Redirect::to('login')->with('flash', 'Your password has been reset');
  });
  }

}
