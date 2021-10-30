<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\bs5\bs5;

class bs5Controller extends Controller
{


  public function index ()
  {

    $x = new bs5StartController;
    return $x->index('html');

  }


}
