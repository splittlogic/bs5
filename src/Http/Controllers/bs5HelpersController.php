<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\bs5\bs5;

class bs5HelpersController extends Controller
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
    $comma = $x->text('light')->span(',');

    if ($page == 'arraytonav')
    {

      $p = $x->p('If the href set for a link matches the current page then the "active" class will be added to it.  Custom classes can be added by either a string value or a sub array. As well as attributes.');
      $x->div($p);
      $x->row();

      $nav = [
        'Active' => [
          'href' => '#',
          'class' => 'active',
          'attribute' => [
            'data-custom' => 'test'
          ]
        ],
        'Link 1' => [
          'href' => '#'
        ],
        'Link 2' => [
          'href' => '#'
        ],
        'Disabled' => [
          'href' => '#',
          'class' => [
            'disabled'
          ]
        ]
      ];

      $x->div($x->arrayToNav($nav));
      $x->row();

      $p = $dollar
        . $x->text('danger')->span('nav')
        . ' = ['
        . PHP_EOL
        . $x->text('warning')->span(" 'Active' ")
        . '=> ['
        . PHP_EOL
        . $x->text('info')->span("   'href' ")
        . '=> '
        . $x->text('warning')->span("'#'")
        . $comma
        . PHP_EOL
        . $x->text('info')->span("   'class' ")
        . '=> '
        . $x->text('warning')->span("'active'")
        . $comma
        . PHP_EOL
        . $x->text('info')->span("   'attribute'")
        . '=> ['
        . PHP_EOL
        . $x->text('warning')->span("    'data-custom' ")
        . '=> '
        . $x->text('info')->span("'test'")
        . PHP_EOL
        . '   ]'
        . PHP_EOL
        . ' ]' . $comma
        . PHP_EOL
        . $x->text('warning')->span(" 'Link 1' ")
        . '=> ['
        . PHP_EOL
        . $x->text('info')->span("   'href' ")
        . '=> '
        . $x->text('warning')->span("'#'")
        . PHP_EOL
        . ' ]' . $comma
        . PHP_EOL
        . $x->text('warning')->span(" 'Link 2' ")
        . '=> ['
        . PHP_EOL
        . $x->text('info')->span("   'href' ")
        . '=> '
        . $x->text('warning')->span("'#'")
        . PHP_EOL
        . ' ]' . $comma
        . PHP_EOL
        . $x->text('warning')->span(" 'Disabled' ")
        . '=> ['
        . PHP_EOL
        . $x->text('info')->span("   'href' ")
        . '=> '
        . $x->text('warning')->span("'#'")
        . $comma
        . PHP_EOL
        . $x->text('info')->span("   'class'")
        . '=> '
        . $x->text('warning')->span("'disabled'")
        . PHP_EOL
        . ' ]'
        . PHP_EOL
        . ']' . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar
        . $x->text('danger')->span('content')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('arrayToNav(')
        . $dollar
        . $x->text('danger')->span('nav')
        . $x->text('info')->span(')');

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Basic Array', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $p = $x->p('Sub navs can easily be added and have all of the same settings as top items.');
      $x->text('center')->div($br . $p);
      $x->row();

      $nav = [
        'Active' => [
          'href' => '#',
          'class' => 'active',
          'attribute' => [
            'data-custom' => 'test'
          ]
        ],
        'Link 1' => [
          'href' => '#'
        ],
        'SubNav' => [
          'subs' => [
            'Dog' => [
              'href' => '#'
            ],
            'Cat' => [
              'href' => '#'
            ],
            'Pig' => [
              'href' => '#'
            ]
          ]
        ],
        'Disabled' => [
          'href' => '#',
          'class' => [
            'disabled'
          ]
        ]
      ];

      $x->div($x->arrayToNav($nav));
      $x->row();

      $p = $dollar
        . $x->text('danger')->span('nav')
        . ' = ['
        . PHP_EOL
        . $x->text('warning')->span(" 'Active' ")
        . '=> ['
        . PHP_EOL
        . $x->text('info')->span("   'href' ")
        . '=> '
        . $x->text('warning')->span("'#'")
        . $comma
        . PHP_EOL
        . $x->text('info')->span("   'class' ")
        . '=> '
        . $x->text('warning')->span("'active'")
        . $comma
        . PHP_EOL
        . $x->text('info')->span("   'attribute'")
        . '=> ['
        . PHP_EOL
        . $x->text('warning')->span("    'data-custom' ")
        . '=> '
        . $x->text('info')->span("'test'")
        . PHP_EOL
        . '   ]'
        . PHP_EOL
        . ' ]' . $comma
        . PHP_EOL
        . $x->text('warning')->span(" 'Link 1' ")
        . '=> ['
        . PHP_EOL
        . $x->text('info')->span("   'href' ")
        . '=> '
        . $x->text('warning')->span("'#'")
        . PHP_EOL
        . ' ]' . $comma
        . PHP_EOL
        . $x->text('warning')->span(" 'SubNav' ")
        . '=> ['
        . PHP_EOL
        . $x->text('info')->span("   'subs' ")
        . '=> ['
        . PHP_EOL
        . $x->text('warning')->span("     'Dog' ")
        . '=> ['
        . PHP_EOL
        . $x->text('info')->span("      'href' ")
        . '=> '
        . $x->text('warning')->span("'#'")
        . PHP_EOL
        . '     ]' . $comma
        . PHP_EOL
        . $x->text('warning')->span("     'Cat' ")
        . '=> ['
        . PHP_EOL
        . $x->text('info')->span("      'href' ")
        . '=> '
        . $x->text('warning')->span("'#'")
        . PHP_EOL
        . '     ]' . $comma
        . PHP_EOL
        . $x->text('warning')->span("     'Pig' ")
        . '=> ['
        . PHP_EOL
        . $x->text('info')->span("      'href' ")
        . '=> '
        . $x->text('warning')->span("'#'")
        . PHP_EOL
        . '     ]'
        . PHP_EOL
        . '   ]'
        . PHP_EOL
        . ' ]' . $comma
        . PHP_EOL
        . $x->text('warning')->span(" 'Disabled' ")
        . '=> ['
        . PHP_EOL
        . $x->text('info')->span("   'href' ")
        . '=> '
        . $x->text('warning')->span("'#'")
        . $comma
        . PHP_EOL
        . $x->text('info')->span("   'class'")
        . '=> '
        . $x->text('warning')->span("'disabled'")
        . PHP_EOL
        . ' ]'
        . PHP_EOL
        . ']' . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar
        . $x->text('danger')->span('content')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('arrayToNav(')
        . $dollar
        . $x->text('danger')->span('nav')
        . $x->text('info')->span(')');

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Subnav Array', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $p = $x->p('Menu settings can be passed to have a class and attribute applied to each link and item.  As well as an ID for the Nav and a subnav class.');
      $x->text('center')->div($br . $p);
      $x->row();

      $p = '...' . PHP_EOL
        . $x->text('warning')->span("'menu-settings'")
        . ' => ['
        . PHP_EOL
        . ' ' . $x->text('info')->span("'id'")
        . ' => '
        . $x->text('warning')->span("'navid'")
        . $comma
        . PHP_EOL
        . ' ' . $x->text('info')->span("'link-class'")
        . ' => ['
        . PHP_EOL
        . '   ' . $x->text('warning')->span("'rounded'")
        . PHP_EOL
        . ' ]' . $comma
        . PHP_EOL
        . ' ' . $x->text('info')->span("'link-attribute'")
        . ' => ['
        . PHP_EOL
        . '   ' . $x->text('warning')->span("'data-custom'")
        . ' => ' . $x->text('info')->span("'test'")
        . PHP_EOL
        . ' ]' . $comma
        . PHP_EOL
        . ' ' . $x->text('info')->span("'item-class'")
        . ' => ['
        . PHP_EOL
        . '   ' . $x->text('warning')->span("'itemclass'")
        . PHP_EOL
        . ' ]' . $comma
        . PHP_EOL
        . ' ' . $x->text('info')->span("'item-attribute'")
        . ' => ['
        . PHP_EOL
        . '   ' . $x->text('warning')->span("'data-custom'")
        . ' => ' . $x->text('info')->span("'value'")
        . PHP_EOL
        . ' ]' . $comma
        . PHP_EOL
        . ' ' . $x->text('info')->span("'subnav-class'")
        . ' => ['
        . PHP_EOL
        . '   ' . $x->text('warning')->span("'list-unstyled'")
        . PHP_EOL
        . ' ]'
        . PHP_EOL
        . ']' . $comma
        . PHP_EOL
        . '...';

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Menu Settings', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $content = $x->text('center')->h1('ArrayToNav');
      $content .= $x->text('center')->lead('Create a Nav, even with sub navs, from an array. <br> All top navitems are given a class setting of "top-nav-item" and all top navlinks are given a class setting "top-nav-link". As well as subnavitems are given a class of "sub-nav-item" and subnavlinks are given a class of "sub-nav-link".');
      $content .= $br;
      $content .= $x->container();

    } else {

      $content = $x->aboutError();

    }

    return bs5::make()->aboutView($content);

  }


}
