<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5DropdownsController extends Controller
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

    $p = $x->id('overview')->h4('Overview')
      . $x->p('Dropdowns are toggleable, contextual overlays for displaying lists of links and more. They’re made interactive with the included Bootstrap dropdown JavaScript plugin. They’re toggled by clicking, not by hovering; this is an intentional design decision.')
      . $x->p('Dropdowns are built on a third party library, Popper, which provides dynamic positioning and viewport detection. Be sure to include popper.min.js before Bootstrap’s JavaScript or use bootstrap.bundle.min.js / bootstrap.bundle.js which contains Popper. Popper isn’t used to position dropdowns in navbars though as dynamic positioning isn’t required.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('accessibility')->h4('Accessibility')
      . $x->p('The WAI ARIA standard defines an actual role="menu" widget, but this is specific to application-like menus which trigger actions or functions. ARIA menus can only contain menu items, checkbox menu items, radio button menu items, radio button groups, and sub-menus.')
      . $x->p('Bootstrap’s dropdowns, on the other hand, are designed to be generic and applicable to a variety of situations and markup structures. For instance, it is possible to create dropdowns that contain additional inputs and form controls, such as search fields or login forms. For this reason, Bootstrap does not expect (nor automatically add) any of the role and aria- attributes required for true ARIA menus. Authors will have to include these more specific attributes themselves.')
      . $x->p('However, Bootstrap does add built-in support for most standard keyboard menu interactions, such as the ability to move through individual .dropdown-item elements using the cursor keys and close the menu with the ESC key.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('examples')->h4('Examples')
      . $x->p($x->htmlchar('Wrap the dropdown’s toggle (your button or link) and the dropdown menu within .dropdown, or another element that declares position: relative;. Dropdowns can be triggered from <a> or <button> elements to better fit your potential needs. The examples shown here use semantic <ul> elements where appropriate, but custom markup is supported.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('single')->h4('Single Button')
      . $x->p($x->htmlchar('Any single .btn can be turned into a dropdown toggle with some markup changes. Here’s how you can put them to work with either <button> elements:'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->dlink('Action', '#');
    $x->ditem();
    $x->dlink('Another action', '#');
    $x->ditem();
    $x->dlink('Something else here', '#');
    $x->ditem();
    $p = $x->secondary()->dropdown('Dropdown button');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('dlink(')
      . $x->text('warning')->span("'Action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('dlink(')
      . $x->text('warning')->span("'Another action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('dlink(')
      . $x->text('warning')->span("'Something else here', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropdown button'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="dropdown">' . PHP_EOL
      . ' <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Dropdown button' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Single Button', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $p = $x->secondary()->dropdown('Dropdown button');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
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
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropdown button'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="dropdown">' . PHP_EOL
      . ' <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Dropdown button' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Single Button - ditem only', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->dlink('Action', '#');
    $x->dlink('Another action', '#');
    $x->dlink('Something else here', '#');
    $p = $x->secondary()->dropdown('Dropdown button');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('dlink(')
      . $x->text('warning')->span("'Action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('dlink(')
      . $x->text('warning')->span("'Another action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('dlink(')
      . $x->text('warning')->span("'Something else here', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropdown button'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="dropdown">' . PHP_EOL
      . ' <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Dropdown button' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Single Button - dlink only', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('The best part is you can do this with any button variant, too:');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->primary()->dropdown('Primary');
    $p = $x->col()->adiv($c);

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->secondary()->dropdown('Secondary');
    $p .= $x->col()->adiv($c);

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->success()->dropdown('Success');
    $p .= $x->col()->adiv($c);

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->info()->dropdown('Info');
    $p .= $x->col()->adiv($c);

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->warning()->dropdown('Warning');
    $p .= $x->col()->adiv($c);

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->danger()->dropdown('Danger');
    $p .= $x->col()->adiv($c);

    $p = $x->class('row')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Danger'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- Example single danger button -->' . PHP_EOL
      . '<div class="btn-group">' . PHP_EOL
      . ' <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Action' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . '   <li><hr class="dropdown-divider"></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Separated link</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Button Variant', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('split')->h4('Split Button')
      . $x->p('Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of .dropdown-toggle-split for proper spacing around the dropdown caret.')
      . $x->p('We use this extra class to reduce the horizontal padding on either side of the caret by 25% and remove the margin-left that’s added for regular button dropdowns. Those extra changes keep the caret centered in the split button and provide a more appropriately sized hit area next to the main button.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $p = $x->mx(2)->split()->primary()->dropdown('Primary');

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $p .= $x->mx(2)->split()->secondary()->dropdown('Secondary');

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $p .= $x->mx(2)->split()->success()->dropdown('Success');

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $p .= $x->mx(2)->split()->info()->dropdown('Info');

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $p .= $x->mx(2)->split()->warning()->dropdown('Warning');

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $p .= $x->mx(2)->split()->danger()->dropdown('Danger');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('split()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Danger'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- Example split danger button -->' . PHP_EOL
      . '<div class="btn-group">' . PHP_EOL
      . ' <button type="button" class="btn btn-danger">Action</button>' . PHP_EOL
      . ' <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   <span class="visually-hidden">Toggle Dropdown</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . '   <li><hr class="dropdown-divider"></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Separated link</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Split Button', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('sizing')->h4('Sizing')
      . $x->p('Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->secondary()->lg()->dropdown('Large button');
    $p = $x->col()->adiv($c);

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->secondary()->lg()->split()->dropdown('Large split button');
    $p .= $x->col()->adiv($c);

    $p = $x->class('row')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Large button'")
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('split()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Large split button'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- Large button groups (default and split) -->' . PHP_EOL
      . '<div class="btn-group">' . PHP_EOL
      . ' <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Large button' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   ...' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="btn-group">' . PHP_EOL
      . ' <button class="btn btn-secondary btn-lg" type="button">' . PHP_EOL
      . '   Large split button' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   <span class="visually-hidden">Toggle Dropdown</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   ...' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Large Buttons', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->secondary()->sm()->dropdown('Small button');
    $p = $x->col()->adiv($c);

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->secondary()->sm()->split()->dropdown('Small split button');
    $p .= $x->col()->adiv($c);

    $p = $x->class('row')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Small button'")
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('split()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Small split button'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- Large button groups (default and split) -->' . PHP_EOL
      . '<div class="btn-group">' . PHP_EOL
      . ' <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Small button' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   ...' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="btn-group">' . PHP_EOL
      . ' <button class="btn btn-secondary btn-sm" type="button">' . PHP_EOL
      . '   Small split button' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   <span class="visually-hidden">Toggle Dropdown</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   ...' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Small Buttons', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('dark')->h4('Dark Dropdowns')
      . $x->p('Opt into darker dropdowns to match a dark navbar or custom style by adding .dropdown-menu-dark onto an existing .dropdown-menu. No changes are required to the dropdown items.');
    $x->text('center')->div($p);
    $x->row();

    $x->active()->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $p = $x->secondary()->menucolor('dark')->dropdown('Dropdown button');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('ditem(')
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('menucolor(')
      . $x->text('warning')->span("'dark'")
      . $cp . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropdown button'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="dropdown">' . PHP_EOL
      . ' <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Dropdown button' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">' . PHP_EOL
      . '   <li><a class="dropdown-item active" href="#">Action</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . '   <li><hr class="dropdown-divider"></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Separated link</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Dark Dropdowns', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('directions')->h4('Directions')
      . $x->p('RTL Directions are mirrored when using Bootstrap in RTL, meaning .dropstart will appear on the right side.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('dropup')->h4('Dropup')
      . $x->p('Trigger dropdown menus above elements by adding .dropup to the parent element.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->secondary()->dropup()->dropdown('Dropup');
    $p = $x->col()->adiv($c);

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->secondary()->split()->dropup()->dropdown('Split dropup');
    $p .= $x->col()->adiv($c);

    $p = $x->class('row')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('ditem(')
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('dropup()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropup'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('ditem(')
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('split()')
      . '->' . $x->text('info')->span('dropup()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Split dropup'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- Default dropup button -->' . PHP_EOL
      . '<div class="btn-group dropup">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Dropup' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   <!-- Dropdown menu links -->' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<!-- Split dropup button -->' . PHP_EOL
      . '<div class="btn-group dropup">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary">' . PHP_EOL
      . '   Split dropup' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   <span class="visually-hidden">Toggle Dropdown</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   <!-- Dropdown menu links -->' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Dropup', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->secondary()->dropright()->dropdown('Dropright');
    $p = $x->col()->adiv($c);

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->secondary()->split()->dropright()->dropdown('Split dropright');
    $p .= $x->col()->adiv($c);

    $p = $x->class('row')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('ditem(')
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('dropright()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropright'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('ditem(')
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('split()')
      . '->' . $x->text('info')->span('dropright()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Split dropright'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- Default dropup button -->' . PHP_EOL
      . '<div class="btn-group dropup">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Dropright' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   <!-- Dropdown menu links -->' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<!-- Split dropup button -->' . PHP_EOL
      . '<div class="btn-group dropup">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary">' . PHP_EOL
      . '   Split dropright' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   <span class="visually-hidden">Toggle Dropdown</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   <!-- Dropdown menu links -->' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Dropright', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->secondary()->dropleft()->dropdown('Dropleft');
    $p = $x->col()->adiv($c);

    $x->ditem('Action', '#');
    $x->ditem('Another Action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->secondary()->split()->dropleft()->dropdown('Split dropleft');
    $p .= $x->col()->adiv($c);

    $p = $x->class('row')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('ditem(')
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('dropleft()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropleft'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('ditem(')
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
      . $x->text('warning')->span("'Separated Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('split()')
      . '->' . $x->text('info')->span('dropleft()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Split dropleft'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- Default dropup button -->' . PHP_EOL
      . '<div class="btn-group dropup">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Dropleft' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   <!-- Dropdown menu links -->' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<!-- Split dropup button -->' . PHP_EOL
      . '<div class="btn-group dropup">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary">' . PHP_EOL
      . '   Split dropleft' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   <span class="visually-hidden">Toggle Dropdown</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   <!-- Dropdown menu links -->' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Dropleft', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('menuitems')->h4('Menu Items')
      . $x->p('You can create non-interactive dropdown items with .dropdown-item-text. Feel free to style further with custom CSS or text utilities.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->dtext('Dropdown item text');
    $x->ditem();
    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $p = $x->listonly()->dropdown();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('dtext(')
      . $x->text('warning')->span("'Dropdown item text'")
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
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('listonly()')
      . '->' . $x->text('info')->span('dropdown()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="dropdown-menu">' . PHP_EOL
      . ' <li><span class="dropdown-item-text">Dropdown item text</span></li>' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'List Only', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('listonlyactive')->h4('Active')
      . $x->p('Add .active to items in the dropdown to style them as active. To convey the active state to assistive technologies, use the aria-current attribute — using the page value for the current page, or true for the current item in a set.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Regular link', '#');
    $x->active()->ditem('Active link', '#');
    $x->ditem('Another link', '#');
    $p = $x->listonly()->dropdown();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Regular link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Active link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Another link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('listonly()')
      . '->' . $x->text('info')->span('dropdown()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="dropdown-menu">' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Regular link</a></li>' . PHP_EOL
      . ' <li><a class="dropdown-item active" href="#" aria-current="true">Active link</a></li>' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Another link</a></li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'List Only - Active', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('disabled')->h4('Disabled')
      . $x->p('Add .disabled to items in the dropdown to ' . $x->strong('style them as disabled' . '.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Regular link', '#');
    $x->disabled()->ditem('Disabled link', '#');
    $x->ditem('Another link', '#');
    $p = $x->listonly()->dropdown();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Regular link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Disabled link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Another link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('listonly()')
      . '->' . $x->text('info')->span('dropdown()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="dropdown-menu">' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Regular link</a></li>' . PHP_EOL
      . ' <li><a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Disabled link</a></li>' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Another link</a></li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'List Only - Disabled', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('menualignment')->h4('Menu Alignment')
      . $x->p('By default, a dropdown menu is automatically positioned 100% from the top and along the left side of its parent. You can change this with the directional .drop* classes, but you can also control them with additional modifier classes.')
      . $x->p('Add .dropdown-menu-end to a .dropdown-menu to right align the dropdown menu. Directions are mirrored when using Bootstrap in RTL, meaning .dropdown-menu-end will appear on the left side.')
      . $x->p($x->strong('Heads up!') . ' Dropdowns are positioned thanks to Popper except when they are contained in a navbar.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $p = $x->secondary()->menuend()->dropdown('Right-aligned menu example');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
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
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('menuend()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Right-aligned menu example'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Right-aligned menu example' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu dropdown-menu-end">' . PHP_EOL
      . '   <li><button class="dropdown-item" type="button">Action</button></li>' . PHP_EOL
      . '   <li><button class="dropdown-item" type="button">Another action</button></li>' . PHP_EOL
      . '   <li><button class="dropdown-item" type="button">Something else here</button></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Right Aligned Menu', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('responsivealignment')->h4('Responsive Alignment')
      . $x->p('If you want to use responsive alignment, disable dynamic positioning by adding the data-bs-display="static" attribute and use the responsive variation classes.')
      . $x->p('To align right the dropdown menu with the given breakpoint or larger, add .dropdown-menu{-sm|-md|-lg|-xl|-xxl}-end.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $p = $x->secondary()->menuend('lg')->dropdown('Left-aligned but right aligned when large screen');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
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
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('menuend(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Left-aligned but right aligned when large screen'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Left-aligned but right aligned when large screen' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu dropdown-menu-lg-end">' . PHP_EOL
      . '   <li><button class="dropdown-item" type="button">Action</button></li>' . PHP_EOL
      . '   <li><button class="dropdown-item" type="button">Another action</button></li>' . PHP_EOL
      . '   <li><button class="dropdown-item" type="button">Something else here</button></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Responsive Alignment', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('To align left the dropdown menu with the given breakpoint or larger, add .dropdown-menu-end and .dropdown-menu{-sm|-md|-lg|-xl|-xxl}-start.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $p = $x->secondary()->menustart('lg')->dropdown('Right-aligned but left aligned when large screen');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
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
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('menustart(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Left-aligned but right aligned when large screen'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Right-aligned but left aligned when large screen' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu dropdown-menu-lg-start">' . PHP_EOL
      . '   <li><button class="dropdown-item" type="button">Action</button></li>' . PHP_EOL
      . '   <li><button class="dropdown-item" type="button">Another action</button></li>' . PHP_EOL
      . '   <li><button class="dropdown-item" type="button">Something else here</button></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Responsive Alignment - 2', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Note that you don’t need to add a data-bs-display="static" attribute to dropdown buttons in navbars, since Popper isn’t used in navbars.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('alignmentoptions')->h4('Alignment Options')
      . $x->p('Taking most of the options shown above, here’s a small kitchen sink demo of various dropdown alignment options in one place.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $c = $x->secondary()->dropdown('Dropdown');
    $p = $x->col()->adiv($c);

    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $c = $x->secondary()->menuend()->dropdown('Right-aligned menu');
    $p .= $x->col()->adiv($c);

    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $c = $x->secondary()->menuend('lg')->dropdown('Left-aligned, right-aligned lg');
    $p .= $x->col()->adiv($c);

    $p = $x->class('row')->adiv($p);

    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $c = $x->secondary()->menuend()->menustart('lg')->dropdown('Right-aligned, left-aligned lg');
    $t = $x->col()->adiv($c);

    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $c = $x->secondary()->dropleft()->dropdown('Dropleft');
    $t .= $x->col()->adiv($c);

    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $c = $x->secondary()->dropright()->dropdown('Dropright');
    $t .= $x->col()->adiv($c);

    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $c = $x->secondary()->dropup()->dropdown('Dropup');
    $t .= $x->col()->adiv($c);

    $c = $x->adiv($br);
    $p .= $x->class('row')->adiv($c);

    $p .= $x->class('row')->adiv($t);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropdown'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('menuend()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Right-aligned menu'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('menuend(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Left-aligned, right-aligned lg'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('menustart(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Right-aligned, left-aligned lg'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('dropleft()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropleft'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('dropright()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropright'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('dropup()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropup'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group">' . PHP_EOL
      . ' <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Dropdown' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="btn-group">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Right-aligned menu' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu dropdown-menu-end">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="btn-group">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">' . PHP_EOL
      . '   Left-aligned, right-aligned lg' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu dropdown-menu-lg-end">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="btn-group">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">' . PHP_EOL
      . '   Right-aligned, left-aligned lg' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="btn-group dropstart">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Dropleft' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="btn-group dropend">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Dropright' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="btn-group dropup">' . PHP_EOL
      . ' <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '   Dropup' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Alignment Options', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('menucontent')->h4('Menu Content');

    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('headers')->h4('Headers')
      . $x->p('Add a header to label sections of actions in any dropdown menu.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->dheader('Dropdown header');
    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $p = $x->listonly()->dropdown();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('dheader(')
      . $x->text('warning')->span("'Dropdown header'")
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
      . $xx . '->' . $x->text('info')->span('listonly()')
      . '->' . $x->text('info')->span('dropdown()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="dropdown-menu">' . PHP_EOL
      . ' <li><h6 class="dropdown-header">Dropdown header</h6></li>' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Headers', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('dividers')->h4('Dividers')
      . $x->p('Separate groups of related menu items with a divider.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $p = $x->listonly()->dropdown();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
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
      . $xx . '->' . $x->text('info')->span('listonly()')
      . '->' . $x->text('info')->span('dropdown()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="dropdown-menu">' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . ' <li><hr class="dropdown-divider"></li>' . PHP_EOL
      . ' <li><a class="dropdown-item" href="#">Separated link</a></li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Dividers', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('text')->h4('Text')
      . $x->p('Place any freeform text within a dropdown menu with text and use spacing utilities. Note that you’ll likely need additional sizing styles to constrain the menu width.');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->p("Some example text that's free-flowing within the dropdown menu.")
      . $x->mb(0)->p('And this is more example text.');
    $p = $x->class('dropdown-menu')->pad(4)->text('muted')->astyle('max-width: 200px; position: static; display: block;')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('p1') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('p2') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'0'")
      . $cp . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'dropdown-menu'")
      . $cp . '->' . $x->text('info')->span('pad(')
      . $x->text('warning')->span("'4'")
      . $cp . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 200px; position: static; display: block;'")
      . $cp . '->' . $x->text('info')->span('div(')
      . $dollar . $x->text('danger')->span('p1')
      . ' . '
      . $dollar . $x->text('danger')->span('p2')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="dropdown-menu p-4 text-muted" style="max-width: 200px; position: static; display: block;">' . PHP_EOL
      . ' <p>' . PHP_EOL
      . "   Some example text that's free-flowing within the dropdown menu." . PHP_EOL
      . ' </p>' . PHP_EOL
      . ' <p class="mb-0">' . PHP_EOL
      . '   And this is more example text.' . PHP_EOL
      . ' </p>' . PHP_EOL
      . '</div>' . PHP_EOL
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

    $p = $x->id('forms')->h4('Forms')
      . $x->p('Put a form within a dropdown menu, or make it into a dropdown menu, and use margin or padding utilities to give it the negative space you require.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->for('exampleDropdownFormEmail1')->class('form-label')->label('Email address')
      . $x->type('email')->class('form-control')->id('exampleDropdownFormEmail1')->placeholder('email@example.com')->input();
    $p = $x->mb(3)->adiv($c);

    $c = $x->for('exampleDropdownFormPassword1')->class('form-label')->label('Password')
      . $x->type('password')->class('form-control')->id('exampleDropdownFormPassword1')->placeholder('Password')->input();
    $p .= $x->mb(3)->adiv($c);

    $c = $x->type('checkbox')->class('form-check-input')->id('dropdownCheck')->input()
      . $x->class('form-check-label')->for('dropdownCheck')->label('Remember me');
    $c = $x->class('form-check')->adiv($c);
    $p .= $x->mb(3)->adiv($c);

    $p .= $x->type('submit')->cbtn()->cbtn('primary')->button('Sign in');

    $p = $x->px(4)->py(3)->form($p);

    $p .= $x->class('dropdown-item')->href('#')->a('New around here? Sign up')
      . $x->class('dropdown-item')->href('#')->a('Forgot password?');

    $p = $x->class('dropdown-menu')->astyle('position: static; display: block;')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('label') . ' = '
      . $xx . '->' . $x->text('info')->span('for(')
      . $x->text('warning')->span("'exampleDropdownFormEmail2'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-label'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Email address'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('input') . ' = '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'email'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text("warning")->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'exampleDropdownFormEmail2'")
      . $cp . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'email@example.com'")
      . $cp . '->' . $x->text('info')->span('input()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('divs') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('label')
      . ' . '
      . $dollar . $x->text('danger')->span('input')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('label') . ' = '
      . $xx . '->' . $x->text('info')->span('for(')
      . $x->text('warning')->span("'exampleDropdownFormPassword2'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-label'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Password'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('input') . ' = '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'password'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text("warning")->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'exampleDropdownFormPassword2'")
      . $cp . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'Password'")
      . $cp . '->' . $x->text('info')->span('input()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('divs') . ' .= '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('label')
      . ' . '
      . $dollar . $x->text('danger')->span('input')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('input') . ' = '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'checkbox'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-check-input'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'dropdownCheck'")
      . $cp . '->' . $x->text('info')->span('input()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('label') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-check-label'")
      . $cp . '->' . $x->text('info')->span('for(')
      . $x->text('warning')->span("'dropdownCheck'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Remember me'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-check'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('input')
      . ' . '
      . $dollar . $x->text('danger')->span('label')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('divs') . ' .= '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('div')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('divs') . ' .= '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'submit'")
      . $cp . '->' . $x->text('info')->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'primary'")
      . $cp . '->' . $x->text('info')->span('button(')
      . $x->text('warning')->span("'Sign in'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('form') . ' = '
      . $xx . '->' . $x->text('info')->span('px(')
      . $x->text('warning')->span("'4'")
      . $cp . '->' . $x->text('info')->span('py(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('form(')
      . $dollar . $x->text('danger')->span('divs')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('items') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'dropdown-item'")
      . $cp . '->' . $x->text('info')->span('a(')
      . $x->text('warning')->span("'New around here? Sign up', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('items') . ' .= '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'dropdown-item'")
      . $cp . '->' . $x->text('info')->span('a(')
      . $x->text('warning')->span("'Forgot password?', '#'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'dropdown-menu'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'position: static; display: block;'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('form')
      . ' . '
      . $dollar . $x->text('danger')->span('items')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="dropdown-menu">' . PHP_EOL
      . ' <form class="px-4 py-3">' . PHP_EOL
      . '   <div class="mb-3">' . PHP_EOL
      . '     <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>' . PHP_EOL
      . '     <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="mb-3">' . PHP_EOL
      . '     <label for="exampleDropdownFormPassword1" class="form-label">Password</label>' . PHP_EOL
      . '     <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="mb-3">' . PHP_EOL
      . '     <div class="form-check">' . PHP_EOL
      . '       <input type="checkbox" class="form-check-input" id="dropdownCheck">' . PHP_EOL
      . '       <label class="form-check-label" for="dropdownCheck">' . PHP_EOL
      . '         Remember me' . PHP_EOL
      . '       </label>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <button type="submit" class="btn btn-primary">Sign in</button>' . PHP_EOL
      . ' </form>' . PHP_EOL
      . ' <div class="dropdown-divider"></div>' . PHP_EOL
      . ' <a class="dropdown-item" href="#">New around here? Sign up</a>' . PHP_EOL
      . ' <a class="dropdown-item" href="#">Forgot password?</a>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Form', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->for('exampleDropdownFormEmail2')->class('form-label')->label('Email address')
      . $x->type('email')->class('form-control')->id('exampleDropdownFormEmail2')->placeholder('email@example.com')->input();
    $p = $x->mb(3)->adiv($c);

    $c = $x->for('exampleDropdownFormPassword2')->class('form-label')->label('Password')
      . $x->type('password')->class('form-control')->id('exampleDropdownFormPassword2')->placeholder('Password')->input();
    $p .= $x->mb(3)->adiv($c);

    $c = $x->type('checkbox')->class('form-check-input')->id('dropdownCheck2')->input()
      . $x->class('form-check-label')->for('dropdownCheck2')->label('Remember me');
    $c = $x->class('form-check')->adiv($c);
    $p .= $x->mb(3)->adiv($c);

    $p .= $x->type('submit')->cbtn()->cbtn('primary')->button('Sign in');

    $p = $x->class('dropdown-menu')->pad(4)->astyle('position: static; display: block;')->form($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('label') . ' = '
      . $xx . '->' . $x->text('info')->span('for(')
      . $x->text('warning')->span("'exampleDropdownFormEmail2'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-label'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Email address'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('input') . ' = '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'email'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'exampleDropdownFormEmail2'")
      . $cp . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'email@example.com'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('divs') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('label')
      . ' . '
      . $dollar . $x->text('danger')->span('input')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('label') . ' = '
      . $xx . '->' . $x->text('info')->span('for(')
      . $x->text('warning')->span("'exampleDropdownFormPassword2'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-label'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Password'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('input') . ' = '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'password'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'exampleDropdownFormPassword2'")
      . $cp . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'Password'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('divs') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('label')
      . ' . '
      . $dollar . $x->text('danger')->span('input')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('input') . ' = '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'checkbox'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-check-input'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'dropdownCheck2'")
      . $cp . '->' . $x->text('info')->span('input()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('label') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-check-label'")
      . $cp . '->' . $x->text('info')->span('for(')
      . $x->text('warning')->span("'dropdownCheck2'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Remember me'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-check'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('input')
      . ' . '
      . $dollar . $x->text('danger')->span('label')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('divs') . ' .= '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('div')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('divs') . ' .= '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'submit'")
      . $cp . '->' . $x->text('info')->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'primary'")
      . $cp . '->' . $x->text('info')->span('button(')
      . $x->text('warning')->span("'Sign in'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'dropdown-menu'")
      . $cp . '->' . $x->text('info')->span('pad(')
      . $x->text('warning')->span("'4'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'position: static; display: block;'")
      . $cp . '->' . $x->text('info')->span('form(')
      . $dollar . $x->text('danger')->span('divs')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<form class="dropdown-menu p-4">' . PHP_EOL
      . ' <div class="mb-3">' . PHP_EOL
      . '   <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>' . PHP_EOL
      . '   <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="mb-3">' . PHP_EOL
      . '   <label for="exampleDropdownFormPassword2" class="form-label">Password</label>' . PHP_EOL
      . '   <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="mb-3">' . PHP_EOL
      . '   <div class="form-check">' . PHP_EOL
      . '     <input type="checkbox" class="form-check-input" id="dropdownCheck2">' . PHP_EOL
      . '     <label class="form-check-label" for="dropdownCheck2">' . PHP_EOL
      . '       Remember me' . PHP_EOL
      . '     </label>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <button type="submit" class="btn btn-primary">Sign in</button>' . PHP_EOL
      . '</form>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Form 2', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('dropdownoptions')->h4('Dropdown Options')
      . $x->p('Use data-bs-offset or data-bs-reference to change the location of the dropdown.');
    $x->text('center')->div($p);

    $x->div($br);
    $x->row();

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $c = $x->secondary()->menuoffset('10,20')->me(1)->dropdown('Offset');
    $p = $x->col()->adiv($c);

    $x->ditem('Action', '#');
    $x->ditem('Another action', '#');
    $x->ditem('Something else here', '#');
    $x->ddivider();
    $x->ditem('Separated link', '#');
    $c = $x->secondary()->split()->menureference('parent')->dropdown('Reference');
    $p .= $x->col()->adiv($c);

    $p = $x->class('row')->adiv($p);

    $p = $x->d('flex')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
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
      . $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('menuoffset(')
      . $x->text('warning')->span("'10,20'")
      . $cp . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'1'")
      . $cp . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Offset'")
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
      . $dollar . $x->text('danger')->span('buttons') . ' .= '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('split()')
      . '->' . $x->text('info')->span('menureference(')
      . $x->text('warning')->span("'parent'")
      . $cp . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Reference'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('buttons')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="d-flex">' . PHP_EOL
      . ' <div class="dropdown me-1">' . PHP_EOL
      . '   <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">' . PHP_EOL
      . '     Offset' . PHP_EOL
      . '   </button>' . PHP_EOL
      . '   <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . '   </ul>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="btn-group">' . PHP_EOL
      . '   <button type="button" class="btn btn-secondary">Reference</button>' . PHP_EOL
      . '   <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">' . PHP_EOL
      . '     <span class="visually-hidden">Toggle Dropdown</span>' . PHP_EOL
      . '   </button>' . PHP_EOL
      . '   <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
      . '     <li><hr class="dropdown-divider"></li>' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Separated link</a></li>' . PHP_EOL
      . '   </ul>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Dropdown Options', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('autoclose')->h4('Auto Close Behavior')
      . $x->p('By default, the dropdown menu is closed when clicking inside or outside the dropdown menu. You can use the autoClose option to change this behavior of the dropdown.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $c = $x->secondary()->autoclose('true')->dropdown('Default dropdown');
    $p = $x->col()->adiv($c);

    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $c = $x->secondary()->autoclose('inside')->dropdown('Clickable outside');
    $p .= $x->col()->adiv($c);

    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $c = $x->secondary()->autoclose('outside')->dropdown('Clickable inside');
    $p .= $x->col()->adiv($c);

    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $x->ditem('Menu item', '#');
    $c = $x->secondary()->autoclose('false')->dropdown('Manual close');
    $p .= $x->col()->adiv($c);

    $p = $x->class('row')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('autoclose(')
      . $x->text('warning')->span("'true'")
      . $cp . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Default dropdown'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('autoclose(')
      . $x->text('warning')->span("'inside'")
      . $cp . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Clickable outside'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('autoclose(')
      . $x->text('warning')->span("'outside'")
      . $cp . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Clickable inside'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Menu item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('autoclose(')
      . $x->text('warning')->span("'false'")
      . $cp . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Manual close'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group">' . PHP_EOL
      . ' <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">' . PHP_EOL
      . '   Default dropdown' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu" aria-labelledby="defaultDropdown">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="btn-group">' . PHP_EOL
      . ' <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">' . PHP_EOL
      . '   Clickable outside' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="btn-group">' . PHP_EOL
      . ' <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">' . PHP_EOL
      . '   Clickable inside' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="btn-group">' . PHP_EOL
      . ' <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">' . PHP_EOL
      . '   Manual close' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable">' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . '   <li><a class="dropdown-item" href="#">Menu item</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Auto Close', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Dropdowns');
    $content .= $x->text('center')->lead('Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
