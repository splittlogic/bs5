<?php

namespace splittlogic\bs5;

use splittlogic\html\html;

class bs5 extends html
{


  use Traits\elements;
  use Traits\helpers;
  use Traits\saveandrestore;
  use Traits\settings;

  // About bootstrap 5 package - How-To Guide
  use Traits\about;


  // Run class as static
  public static function make()
  {

    $x = new bs5;
    return $x;

  }


}
