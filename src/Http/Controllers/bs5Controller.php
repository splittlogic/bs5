<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\bs5\bs5;

class bs5Controller extends Controller
{


  public function index ()
  {

    $x = new bs5;

    $x->eol();

    $menuArr = $x->menuElemArray();

    $menu = $x->flex('column')
      ->arrayToNav($menuArr);

    $sidebarTitle = $x
      ->text('center')
      ->h3('Splittlogic <br> Bootstrap')
      . $x->hr();

    $x->subnavlink('One', '/one');
    $x->subnavitem();
    $x->subnavlink('Two', '/two');
    $x->subnavitem();
    $x->subnavlink('Three', '/three');
    $x->subnavitem();
    $sub = $x->subnav('Cat');
    //dd($sub);
    //$sub = null;

    $x->subnavlink('Four', '/4');
    $x->subnavitem();
    $x->subnavlink('Five', '/5');
    $x->subnavitem();
    $x->subnavlink('Six', '/6');
    $x->subnavitem();
    $sub2 = $x->subnav('Bird');

    $x->navlink($sub);
    $x->navitem();
    //$x->navitem('Cat', '/cat');
    //$x->active();
    $x->navlink('Dog', 'http://bo.test/splittlogic/bs5');
    $x->navitem();
    //$x->navitem('Dog', '/dog');
    // $x->disabled();
    $x->navlink($sub2);
    $x->navitem();
    //$x->navitem('Bird', '/bird');
    //$x->pills();
    //$x->flex('column');
    $nav = $x->nav();

    $url = url()->current();
    $full = url()->full();

    if ($full == 'http://bo.test/splittlogic/bs5')
    {
      $full .= ' Yes!';
    }

    $x->col()->class('card')->div('div 1');
    $x->col()->class('card')->div($nav);
    $x->col()->class('card')->div(
      'Current: <br>'
      . $url . '<br><br>'
      . 'Full: <br>'
      . $full
    );

    $x->row();

    $content = $x->container();

    $sidebar = null;
    //$content = null;

    for ($i = 0; $i < 50; $i++)
    {
      $sidebar .= 'This is sidebar <br>';
    }

    $sidebar = $x
      ->astyle(
        'height: 100%;'
        . ' display: block;'
        . ' min-width: 265px;'
        . ' max-width: 265px;'
        . ' max-height: 100%;'
        . ' overflow: hidden scroll;'
        )
      //->adiv($menu);
      ->adiv($sidebar);

    $sidebar = $x
      ->astyle(
        'position: sticky;'
        . ' top: 0;'
        . ' left: 0;'
        . ' display: flex;'
        . ' height: 100vh;'
        . ' width: 265px;'

        )
      ->adiv($sidebar);

    for ($i = 0; $i < 50; $i++)
    {
      //$content .= 'This is main <br>';
    }

    // return view('bs5::sidebar-main',['content' => $content, 'sidebar' => $sidebar]);

    return bs5::make()->aboutView($content);

  }


}
