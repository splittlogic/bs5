<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5ListgroupController extends Controller
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

    $p = $x->id('basic')->h4('Basic Example')
      . $x->p('The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.');
    $x->text('center')->div($p);
    $x->row();

    $x->litem('An item');
    $x->litem('A second item');
    $x->litem('A third item');
    $x->litem('A fourth item');
    $x->litem('And a fifth one');
    $p = $x->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'An item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A second item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A third item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A fourth item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'And a fifth item'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="list-group" style="max-width: 400px;">' . PHP_EOL
      . ' <li class="list-group-item">An item</li>' . PHP_EOL
      . ' <li class="list-group-item">A second item</li>' . PHP_EOL
      . ' <li class="list-group-item">A third item</li>' . PHP_EOL
      . ' <li class="list-group-item">A fourth item</li>' . PHP_EOL
      . ' <li class="list-group-item">And a fifth one</li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Basic Example', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('active')->h4('Active Items')
      . $x->p('Add .active to a .list-group-item to indicate the current active selection.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->litem('An item');
    $x->litem('A second item');
    $x->litem('A third item');
    $x->litem('A fourth item');
    $x->litem('And a fifth one');
    $p = $x->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'An item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A second item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A third item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A fourth item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'And a fifth item'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="list-group" style="max-width: 400px;">' . PHP_EOL
      . ' <li class="list-group-item active" aria-current="true">An item</li>' . PHP_EOL
      . ' <li class="list-group-item">A second item</li>' . PHP_EOL
      . ' <li class="list-group-item">A third item</li>' . PHP_EOL
      . ' <li class="list-group-item">A fourth item</li>' . PHP_EOL
      . ' <li class="list-group-item">And a fifth one</li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Active Items', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('disabled')->h4('Disabled Items')
      . $x->p('Add .disabled to a .list-group-item to make it appear disabled. Note that some elements with .disabled will also require custom JavaScript to fully disable their click events (e.g., links).');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->disabled()->litem('An item');
    $x->litem('A second item');
    $x->litem('A third item');
    $x->litem('A fourth item');
    $x->litem('And a fifth one');
    $p = $x->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'An item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A second item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A third item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A fourth item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'And a fifth item'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="list-group" style="max-width: 400px;">' . PHP_EOL
      . ' <li class="list-group-item disabled" aria-disabled="true">An item</li>' . PHP_EOL
      . ' <li class="list-group-item">A second item</li>' . PHP_EOL
      . ' <li class="list-group-item">A third item</li>' . PHP_EOL
      . ' <li class="list-group-item">A fourth item</li>' . PHP_EOL
      . ' <li class="list-group-item">And a fifth one</li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Disabled Items', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('linksandbuttons')->h4('Links and Buttons')
      . $x->p($x->htmlchar('Use <a>s or <button>s to create actionable list group items with hover, disabled, and active states by adding .list-group-item-action. We separate these pseudo-classes to ensure list groups made of non-interactive elements (like <li>s or <div>s) don’t provide a click or tap affordance.'))
      . $x->p('Be sure to ' . $x->strong('not use the standard') . ' .btn ' . $x->strong('classes here.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->litema('The current link item', '#');
    $x->litema('A second link item', '#');
    $x->litema('A third link item', '#');
    $x->litema('A fourth link item', '#');
    $x->disabled()->litema('A disabled link item');
    $p = $x->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'The current link item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A second link item', '#")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A third link item', '#")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A fourth link item', '#")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A disabled link item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="list-group" style="max-width: 400px;">' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action active" aria-current="true">' . PHP_EOL
      . '   The current link item' . PHP_EOL
      . ' </a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action">A second link item</a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action">A third link item</a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Links', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p($x->htmlchar('With <button>s, you can also make use of the disabled attribute instead of the .disabled class. Sadly, <a>s don’t support the disabled attribute.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->litemb('The current button');
    $x->litemb('A second item');
    $x->litemb('A third button item');
    $x->litemb('A fourth button item');
    $x->disabled()->litemb('A disabled button item');
    $p = $x->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('litemb(')
      . $x->text('warning')->span("'The current button'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litemb(')
      . $x->text('warning')->span("'A second item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litemb(')
      . $x->text('warning')->span("'A third button item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litemb(')
      . $x->text('warning')->span("'A fourth button item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('litemb(')
      . $x->text('warning')->span("'A disabled button item'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="list-group" style="max-width: 400px;">' . PHP_EOL
      . ' <button type="button" class="list-group-item list-group-item-action active" aria-current="true">' . PHP_EOL
      . '   The current button' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button type="button" class="list-group-item list-group-item-action">A second item</button>' . PHP_EOL
      . ' <button type="button" class="list-group-item list-group-item-action">A third button item</button>' . PHP_EOL
      . ' <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>' . PHP_EOL
      . ' <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Buttons', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('flush')->h4('Flush')
      . $x->p('Add .list-group-flush to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->litem('An item');
    $x->litem('A second item');
    $x->litem('A third item');
    $x->litem('A fourth item');
    $x->litem('And a fifth one');
    $p = $x->flush()->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'An item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A second item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A third item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A fourth item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'And a fifth one'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('flush()')
      . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="list-group list-group-flush" style="max-width: 400px;">' . PHP_EOL
      . ' <li class="list-group-item">An item</li>' . PHP_EOL
      . ' <li class="list-group-item">A second item</li>' . PHP_EOL
      . ' <li class="list-group-item">A third item</li>' . PHP_EOL
      . ' <li class="list-group-item">A fourth item</li>' . PHP_EOL
      . ' <li class="list-group-item">And a fifth one</li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Flush', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('numbered')->h4('Numbered')
      . $x->p($x->htmlchar('Add the .list-group-numbered modifier class (and optionally use an <ol> element) to opt into numbered list group items. Numbers are generated via CSS (as opposed to a <ol>s default browser styling) for better placement inside list group items and to allow for better customization.'))
      . $x->p($x->htmlchar('Numbers are generated by counter-reset on the <ol>, and then styled and placed with a ::before pseudo-element on the <li> with counter-increment and content.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->litem('Cras justo odio');
    $x->litem('Cras justo odio');
    $x->litem('Cras justo odio');
    $p = $x->numbered()->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'Cras justo odio'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'Cras justo odio'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'Cras justo odio'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('numbered()')
      . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ol class="list-group list-group-numbered" style="max-width: 400px;">' . PHP_EOL
      . ' <li class="list-group-item">Cras justo odio</li>' . PHP_EOL
      . ' <li class="list-group-item">Cras justo odio</li>' . PHP_EOL
      . ' <li class="list-group-item">Cras justo odio</li>' . PHP_EOL
      . '</ol>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Numbered', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('These work great with custom content as well.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->fw('bold')->adiv('Subheading') . 'Cras justo odio';
    $p = $x->ms(2)->me('auto')->adiv($p) . $x->bg('primary')->rounded('pill')->badge(14);
    $x->d('flex')->justify('content-between')->align('items-start')->litem($p);
    $x->d('flex')->justify('content-between')->align('items-start')->litem($p);
    $x->d('flex')->justify('content-between')->align('items-start')->litem($p);
    $p = $x->numbered()->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('item') . ' = '
      . $xx . '->' . $x->text('info')->span('fw(')
      . $x->text('warning')->span("'bold'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'Subheading'")
      . $cp . ' . ' . "'Cras justo odio'" . $colon
      . PHP_EOL
      . $dollar . $x->text("danger")->span('item') . ' = '
      . $xx . '->' . $x->text('info')->span('ms(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('item')
      . $cp . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $cp . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'14'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-between'")
      . $cp . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'items-start'")
      . $cp . '->' . $x->text('info')->span('litem(')
      . $dollar . $x->text('danger')->span('item')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-between'")
      . $cp . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'items-start'")
      . $cp . '->' . $x->text('info')->span('litem(')
      . $dollar . $x->text('danger')->span('item')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-between'")
      . $cp . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'items-start'")
      . $cp . '->' . $x->text('info')->span('litem(')
      . $dollar . $x->text('danger')->span('item')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('numbered()')
      . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ol class="list-group list-group-numbered" style="max-width: 400px;">' . PHP_EOL
      . ' <li class="list-group-item d-flex justify-content-between align-items-start">' . PHP_EOL
      . '   <div class="ms-2 me-auto">' . PHP_EOL
      . '     <div class="fw-bold">Subheading</div>' . PHP_EOL
      . '     Cras justo odio' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <span class="badge bg-primary rounded-pill">14</span>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="list-group-item d-flex justify-content-between align-items-start">' . PHP_EOL
      . '   <div class="ms-2 me-auto">' . PHP_EOL
      . '     <div class="fw-bold">Subheading</div>' . PHP_EOL
      . '     Cras justo odio' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <span class="badge bg-primary rounded-pill">14</span>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="list-group-item d-flex justify-content-between align-items-start">' . PHP_EOL
      . '   <div class="ms-2 me-auto">' . PHP_EOL
      . '     <div class="fw-bold">Subheading</div>' . PHP_EOL
      . '     Cras justo odio' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <span class="badge bg-primary rounded-pill">14</span>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ol>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Custom Numbered', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('horizontal')->h4('Horizontal')
      . $x->p('Add .list-group-horizontal to change the layout of list group items from vertical to horizontal across all breakpoints. Alternatively, choose a responsive variant .list-group-horizontal-{sm|md|lg|xl|xxl} to make a list group horizontal starting at that breakpoint’s min-width. Currently ' . $x->strong('horizontal list groups cannot be combined with flush list groups.'))
      . $x->p($x->strong('ProTip:') . ' Want equal-width list group items when horizontal? Add .flex-fill to each list group item.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $items = $x->class('list-group-item')->tag('li', 'An item')
      . $x->class('list-group-item')->tag('li', 'A second item')
      . $x->class('list-group-item')->tag('li', 'A third item');
    $p = $x->horizontal()->astyle('max-width: 400px;')->lgroup($items)
      . $x->sm()->horizontal()->astyle('max-width: 400px;')->lgroup($items)
      . $x->md()->horizontal()->astyle('max-width: 400px;')->lgroup($items)
      . $x->lg()->horizontal()->astyle('max-width: 400px;')->lgroup($items)
      . $x->xl()->horizontal()->astyle('max-width: 400px;')->lgroup($items)
      . $x->xxl()->horizontal()->astyle('max-width: 400px;')->lgroup($items);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('items') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'list-group-item'")
      . $cp . '->' . $x->text('info')->span('tag(')
      . $x->text('warning')->span("'li', 'An item'")
      . $cp
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'list-group-item'")
      . $cp . '->' . $x->text('info')->span('tag(')
      . $x->text('warning')->span("'li', 'A second item'")
      . $cp
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'list-group-item'")
      . $cp . '->' . $x->text('info')->span('tag(')
      . $x->text('warning')->span("'li', 'A third item'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('horizontal()')
      . '->' . $x->text('info')->span('lgroup(')
      . $dollar . $x->text('danger')->span('items')
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('horizontal()')
      . '->' . $x->text('info')->span('lgroup(')
      . $dollar . $x->text('danger')->span('items')
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('md()')
      . '->' . $x->text('info')->span('horizontal()')
      . '->' . $x->text('info')->span('lgroup(')
      . $dollar . $x->text('danger')->span('items')
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('horizontal()')
      . '->' . $x->text('info')->span('lgroup(')
      . $dollar . $x->text('danger')->span('items')
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('xl()')
      . '->' . $x->text('info')->span('horizontal()')
      . '->' . $x->text('info')->span('lgroup(')
      . $dollar . $x->text('danger')->span('items')
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('xxl()')
      . '->' . $x->text('info')->span('horizontal()')
      . '->' . $x->text('info')->span('lgroup(')
      . $dollar . $x->text('danger')->span('items')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="list-group list-group-horizontal" style="max-width: 400px;">' . PHP_EOL
      . ' <li class="list-group-item">An item</li>' . PHP_EOL
      . ' <li class="list-group-item">A second item</li>' . PHP_EOL
      . ' <li class="list-group-item">A third item</li>' . PHP_EOL
      . '</ul>' . PHP_EOL
      . '<ul class="list-group list-group-horizontal-sm">' . PHP_EOL
      . ' <li class="list-group-item">An item</li>' . PHP_EOL
      . ' <li class="list-group-item">A second item</li>' . PHP_EOL
      . ' <li class="list-group-item">A third item</li>' . PHP_EOL
      . '</ul>' . PHP_EOL
      . '<ul class="list-group list-group-horizontal-md">' . PHP_EOL
      . ' <li class="list-group-item">An item</li>' . PHP_EOL
      . ' <li class="list-group-item">A second item</li>' . PHP_EOL
      . ' <li class="list-group-item">A third item</li>' . PHP_EOL
      . '</ul>' . PHP_EOL
      . '<ul class="list-group list-group-horizontal-lg">' . PHP_EOL
      . ' <li class="list-group-item">An item</li>' . PHP_EOL
      . ' <li class="list-group-item">A second item</li>' . PHP_EOL
      . ' <li class="list-group-item">A third item</li>' . PHP_EOL
      . '</ul>' . PHP_EOL
      . '<ul class="list-group list-group-horizontal-xl">' . PHP_EOL
      . ' <li class="list-group-item">An item</li>' . PHP_EOL
      . ' <li class="list-group-item">A second item</li>' . PHP_EOL
      . ' <li class="list-group-item">A third item</li>' . PHP_EOL
      . '</ul>' . PHP_EOL
      . '<ul class="list-group list-group-horizontal-xxl">' . PHP_EOL
      . ' <li class="list-group-item">An item</li>' . PHP_EOL
      . ' <li class="list-group-item">A second item</li>' . PHP_EOL
      . ' <li class="list-group-item">A third item</li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Horizontal', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('contextual')->h4('Contextual Classes')
      . $x->p('Use contextual classes to style list items with a stateful background and color.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->litem('A simple default list group item');
    $x->primary()->litem('A simple primary list group item');
    $x->secondary()->litem('A simple secondary list group item');
    $x->success()->litem('A simple success list group item');
    $x->danger()->litem('A simple danger list group item');
    $x->warning()->litem('A simple warning list group item');
    $x->info()->litem('A simple info list group item');
    $x->light()->litem('A simple light list group item');
    $x->dark()->litem('A simple dark list group item');
    $p = $x->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A simple default list group item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A simple primary list group item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A simple secondary list group item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A simple success list group item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A simple danger list group item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A simple warning list group item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('info()')
      . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A simple info list group item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('light()')
      . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A simple light list group item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('dark()')
      . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A simple dark list group item'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="list-group" style="max-width: 400px;">' . PHP_EOL
      . ' <li class="list-group-item">A simple default list group item</li>' . PHP_EOL
      . ' <li class="list-group-item list-group-item-primary">A simple primary list group item</li>' . PHP_EOL
      . ' <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>' . PHP_EOL
      . ' <li class="list-group-item list-group-item-success">A simple success list group item</li>' . PHP_EOL
      . ' <li class="list-group-item list-group-item-danger">A simple danger list group item</li>' . PHP_EOL
      . ' <li class="list-group-item list-group-item-warning">A simple warning list group item</li>' . PHP_EOL
      . ' <li class="list-group-item list-group-item-info">A simple info list group item</li>' . PHP_EOL
      . ' <li class="list-group-item list-group-item-light">A simple light list group item</li>' . PHP_EOL
      . ' <li class="list-group-item list-group-item-dark">A simple dark list group item</li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Contextual', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Contextual classes also work with .list-group-item-action. Note the addition of the hover styles here not present in the previous example. Also supported is the .active state; apply it to indicate an active selection on a contextual list group item.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->litema('A simple default list group item', '#');
    $x->primary()->litema('A simple primary list group item', '#');
    $x->secondary()->litema('A simple secondary list group item', '#');
    $x->success()->litema('A simple success list group item', '#');
    $x->danger()->litema('A simple danger list group item', '#');
    $x->warning()->litema('A simple warning list group item', '#');
    $x->info()->litema('A simple info list group item', '#');
    $x->light()->litema('A simple light list group item', '#');
    $x->dark()->litema('A simple dark list group item', '#');
    $p = $x->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A simple default list group item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A simple primary list group item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A simple secondary list group item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A simple success list group item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A simple danger list group item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A simple warning list group item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('info()')
      . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A simple info list group item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('light()')
      . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A simple light list group item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('dark()')
      . '->' . $x->text('info')->span('litema(')
      . $x->text('warning')->span("'A simple dark list group item', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="list-group" style="max-width: 400px;">' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Contextual Links', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('conveying')->h4('Conveying meaning to assistive technologies')
      . $x->p('Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the .visually-hidden class.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('badges')->h4('With Badges')
      . $x->p('Add badges to any list group item to show unread counts, activity, and more with the help of some utilities.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->primary()->rounded('pill')->badge(14);
    $x->d('flex')->justify('content-between')->align('items-center')->litem('A list item' . $p);

    $p = $x->primary()->rounded('pill')->badge(2);
    $x->d('flex')->justify('content-between')->align('items-center')->litem('A second list item' . $p);

    $p = $x->primary()->rounded('pill')->badge(1);
    $x->d('flex')->justify('content-between')->align('items-center')->litem('A third list item' . $p);

    $p = $x->astyle('max-width: 400px;')->lgroup();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('badge') . ' = '
      . $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $cp . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'14'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-between'")
      . $cp . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'items-center'")
      . $cp . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A list item'")
      . ' . ' . $dollar . $x->text('danger')->span('badge')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('badge') . ' = '
      . $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $cp . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'2'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-between'")
      . $cp . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'items-center'")
      . $cp . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A second list item'")
      . ' . ' . $dollar . $x->text('danger')->span('badge')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('badge') . ' = '
      . $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $cp . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'1'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-between'")
      . $cp . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'items-center'")
      . $cp . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A third list item'")
      . ' . ' . $dollar . $x->text('danger')->span('badge')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="list-group" style="max-width: 400px;">' . PHP_EOL
      . ' <li class="list-group-item d-flex justify-content-between align-items-center">' . PHP_EOL
      . '   A list item' . PHP_EOL
      . '   <span class="badge bg-primary rounded-pill">14</span>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="list-group-item d-flex justify-content-between align-items-center">' . PHP_EOL
      . '   A second list item' . PHP_EOL
      . '   <span class="badge bg-primary rounded-pill">2</span>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="list-group-item d-flex justify-content-between align-items-center">' . PHP_EOL
      . '   A third list item' . PHP_EOL
      . '   <span class="badge bg-primary rounded-pill">1</span>' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'With Badges', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('custom')->h4('Custom Content')
      . $x->p('Add nearly any HTML within, even for linked list groups like the one below, with the help of flexbox utilities.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $div = $x->mb(1)->h5('List group item heading')
      . $x->small('3 days ago');
    $div = $x->d('flex')->w(100)->justify('content-between')->adiv($div)
      . $x->mb(1)->p('Some placeholder content in a paragraph.')
      . $x->small('And some small print.');
    $x->active()->litema($div, '#');

    $div = $x->mb(1)->h5('List group item heading')
      . $x->text('muted')->small('3 days ago');
    $div = $x->d('flex')->w(100)->justify('content-between')->adiv($div)
      . $x->mb(1)->p('Some placeholder content in a paragraph.')
      . $x->text('muted')->small('And some muted small print.');
    $x->litema($div, '#');

    $div = $x->mb(1)->h5('List group item heading')
      . $x->text('muted')->small('3 days ago');
    $div = $x->d('flex')->w(100)->justify('content-between')->adiv($div)
      . $x->mb(1)->p('Some placeholder content in a paragraph.')
      . $x->text('muted')->small('And some muted small print.');
    $x->litema($div, '#');

    $p = $x->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'1'")
      . $cp . '->' . $x->text('info')->span('h5(')
      . $x->text('warning')->span("'List group item heading'")
      . $cp
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span("'3 days ago'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('w(')
      . $x->text('warning')->span("'100'")
      . $cp . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-between'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('div') . $cp
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'1'")
      . $cp . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'Some placeholder content in a paragraph.'") . $cp
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span("'And some small print.'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('litema(')
      . $dollar . $x->text('danger')->span('div')
      . ', ' . $x->text('warning')->span("'#'") . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'1'")
      . $cp . '->' . $x->text('info')->span('h5(')
      . $x->text('warning')->span("'List group item heading'")
      . $cp
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp  . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span("'3 days ago'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('w(')
      . $x->text('warning')->span("'100'")
      . $cp . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-between'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('div') . $cp
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'1'")
      . $cp . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'Some placeholder content in a paragraph.'") . $cp
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span("'And some muted small print.'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litema(')
      . $dollar . $x->text('danger')->span('div')
      . ', ' . $x->text('warning')->span("'#'") . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'1'")
      . $cp . '->' . $x->text('info')->span('h5(')
      . $x->text('warning')->span("'List group item heading'")
      . $cp
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp  . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span("'3 days ago'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('w(')
      . $x->text('warning')->span("'100'")
      . $cp . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-between'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('div') . $cp
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'1'")
      . $cp . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'Some placeholder content in a paragraph.'") . $cp
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span("'And some muted small print.'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litema(')
      . $dollar . $x->text('danger')->span('div')
      . ', ' . $x->text('warning')->span("'#'") . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="list-group" style="max-width: 400px;">' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action active" aria-current="true">' . PHP_EOL
      . '   <div class="d-flex w-100 justify-content-between">' . PHP_EOL
      . '     <h5 class="mb-1">List group item heading</h5>' . PHP_EOL
      . '     <small>3 days ago</small>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <p class="mb-1">Some placeholder content in a paragraph.</p>' . PHP_EOL
      . '   <small>And some small print.</small>' . PHP_EOL
      . ' </a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action">' . PHP_EOL
      . '   <div class="d-flex w-100 justify-content-between">' . PHP_EOL
      . '     <h5 class="mb-1">List group item heading</h5>' . PHP_EOL
      . '     <small class="text-muted">3 days ago</small>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <p class="mb-1">Some placeholder content in a paragraph.</p>' . PHP_EOL
      . '   <small class="text-muted">And some muted small print.</small>' . PHP_EOL
      . ' </a>' . PHP_EOL
      . ' <a href="#" class="list-group-item list-group-item-action">' . PHP_EOL
      . '   <div class="d-flex w-100 justify-content-between">' . PHP_EOL
      . '     <h5 class="mb-1">List group item heading</h5>' . PHP_EOL
      . '     <small class="text-muted">3 days ago</small>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <p class="mb-1">Some placeholder content in a paragraph.</p>' . PHP_EOL
      . '   <small class="text-muted">And some muted small print.</small>' . PHP_EOL
      . ' </a>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Custom Content', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('checkboxes')->h4('Checkboxes and Radios')
      . $x->p($x->htmlchar('Place Bootstrap’s checkboxes and radios within list group items and customize as needed. You can use them without <label>s, but please remember to include an aria-label attribute and value for accessibility.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->class('form-check-input')->me(1)->value(' ')->aria('label', '...')->checkbox();
    $x->litem($c . ' First checkbox');
    $x->litem($c . ' Second checkbox');
    $x->litem($c . ' Third checkbox');
    $x->litem($c . ' Fourth checkbox');
    $x->litem($c . ' Fifth checkbox');

    $p = $x->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('input') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-check-input'")
      . $cp . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'1'")
      . $cp . '->' . $x->text('info')->span('value(')
      . $x->text('warning')->span("' '")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', '...'")
      . $cp . '->' . $x->text('info')->span('checkbox()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $dollar . $x->text('danger')->span('input')
      . ' . '
      . $x->text('warning')->span("'First checkbox'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $dollar . $x->text('danger')->span('input')
      . ' . '
      . $x->text('warning')->span("'Second checkbox'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $dollar . $x->text('danger')->span('input')
      . ' . '
      . $x->text('warning')->span("'Third checkbox'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $dollar . $x->text('danger')->span('input')
      . ' . '
      . $x->text('warning')->span("'Fourth checkbox'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $dollar . $x->text('danger')->span('input')
      . ' . '
      . $x->text('warning')->span("'Fifth checkbox'") . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<ul class="list-group">' . PHP_EOL
      . ' <li class="list-group-item">' . PHP_EOL
      . '   <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">' . PHP_EOL
      . '   First checkbox' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="list-group-item">' . PHP_EOL
      . '   <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">' . PHP_EOL
      . '   Second checkbox' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="list-group-item">' . PHP_EOL
      . '   <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">' . PHP_EOL
      . '   Third checkbox' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="list-group-item">' . PHP_EOL
      . '   <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">' . PHP_EOL
      . '   Fourth checkbox' . PHP_EOL
      . ' </li>' . PHP_EOL
      . ' <li class="list-group-item">' . PHP_EOL
      . '   <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">' . PHP_EOL
      . '   Fifth checkbox' . PHP_EOL
      . ' </li>' . PHP_EOL
      . '</ul>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Checkboxes', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('checkboxlabel')->p($x->htmlchar('And if you want <label>s as the .list-group-item for large hit areas, you can do that, too.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->liteml($c . ' First checkbox');
    $x->liteml($c . ' Second checkbox');
    $x->liteml($c . ' Third checkbox');
    $x->liteml($c . ' Fourth checkbox');
    $x->liteml($c . ' Fifth checkbox');
    $p = $x->astyle('max-width: 400px;')->lgroup();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('input') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-check-input'")
      . $cp . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'1'")
      . $cp . '->' . $x->text('info')->span('value(')
      . $x->text('warning')->span("' '")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', '...'")
      . $cp . '->' . $x->text('info')->span('checkbox()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('liteml(')
      . $dollar . $x->text('danger')->span('input')
      . ' . '
      . $x->text('warning')->span("'First checkbox'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('liteml(')
      . $dollar . $x->text('danger')->span('input')
      . ' . '
      . $x->text('warning')->span("'Second checkbox'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('liteml(')
      . $dollar . $x->text('danger')->span('input')
      . ' . '
      . $x->text('warning')->span("'Third checkbox'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('liteml(')
      . $dollar . $x->text('danger')->span('input')
      . ' . '
      . $x->text('warning')->span("'Fourth checkbox'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('liteml(')
      . $dollar . $x->text('danger')->span('input')
      . ' . '
      . $x->text('warning')->span("'Fifth checkbox'") . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 400px;'")
      . $cp . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="list-group">' . PHP_EOL
      . ' <label class="list-group-item">' . PHP_EOL
      . '   <input class="form-check-input me-1" type="checkbox" value="">' . PHP_EOL
      . '   First checkbox' . PHP_EOL
      . ' </label>' . PHP_EOL
      . ' <label class="list-group-item">' . PHP_EOL
      . '   <input class="form-check-input me-1" type="checkbox" value="">' . PHP_EOL
      . '   Second checkbox' . PHP_EOL
      . ' </label>' . PHP_EOL
      . ' <label class="list-group-item">' . PHP_EOL
      . '   <input class="form-check-input me-1" type="checkbox" value="">' . PHP_EOL
      . '   Third checkbox' . PHP_EOL
      . ' </label>' . PHP_EOL
      . ' <label class="list-group-item">' . PHP_EOL
      . '   <input class="form-check-input me-1" type="checkbox" value="">' . PHP_EOL
      . '   Fourth checkbox' . PHP_EOL
      . ' </label>' . PHP_EOL
      . ' <label class="list-group-item">' . PHP_EOL
      . '   <input class="form-check-input me-1" type="checkbox" value="">' . PHP_EOL
      . '   Fifth checkbox' . PHP_EOL
      . ' </label>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Labels', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('List Group');
    $content .= $x->text('center')->lead('List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
