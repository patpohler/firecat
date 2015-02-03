<?php
namespace Anecka\Firecat\Controllers;

use Anecka\Firecat\Models as Models;

class FcadminController extends \BaseController {

    public function __construct()
    {
        $this->beforeFilter('auth');
    }

    public function getIndex()
    {
        //$user = new Models\User;
        return \View::make('firecat::fcadmin.index');
    }
}
