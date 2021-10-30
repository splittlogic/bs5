<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5ScrollspyController extends Controller
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

    $p = $x->id('howitworks')->h4('How It Works')
      . $x->p('Scrollspy has a few requirements to function properly:');
    $x->text('center')->div($p);
    $x->row();

    $x->li('It must be used on a Bootstrap nav component or list group.');
    $x->li($x->htmlchar('Scrollspy requires position: relative; on the element you’re spying on, usually the <body>.'));
    $x->li($x->htmlchar('Anchors (<a>) are required and must point to an element with that id.'));
    $p = $x->ul();

    $x->div($p);
    $x->row();

    $p = $x->p('When successfully implemented, your nav or list group will update accordingly, moving the .active class from one item to the next based on their associated targets.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('scrollablecontainers')->h4('Scrollable Containers and Keyboard access')
      . $x->p($x->htmlchar('If you’re making a scrollable container (other than the <body>), be sure to have a height set and overflow-y: scroll; applied to it—alongside a tabindex="0" to ensure keyboard access.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('example')->h4('Example in Navbar')
      . $x->p('Scroll the area below the navbar and watch the active class change. The dropdown items will be highlighted as well.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p("This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.");
    $x->sitem('First heading', $p);
    $x->nbitem('First', '#' . $x->sid());

    $p = $x->p("This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.");
    $x->sitem('Second heading', $p);
    $x->nbitem('Second', '#' . $x->sid());

    $p = $x->p("This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.");
    $x->sitem('Third heading', $p);
    $x->ditem('Third', '#' . $x->sid());

    $p = $x->p("This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.");
    $x->sitem('Fourth heading', $p);
    $x->ditem('Fourth', '#' . $x->sid());

    $x->ddivider();

    $p = $x->p("This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.");
    $x->sitem('Fifth heading', $p);
    $x->ditem('Fifth', '#' . $x->sid());

    $x->nbdropdown('Dropdown');
    $x->nbitem();

    $x->nbbrand('Navbar', '#');
    $x->class('nav-pills')->nblist();
    $p = $x->nocollapse()->id($x->setID())->px(3)->expand('md')->navbar();
    $p .= $x->astyle('position: relative; height: 200px; margin-top: 0.5rem; overflow: auto;')->scrollspy($x->getID());

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('p') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'This is some placeholder...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sitem(')
      . $x->text('warning')->span("'First heading', ")
      . $dollar . $x->text('danger')->span('p')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'First', '#'")
      . ' . ' . $xx . '->' . $x->text('info')->span('sid()')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('p') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'This is some placeholder...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sitem(')
      . $x->text('warning')->span("'Second heading', ")
      . $dollar . $x->text('danger')->span('p')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Second', '#'")
      . ' . ' . $xx . '->' . $x->text('info')->span('sid()')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('p') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'This is some placeholder...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sitem(')
      . $x->text('warning')->span("'Third heading', ")
      . $dollar . $x->text('danger')->span('p')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Third', '#'")
      . ' . ' . $xx . '->' . $x->text('info')->span('sid()')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('p') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'This is some placeholder...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sitem(')
      . $x->text('warning')->span("'Fourth heading', ")
      . $dollar . $x->text('danger')->span('p')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Fourth', '#'")
      . ' . ' . $xx . '->' . $x->text('info')->span('sid()')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ddivder()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('p') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'This is some placeholder...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sitem(')
      . $x->text('warning')->span("'Fifth heading', ")
      . $dollar . $x->text('danger')->span('p')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Fifth', '#'")
      . ' . ' . $xx . '->' . $x->text('info')->span('sid()')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'nav-pills'")
      . $cp . '->' . $x->text('info')->span('nblist()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content')
      . '->' . $x->text('info')->span('nocollapse()')
      . '->' . $x->text('info')->span('id(')
      . $xx . '->' . $x->text('info')->span('setID()')
      . $cp . '->' . $x->text('info')->span('px(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'position: relative; height: 200px; margin-top: 0.5rem; overflow: auto;'")
      . $cp . '->' . $x->text('info')->span('scrollspy(')
      . $xx . '->' . $x->text('info')->span('getID()')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav id="navbar-example2" class="navbar navbar-light bg-light px-3">' . PHP_EOL
      . ' <a class="navbar-brand" href="#">Navbar</a>' . PHP_EOL
      . ' <ul class="nav nav-pills">' . PHP_EOL
      . '   <li class="nav-item">' . PHP_EOL
      . '     <a class="nav-link" href="#scrollspyHeading1">First</a>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . '   <li class="nav-item">' . PHP_EOL
      . '     <a class="nav-link" href="#scrollspyHeading2">Second</a>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . '   <li class="nav-item dropdown">' . PHP_EOL
      . '     <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>' . PHP_EOL
      . '     <ul class="dropdown-menu">' . PHP_EOL
      . '       <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>' . PHP_EOL
      . '       <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>' . PHP_EOL
      . '       <li><hr class="dropdown-divider"></li>' . PHP_EOL
      . '       <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>' . PHP_EOL
      . '     </ul>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</nav>'
      . '<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">' . PHP_EOL
      . ' <h4 id="scrollspyHeading1">First heading</h4>' . PHP_EOL
      . ' <p>...</p>' . PHP_EOL
      . ' <h4 id="scrollspyHeading2">Second heading</h4>' . PHP_EOL
      . ' <p>...</p>' . PHP_EOL
      . ' <h4 id="scrollspyHeading3">Third heading</h4>' . PHP_EOL
      . ' <p>...</p>' . PHP_EOL
      . ' <h4 id="scrollspyHeading4">Fourth heading</h4>' . PHP_EOL
      . ' <p>...</p>' . PHP_EOL
      . ' <h4 id="scrollspyHeading5">Fifth heading</h4>' . PHP_EOL
      . ' <p>...</p>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Example in Navbar', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('listgroup')->h4('Example with list-group')
       . $x->p('Scrollspy also works with .list-groups. Scroll the area next to the list group and watch the active class change.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->p("This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.");

    $x->sitem('Item 1', $c);
    $x->litema('Item 1', '#' . $x->sid());

    $x->sitem('Item 2', $c);
    $x->litema('Item 2', '#' . $x->sid());

    $x->sitem('Item 3', $c);
    $x->litema('Item 3', '#' . $x->sid());

    $x->sitem('Item 4', $c);
    $x->litema('Item 4', '#' . $x->sid());

    $lgroup = $x->id($x->setID())->lgroup();
    $scroll = $x->astyle('position: relative; height: 200px; margin-top: 0.5rem; overflow: auto;')->scrollspy($x->getID());

    $p = $x->col(4)->adiv($lgroup)
      . $x->col(8)->adiv($scroll);

    $p = $x->class('row')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('p') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'This is some placeholder...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sitem(')
      . $x->text('warning')->span("'Item 1', ")
      . $dollar . $x->text('danger')->span('p')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'Item 1', '#'")
      . ' . ' . $xx . '->' . $x->text('info')->span('sid()')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('p') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'This is some placeholder...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sitem(')
      . $x->text('warning')->span("'Item 2', ")
      . $dollar . $x->text('danger')->span('p')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'Item 2', '#'")
      . ' . ' . $xx . '->' . $x->text('info')->span('sid()')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('p') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'This is some placeholder...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sitem(')
      . $x->text('warning')->span("'Item 3', ")
      . $dollar . $x->text('danger')->span('p')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'Item 3', '#'")
      . ' . ' . $xx . '->' . $x->text('info')->span('sid()')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('p') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'This is some placeholder...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sitem(')
      . $x->text('warning')->span("'Item 4', ")
      . $dollar . $x->text('danger')->span('p')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'Item 4', '#'")
      . ' . ' . $xx . '->' . $x->text('info')->span('sid()')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('lgroup') . ' = '
      . $xx . '->' . $x->text('info')->span('id(')
      . $xx . '->' . $x->text('info')->span('setID()')
      . $cp . '->' . $x->text('info')->span('lgroup()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('scroll') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'position: relative; height: 200px; margin-top: 0.5rem; overflow: auto;'")
      . $cp . '->' . $x->text('info')->span('scrollspy(')
      . $xx . '->' . $x->text('info')->span('getID()')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'4'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('lgroup')
      . $cp
      . ' . ' . $xx . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'8'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('scroll')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div id="list-example" class="list-group">' . PHP_EOL
      . ' <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>' . PHP_EOL
      . ' <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>' . PHP_EOL
      . ' <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>' . PHP_EOL
      . ' <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">' . PHP_EOL
      . ' <h4 id="list-item-1">Item 1</h4>' . PHP_EOL
      . ' <p>...</p>' . PHP_EOL
      . ' <h4 id="list-item-2">Item 2</h4>' . PHP_EOL
      . ' <p>...</p>' . PHP_EOL
      . ' <h4 id="list-item-3">Item 3</h4>' . PHP_EOL
      . ' <p>...</p>' . PHP_EOL
      . ' <h4 id="list-item-4">Item 4</h4>' . PHP_EOL
      . ' <p>...</p>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Example with list-group', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Scrollspy');
    $content .= $x->text('center')->lead('Automatically update Bootstrap navigation or list group components based on scroll position to indicate which link is currently active in the viewport.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
