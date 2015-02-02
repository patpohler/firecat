<?php namespace Anecka\Firecat\Facades;

use Illuminate\Support\Facades\Facade;

class Firecat extends Facade {

   /**
   * Get the registered name of the component.
   *
   * @return string
   */
   protected static function getFacadeAccessor() { return 'firecat'; }

}
