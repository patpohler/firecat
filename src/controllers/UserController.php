<?php
namespace Anecka\Firecat\Controllers;

use Anecka\Firecat\Models as Models;

class UserController extends \BaseController {

    public function index()
    {
        $users = Models\User::all();
        $data = array(
            'users' => $users
        );

        return \View::make('firecat::users.index', $data);
    }

    public function edit($id)
    {
        $user = Models\User::find($id); //got to do an admin check here
        $data = array(
            'user' => $user
        );

        return \View::make('firecat::users.edit', $data);
    }

    public function update($id)
    {
        $user = Models\User::find($id); //got to do an admin check here
        $data = \Input::all();

        $rules = array(
            'email'                 => 'required|email',
        );

        if($data['password'] != "") {
            $rules['password'] = 'required|alpha_num|min:6|confirmed';
            $rules['password_confirmation'] = 'required|alpha_num|min:6';
        }

        if($user->validate($data, $rules)) {
            $user->display_name = $data['display_name'];
            $user->email = $data['email'];

            if($data['password'] != "") {
                $user->password = \Hash::make($data['password']);
                $user->password_confirmation = \Hash::make($data['password_confirmation']);
            }

            if($user->save()) {
                return \Redirect::route('admin.users.index')->with("message", "User Saved!");
            } else {
                return \Redirect::route('admin.users.edit', $user->id)->withErrors($user->errors());
            }
        } else {
            return \Redirect::route('admin.users.edit', $user->id)->withErrors($user->errors());

        }
    }
}
