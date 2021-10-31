<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\bs5\bs5;

class bs5ComponentsController extends Controller
{


  public function index($page)
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

    if ($page == 'navs')
    {

      $p = $x->p('Use navlink() to create navigation links.  Then navitem() to pull saved navigation links that have already been created and wrap them in a navigation list item.  Once all navigation links and items have been created, call nav() to build them all into a Nav. All top navitems are given a class setting of "top-nav-item" and all top navlinks are given a class setting "top-nav-link".  As well as subnavitems are given a class of "sub-nav-item" and subnavlinks are given a class of "sub-nav-link".');
      $x->col()->text('center')->div($p);
      $x->row();

      $x->active()->navlink('Active', '#');
      $x->navitem();
      $x->navlink('Link 1', '#');
      $x->navitem();
      $x->navlink('Link 2', '#');
      $x->navitem();
      $x->disabled()->navlink('Disabled', '#');
      $x->navitem();
      $nav = $x->nav();

      $x->div($nav . $br);
      $x->row();

      $p = $xx . '->'
        . $x->text('info')->span('active()')
        . '->'
        . $x->text('info')->span('navlink(')
        . $x->text('warning')->span("'Active', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navitem()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navlink(')
        . $x->text('warning')->span("'Link 1', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navitem()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navlink(')
        . $x->text('warning')->span("'Link 2', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navitem()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('disabled()')
        . '->'
        . $x->text('info')->span('navlink(')
        . $x->text('warning')->span("'Disabled', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navitem()')
        . $colon
        . PHP_EOL
        . $dollar
        . $x->text('danger')->span('content')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('nav()')
        . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Using navlink(), navitem(), and nav():', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br);
      $x->row();

      $p = $x->p('The same Nav can be created using only navlink() and nav().  Good if you do not need to add a custom class to the navitem.');
      $x->text('center')->div($p);
      $x->row();

      $x->active()->navlink('Active', '#');
      $x->navlink('Link 1', '#');
      $x->navlink('Link 2', '#');
      $x->disabled()->navlink('Disabled', '#');
      $nav = $x->nav();

      $x->div($nav . $br);
      $x->row();

      $p = $xx . '->'
        . $x->text('info')->span('active()')
        . '->'
        . $x->text('info')->span('navlink(')
        . $x->text('warning')->span("'Active', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navlink(')
        . $x->text('warning')->span("'Link 1', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navlink(')
        . $x->text('warning')->span("'Link 2', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('disabled()')
        . '->'
        . $x->text('info')->span('navlink(')
        . $x->text('warning')->span("'Disabled', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $dollar
        . $x->text('danger')->span('content')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('nav()')
        . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Using navlink() and nav():', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br);
      $x->row();

      $p = $x->p('The same Nav can be created using only navitem() and nav().  Good if you do not need to add a custom class to the navlink. <strong>Note:</strong> the active() and disabled() setting must be passed with <mark>true</mark> in the navitem() function.');
      $x->text('center')->div($p);
      $x->row();

      $x->navitem('Active', '#', true);
      $x->navitem('Link 1', '#');
      $x->navitem('Link 2', '#');
      $x->navitem('Disabled', '#', null, true);
      $nav = $x->nav();

      $x->div($nav . $br);
      $x->row();

      $p = $xx . '->'
        . $x->text('info')->span('navitem(')
        . $x->text('warning')->span("'Active', '#', true")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navitem(')
        . $x->text('warning')->span("'Link 1', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navitem(')
        . $x->text('warning')->span("'Link 2', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navitem(')
        . $x->text('warning')->span("'Disabled', '#', null, true")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $dollar
        . $x->text('danger')->span('content')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('nav()')
        . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Using navitem() and nav():', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $p = $x->p('Sub Navs can be created with the same methods as Navs.  Using subnavlink(), subnavitem(), and subnav():');
      $x->text('center')->div($br . $p);
      $x->row();

      $x->active()->navlink('Active', '#');
      $x->navlink('Link 1', '#');
        $x->subnavlink('Dog', '#');
        $x->subnavlink('Cat', '#');
        $x->subnavlink('Pig', '#');
        $sub = $x->subnav('SubNav');
      $x->navlink($sub);
      $x->disabled()->navlink('Disabled', '#');
      $nav = $x->nav();

      $x->div($nav . $br);
      $x->row();

      $p = $xx . '->'
        . $x->text('info')->span('active()')
        . '->'
        . $x->text('info')->span('navlink(')
        . $x->text('warning')->span("'Active', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navitem()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navlink(')
        . $x->text('warning')->span("'Link 1', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navitem()')
        . $colon
        . PHP_EOL
        . '   ' . $xx . '->'
        . $x->text('info')->span('subnavlink(')
        . $x->text('warning')->span("'Dog', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . '   ' . $xx . '->'
        . $x->text('info')->span('subnavitem()')
        . $colon
        . PHP_EOL
        . '   ' . $xx . '->'
        . $x->text('info')->span('subnavlink(')
        . $x->text('warning')->span("'Cat', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . '   ' . $xx . '->'
        . $x->text('info')->span('subnavitem()')
        . $colon
        . PHP_EOL
        . '   ' . $xx . '->'
        . $x->text('info')->span('subnavlink(')
        . $x->text('warning')->span("'Pig', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . '   ' . $xx . '->'
        . $x->text('info')->span('subnavitem()')
        . $colon
        . PHP_EOL
        . '   ' . $dollar
        . $x->text('danger')->span('sub')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('subnav(')
        . $x->text('warning')->span('SubNav')
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navlink(')
        . $dollar
        . $x->text('danger')->span("sub")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navitem()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('disabled()')
        . '->'
        . $x->text('info')->span('navlink(')
        . $x->text('warning')->span("'Disabled', '#'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('navitem()')
        . $colon
        . PHP_EOL
        . $dollar
        . $x->text('danger')->span('content')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('nav()')
        . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Using navlink(), navitem(), and nav():', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $content = $x->text('center')->h1('Navs');
      $content .= $x->text('center')->lead('');
      $content .= $br;
      $content .= $x->container();

    } else {

      $content = $x->aboutError();

    }

    return bs5::make()->aboutView($content);

  }


}
