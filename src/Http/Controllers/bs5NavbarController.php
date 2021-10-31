<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5NavbarController extends Controller
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
      . $x->p('Here’s what you need to know before getting started with the navbar:');
    $x->text('center')->div($p);
    $x->row();

    $x->li('Navbars require a wrapping .navbar with .navbar-expand{-sm|-md|-lg|-xl|-xxl} for responsive collapsing and color scheme classes.');
    $x->li('Navbars and their contents are fluid by default. Change the container to limit their horizontal width in different ways.');
    $x->li('Use our spacing and flex utility classes for controlling spacing and alignment within navbars.');
    $x->li('Navbars are responsive by default, but you can easily modify them to change that. Responsive behavior depends on our Collapse JavaScript plugin.');
    $x->li($x->htmlchar('Ensure accessibility by using a <nav> element or, if using a more generic element such as a <div>, add a role="navigation" to every navbar to explicitly identify it as a landmark region for users of assistive technologies.'));
    $x->li('Indicate the current item by using aria-current="page" for the current page or aria-current="true" for the current item in a set.');

    $p = $x->ul();
    $x->div($p);
    $x->row();

    $p = $x->p('The animation effect of this component is dependent on the prefers-reduced-motion media query. See the reduced motion section of our accessibility documentation.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('supported')->h4('Supported Content')
      . $x->p('Navbars come with built-in support for a handful of sub-components. Choose from the following as needed:');
    $x->text('center')->div($p);
    $x->row();

    $x->li('.navbar-brand for your company, product, or project name.');
    $x->li('.navbar-nav for a full-height and lightweight navigation (including support for dropdowns).');
    $x->li('.navbar-toggler for use with our collapse plugin and other navigation toggling behaviors.');
    $x->li('Flex and spacing utilities for any form controls and actions.');
    $x->li('.navbar-text for adding vertically centered strings of text.');
    $x->li('.collapse.navbar-collapse for grouping and hiding navbar contents by a parent breakpoint.');
    $x->li('Add an optional .navbar-scroll to set a max-height and scroll expanded navbar content.');
    $p = $x->ul();

    $x->div($p);
    $x->row();

    $p = $x->p('Here’s an example of all the sub-components included in a responsive light-themed navbar that automatically collapses at the lg (large) breakpoint.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->class('form-control')->me(2)->type('search')->placeholder('Search')->aria('label', 'Search')->input()
      . $x->outline()->success()->type('submit')->btn('Search');

    $x->active()->nblink('Home', '#');
    $x->nbitem();
    $x->nblink('Link', '#');
    $x->nbitem();
    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ddivider();
    $x->ditem('Something else here', '#');
    $x->nbdropdown('Dropdown');
    $x->nbitem();
    $x->disabled()->nblink('Disabled');
    $x->nbitem();
    $x->me('auto')->mb(2)->mb('lg-0')->nblist();
    $x->d('flex')->nbform($c);
    $x->nbmenu();
    $x->nbbrand('Navbar', '#');
    $p = $x->toggle()->expand('lg')->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = '// Basic example with nblink()' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('nblink(')
      . $x->text('warning')->span("'Home', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nblink(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . '// Dropdown menu - Start' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Another action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ddivder()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Something else here', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbdropdown(')
      . $x->text('warning')->span("'Dropdown'")
      . $cp . $colon
      . PHP_EOL
      . '// Dropdown menu - End' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('nblink()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'lg-0'")
      . $cp . '->' . $x->text('info')->span('nblist()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('nbform(')
      . $x->text('warning')->span("'...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . '// Basic example with nbitem()' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Home', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . '// Dropdown menu - Start' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Another action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ddivder()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Something else here', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbdropdown(')
      . $x->text('warning')->span("'Dropdown'")
      . $cp . $colon
      . PHP_EOL
      . '// Dropdown menu - End' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Disabled'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'lg-0'")
      . $cp . '->' . $x->text('info')->span('nblist()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('nbform(')
      . $x->text('warning')->span("'...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . '// Full list of functions for applying custom classes and attributes' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('nblink(')
      . $x->text('warning')->span("'Home', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nblink(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem()')
      . $colon
      . PHP_EOL
      . '// Dropdown menu - Start' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Another action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ddivder()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Something else here', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbdropdown(')
      . $x->text('warning')->span("'Dropdown'")
      . $cp . $colon
      . PHP_EOL
      . '// Dropdown menu - End' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('nblink(')
      . $x->text('warning')->span("'Disabled'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'lg-0'")
      . $cp . '->' . $x->text('info')->span('nblist()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('nbform(')
      . $x->text('warning')->span("'...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbmenu()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-expand-lg navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Navbar</a>' . PHP_EOL
      . '   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">' . PHP_EOL
      . '     <span class="navbar-toggler-icon"></span>' . PHP_EOL
      . '   </button>' . PHP_EOL
      . '   <div class="collapse navbar-collapse" id="navbarSupportedContent">' . PHP_EOL
      . '     <ul class="navbar-nav me-auto mb-2 mb-lg-0">' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link active" aria-current="page" href="#">Home</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item dropdown">' . PHP_EOL
      . '         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '           Dropdown' . PHP_EOL
      . '         </a>' . PHP_EOL
      . '         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">' . PHP_EOL
      . '           <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . '           <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '           <li><hr class="dropdown-divider"></li>' . PHP_EOL
      . '           <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . '         </ul>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '     </ul>' . PHP_EOL
      . '     <form class="d-flex">' . PHP_EOL
      . '       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">' . PHP_EOL
      . '       <button class="btn btn-outline-success" type="submit">Search</button>' . PHP_EOL
      . '     </form>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Navbar', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('This example uses background (bg-light) and spacing (my-2, my-lg-0, me-sm-0, my-sm-0) utility classes.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('brand')->h4('Brand')
      . $x->p('The .navbar-brand can be applied to most elements, but an anchor works best, as some elements might require utility classes or custom styles.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('text')->h4('Text')
      . $x->p('Add your text within an element with the .navbar-brand class.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbbrand('Navbar', '#');
    $p = $x->navbar();

    $p .= $br;

    $x->mb(0)->class('h1')->nbbrand('Navbar');
    $p .= $x->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = '// As a link' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . '// As a heading' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'0'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'h1'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- As a link -->' . PHP_EOL
      . '<nav class="navbar navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Navbar</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
      . PHP_EOL
      . '<!-- As a heading -->' . PHP_EOL
      . '<nav class="navbar navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <span class="navbar-brand mb-0 h1">Navbar</span>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Text', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('image')->h4('Image')
      . $x->p('You can replace the text within the .navbar-brand with an <img>.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $img = asset('/vendor/splittlogic/css/bootstrap-logo.svg');

    $p = $x->width(30)->height(24)->img($img);
    $x->nbbrand($p, '#');
    $p = $x->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('img') . ' = '
      . $xx . '->' . $x->text('info')->span('img(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbbrand(')
      . $dollar . $x->text('danger')->span('img')
      . $x->text('warning')->span(" ,'#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-light bg-light">' . PHP_EOL
      . ' <div class="container">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">' . PHP_EOL
      . '     <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">' . PHP_EOL
      . '   </a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Image', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('imagetext')->h4('Image and Text')
      . $x->p($x->htmlchar('You can also make use of some additional utilities to add an image and text at the same time. Note the addition of .d-inline-block and .align-text-top on the <img>.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->width(30)->height(24)->d('inline-block')->align('text-top')->img($img);
    $x->nbbrand($p . ' Bootstrap', '#');
    $p = $x->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('img') . ' = '
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'inline-block'")
      . $cp . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'text-top'")
      . $cp . '->' . $x->text('info')->span('img(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbbrand(')
      . $dollar . $x->text('danger')->span('img')
      . $x->text('warning')->span(" . 'Bootstrap','#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">' . PHP_EOL
      . '     <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">' . PHP_EOL
      . '     Bootstrap' . PHP_EOL
      . '   </a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Image and Text', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('nav')->h4('Nav')
      . $x->p('Navbar navigation links build on our .nav options with their own modifier class and require the use of toggler classes for proper responsive styling. ' . $x->strong('Navigation in navbars will also grow to occupy as much horizontal space as possible') . ' to keep your navbar contents securely aligned.')
      . $x->p('Add the .active class on .nav-link to indicate the current page.')
      . $x->p('Please note that you should also add the aria-current attribute on the active .nav-link.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbbrand('Navbar', '#');
    $x->active()->nbitem('Home', '#');
    $x->nbitem('Features', '#');
    $x->nbitem('Pricing', '#');
    $x->disabled()->nbitem('Disabled');
    $p = $x->toggle()->expand('lg')->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Home', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Features', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Pricing', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Disabled'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-expand-lg navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Navbar</a>' . PHP_EOL
      . '   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">' . PHP_EOL
      . '     <span class="navbar-toggler-icon"></span>' . PHP_EOL
      . '   </button>' . PHP_EOL
      . '   <div class="collapse navbar-collapse" id="navbarNav">' . PHP_EOL
      . '     <ul class="navbar-nav">' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link active" aria-current="page" href="#">Home</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link" href="#">Features</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link" href="#">Pricing</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '     </ul>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Nav', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('You can also use dropdowns in your navbar. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for .nav-item and .nav-link as shown below.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbbrand('Navbar', '#');
    $x->active()->nbitem('Home', '#');
    $x->nbitem('Features', '#');
    $x->nbitem('Pricing', '#');
    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->nbdropdown('Dropdown link');
    $x->nbitem();
    $p = $x->toggle()->expand('lg')->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Home', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Features', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Pricing', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Another action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Something else here', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbdropdown(')
      . $x->text('warning')->span("'Dropdown link'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem()')
      . $colon . '   <-- This needs to be called after nbdropdown()'
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-expand-lg navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Navbar</a>' . PHP_EOL
      . '   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">' . PHP_EOL
      . '     <span class="navbar-toggler-icon"></span>' . PHP_EOL
      . '   </button>' . PHP_EOL
      . '   <div class="collapse navbar-collapse" id="navbarNavDropdown">' . PHP_EOL
      . '     <ul class="navbar-nav">' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link active" aria-current="page" href="#">Home</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link" href="#">Features</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link" href="#">Pricing</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item dropdown">' . PHP_EOL
      . '         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '           Dropdown link' . PHP_EOL
      . '         </a>' . PHP_EOL
      . '         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">' . PHP_EOL
      . '           <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . '           <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '           <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . '         </ul>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '     </ul>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Dropdown', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('forms')->h4('Forms')
      . $x->p('Place various form controls and components within a navbar:');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->class('form-control')->me(2)->type('search')->aplaceholder('Search')->aria('label', 'Search')->input()
      . $x->type('submit')->outline()->success()->btn('Search');
    $x->d('flex')->nbform($p);
    $p = $x->nocollapse()->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('form') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'search'")
      . $cp . '->' . $x->text('info')->span('aplaceholder(')
      . $x->text('warning')->span("'Search'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Search'")
      . $cp . '->' . $x->text('info')->span('input()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'submit'")
      . $cp . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Search'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('nbform(')
      . $dollar . $x->text('danger')->span('form')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('nocollapse()')
      . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <form class="d-flex">' . PHP_EOL
      . '     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">' . PHP_EOL
      . '     <button class="btn btn-outline-success" type="submit">Search</button>' . PHP_EOL
      . '   </form>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Forms 1', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Immediate child elements of .navbar use flex layout and will default to justify-content: space-between. Use additional flex utilities as needed to adjust this behavior.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->class('form-control')->me(2)->type('search')->aplaceholder('Search')->aria('label', 'Search')->input()
      . $x->type('submit')->outline()->success()->btn('Search');
    $x->d('flex')->nbform($p);
    $x->nbbrand('Navbar');
    $p = $x->nocollapse()->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('form') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'search'")
      . $cp . '->' . $x->text('info')->span('aplaceholder(')
      . $x->text('warning')->span("'Search'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Search'")
      . $cp . '->' . $x->text('info')->span('input()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'submit'")
      . $cp . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Search'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('nbform(')
      . $dollar . $x->text('danger')->span('form')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('nocollapse()')
      . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand">Navbar</a>' . PHP_EOL
      . '   <form class="d-flex">' . PHP_EOL
      . '     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">' . PHP_EOL
      . '     <button class="btn btn-outline-success" type="submit">Search</button>' . PHP_EOL
      . '   </form>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Forms 2', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Input groups work, too. If your navbar is an entire form, or mostly a form, you can use the <form> element as the container and save some HTML.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->class('input-group-text')->id('basic-addon1')->span('@')
      . $x->type('text')->class('form-control')->aplaceholder('Username')->aria('label', 'Username')->aria('describedby', 'basic-addon1')->input();
    $p = $x->class('input-group')->adiv($p);
    $x->nbform($p);
    $p = $x->nocollapse()->navbar();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('form') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'input-group-text'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'basic-addon1'")
      . $cp . '->' . $x->text('info')->span('span(')
      . $x->text('warning')->span("'@'")
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'text'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('aplaceholder(')
      . $x->text('warning')->span("'Username'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Username'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'describedby', 'basic-addon1'")
      . $cp . '->' . $x->text('info')->span('input()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('form') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'input-group'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('form')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('nbform(')
      . $dollar . $x->text('danger')->span('form')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('nocollapse()')
      . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-light bg-light">' . PHP_EOL
      . ' <form class="container-fluid">' . PHP_EOL
      . '   <div class="input-group">' . PHP_EOL
      . '     <span class="input-group-text" id="basic-addon1">@</span>' . PHP_EOL
      . '     <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </form>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Forms 3', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Various buttons are supported as part of these navbar forms, too. This is also a great reminder that vertical alignment utilities can be used to align different sized elements.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->me(2)->outline()->success()->btn('Main button')
      . $x->sm()->outline()->secondary()->btn('Smaller button');
    $x->nbform($p);
    $p = $x->nocollapse()->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('form') . ' = '
      . $xx . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Main button'")
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Smaller button'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbform(')
      . $dollar . $x->text('danger')->span('form')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('nocollapse()')
      . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-light bg-light">' . PHP_EOL
      . ' <form class="container-fluid justify-content-start">' . PHP_EOL
      . '   <button class="btn btn-outline-success me-2" type="button">Main button</button>' . PHP_EOL
      . '   <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>' . PHP_EOL
      . ' </form>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Forms 4', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('text')->h4('Text')
      . $x->p('Navbars may contain bits of text with the help of .navbar-text. This class adjusts vertical alignment and horizontal spacing for strings of text.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbtext('Navbar text with an inline element');
    $p = $x->nocollapse()->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('nbtext(')
      . $x->text('warning')->span("'Navbar text with an inline element'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('nocollapse()')
      . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <span class="navbar-text">' . PHP_EOL
      . '     Navbar text with an inline element' . PHP_EOL
      . '   </span>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Text', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Mix and match with other components and utilities as needed.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbbrand('Navbar w/ text');
    $x->active()->nbitem('Home', '#');
    $x->nbitem('Features', '#');
    $x->nbitem('Pricing', '#');
    $x->me('auto')->mb(2)->mb('lg-0')->nblist();
    $x->nbtext('Navbar text with an inline element');
    $p = $x->toggle()->expand('lg')->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar w/ text'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Home', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Features', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Pricing', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'lg-0'")
      . $cp . '->' . $x->text('info')->span('nblist()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbtext(')
      . $x->text('warning')->span("'Navbar text with an inline element'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-expand-lg navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Navbar w/ text</a>' . PHP_EOL
      . '   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">' . PHP_EOL
      . '     <span class="navbar-toggler-icon"></span>' . PHP_EOL
      . '   </button>' . PHP_EOL
      . '   <div class="collapse navbar-collapse" id="navbarText">' . PHP_EOL
      . '     <ul class="navbar-nav me-auto mb-2 mb-lg-0">' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link active" aria-current="page" href="#">Home</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link" href="#">Features</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link" href="#">Pricing</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '     </ul>' . PHP_EOL
      . '     <span class="navbar-text">' . PHP_EOL
      . '       Navbar text with an inline element' . PHP_EOL
      . '     </span>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Navbar w/ text', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('color')->h4('Color Schemes')
      . $x->p('Theming the navbar has never been easier thanks to the combination of theming classes and background-color utilities. Choose from .navbar-light for use with light background colors, or .navbar-dark for dark background colors. Then, customize with .bg-* utilities.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->class('form-control')->me(2)->type('search')->aplaceholder('Search')->aria('label', 'Search')->input()
      . $x->outline()->light()->type('submit')->btn('Search');

    $x->nbbrand('Navbar', '#');
    $x->active()->nbitem('Home', '#');
    $x->nbitem('Features', '#');
    $x->nbitem('Pricing', '#');
    $x->nbitem('About', '#');
    $x->me('auto')->mb(2)->mb('lg-0')->nblist();
    $x->d('flex')->nbform($c);
    $p = $x->toggle()->expand('lg')->dark()->navbar();

    $p .= $br;

    $x->nbbrand('Navbar', '#');
    $x->active()->nbitem('Home', '#');
    $x->nbitem('Features', '#');
    $x->nbitem('Pricing', '#');
    $x->nbitem('About', '#');
    $x->me('auto')->mb(2)->mb('lg-0')->nblist();
    $x->d('flex')->nbform($c);
    $p .= $x->toggle()->expand('lg')->primary()->navbar();

    $p .= $br;

    $c = $x->class('form-control')->me(2)->type('search')->aplaceholder('Search')->aria('label', 'Search')->input()
      . $x->outline()->primary()->type('submit')->btn('Search');

    $x->nbbrand('Navbar', '#');
    $x->active()->nbitem('Home', '#');
    $x->nbitem('Features', '#');
    $x->nbitem('Pricing', '#');
    $x->nbitem('About', '#');
    $x->me('auto')->mb(2)->mb('lg-0')->nblist();
    $x->d('flex')->nbform($c);
    $p .= $x->toggle()->expand('lg')->nocolor()->astyle('background-color: #e3f2fd;')->class('navbar-light')->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('dark()')
      . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('nocolor()')
      . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'background-color: #e3f2fd;'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'navbar'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-dark bg-dark">' . PHP_EOL
      . ' <!-- Navbar content -->' . PHP_EOL
      . '</nav>' . PHP_EOL
      . PHP_EOL
      . '<nav class="navbar navbar-dark bg-primary">' . PHP_EOL
      . ' <!-- Navbar content -->' . PHP_EOL
      . '</nav>' . PHP_EOL
      . PHP_EOL
      . '<nav class="navbar navbar-light" style="background-color: #e3f2fd;">' . PHP_EOL
      . ' <!-- Navbar content -->' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Color Schemes', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('containers')->h4('Containers')
      . $x->p('Although it’s not required, you can wrap a navbar in a .container to center it on a page–though note that an inner container is still required. Or you can add a container inside the .navbar to only center the contents of a fixed or static top navbar.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbbrand('Navbar', '#');
    $p = $x->nocollapse()->expand('lg')->navbar();
    $p = $x->class('container')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('navbar') . ' = '
      . $xx . '->' . $x->text('info')->span('nocollapse()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'container'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('navbar')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="container">' . PHP_EOL
      . ' <nav class="navbar navbar-expand-lg navbar-light bg-light">' . PHP_EOL
      . '   <div class="container-fluid">' . PHP_EOL
      . '     <a class="navbar-brand" href="#">Navbar</a>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </nav>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Container', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Use any of the responsive containers to change how wide the content in your navbar is presented.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbbrand('Navbar', '#');
    $p = $x->expand('lg')->nocollapse()->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('exapnd(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('nocollapse()')
      . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-expand-lg navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Navbar</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'No Contianer', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('placement')->h4('Placement')
      . $x->p($x->htmlchar('Use our position utilities to place navbars in non-static positions. Choose from fixed to the top, fixed to the bottom, or stickied to the top (scrolls with the page until it reaches the top, then stays there). Fixed navbars use position: fixed, meaning they’re pulled from the normal flow of the DOM and may require custom CSS (e.g., padding-top on the <body>) to prevent overlap with other elements.'))
      . $x->p('Also note that ' . $x->strong('.sticky-top uses position: sticky, which isn’t fully supported in every browser.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbbrand('Default', '#');
    $p = $x->navbar();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Default', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Default</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Default', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbbrand('Fixed top', '#');
    $p = $x->astyle('position: static; margin: -1.5rem -1.5rem 1rem;')->fixed('top')->navbar();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Fixed top', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('fixed(')
      . $x->text('warning')->span("'top'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar fixed-top navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Default</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Fixed top', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbbrand('Fixed bottom', '#');
    $p = $x->astyle('position: static; margin: 1rem -1.5rem -1.5rem;')->fixed('bottom')->navbar();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Fixed bottom', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('fixed(')
      . $x->text('warning')->span("'bottom'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar fixed-bottom navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Default</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Fixed bottom', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbbrand('Sticky top', '#');
    $p = $x->astyle('position: static; margin: -1.5rem -1.5rem 1rem;')->sticky('top')->navbar();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Sticky top', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('sticky(')
      . $x->text('warning')->span("'top'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar sticky-top navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Default</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Sticky top', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('scrolling')->h4('Scrolling')
      . $x->p('Add .navbar-nav-scroll to a .navbar-nav (or other navbar sub-component) to enable vertical scrolling within the toggleable contents of a collapsed navbar. By default, scrolling kicks in at 75vh (or 75% of the viewport height), but you can override that with the local CSS custom property --bs-navbar-height or custom styles. At larger viewports when the navbar is expanded, content will appear as it does in a default navbar.')
      . $x->p('Please note that this behavior comes with a potential drawback of overflow—when setting overflow-y: auto (required to scroll the content here), overflow-x is the equivalent of auto, which will crop some horizontal content.')
      . $x->p('Here’s an example navbar using .navbar-nav-scroll with style="--bs-scroll-height: 100px;", with some extra margin utilities for optimum spacing.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbbrand('Navbar scroll', '#');
    $x->active()->nbitem('Home', '#');
    $x->nbitem('Link', '#');
    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ddivider();
    $x->ditem('Something else here', '#');
    $x->nbdropdown('Dropdown');
    $x->nbitem();
    $x->disabled()->nbitem('Disabled');
    $c = $x->class('form-control')->me(2)->type('search')->aplaceholder('Search')->aria('label', 'Search')->input()
      . $x->outline()->success()->type('submit')->btn('Search');
    $x->d('flex')->nbform($c);
    $x->me('auto')->my(2)->my('lg-0')->scroll('100px')->nblist();
    $p = $x->toggle()->expand('lg')->navbar();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar scroll', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Home', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Another action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ddivider()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Something else here', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbdropdown(')
      . $x->text('warning')->span("'Dropdown'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Disabled'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('my(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('my(')
      . $x->text('warning')->span("'lg-0'")
      . $cp . '->' . $x->text('info')->span('scroll(')
      . $x->text('warning')->span("'100px'")
      . $cp . '->' . $x->text('info')->span('nblist()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('form') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'search'")
      . $cp . '->' . $x->text('info')->span('aplaceholder(')
      . $x->text('warning')->span("'Search'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Search'")
      . $cp . '->' . $x->text('info')->span('input()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Search'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('nbform(')
      . $dollar . $x->text('danger')->span('form')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-expand-lg navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Navbar scroll</a>' . PHP_EOL
      . '   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">' . PHP_EOL
      . '     <span class="navbar-toggler-icon"></span>' . PHP_EOL
      . '   </button>' . PHP_EOL
      . '   <div class="collapse navbar-collapse" id="navbarScroll">' . PHP_EOL
      . '     <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link active" aria-current="page" href="#">Home</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item dropdown">' . PHP_EOL
      . '         <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '           Link' . PHP_EOL
      . '         </a>' . PHP_EOL
      . '         <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">' . PHP_EOL
      . '           <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . '           <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '           <li><hr class="dropdown-divider"></li>' . PHP_EOL
      . '           <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . '         </ul>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link disabled">Link</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '     </ul>' . PHP_EOL
      . '     <form class="d-flex">' . PHP_EOL
      . '       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">' . PHP_EOL
      . '       <button class="btn btn-outline-success" type="submit">Search</button>' . PHP_EOL
      . '     </form>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Scrolling', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('responsive')->h4('Responsive Behaviors')
      . $x->p('Navbars can use .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl|-xxl} classes to determine when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.')
      . $x->p('For navbars that never collapse, add the .navbar-expand class on the navbar. For navbars that always collapse, don’t add any .navbar-expand class.');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->id('toggler')->h4('Toggler')
      . $x->p('Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.')
      . $x->p('With no .navbar-brand shown at the smallest breakpoint:');
    $x->text('center')->div($p);
    $x->row();

    $c = $x->class('form-control')->me(2)->type('search')->aplaceholder('Search')->aria('label', 'Search')->input()
      . $x->outline()->success()->type('submit')->btn('Search');

    $x->hide()->nbbrand('Hidden brand');
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

    $p = $xx . '->' . $x->text('info')->span('hide()')
      . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Hidden brand'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Home', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Disabled'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('form') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'search'")
      . $cp . '->' . $x->text('info')->span('aplaceholder(')
      . $x->text('warning')->span("'Search'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Search'")
      . $cp . '->' . $x->text('info')->span('input()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Search'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('nbform(')
      . $dollar . $x->text('danger')->span('form')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-expand-lg navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">' . PHP_EOL
      . '     <span class="navbar-toggler-icon"></span>' . PHP_EOL
      . '   </button>' . PHP_EOL
      . '   <div class="collapse navbar-collapse" id="navbarTogglerDemo01">' . PHP_EOL
      . '     <a class="navbar-brand" href="#">Hidden brand</a>' . PHP_EOL
      . '     <ul class="navbar-nav me-auto mb-2 mb-lg-0">' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link active" aria-current="page" href="#">Home</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '     </ul>' . PHP_EOL
      . '     <form class="d-flex">' . PHP_EOL
      . '       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">' . PHP_EOL
      . '       <button class="btn btn-outline-success" type="submit">Search</button>' . PHP_EOL
      . '     </form>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Hidden Brand', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('With a brand name shown on the left and toggler on the right:');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->nbbrand('Navbar', '#');
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

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Home', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Disabled'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('form') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'search'")
      . $cp . '->' . $x->text('info')->span('aplaceholder(')
      . $x->text('warning')->span("'Search'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Search'")
      . $cp . '->' . $x->text('info')->span('input()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Search'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('nbform(')
      . $dollar . $x->text('danger')->span('form')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-expand-lg navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Navbar</a>' . PHP_EOL
      . '   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">' . PHP_EOL
      . '     <span class="navbar-toggler-icon"></span>' . PHP_EOL
      . '   </button>' . PHP_EOL
      . '   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">' . PHP_EOL
      . '     <ul class="navbar-nav me-auto mb-2 mb-lg-0">' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link active" aria-current="page" href="#">Home</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '     </ul>' . PHP_EOL
      . '     <form class="d-flex">' . PHP_EOL
      . '       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">' . PHP_EOL
      . '       <button class="btn btn-outline-success" type="submit">Search</button>' . PHP_EOL
      . '     </form>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Navbar Left', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('With a toggler on the left and brand name on the right:');
    $x->text('center')->div($p);
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

    $p = $xx . '->' . $x->text('info')->span('nbbrand(')
      . $x->text('warning')->span("'Navbar'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Home', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('nbitem(')
      . $x->text('warning')->span("'Disabled'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('form') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'search'")
      . $cp . '->' . $x->text('info')->span('aplaceholder(')
      . $x->text('warning')->span("'Search'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Search'")
      . $cp . '->' . $x->text('info')->span('input()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Search'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('nbform(')
      . $dollar . $x->text('danger')->span('form')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('expand(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav class="navbar navbar-expand-lg navbar-light bg-light">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">' . PHP_EOL
      . '     <span class="navbar-toggler-icon"></span>' . PHP_EOL
      . '   </button>' . PHP_EOL
      . '   <a class="navbar-brand" href="#">Navbar</a>' . PHP_EOL
      . '   <div class="collapse navbar-collapse" id="navbarTogglerDemo03">' . PHP_EOL
      . '     <ul class="navbar-nav me-auto mb-2 mb-lg-0">' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link active" aria-current="page" href="#">Home</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '       <li class="nav-item">' . PHP_EOL
      . '         <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . '       </li>' . PHP_EOL
      . '     </ul>' . PHP_EOL
      . '     <form class="d-flex">' . PHP_EOL
      . '       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">' . PHP_EOL
      . '       <button class="btn btn-outline-success" type="submit">Search</button>' . PHP_EOL
      . '     </form>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Navbar Right', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('external')->h4('External Content')
      . $x->p('Sometimes you want to use the collapse plugin to trigger a container element for content that structurally sits outside of the .navbar . Because our plugin works on the id and data-bs-target matching, that’s easily done!');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->toggle()->dark()->navbar();

    $p = $x->text('white')->h4('Collapsed content')
      . $x->text('muted')->span('Toggleable via the navbar brand.');
    $p = $x->bg('dark')->pad(4)->adiv($p);
    $p = $x->collapse()->id($x->getID())->adiv($p);

    $p .= $c;

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('navbar') . ' = '
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('dark()')
      . '->' . $x->text('info')->span('navbar()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'white'")
      . $cp . '->' . $x->text('info')->span('h4(')
      . $x->text('warning')->span("'Collapsed content'")
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('span(')
      . $x->text('warning')->span("'Toggleable via the navbar brand.'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'dark'")
      . $cp . '->' . $x->text('info')->span('pad(')
      . $x->text('warning')->span("'4'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('div')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('collapse()')
      . '->' . $x->text('info')->span('id(')
      . $xx . '->' . $x->text('info')->span('getID()')
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('div')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $dollar . $x->text('danger')->span('div')
      . ' . '
      . $dollar . $x->text('danger')->span('navbar')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="collapse" id="navbarToggleExternalContent">' . PHP_EOL
      . ' <div class="bg-dark p-4">' . PHP_EOL
      . '   <h5 class="text-white h4">Collapsed content</h5>' . PHP_EOL
      . '   <span class="text-muted">Toggleable via the navbar brand.</span>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<nav class="navbar navbar-dark bg-dark">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">' . PHP_EOL
      . '     <span class="navbar-toggler-icon"></span>' . PHP_EOL
      . '   </button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'External Content', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('When you do this, we recommend including additional JavaScript to move the focus programmatically to the container when it is opened. Otherwise, keyboard users and users of assistive technologies will likely have a hard time finding the newly revealed content - particularly if the container that was opened comes before the toggler in the document’s structure. We also recommend making sure that the toggler has the aria-controls attribute, pointing to the id of the content container. In theory, this allows assistive technology users to jump directly from the toggler to the container it controls–but support for this is currently quite patchy.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Navbar');
    $content .= $x->text('center')->lead('Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
