<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5ButtongroupController extends Controller
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
      . $x->p('Wrap a series of buttons with .btn in .btn-group.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->bgbtn('Left');
    $x->bgbtn('Middle');
    $x->bgbtn('Right');
    $p = $x->bgroup('Basic example');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'Left'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'Middle'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'Right'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('bgroup(')
      . $x->text('warning')->span("'Basic example'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group" role="group" aria-label="Basic example">' . PHP_EOL
      . ' <button type="button" class="btn btn-primary">Left</button>' . PHP_EOL
      . ' <button type="button" class="btn btn-primary">Middle</button>' . PHP_EOL
      . ' <button type="button" class="btn btn-primary">Right</button>' . PHP_EOL
      . '</div>' . PHP_EOL
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

    $p = $x->id('ensure')->h4('Ensure correct role and provide a label')
      . $x->p('In order for assistive technologies (such as screen readers) to convey that a series of buttons is grouped, an appropriate role attribute needs to be provided. For button groups, this would be role="group", while toolbars should have a role="toolbar".')
      . $x->p('In addition, groups and toolbars should be given an explicit label, as most assistive technologies will otherwise not announce them, despite the presence of the correct role attribute. In the examples provided here, we use aria-label, but alternatives such as aria-labelledby can also be used.')
      . $x->p('These classes can also be added to groups of links, as an alternative to the .nav navigation components.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->bgbtna('Active link');
    $x->bgbtna('link');
    $x->bgbtna('link');
    $p = $x->bgroup();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('bgbtna(')
      . $x->text('warning')->span("'Active link'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bgbtna(')
      . $x->text('warning')->span("'link'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bgbtna(')
      . $x->text('warning')->span("'link'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('bgroup()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group">' . PHP_EOL
      . ' <a href="#" class="btn btn-primary active" aria-current="page">Active link</a>' . PHP_EOL
      . ' <a href="#" class="btn btn-primary">Link</a>' . PHP_EOL
      . ' <a href="#" class="btn btn-primary">Link</a>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Basic Link Example', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('mixed')->h4('Mixed Styles');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->danger()->bgbtn('Left');
    $x->warning()->bgbtn('Middle');
    $x->success()->bgbtn('Right');
    $p = $x->bgroup('Basic mixed styles example');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'Left'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'Middle'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'Right'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('bgroup(')
      . $x->text('warning')->span("'Basic mixed styles example'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group" role="group" aria-label="Basic mixed styles example">' . PHP_EOL
      . ' <button type="button" class="btn btn-danger">Left</button>' . PHP_EOL
      . ' <button type="button" class="btn btn-warning">Middle</button>' . PHP_EOL
      . ' <button type="button" class="btn btn-success">Right</button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Mixed Styles', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('outlined')->h4('Outlined Styles');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->outline()->bgbtn('Left');
    $x->outline()->bgbtn('Middle');
    $x->outline()->bgbtn('Right');
    $p = $x->bgroup('Basic outlined example');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'Left'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'Middle'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'Right'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('bgroup(')
      . $x->text('warning')->span("'Basic outlined example'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group" role="group" aria-label="Basic outlined example">' . PHP_EOL
      . ' <button type="button" class="btn btn-outline-primary">Left</button>' . PHP_EOL
      . ' <button type="button" class="btn btn-outline-primary">Middle</button>' . PHP_EOL
      . ' <button type="button" class="btn btn-outline-primary">Right</button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Outlined Styles', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('checkboxandradio')->h4('Checkbox and radio button groups')
      . $x->p('Combine button-like checkbox and radio toggle buttons into a seamless looking button group.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->cbtn('check')->id('btncheck1')->autocomplete('off')->checkbox()
      . $x->cbtn()->cbtn('outline-primary')->for('btncheck1')->label('Checkbox 1')
      . $x->cbtn('check')->id('btncheck2')->autocomplete('off')->checkbox()
      . $x->cbtn()->cbtn('outline-primary')->for('btncheck2')->label('Checkbox 2')
      . $x->cbtn('check')->id('btncheck3')->autocomplete('off')->checkbox()
      . $x->cbtn()->cbtn('outline-primary')->for('btncheck3')->label('Checkbox 3');
    $p = $x->role('group')->bgroup('Basic checkbox toggle button group', $p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('checkboxes') . ' = '
      . $xx . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'check'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'btncheck1'")
      . $cp . '->' . $x->text('info')->span('autocomplete(')
      . $x->text('warning')->span("'off'")
      . $cp . '->' . $x->text('info')->span('checkbox()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text("info")->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'outline-primary'")
      . $cp . '->' . $x->text('info')->span('for(')
      . $x->text('info')->span("'btncheck1'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Checkbox 1'") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'check'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'btncheck2'")
      . $cp . '->' . $x->text('info')->span('autocomplete(')
      . $x->text('warning')->span("'off'")
      . $cp . '->' . $x->text('info')->span('checkbox()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text("info")->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'outline-primary'")
      . $cp . '->' . $x->text('info')->span('for(')
      . $x->text('info')->span("'btncheck2'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Checkbox 2'") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'check'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'btncheck3'")
      . $cp . '->' . $x->text('info')->span('autocomplete(')
      . $x->text('warning')->span("'off'")
      . $cp . '->' . $x->text('info')->span('checkbox()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text("info")->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'outline-primary'")
      . $cp . '->' . $x->text('info')->span('for(')
      . $x->text('info')->span("'btncheck3'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Checkbox 3'") . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('role(')
      . $x->text('warning')->span("'group'")
      . $cp . '->' . $x->text('info')->span('bgroup(')
      . $x->text('warning')->span("'Basic checkbox toggle button group'")
      . ', ' . $dollar . $x->text('danger')->span('checkboxes')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">' . PHP_EOL
      . ' <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">' . PHP_EOL
      . ' <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>' . PHP_EOL
      . PHP_EOL
      . ' <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">' . PHP_EOL
      . ' <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>' . PHP_EOL
      . PHP_EOL
      . ' <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">' . PHP_EOL
      . ' <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>' . PHP_EOL
      . '</div>' . PHP_EOL
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

    $p = $x->cbtn('check')->name('btnradio')->id('btnradio1')->autocomplete('off')->checked()->radio()
      . $x->cbtn()->cbtn('outline-primary')->for('btnradio1')->label('Radio 1')
      . $x->cbtn('check')->name('btnradio')->id('btnradio2')->autocomplete('off')->radio()
      . $x->cbtn()->cbtn('outline-primary')->for('btnradio2')->label('Radio 2')
      . $x->cbtn('check')->name('btnradio')->id('btnradio3')->autocomplete('off')->radio()
      . $x->cbtn()->cbtn('outline-primary')->for('btnradio3')->label('Radio 3');
    $p = $x->role('group')->bgroup('Basic radio toggle button group', $p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('radios') . ' = '
      . $xx . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span('check')
      . $cp . '->' . $x->text('info')->span('name(')
      . $x->text('warning')->span("'btnradio'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'btnradio1'")
      . $cp . '->' . $x->text('info')->span('autocomplete(')
      . $x->text('warning')->span("'off'")
      . $cp . '->' . $x->text('info')->span('checked()')
      . '->' . $x->text('info')->span('radio()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'outline-primary'")
      . $cp . '->' . $x->text('info')->span('for(')
      . $x->text('warning')->span("'btnradio1'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Radio 1'") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span('check')
      . $cp . '->' . $x->text('info')->span('name(')
      . $x->text('warning')->span("'btnradio'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'btnradio2'")
      . $cp . '->' . $x->text('info')->span('autocomplete(')
      . $x->text('warning')->span("'off'")
      . $cp . '->' . $x->text('info')->span('radio()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'outline-primary'")
      . $cp . '->' . $x->text('info')->span('for(')
      . $x->text('warning')->span("'btnradio2'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Radio 2'") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span('check')
      . $cp . '->' . $x->text('info')->span('name(')
      . $x->text('warning')->span("'btnradio'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'btnradio3'")
      . $cp . '->' . $x->text('info')->span('autocomplete(')
      . $x->text('warning')->span("'off'")
      . $cp . '->' . $x->text('info')->span('radio()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'outline-primary'")
      . $cp . '->' . $x->text('info')->span('for(')
      . $x->text('warning')->span("'btnradio3'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Radio 3'") . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('role(')
      . $x->text('warning')->span("'group'")
      . $cp . '->' . $x->text('info')->span('bgroup(')
      . $x->text('warning')->span("'Basic radio toggle button group', ")
      . $dollar . $x->text('danger')->span('radios')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group" role="group" aria-label="Basic radio toggle button group">' . PHP_EOL
      . ' <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>' . PHP_EOL
      . ' <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>' . PHP_EOL
      . PHP_EOL
      . ' <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">' . PHP_EOL
      . ' <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>' . PHP_EOL
      . PHP_EOL
      . ' <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">' . PHP_EOL
      . ' <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Radios', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('toolbar')->h4('Button Toolbar')
      . $x->p('Combine sets of button groups into button toolbars for more complex components. Use utility classes as needed to space out groups, buttons, and more.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->bgbtn(1);
    $x->bgbtn(2);
    $x->bgbtn(3);
    $x->bgbtn(4);
    $x->me(2)->tgroup('First group');

    $x->secondary()->bgbtn(5);
    $x->secondary()->bgbtn(6);
    $x->secondary()->bgbtn(7);
    $x->me(2)->tgroup('Second group');

    $x->info()->bgbtn(8);
    $x->tgroup('Thrid group');

    $p = $x->toolbar('Toolbar with button groups');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'1'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'2'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'3'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'4'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('tgroup(')
      . $x->text('warning')->span("'First group'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'5'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'6'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'7'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('tgroup(')
      . $x->text('warning')->span("'Second group'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('info()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'8'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('tgroup(')
      . $x->text('warning')->span("'Third group'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('toolbar(')
      . $x->text('warning')->span("'Toolbar with button groups'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">' . PHP_EOL
      . ' <div class="btn-group me-2" role="group" aria-label="First group">' . PHP_EOL
      . '   <button type="button" class="btn btn-primary">1</button>' . PHP_EOL
      . '   <button type="button" class="btn btn-primary">2</button>' . PHP_EOL
      . '   <button type="button" class="btn btn-primary">3</button>' . PHP_EOL
      . '   <button type="button" class="btn btn-primary">4</button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="btn-group me-2" role="group" aria-label="Second group">' . PHP_EOL
      . '   <button type="button" class="btn btn-secondary">5</button>' . PHP_EOL
      . '   <button type="button" class="btn btn-secondary">6</button>' . PHP_EOL
      . '   <button type="button" class="btn btn-secondary">7</button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="btn-group" role="group" aria-label="Third group">' . PHP_EOL
      . '   <button type="button" class="btn btn-info">8</button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Toolbar', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Feel free to mix input groups with button groups in your toolbars. Similar to the example above, you’ll likely need some utilities though to space things properly.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->outline()->secondary()->bgbtn(1);
    $x->outline()->secondary()->bgbtn(2);
    $x->outline()->secondary()->bgbtn(3);
    $x->outline()->secondary()->bgbtn(4);
    $x->me(2)->tgroup('First group');
    $p = $x->class('input-group-text')->id('btnGroupAddon')->adiv('@')
      . $x->type('text')->class('form-control')->placeholder('Input group example')->aria('label', 'Input group example')->aria('describedby', 'btnGroupAddon')->input();
    $p = $x->class('input-group')->adiv($p);
    $x->posthtml($p);
    $p = $x->mb(3)->toolbar('Toolbar with button groups');

    $x->outline()->secondary()->bgbtn(1);
    $x->outline()->secondary()->bgbtn(2);
    $x->outline()->secondary()->bgbtn(3);
    $x->outline()->secondary()->bgbtn(4);
    $x->me(2)->tgroup('First group');
    $c = $x->class('input-group-text')->id('btnGroupAddon')->adiv('@')
      . $x->type('text')->class('form-control')->placeholder('Input group example')->aria('label', 'Input group example')->aria('describedby', 'btnGroupAddon')->input();
    $c = $x->class('input-group')->adiv($c);
    $x->posthtml($c);
    $p .= $x->justify('content-between')->toolbar('Toolbar with button groups');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'1'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'2'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'3'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'4'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('tgroup(')
      . $x->text('warning')->span("'First group'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('input') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'input-group-text'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'btnGroupAddon'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'@'") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'text'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'Input group example'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Input group example'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'describedby', 'btnGroupAddon'")
      . $cp . '->' . $x->text('info')->span('input()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('input') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'input-group'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('input')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $dollar . $x->text('danger')->span('input')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('toolbar(')
      . $x->text('warning')->span("'Toolbar with button groups'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'1'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'2'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'3'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'4'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('tgroup(')
      . $x->text('warning')->span("'First group'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('input') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'input-group-text'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'btnGroupAddon'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'@'") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'text'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'Input group example'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Input group example'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'describedby', 'btnGroupAddon'")
      . $cp . '->' . $x->text('info')->span('input()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('input') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'input-group'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('input')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $dollar . $x->text('danger')->span('input')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-between'")
      . $cp . '->' . $x->text('info')->span('toolbar(')
      . $x->text('warning')->span("'Toolbar with button groups'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">' . PHP_EOL
      . ' <div class="btn-group me-2" role="group" aria-label="First group">' . PHP_EOL
      . '   <button type="button" class="btn btn-outline-secondary">1</button>' . PHP_EOL
      . '   <button type="button" class="btn btn-outline-secondary">2</button>' . PHP_EOL
      . '   <button type="button" class="btn btn-outline-secondary">3</button>' . PHP_EOL
      . '   <button type="button" class="btn btn-outline-secondary">4</button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="input-group">' . PHP_EOL
      . '   <div class="input-group-text" id="btnGroupAddon">@</div>' . PHP_EOL
      . '   <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">' . PHP_EOL
      . ' <div class="btn-group" role="group" aria-label="First group">' . PHP_EOL
      . '   <button type="button" class="btn btn-outline-secondary">1</button>' . PHP_EOL
      . '   <button type="button" class="btn btn-outline-secondary">2</button>' . PHP_EOL
      . '   <button type="button" class="btn btn-outline-secondary">3</button>' . PHP_EOL
      . '   <button type="button" class="btn btn-outline-secondary">4</button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="input-group">' . PHP_EOL
      . '   <div class="input-group-text" id="btnGroupAddon2">@</div>' . PHP_EOL
      . '   <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Toolbar - 2', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('sizing')->h4('Sizing')
      . $x->p('Instead of applying button sizing classes to every button in a group, just add .btn-group-* to each .btn-group, including each one when nesting multiple groups.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->outline()->secondary()->bgbtn('Left');
    $x->outline()->secondary()->bgbtn('Middle');
    $x->outline()->secondary()->bgbtn('Right');
    $p = $x->lg()->bgroup('Large button group');

    $p .= $br . $br;

    $x->outline()->secondary()->bgbtn('Left');
    $x->outline()->secondary()->bgbtn('Middle');
    $x->outline()->secondary()->bgbtn('Right');
    $p .= $x->bgroup('Default button group');

    $p .= $br . $br;

    $x->outline()->secondary()->bgbtn('Left');
    $x->outline()->secondary()->bgbtn('Middle');
    $x->outline()->secondary()->bgbtn('Right');
    $p .= $x->sm()->bgroup('Small button group');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = '...' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('bgroup(')
      . $x->text('warning')->span("'Large button group'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . '...' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bgroup(')
      . $x->text('warning')->span("'Defalut button group'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . '...' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('bgroup(')
      . $x->text('warning')->span("'Small button group'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group btn-group-lg" role="group" aria-label="...">...</div>' . PHP_EOL
      . '<div class="btn-group" role="group" aria-label="...">...</div>' . PHP_EOL
      . '<div class="btn-group btn-group-sm" role="group" aria-label="...">...</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Sizing', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('nesting')->h4('Nesting')
      . $x->p('Place a .btn-group within another .btn-group when you want dropdown menus mixed with a series of buttons.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Dropdown link', '#');
    $x->ditem('Dropdown link', '#');
    $p = $x->cbtn('group')->dropdown('Dropdown');

    $x->bgbtn(1);
    $x->bgbtn(2);
    $x->posthtml($p);
    $p = $x->bgroup('Button group with nested dropdown');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'1'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bgbtn(')
      . $x->text('warning')->span("'2'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Dropdown link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Dropdown link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('dropdown') . ' = '
      . $xx . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'group'")
      . $cp . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropdown'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $dollar . $x->text('danger')->span('dropdown')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('bgroup(')
      . $x->text('warning')->span("'Button group with nested dropdown'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group" role="group" aria-label="Button group with nested dropdown">' . PHP_EOL
      . ' <button type="button" class="btn btn-primary">1</button>' . PHP_EOL
      . ' <button type="button" class="btn btn-primary">2</button>' . PHP_EOL
      . PHP_EOL
      . ' <div class="btn-group" role="group">' . PHP_EOL
      . '   <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
      . '     Dropdown' . PHP_EOL
      . '   </button>' . PHP_EOL
      . '   <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Dropdown link</a></li>' . PHP_EOL
      . '     <li><a class="dropdown-item" href="#">Dropdown link</a></li>' . PHP_EOL
      . '   </ul>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Nesting', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('vertical')->h4('Vertical Variation')
      . $x->p('Make a set of buttons appear vertically stacked rather than horizontally. ' . $x->strong('Split button dropdowns are not supported here.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->dark()->bgbtn('Button');
    $x->dark()->bgbtn('Button');
    $x->dark()->bgbtn('Button');
    $x->dark()->bgbtn('Button');
    $x->dark()->bgbtn('Button');
    $x->dark()->bgbtn('Button');
    $p = $x->vertical()->bgroup('Vertical button group');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->bgbtn('Button');
    $x->bgbtn('Button');
    $x->ditem('Dropdown link', '#');
    $x->ditem('Dropdown link', '#');
    $x->save('btn', $x->cbtn('group')->dropdown('Dropdown'));
    $x->bgbtn('Button');
    $x->bgbtn('Button');
    $x->ditem('Dropdown link', '#');
    $x->ditem('Dropdown link', '#');
    $x->save('btn', $x->cbtn('group')->dropdown('Dropdown'));
    $x->ditem('Dropdown link', '#');
    $x->ditem('Dropdown link', '#');
    $x->save('btn', $x->cbtn('group')->dropdown('Dropdown'));
    $x->ditem('Dropdown link', '#');
    $x->ditem('Dropdown link', '#');
    $x->save('btn', $x->cbtn('group')->dropdown('Dropdown'));
    $p = $x->vertical()->bgroup('Vertical button group');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->cbtn('check')->name('vradio')->id('vradio1')->autocomplete('off')->checked()->radio()
      . $x->cbtn()->cbtn('outline-danger')->for('vradio1')->label('Radio 1')
      . $x->cbtn('check')->name('vradio')->id('vradio2')->autocomplete('off')->radio()
      . $x->cbtn()->cbtn('outline-danger')->for('vradio2')->label('Radio 2')
      . $x->cbtn('check')->name('vradio')->id('vradio3')->autocomplete('off')->radio()
      . $x->cbtn()->cbtn('outline-danger')->for('vradio3')->label('Radio 3');
    $p = $x->vertical()->role('group')->bgroup('Vertical radio toggle button group', $p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('vertical()')
      . '->' . $x->text('info')->span('bgroup(')
      . '...' . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="btn-group-vertical">' . PHP_EOL
      . ' ...' . PHP_EOL
      . '</div>' . PHP_EOL
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

    $content = $x->text('center')->h1('Button Group');
    $content .= $x->text('center')->lead('Group a series of buttons together on a single line or stack them in a vertical column.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
