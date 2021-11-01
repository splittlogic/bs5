<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5TestController extends Controller
{


  public function index()
  {

    $content = null;

    $x = new bs5;

    $br = $x->br();

    // Programming colors
    $dollar = $x->class('text-light')->span('$');
    $xx = $dollar . $x->class('text-danger')->span('x');
    $html = $x->class('text-warning')->span('bs5');
    $colon = $x->class('text-light')->span(';');
    $make = $x->class('text-success')->span('make()');
    $bladeOpen = $x->class('text-light')->span('{') . '!! ';
    $bladeClose = ' !!' . $x->class('text-light')->span('}');
    $cp = $x->text('info')->span(')');

    $x->toastbody('Hello, world! This is a toast message');
    $c = $x->type('button')->cbtn('close')->me(2)->m('auto')->data('bs-dismiss', 'toast')->aria('label', 'Close')->button();
    $x->prehtml('<div class="d-flex">');
    $x->posthtml($c . '</div>');
    $p = $x->show()->toast();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->right()->nbbrand('Navbar', '#');
    $x->active()->nbitem('Home', '#');
    $x->nbitem('Link', '#');
    $x->disabled()->nbitem('Disabled');
    $x->me('auto')->mb(2)->mb('lg-0')->nblist();
    $x->d('flex')->nbform($c);
    $p = $x->toggle()->expand('lg')->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Test');
    $content .= $x->text('center')->lead('Test lead paragraph');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
