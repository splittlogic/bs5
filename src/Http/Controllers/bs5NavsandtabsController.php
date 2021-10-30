<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5NavsandtabsController extends Controller
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

    $p = $x->id('basenav')->h4('Base Nav')
      . $x->p('Navigation available in Bootstrap share general markup and styles, from the base .nav class to the active and disabled states. Swap modifier classes to switch between each style.')
      . $x->p('The base .nav component is built with flexbox and provide a strong foundation for building all types of navigation components. It includes some style overrides (for working with lists), some link padding for larger hit areas, and basic disabled styling.')
      . $x->p('The base .nav component does not include any .active state. The following examples include the class, mainly to demonstrate that this particular class does not trigger any special styling.')
      . $x->p('To convey the active state to assistive technologies, use the aria-current attribute — using the page value for current page, or true for the current item in a set.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->navitem('Active', '#');
    $x->navitem('Link', '#');
    $x->navitem('Link', '#');
    $x->disabled()->navitem('Disabled', '#');
    $p = $x->nav();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Active', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Disabled', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('nav()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="nav">' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link active" aria-current="page" href="#">Active</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Base Nav', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('styles')->h4('Available Styles')
      . $x->p('Change the style of .navs component with modifiers and utilities. Mix and match as needed, or build your own.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('horizontalalignment')->h4('Horizontal Alignment')
      . $x->p('Change the horizontal alignment of your nav with flexbox utilities. By default, navs are left-aligned, but you can easily change them to center or right aligned.')
      . $x->p('Centered with .justify-content-center:');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->navitem('Active', '#');
    $x->navitem('Link', '#');
    $x->navitem('Link', '#');
    $x->disabled()->navitem('Disabled', '#');
    $p = $x->justify('content-center')->nav();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Active', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Disabled', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-center'")
      . $cp . '->' . $x->text('info')->span('nav()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="nav justify-content-center">' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link active" aria-current="page" href="#">Active</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Center', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->navitem('Active', '#');
    $x->navitem('Link', '#');
    $x->navitem('Link', '#');
    $x->disabled()->navitem('Disabled', '#');
    $p = $x->justify('content-end')->nav();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Active', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Disabled', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-end'")
      . $cp . '->' . $x->text('info')->span('nav()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="nav justify-content-end">' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link active" aria-current="page" href="#">Active</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Right', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('vertical')->h4('Vertical')
      . $x->p('Stack your navigation by changing the flex item direction with the .flex-column utility. Need to stack them on some viewports but not others? Use the responsive versions (e.g., .flex-sm-column).');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->navitem('Active', '#');
    $x->navitem('Link', '#');
    $x->navitem('Link', '#');
    $x->disabled()->navitem('Disabled', '#');
    $p = $x->vertical()->nav();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Active', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Disabled', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('vertical()')
      . '->' . $x->text('info')->span('nav()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="nav flex-column">' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link active" aria-current="page" href="#">Active</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Vertical', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('tabs')->h4('Tabs')
      . $x->p('Takes the basic nav from above and adds the .nav-tabs class to generate a tabbed interface. Use them to create tabbable regions with our tab JavaScript plugin.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->href('#')->active()->tab('Active');
    $x->href('#')->tab('Link');
    $x->href('#')->tab('Link');
    $x->href('#')->disabled()->tab('Disabled');
    $p = $x->tabs();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('href(')
      . $x->text('warning')->span("'#'")
      . $cp . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('tab(')
      . $x->text('warning')->span("'Active'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('href(')
      . $x->text('warning')->span("'#'")
      . $cp . '->' . $x->text('info')->span('tab(')
      . $x->text('warning')->span("'Link'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('href(')
      . $x->text('warning')->span("'#'")
      . $cp . '->' . $x->text('info')->span('tab(')
      . $x->text('warning')->span("'Link'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('href(')
      . $x->text('warning')->span("'#'")
      . $cp . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('tab(')
      . $x->text('warning')->span("'Disabled'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('tabs()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="nav nav-tabs">' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link active" aria-current="page" href="#">Active</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Tabs', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('pills')->h4('Pills')
      . $x->p('Take that same HTML, but use .nav-pills instead:');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->navitem('Active', '#');
    $x->navitem('Link', '#');
    $x->navitem('Link', '#');
    $x->disabled()->navitem('Disabled', '#');
    $p = $x->pills()->nav();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Active', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Disabled', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pills()')
      . '->' . $x->text('info')->span('nav()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="nav nav-pills">' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link active" aria-current="page" href="#">Active</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Pills', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('fillandjustify')->h4('Fill and Justify')
      . $x->p('Force your .nav’s contents to extend the full available width one of two modifier classes. To proportionately fill all available space with your .nav-items, use .nav-fill. Notice that all horizontal space is occupied, but not every nav item has the same width.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->navitem('Active', '#');
    $x->navitem('Much longer nav link', '#');
    $x->navitem('Link', '#');
    $x->disabled()->navitem('Disabled', '#');
    $p = $x->pills()->fill()->nav();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Active', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Much longer nav link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Disabled', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pills()')
      . '->' . $x->text('info')->span('fill()')
      . '->' . $x->text('info')->span('nav()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="nav nav-pills nav-fill">' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link active" aria-current="page" href="#">Active</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Much longer nav link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Fill', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('justified')->p('For equal-width elements, use .nav-justified. All horizontal space will be occupied by nav links, but unlike the .nav-fill above, every nav item will be the same width.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->navitem('Active', '#');
    $x->navitem('Much longer nav link', '#');
    $x->navitem('Link', '#');
    $x->disabled()->navitem('Disabled', '#');
    $p = $x->pills()->justified()->nav();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Active', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Much longer nav link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Disabled', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pills()')
      . '->' . $x->text('info')->span('justified()')
      . '->' . $x->text('info')->span('nav()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="nav nav-pills nav-justified">' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link active" aria-current="page" href="#">Active</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Much longer nav link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Justified', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('flexutilities')->h4('Working With Flex Utilities')
      . $x->p('If you need responsive nav variations, consider using a series of flexbox utilities. While more verbose, these utilities offer greater customization across responsive breakpoints. In the example below, our nav will be stacked on the lowest breakpoint, then adapt to a horizontal layout that fills the available width starting from the small breakpoint.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->flex('sm-fill')->text('sm-center')->active()->navitem('Active', '#');
    $x->flex('sm-fill')->text('sm-center')->navitem('Longer nav link', '#');
    $x->flex('sm-fill')->text('sm-center')->navitem('Link', '#');
    $x->flex('sm-fill')->text('sm-center')->disabled()->navitem('Disabled', '#');
    $p = $x->pills()->flex('column')->flex('sm-row')->nav();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('flex(')
      . $x->text('warning')->span("'sm-fill'")
      . $cp . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'sm-center'")
      . $cp . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Active', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('flex(')
      . $x->text('warning')->span("'sm-fill'")
      . $cp . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'sm-center'")
      . $cp . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Much longer nav link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('flex(')
      . $x->text('warning')->span("'sm-fill'")
      . $cp . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'sm-center'")
      . $cp . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('flex(')
      . $x->text('warning')->span("'sm-fill'")
      . $cp . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'sm-center'")
      . $cp . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('navitem(')
      . $x->text('warning')->span("'Disabled', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pills()')
      . '->' . $x->text('info')->span('flex(')
      . $x->text('warning')->span("'column'")
      . $cp . '->' . $x->text('info')->span('flex(')
      . $x->text('warning')->span("'sm-row'")
      . $cp . '->' . $x->text('info')->span('nav()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="nav nav-pills flex-column flex-sm-row">' . PHP_EOL
      . ' <li class="flex-sm-fill text-sm-center nav-item">' . PHP_EOL
      . '   <a class="nav-link active" aria-current="page" href="#">Active</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="flex-sm-fill text-sm-center nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Much longer nav link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="flex-sm-fill text-sm-center nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="flex-sm-fill text-sm-center nav-item">' . PHP_EOL
      . '   <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Flex Utilities', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('accessibility')->h4('Regarding Accessibility')
      . $x->p($x->htmlchar('If you’re using navs to provide a navigation bar, be sure to add a role="navigation" to the most logical parent container of the <ul>, or wrap a <nav> element around the whole navigation. Do not add the role to the <ul> itself, as this would prevent it from being announced as an actual list by assistive technologies.'))
      . $x->p('Note that navigation bars, even if visually styled as tabs with the .nav-tabs class, should not be given role="tablist", role="tab" or role="tabpanel" attributes. These are only appropriate for dynamic tabbed interfaces, as described in the WAI ARIA Authoring Practices. See JavaScript behavior for dynamic tabbed interfaces in this section for an example. The aria-current attribute is not necessary on dynamic tabbed interfaces since our JavaScript handles the selected state by adding aria-selected="true" on the active tab.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('dropdowns')->h4('Using Dropdowns')
      . $x->p('Add dropdown menus with a little extra HTML and the dropdowns JavaScript plugin.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('tabswithdropdowns')->h4('Tabs With Dropdowns');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->href('#')->active()->tab('Active');
    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $x->dtab('Dropdown');
    $x->href('#')->tab('Link');
    $x->href('#')->disabled()->tab('Disabled');
    $p = $x->tabs();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('href(')
      . $x->text('warning')->span("'#'")
      . $cp . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('tab(')
      . $x->text('warning')->span("'Active'")
      . $cp . $colon
      . PHP_EOL
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
      . $xx . '->' . $x->text('info')->span('ddivider()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Separated link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('dtab(')
      . $x->text('warning')->span("'Dropdown'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('href(')
      . $x->text('warning')->span("'#'")
      . $cp . '->' . $x->text('info')->span('tab(')
      . $x->text('warning')->span("'Link'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('href(')
      . $x->text('warning')->span("'#'")
      . $cp . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('tab(')
      . $x->text('warning')->span("'Disabled'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('tabs()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="nav nav-tabs">' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link active" aria-current="page" href="#">Active</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item dropdown">' . PHP_EOL
      . '   <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>' . PHP_EOL
      . '   <ul class="dropdown-menu">' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . '     <li><hr class="dropdown-divider"></li>' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Separated link</a></li>' . PHP_EOL
      . '   </ul>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link" href="#">Link</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item">' . PHP_EOL
      . '   <a class="nav-link disabled">Disabled</a>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Tabs With Dropdowns', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('javascript')->h4('JavaScript Behavior')
      . $x->p('Use the tab JavaScript plugin—include it individually or through the compiled bootstrap.js file—to extend our navigational tabs and pills to create tabbable panes of local content.')
      . $x->p($x->htmlchar('Dynamic tabbed interfaces, as described in the WAI ARIA Authoring Practices, require role="tablist", role="tab", role="tabpanel", and additional aria- attributes in order to convey their structure, functionality and current state to users of assistive technologies (such as screen readers). As a best practice, we recommend using <button> elements for the tabs, as these are controls that trigger a dynamic change, rather than links that navigate to a new page or location.'))
      . $x->p('Note that dynamic tabbed interfaces should not contain dropdown menus, as this causes both usability and accessibility issues. From a usability perspective, the fact that the currently displayed tab’s trigger element is not immediately visible (as it’s inside the closed dropdown menu) can cause confusion. From an accessibility point of view, there is currently no sensible way to map this sort of construct to a standard WAI ARIA pattern, meaning that it cannot be easily made understandable to users of assistive technologies.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->strong("This is some placeholder content the Home tab's associated content.") . ' Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.';
    $x->active()->tab('Home', $c);
    $c = $x->strong("This is some placeholder content the Profile tab's associated content.") . ' Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.';
    $x->tab('Profile', $c);
    $c = $x->strong("This is some placeholder content the Contact tab's associated content.") . ' Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.';
    $x->tab('Contact', $c);
    $p = $x->fade()->tabs();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('strong(')
      . $x->text('warning')->span('"This is some placeholder content the Home tab' . "'" . 's associated content."')
      . $cp . ' . '
      . "' Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.'"
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('tab(')
      . $x->text('warning')->span("'Home', ")
      . $dollar . $x->text('danger')->span('div')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('strong(')
      . $x->text('warning')->span('"This is some placeholder content the Profile tab' . "'" . 's associated content."')
      . $cp . ' . '
      . "' Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.'"
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('tab(')
      . $x->text('warning')->span("'Profile', ")
      . $dollar . $x->text('danger')->span('div')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('strong(')
      . $x->text('warning')->span('"This is some placeholder content the Contact tab' . "'" . 's associated content."')
      . $cp . ' . '
      . "' Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.'"
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('tab(')
      . $x->text('warning')->span("'Contact', ")
      . $dollar . $x->text('danger')->span('div')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('tabs()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="nav nav-tabs" id="myTab" role="tablist">' . PHP_EOL
      . ' <li class="nav-item" role="presentation">' . PHP_EOL
      . '   <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item" role="presentation">' . PHP_EOL
      . '   <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="nav-item" role="presentation">' . PHP_EOL
      . '   <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
      . '<div class="tab-content" id="myTabContent">' . PHP_EOL
      . ' <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>' . PHP_EOL
      . ' <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>' . PHP_EOL
      . ' <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Tabs', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Navs and Tabs');
    $content .= $x->text('center')->lead('Documentation and examples for how to use Bootstrap’s included navigation components.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
