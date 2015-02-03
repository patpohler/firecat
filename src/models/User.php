<?php namespace Anecka\Firecat\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    /**
     * Validation rules for the model
     *
     * @var array
    */
    protected $rules = array(
        'email'                 => 'required|email',
        'password'              => 'required|alpha_num|min:6|confirmed',
        'password_confirmation' => 'required|alpha_num|min:6'
    );


    private $errors; //holds validation error messages

    public function save(array $options = array())
    {
        unset($this->attributes['password_confirmation']);
        return parent::save();
    }

    public function validate($data, $rules = array())
    {
		if(sizeof($rules) > 0) {
			// make a new validator object
			$v = \Validator::make($data, $rules);
		} else {
			// make a new validator object
			$v = \Validator::make($data, $this->rules);
		}

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

    public function errors()
    {
        return $this->errors;
    }

}
