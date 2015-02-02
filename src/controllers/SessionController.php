<?php
namespace Anecka\Firecat\Controllers;

use Anecka\Firecat\Models as Models;

class SessionController extends \BaseController {

    private $errors = array();
    private $rules = array(
        'email'                 => 'required|email',
        'password'              => 'required|alpha_num|min:6',
    );


    public function getIndex()
    {
        $user = new Models\User;
        return \View::make('firecat::session.create');
    }

    public function postStore()
    {
        $data = \Input::all();

        if($this->_validate($data) && \Auth::attempt( array('email' => $data['email'], 'password' => $data['password']) )) {
            return \Redirect::to('/admin');
        } else {
            return \Redirect::to('/login')->withErrors($this->errors);
        }
    }

    public function getLogout()
    {
        \Auth::logout();
        return \Redirect::route('start');
    }

    private function _validate($data)
    {
        // make a new validator object
        $v = \Validator::make($data, $this->rules);

        // check for failure
        if ($v->fails())
        {
          // set errors and return false
          $this->errors = $v->messages();
          return false;
        }

        // validation pass
        return true;
    }
}
