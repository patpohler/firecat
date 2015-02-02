<?php
namespace Anecka\Firecat\Controllers;

use Anecka\Firecat\Models as Models;

class RegistrationController extends \BaseController {

    public function getIndex()
    {
        $user = new Models\User;
        return \View::make('firecat::registration.create');
    }

    public function postStore()
    {
        $user = new Models\User;
        $data = \Input::all();

        if($user->validate($data)) {
            $user->email = $data['email'];
            $user->password = \Hash::make($data['password']);
            $user->password_confirmation = \Hash::make($data['password_confirmation']);

            if($user->save() && \Auth::attempt(array('email' => $user->email, 'password' => $user->password))) {
                return \Redirect::route('admin');
            } else {
                return \Redirect::to('/signup')->withErrors($user->errors());
            }
        } else {
            return \Redirect::to('/signup')->withErrors($user->errors());
        }
    }
}
