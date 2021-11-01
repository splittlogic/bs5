<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5StartController extends Controller
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

    if ($page == 'html')
    {

      $p = 'This package is built on top of '
        . $x->target()->a('Splittlogic/html', route('splittlogic.html'))
        . '. Make sure to review the how-to guide to understand how use.';
      $x->col()->text('center')->div($p);
      $x->row();

      $make = $x->code('make()');
      $p = $br . $x->p(
        'Any element can be called as an instance or statically (Must use the '
        . $make
        . ' function as the first function called):'
      );
      $x->col()->text('center')->div($p);
      $x->row();

      // Instance
      $in = $dollar
        . $x->class('text-danger')->span('x')
        . ' = new '
        . $html
        . $colon
        . PHP_EOL
        . $dollar
        . $x->class('text-danger')->span('content')
        . ' = '
        . $dollar
        . $x->class('text-danger')->span('x')
        . '->'
        . $x->class('text-info')->span('a(') . "'http://link/to/page'"
        . $x->class('text-info')->span(')')
        . $colon;

      $in = $x->pre($in);
      $in = $x->code($in);
      $in = $x->aboutHtmlCard(
        'Instance:', null, $in
      );

      // Static
      $st = $dollar
        . $x->class('text-danger')->span('content')
        . ' = '
        . $html
        . '::'
        . $make
        . '->'
        . $x->class('text-info')->span('a(') . "'http://link/to/page'"
        . $x->class('text-info')->span(')')
        . $colon;

      $st = $x->pre($st);
      $st = $x->code($st);
      $st = $x->aboutHtmlCard(
        'Static:', null, $st
      );

      $x->col(5)->div($in);
      $x->col(2)->div();
      $x->col(5)->div($st);
      $x->row();

      $x->col()->id('blade')->div($br . '<hr>'. $br);
      $x->row();

      $x->col()->div($x->text('center')->h4('Blade'));
      $x->row();

      $p = $x->p('A built-in blank blade template can be called from any controller:');
      $x->col()->text('center')->div($p);
      $x->row();

      $v = 'return '
        . $x->class('text-info')->span('view(')
        . $x->class('text-warning')->span("'bs5::blank'")
        . $x->class('text-light')->span(',')
        . $x->class('text-warning')->span("['content'")
        . " =>"
        . $x->class('text-warning')->span(' $content]')
        . $x->class('text-info')->span(')')
        . $colon;

      $v = $x->pre($v);
      $v = $x->code($v);
      $v = $x->aboutHtmlCard(
        'View:', null, $v
      );
      $x->col(3)->div();
      $x->col(6)->div($v);
      $x->col(3)->div();
      $x->row();

      $p = $br . $x->p('To utilize Bootstrap the head element needs to have meta, css, and js set:');
      $x->col()->text('center')->div($p);
      $x->row();

      $p = $xx
        . '->'
        . $x->class('text-info')->span('charset(')
        . $x->class('text-warning')->span("'utf-8'")
        . $x->class('text-info')->span(')')
        . '->'
        . $x->class('text-info')->span('meta()') . $colon . PHP_EOL
        . $xx . '->'
        . $x->class('text-info')->span('name(')
        . $x->class('text-warning')->span("'viewport'")
        . $x->class('text-info')->span(')')
        . '->' . $x->class('text-info')->span('acontent(')
        . $x->class('text-warning')->span("'width=device-width, initial-scale=1'")
        . $x->class('text-info')->span(')')
        . '->'
        . $x->class('text-info')->span('meta()') . $colon . PHP_EOL
        . PHP_EOL
        . $xx . '->'
        . $x->class('text-info')->span('css(')
        . $x->class('text-success')->span('asset(')
        . $x->class('text-warning')->span("'vendor/splittlogic/css/bootstrap.min.css'")
        . $x->class('text-success')->span(')')
        . $x->class('text-info')->span(')') . $colon . PHP_EOL
        . $xx . '->'
        . $x->class('text-info')->span('js(')
        . $x->class('text-success')->span('asset(')
        . $x->class('text-warning')->span("'vendor/splittlogic/js/bootstrap.bundle.min.js'")
        . $x->class('text-success')->span(')')
        . $x->class('text-info')->span(')') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Head Settings:', null, $p
      );
      $x->col(2)->div();
      $x->col(8)->div($p);
      $x->col(2)->div();
      $x->row();

      $p = $br . $x->p('When calling head element and body attributes in a custom blade template, it is recommended using the original html call than the bs5:');
      $x->col()->text('center')->div($p);
      $x->row();

      $p = $bladeOpen
        . $x->text('warning')->span('html')
        . '::'
        . $x->text('info')->span('head()')
        . $bladeClose;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Blade - Head:', null, $p
      );
      $x->col(4)->div();
      $x->col(4)->div($p);
      $x->col(4)->div();
      $x->row();

      $x->col()->div($br);
      $x->row();

      $p = $x->htmlchar('<body')
        . $bladeOpen
        . $x->text('warning')->span('html')
        . '::'
        . $x->text('info')->span('getBodyAttributes()')
        . $bladeClose
        . '>';
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Blade - Body Attribute:', null, $p
      );
      $x->col(4)->div();
      $x->col(4)->div($p);
      $x->col(4)->div();
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5');
      $content .= $x->text('center')->lead('Laravel Bootstrap 5 component/element generator');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'grid') {

      $p = $x->p('Calling the col() function before a div() function will set the div class to be ...class="col"...');
      $x->col()->text('center')->div($p);
      $x->row();
      $p = $dollar . $x->text('danger')->span('content')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->htmlchar('<div class="col">...</div>');
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Bootstrap Column Class:', null, $p
      );
      $x->col()->div();
      $x->col(4)->div($p);
      $x->col()->div();
      $x->row();

      $p = $br . $x->p('Calling the col() function with a value will set the Bootstrap col class with given value:');
      $x->col()->text('center')->div($p);
      $x->row();
      $p = $dollar . $x->text('danger')->span('content')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->htmlchar('<div class="col-4">...</div>')
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-5'")
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->htmlchar('<div class="col-md-5">...</div>');
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Bootstrap Column Class with Value:', null, $p
      );
      $x->col()->div();
      $x->col(4)->div($p);
      $x->col()->div();
      $x->row();

      $p = $br . $x->p('When calling the div() function, it will be saved until the row() function is called.  The row() function will wrap all previous created div() elements in a div with a Bootstrap row class.');
      $x->col()->text('center')->div($p);
      $x->row();
      $p = $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('row()')
        . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->htmlchar('<div class="row">') . PHP_EOL
        . $x->htmlchar(' <div class="col">...</div>') . PHP_EOL
        . $x->htmlchar(' <div class="col">...</div>') . PHP_EOL
        . $x->htmlchar(' <div class="col">...</div>') . PHP_EOL
        . $x->htmlchar('</div>');
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Div() & Row():', null, $p
      );
      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $p = $br . $x->p('When calling the row() function, it will be save until the contanier() function is called.  The container() function will wrap all previous row() elements in a div with a Bootstrap container class.');
      $x->col()->text('center')->div($p);
      $x->row();

      $p = $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('row()')
        . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('row()')
        . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->'
        . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('row()')
        . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('container()')
        . PHP_EOL
        . PHP_EOL
        . $x->htmlchar('<div class="container">') . PHP_EOL
        . $x->htmlchar('  <div class="row">') . PHP_EOL
        . $x->htmlchar('    <div class="col">...</div>') . PHP_EOL
        . $x->htmlchar('    <div class="col">...</div>') . PHP_EOL
        . $x->htmlchar('    <div class="col">...</div>') . PHP_EOL
        . $x->htmlchar('  </div>') . PHP_EOL
        . $x->htmlchar('  <div class="row">') . PHP_EOL
        . $x->htmlchar('    <div class="col">...</div>') . PHP_EOL
        . $x->htmlchar('    <div class="col">...</div>') . PHP_EOL
        . $x->htmlchar('    <div class="col">...</div>') . PHP_EOL
        . $x->htmlchar('  </div>') . PHP_EOL
        . $x->htmlchar('  <div class="row">') . PHP_EOL
        . $x->htmlchar('    <div class="col">...</div>') . PHP_EOL
        . $x->htmlchar('    <div class="col">...</div>') . PHP_EOL
        . $x->htmlchar('    <div class="col">...</div>') . PHP_EOL
        . $x->htmlchar('  </div>') . PHP_EOL
        . $x->htmlchar('</div>')
        . PHP_EOL
        . PHP_EOL
        . 'Note: A fluid container can be created by calling the' . PHP_EOL
        . 'fluid() function with the container() function:' . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('fluid()')
        . '->'
        . $x->text('info')->span('container()');
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Row() & Container():', null, $p
      );
      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->id('examples')->div($br . '<hr>'. $br);
      $x->row();

      $x->col()->div($x->text('center')->h4('Examples'));
      $x->row();

      $x->col()->div($br);
      $x->row();

      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $p = $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('div()')
        . $colon
        . PHP_EOL
        . $xx
        . '->'
        . $x->text('info')->span('row()') . PHP_EOL
        . $dollar
        . $x->text('danger')->span('content')
        . ' = '
        . $xx . '->'
        . $x->text('info')->span('container()')
        . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '12 x 1 Columns', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $x->bg('light')->class('card p-2')->text('center')->col(2)->div('col-2');
      $x->bg('light')->class('card p-2')->text('center')->col(2)->div('col-2');
      $x->bg('light')->class('card p-2')->text('center')->col(2)->div('col-2');
      $x->bg('light')->class('card p-2')->text('center')->col(2)->div('col-2');
      $x->bg('light')->class('card p-2')->text('center')->col(2)->div('col-2');
      $x->bg('light')->class('card p-2')->text('center')->col(2)->div('col-2');
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $p = $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('2')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('2')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('2')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('2')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('2')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('2')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx
      . '->'
      . $x->text('info')->span('row()') . PHP_EOL
      . $dollar
      . $x->text('danger')->span('content')
      . ' = '
      . $xx . '->'
      . $x->text('info')->span('container()')
      . $colon;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '6 x 2 Columns', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $x->bg('light')->class('card p-2')->text('center')->col(3)->div('col-3');
      $x->bg('light')->class('card p-2')->text('center')->col(3)->div('col-3');
      $x->bg('light')->class('card p-2')->text('center')->col(3)->div('col-3');
      $x->bg('light')->class('card p-2')->text('center')->col(3)->div('col-3');
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $p = $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('3')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('3')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('3')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('3')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx
      . '->'
      . $x->text('info')->span('row()') . PHP_EOL
      . $dollar
      . $x->text('danger')->span('content')
      . ' = '
      . $xx . '->'
      . $x->text('info')->span('container()')
      . $colon;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '4 x 3 Columns', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $x->bg('light')->class('card p-2')->text('center')->col(4)->div('col-4');
      $x->bg('light')->class('card p-2')->text('center')->col(4)->div('col-4');
      $x->bg('light')->class('card p-2')->text('center')->col(4)->div('col-4');
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $p = $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('4')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('4')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('4')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx
      . '->'
      . $x->text('info')->span('row()') . PHP_EOL
      . $dollar
      . $x->text('danger')->span('content')
      . ' = '
      . $xx . '->'
      . $x->text('info')->span('container()')
      . $colon;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '3 x 4 Columns', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $x->bg('light')->class('card p-2')->text('center')->col(5)->div('col-5');
      $x->bg('light')->class('card p-2')->text('center')->col(2)->div('col-2');
      $x->bg('light')->class('card p-2')->text('center')->col(5)->div('col-5');
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $p = $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('5')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('2')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('5')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx
      . '->'
      . $x->text('info')->span('row()') . PHP_EOL
      . $dollar
      . $x->text('danger')->span('content')
      . ' = '
      . $xx . '->'
      . $x->text('info')->span('container()')
      . $colon;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '2 x 5 Columns & 1 x 2 Column', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $x->bg('light')->class('card p-2')->text('center')->col(6)->div('col-6');
      $x->bg('light')->class('card p-2')->text('center')->col(6)->div('col-6');
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $p = $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('6')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('6')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx
      . '->'
      . $x->text('info')->span('row()') . PHP_EOL
      . $dollar
      . $x->text('danger')->span('content')
      . ' = '
      . $xx . '->'
      . $x->text('info')->span('container()')
      . $colon;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '2 x 6 Columns', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $x->bg('light')->class('card p-2')->text('center')->col(7)->div('col-7');
      $x->bg('light')->class('card p-2')->text('center')->col(5)->div('col-5');
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $p = $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('7')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('5')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx
      . '->'
      . $x->text('info')->span('row()') . PHP_EOL
      . $dollar
      . $x->text('danger')->span('content')
      . ' = '
      . $xx . '->'
      . $x->text('info')->span('container()')
      . $colon;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '7 & 5 Columns', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $x->bg('light')->class('card p-2')->text('center')->col(8)->div('col-8');
      $x->bg('light')->class('card p-2')->text('center')->col(4)->div('col-4');
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $p = $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('8')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('4')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx
      . '->'
      . $x->text('info')->span('row()') . PHP_EOL
      . $dollar
      . $x->text('danger')->span('content')
      . ' = '
      . $xx . '->'
      . $x->text('info')->span('container()')
      . $colon;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '8 & 4 Columns', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $x->bg('light')->class('card p-2')->text('center')->col(9)->div('col-9');
      $x->bg('light')->class('card p-2')->text('center')->col(3)->div('col-3');
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $p = $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('9')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('3')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx
      . '->'
      . $x->text('info')->span('row()') . PHP_EOL
      . $dollar
      . $x->text('danger')->span('content')
      . ' = '
      . $xx . '->'
      . $x->text('info')->span('container()')
      . $colon;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '9 & 3 Columns', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $x->bg('light')->class('card p-2')->text('center')->col(10)->div('col-10');
      $x->bg('light')->class('card p-2')->text('center')->col(2)->div('col-2');
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $p = $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('10')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('2')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx
      . '->'
      . $x->text('info')->span('row()') . PHP_EOL
      . $dollar
      . $x->text('danger')->span('content')
      . ' = '
      . $xx . '->'
      . $x->text('info')->span('container()')
      . $colon;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '10 & 2 Columns', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $x->bg('light')->class('card p-2')->text('center')->col(11)->div('col-11');
      $x->bg('light')->class('card p-2')->text('center')->col(1)->div('col-1');
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $p = $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('11')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('1')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx
      . '->'
      . $x->text('info')->span('row()') . PHP_EOL
      . $dollar
      . $x->text('danger')->span('content')
      . ' = '
      . $xx . '->'
      . $x->text('info')->span('container()')
      . $colon;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '11 & 1 Columns', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $x->bg('light')->class('card p-2')->text('center')->col(12)->div('col-12');
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $p = $xx . '->'
      . $x->text('info')->span('col(')
      . $x->text('warning')->span('12')
      . $x->text('info')->span(')')
      . '->'
      . $x->text('info')->span('div()')
      . $colon
      . PHP_EOL
      . $xx
      . '->'
      . $x->text('info')->span('row()') . PHP_EOL
      . $dollar
      . $x->text('danger')->span('content')
      . ' = '
      . $xx . '->'
      . $x->text('info')->span('container()')
      . $colon;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '12 Column', null, $p
      );

      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Grid');
      $content .= $x->text('center')->lead('Utilizing col(), div(), row(), and container() to build Bootstrap/Flex grid');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'columns') {

      $p = $x->id('vertical')->h4('Vertical Alignment');
      $x->text('center')->div($p);
      $x->row();

      $div = $x->col()->border()->border('secondary')->adiv('One of three columns');
      $p = $x->gx(3)
        ->bg('light')
        ->align('items-start')
        ->border('primary')
        ->class('row p-2')
        ->astyle('min-height: 10rem;')
        ->adiv($div . $div . $div);
      $p .= $x->gx(3)
        ->bg('light')
        ->align('items-center')
        ->border('success')
        ->class('row p-2')
        ->astyle('min-height: 10rem;')
        ->adiv($div . $div . $div);
      $p .= $x->gx(3)
        ->bg('light')
        ->align('items-end')
        ->border('danger')
        ->class('row p-2')
        ->astyle('min-height: 10rem;')
        ->adiv($div . $div . $div);
      $p = $x->class('container d-grid gap-3')->adiv($p);

      $x->class('card p-3')->div($p);
      $x->row();

      $p = $xx . '->'
        . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of three columns'")
        . $x->text('info')->span(');')
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of three columns'")
        . $x->text('info')->span(');')
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of three columns'")
        . $x->text('info')->span(');')
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('align(')
        . $x->text('warning')->span("'items-start'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row();')
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of three columns'")
        . $x->text('info')->span(');')
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of three columns'")
        . $x->text('info')->span(');')
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of three columns'")
        . $x->text('info')->span(');')
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('align(')
        . $x->text('warning')->span("'items-center'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row();')
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of three columns'")
        . $x->text('info')->span(');')
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of three columns'")
        . $x->text('info')->span(');')
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of three columns'")
        . $x->text('info')->span(');')
        . PHP_EOL
        . $xx . '->'
        . $x->text('info')->span('align(')
        . $x->text('warning')->span("'items-end'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row();')
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->' . $x->text('info')->span('container()')
        . $colon;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Items', null, $p
      );
      $x->col()->div();
      $x->col(5)->div($br . $p . $br);
      $x->col()->div();
      $x->row();

      $div1 = $x->col()->align('self-start')->border()->border('primary')->adiv('One of three columns');
      $div2 = $x->col()->align('self-center')->border()->border('success')->adiv('One of three columns');
      $div3 = $x->col()->align('self-end')->border()->border('danger')->adiv('One of three columns');
      $p = $x->gx(3)
        ->bg('light')
        ->align('items-start')
        ->class('row p-2')
        ->astyle('min-height: 10rem;')
        ->adiv($div1 . $div2 . $div3);
      $p = $x->class('container')->adiv($p);

      $x->class('card p-3')->div($p . $br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'self-start'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of three columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'self-center'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of three columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'self-end'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of three columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()')
        . $colon . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->' . $x->text('info')->span('container()')
        . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Self', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($br . $p . $br);
      $x->col()->div();
      $x->row();

      $p = $x->id('horizontal')->h4('Horizontal Alignment');
      $x->text('center')->div($p);
      $x->row();

      $div = $x->border()->border('secondary')->col(4)->adiv('One of two columns');
      $rows = $x->class('row')->adiv('<h6 class="text-center">justify-content-start</h6>');
      $rows .= $x->class('row')->justify('content-start')->adiv($div . $div);
      $rows .= $x->class('row')->adiv($br);
      $rows .= $x->class('row')->adiv('<h6 class="text-center">justify-content-center</h6>');
      $rows .= $x->class('row')->justify('content-center')->adiv($div . $div);
      $rows .= $x->class('row')->adiv($br);
      $rows .= $x->class('row')->adiv('<h6 class="text-center">justify-content-end</h6>');
      $rows .= $x->class('row')->justify('content-end')->adiv($div . $div);
      $rows .= $x->class('row')->adiv($br);
      $rows .= $x->class('row')->adiv('<h6 class="text-center">justify-content-around</h6>');
      $rows .= $x->class('row')->justify('content-around')->adiv($div . $div);
      $rows .= $x->class('row')->adiv($br);
      $rows .= $x->class('row')->adiv('<h6 class="text-center">justify-content-between</h6>');
      $rows .= $x->class('row')->justify('content-between')->adiv($div . $div);
      $rows .= $x->class('row')->adiv($br);
      $rows .= $x->class('row')->adiv('<h6 class="text-center">justify-content-evenly</h6>');
      $rows .= $x->class('row')->justify('content-evenly')->adiv($div . $div);
      $p = $x->class('container')->adiv($rows);

      $x->class('card p-3')->div($p . $br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of two columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of two columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('justify(')
        . $x->text('warning')->span("'content-start'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . $x->text('info')->span('container()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'justify-content-start', null, $p
      );
      $x->col(6)->div($br . $p);

      $p = $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of two columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of two columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('justify(')
        . $x->text('warning')->span("'content-center'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . $x->text('info')->span('container()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'justify-content-center', null, $p
      );
      $x->col(6)->div($br . $p);

      $x->row();

      $p = $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of two columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of two columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('justify(')
        . $x->text('warning')->span("'content-end'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . $x->text('info')->span('container()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'justify-content-end', null, $p
      );
      $x->col(6)->div($br . $p);

      $p = $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of two columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of two columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('justify(')
        . $x->text('warning')->span("'content-around'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . $x->text('info')->span('container()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'justify-content-around', null, $p
      );
      $x->col(6)->div($br . $p);

      $x->row();

      $p = $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of two columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of two columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('justify(')
        . $x->text('warning')->span("'content-between'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . $x->text('info')->span('container()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'justify-content-between', null, $p
      );
      $x->col(6)->div($br . $p);

      $p = $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of two columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'One of two columns'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('justify(')
        . $x->text('warning')->span("'content-evenly'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . $x->text('info')->span('container()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'justify-content-evenly', null, $p
      );
      $x->col(6)->div($br . $p);

      $x->row();

      $p = $x->id('wrapping')->h4('Column Wrapping');
      $x->text('center')->div($br . $p);
      $x->row();

      $p = $x->p('If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.');
      $x->text('center')->div($p);
      $x->row();

      $div9 = $x->col(9)->border()->border('primary')->class('p-2')->adiv('.col-9');
      $div4 = $x->col(4)->border()->border('success')->class('p-2')->adiv('.col-4 <br> Since 9 + 4 = 13 > 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.');
      $div6 = $x->col(6)->border()->border('danger')->class('p-2')->adiv('.col-6 <br> Subsequent columns continue along the new line.');
      $p = $x->class('row')->adiv($div9 . $div4 . $div6);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('9')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-9'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span(".col-4 ...")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('6')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span(".col-6 ...")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->' . $x->text('info')->span('container()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Wrapping', null, $p
      );
      $x->col()->div();
      $x->col(5)->div($p);
      $x->col()->div();
      $x->row();

      $p = $x->id('breaks')->h4('Column Breaks');
      $x->text('center')->div($br . $p);
      $x->row();

      $p = $x->p('Breaking columns to a new line in flexbox requires a small hack: add an element with width: 100% wherever you want to wrap your columns to a new line. Normally this is accomplished with multiple .rows, but not every implementation method can account for this.');
      $x->text('center')->div($p);
      $x->row();

      $div = $x->bg('light')->border()->border('secondary')->class('p-3')->col(6)->col('sm-3')->adiv('.col-6 .col-sm-3');
      $w = $x->w()->adiv();
      $p = $x->class('row')->adiv($div . $div . $w . $div . $div);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $div = $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('6')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-6 .col-sm-3'")
        . $x->text('info')->span(')') . $colon;

      $p = $div
        . PHP_EOL
        . $div
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('w()')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $div
        . PHP_EOL
        . $div
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->' . $x->text('info')->span('container()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Breaks', null, $p
      );
      $x->col()->div();
      $x->col(5)->div($br . $p . $br);
      $x->col()->div();
      $x->row();

      $div = $x->bg('light')->border()->border('secondary')->class('p-3')->col(6)->col('sm-4')->adiv('.col-6 .col-sm-4');
      $w = $x->w()->d('none')->d('md-block')->adiv();
      $p = $x->class('row')->adiv($div . $div . $w . $div . $div);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $div = $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span('6')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-6 .col-sm-4'")
        . $x->text('info')->span(')') . $colon;

      $p = $div
        . PHP_EOL
        . $div
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('w()')
        . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'none'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'md-block'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $div
        . PHP_EOL
        . $div
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->' . $x->text('info')->span('container()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Breaks', null, $p
      );
      $x->col()->div();
      $x->col(5)->div($br . $p . $br);
      $x->col()->div();
      $x->row();

      $p = $x->id('order')->h4('Order Classes');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Use .order- classes for controlling the visual order of your content. These classes are responsive, so you can set the order by breakpoint (e.g., .order-1.order-md-2). Includes support for 1 through 5 across all six grid tiers.');
      $x->text('center')->div($p);
      $x->row();

      $div1 = $x->bg('light')->border()->border('secondary')->class('p-3')->col()->adiv('First in DOM, no order applied');
      $div2 = $x->bg('light')->border()->border('secondary')->class('p-3')->col()->order(5)->adiv('Second in DOM, with a larger order');
      $div3 = $x->bg('light')->border()->border('secondary')->class('p-3')->col()->order(1)->adiv('Third in DOM, with an order of 1');
      $p = $x->class('row')->adiv($div1 . $div2 . $div3);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'First in DOM, no order applied'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('order(')
        . $x->text('warning')->span('5')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Second in DOM, with a larger order'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('order(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Third in DOM, with an order of 1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->' . $x->text('info')->span('container()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        '1 - 5', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($br . $p);
      $x->col()->div();
      $x->row();

      $p = $x->p('There are also responsive .order-first and .order-last classes that change the order of an element by applying order: -1 and order: 6, respectively. These classes can also be intermixed with the numbered .order-* classes as needed.');
      $x->text('center')->div($br . $p . $br);
      $x->row();

      $div1 = $x->bg('light')->border('secondary')->class('p-3')->col()->order('last')->adiv('First in DOM, ordered last');
      $div2 = $x->bg('light')->border('secondary')->class('p-3')->col()->adiv('Second in DOM, unordered');
      $div3 = $x->bg('light')->border('secondary')->class('p-3')->col()->order('first')->adiv('Third in DOM, ordered first');
      $p = $x->class('row')->adiv($div1 . $div2 . $div3);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('order(')
        . $x->text('warning')->span("'last'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'First in DOM, ordered last'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Second in DOM, unordered'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('order(')
        . $x->text('warning')->span("'first'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Third in DOM, ordered first'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->' . $x->text('info')->span('container()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'first & last', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($br . $p . $br);
      $x->col()->div();
      $x->row();

      $p = $x->id('offset')->h4('Offset Classes');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Move columns to the right using .offset-md-* classes. These classes increase the left margin of a column by * columns. For example, .offset-md-4 moves .col-md-4 over four columns.');
      $x->text('center')->div($p . $br);
      $x->row();

      $div = $x->bg('light')->border()->border('secondary')->class('p-3')->col('md-4')->adiv('.col-md-4');
      $div2 = $x->bg('light')->border()->border('secondary')->class('p-3')->col('md-4')->offset('md-4')->adiv('.col-md-4 .offset-md-4');
      $p = $x->class('row')->adiv($div . $div2);
      $p .= $x->class('row')->adiv($br);
      $div = $x->bg('light')->border()->border('secondary')->class('p-3')->col('md-3')->offset('md-3')->adiv('.col-md-3 .offset-md-3');
      $p .= $x->class('row')->adiv($div . $div);
      $p .= $x->class('row')->adiv($br);
      $div = $x->bg('light')->border()->border('secondary')->class('p-3')->col('md-6')->offset('md-3')->adiv('.col-md-6 .offset-md-3');
      $p .= $x->class('row')->adiv($div);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-md-4'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('offset(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-md-4'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('offset(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-md-3 .offset-md-3'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('offset(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-md-3 .offset-md-3'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-6'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('offset(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-md-6 .offset-md-3'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Offset', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('margin')->h4('Margin Utilities');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('With the move to flexbox in v4, you can use margin utilities like .me-auto to force sibling columns away from one another.');
      $x->text('center')->div($p);
      $x->row();

      $div = $x->bg('light')->border()->border('secondary')->class('p-3')->col('md-4')->adiv('.col-md-4');
      $div2 = $x->bg('light')->border()->border('secondary')->class('p-3')->col('md-4')->ms()->adiv('.col-md-4 .ms-auto');
      $p = $x->class('row')->adiv($div . $div2);
      $p .= $x->class('row')->adiv($br);
      $div = $x->bg('light')->border()->border('secondary')->class('p-3')->col('md-3')->ms('md-auto')->adiv('.col-md-3 .ms-md-auto');
      $p .= $x->class('row')->adiv($div . $div);
      $p .= $x->class('row')->adiv($br);
      $div = $x->bg('light')->border()->border('secondary')->class('p-3')->col('auto')->me()->adiv('.col-auto .me-auto');
      $div2 = $x->bg('light')->border()->border('secondary')->class('p-3')->col('auto')->adiv('.col-auto');
      $p .= $x->class('row')->adiv($div . $div2);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-md-4'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('ms()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-md-4 .ms-auto'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('ms(')
        . $x->text('warning')->span("'md-auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-md-3 .ms-md-auto'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('ms(')
        . $x->text('warning')->span("'md-auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-md-3 .ms-md-auto'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('me()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-auto .me-auto'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-auto'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $x->text('info')->span('container()') . $colon;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Margin', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Columns');
      $content .= $x->text('center')->lead('Learn how to modify columns with a handful of options for alignment, ordering, and offsetting thanks to our flexbox grid system. Plus, see how to use column classes to manage widths of non-grid elements.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'gutters') {

      $p = $x->id('horizontal')->h4('Horizontal Gutters');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('.gx-* classes can be used to control the horizontal gutter widths. The .container or .container-fluid parent may need to be adjusted if larger gutters are used too to avoid unwanted overflow, using a matching padding utility. For example, in the following example we’ve increased the padding with .px-4:');
      $x->text('center')->div($p);
      $x->row();

      $div = $x->pad(3)->border()->border()->bg('light')->adiv('Custom column padding');
      $div = $x->col()->adiv($div);
      $p = $x->class('row')->gx(5)->adiv($div . $div);
      $p = $x->class('container')->px(4)->adiv($p);
      $x->class('card')->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('div')
        . ' = ' . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Custom column padding'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('gx(')
        . $x->text('warning')->span('5')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->'
        . $x->text('info')->span('px(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('container()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="container px-4">' . PHP_EOL
        . ' <div class="row gx-5">' . PHP_EOL
        . '   <div class="col">' . PHP_EOL
        . '     <div class="p-3 border bg-light">' . PHP_EOL
        . '       Custom column padding' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . '   <div class="col">' . PHP_EOL
        . '     <div class="p-3 border bg-light">' . PHP_EOL
        . '       Custom column padding' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>');

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Horizontal', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('An alternative solution is to add a wrapper around the .row with the .overflow-hidden class:');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->class('row')->gx(5)->adiv($div . $div);
      $p = $x->class('container')->overflow('hidden')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('div')
        . ' = ' . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Custom column padding'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('gx(')
        . $x->text('warning')->span('5')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->'
        . $x->text('info')->span('overflow(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('container()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="container overflow-hidden">' . PHP_EOL
        . ' <div class="row gx-5">' . PHP_EOL
        . '   <div class="col">' . PHP_EOL
        . '     <div class="p-3 border bg-light">' . PHP_EOL
        . '       Custom column padding' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . '   <div class="col">' . PHP_EOL
        . '     <div class="p-3 border bg-light">' . PHP_EOL
        . '       Custom column padding' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>');

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Horizontal', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('vertical')->h4('Vertical Gutters');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('.gy-* classes can be used to control the vertical gutter widths. Like the horizontal gutters, the vertical gutters can cause some overflow below the .row at the end of a page. If this occurs, you add a wrapper around .row with the .overflow-hidden class:');
      $x->text('center')->div($p);
      $x->row();

      $div = $x->pad(3)->border()->bg('light')->adiv('Custom column padding');
      $div = $x->col(6)->adiv($div);
      $p = $x->class('row')->gy(5)->adiv($div . $div . $div . $div);
      $p = $x->class('container')->overflow('hidden')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('div')
        . ' = ' . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Custom column padding'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span(6)
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span(6)
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span(6)
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span(6)
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('gy(')
        . $x->text('warning')->span('5')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->'
        . $x->text('info')->span('overflow(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('container()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="container overflow-hidden">' . PHP_EOL
        . ' <div class="row gy-5">' . PHP_EOL
        . '   <div class="col-6">' . PHP_EOL
        . '     <div class="p-3 border bg-light">' . PHP_EOL
        . '       Custom column padding' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . '   <div class="col-6">' . PHP_EOL
        . '     <div class="p-3 border bg-light">' . PHP_EOL
        . '       Custom column padding' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . '   <div class="col-6">' . PHP_EOL
        . '     <div class="p-3 border bg-light">' . PHP_EOL
        . '       Custom column padding' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . '   <div class="col-6">' . PHP_EOL
        . '     <div class="p-3 border bg-light">' . PHP_EOL
        . '       Custom column padding' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>');

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Vertical', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('horizontalandvertical')->h4('Horizontal & Vertical Gutters');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('.g-* classes can be used to control the horizontal gutter widths, for the following example we use a smaller gutter width, so there won’t be a need to add the .overflow-hidden wrapper class.');
      $x->text('center')->div($p);
      $x->row();

      $div = $x->pad(3)->border()->bg('light')->adiv('Custom column padding');
      $div = $x->col(6)->adiv($div);
      $p = $x->class('row')->g(2)->adiv($div . $div . $div . $div);
      $p = $x->class('container')->overflow('hidden')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('div')
        . ' = ' . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Custom column padding'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span(6)
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span(6)
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span(6)
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span(6)
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span('5')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->'
        . $x->text('info')->span('overflow(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('container()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="container overflow-hidden">' . PHP_EOL
        . ' <div class="row g-2">' . PHP_EOL
        . '   <div class="col-6">' . PHP_EOL
        . '     <div class="p-3 border bg-light">' . PHP_EOL
        . '       Custom column padding' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . '   <div class="col-6">' . PHP_EOL
        . '     <div class="p-3 border bg-light">' . PHP_EOL
        . '       Custom column padding' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . '   <div class="col-6">' . PHP_EOL
        . '     <div class="p-3 border bg-light">' . PHP_EOL
        . '       Custom column padding' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . '   <div class="col-6">' . PHP_EOL
        . '     <div class="p-3 border bg-light">' . PHP_EOL
        . '       Custom column padding' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>');

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Horizontal & Vertical', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('row')->h4('Row Columns Gutters');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Gutter classes can also be added to row columns. In the following example, we use responsive row columns and responsive gutter classes.');
      $x->text('center')->div($p);
      $x->row();

      $div = $x->pad(3)->border()->bg('light')->adiv('Row column');
      $div = $x->col()->adiv($div);
      $p = $x->class('row row-cols-2 row-cols-lg-5')->g(2)->g('lg-3')->adiv($div . $div . $div . $div . $div . $div . $div . $div . $div . $div);
      $p = $x->class('container')->overflow('hidden')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('div')
        . ' = ' . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Custom column padding'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col()')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row-cols-2'")
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row-cols-lg-5'")
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('g(')
        . $x->text('warning')->span("2")
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('g(')
        . $x->text('warning')->span("'lg-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->'
        . $x->text('info')->span('overflow(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('container()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="container">' . PHP_EOL
        . '  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">' . PHP_EOL
        . '    <div class="col">' . PHP_EOL
        . '      <div class="p-3 border bg-light">Row column</div>' . PHP_EOL
        . '    </div>' . PHP_EOL
        . '    <div class="col">' . PHP_EOL
        . '      <div class="p-3 border bg-light">Row column</div>' . PHP_EOL
        . '    </div>' . PHP_EOL
        . '    <div class="col">' . PHP_EOL
        . '      <div class="p-3 border bg-light">Row column</div>' . PHP_EOL
        . '    </div>' . PHP_EOL
        . '    <div class="col">' . PHP_EOL
        . '      <div class="p-3 border bg-light">Row column</div>' . PHP_EOL
        . '    </div>' . PHP_EOL
        . '    <div class="col">' . PHP_EOL
        . '      <div class="p-3 border bg-light">Row column</div>' . PHP_EOL
        . '    </div>' . PHP_EOL
        . '    <div class="col">' . PHP_EOL
        . '      <div class="p-3 border bg-light">Row column</div>' . PHP_EOL
        . '    </div>' . PHP_EOL
        . '    <div class="col">' . PHP_EOL
        . '      <div class="p-3 border bg-light">Row column</div>' . PHP_EOL
        . '    </div>' . PHP_EOL
        . '    <div class="col">' . PHP_EOL
        . '      <div class="p-3 border bg-light">Row column</div>' . PHP_EOL
        . '    </div>' . PHP_EOL
        . '    <div class="col">' . PHP_EOL
        . '      <div class="p-3 border bg-light">Row column</div>' . PHP_EOL
        . '    </div>' . PHP_EOL
        . '    <div class="col">' . PHP_EOL
        . '      <div class="p-3 border bg-light">Row column</div>' . PHP_EOL
        . '    </div>' . PHP_EOL
        . '  </div>' . PHP_EOL
        . '</div>'
      );

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Row Columns', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('nogutters')->h4('No Gutters');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('The gutters between columns in our predefined grid classes can be removed with .g-0. This removes the negative margins from .row and the horizontal padding from all immediate children columns.')
        . $x->p('Need an edge-to-edge design? Drop the parent .container or .container-fluid.')
        . $x->p('In practice, here’s how it looks. Note you can continue to use this with all other predefined grid classes (including column widths, responsive tiers, reorders, and more).');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $div = $x->bg('light')->border()->border('secondary')->class('p-3')->col('sm-6')->col('md-8')->adiv('.col-sm-6 .col-md-8');
      $div2 = $x->bg('light')->border()->border('secondary')->class('p-3')->col(6)->col('md-4')->adiv('.col-6 .col-md-4');
      $p = $x->class('row')->g(0)->adiv($div . $div2);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-6'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-8'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-sm-6 .col-md-8'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("6")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.col-6 .col-md-4'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span('0')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="row g-0">' . PHP_EOL
        . '  <div class="col-sm-6 col-md-8">.col-sm-6 .col-md-8</div>' . PHP_EOL
        . '  <div class="col-6 col-md-4">.col-6 .col-md-4</div>' . PHP_EOL
        . '</div>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'No Gutters', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($p . $br);
      $x->col()->div();
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Gutters');
      $content .= $x->text('center')->lead('Gutters are the padding between your columns, used to responsively space and align content in the Bootstrap grid system.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'background') {

      $divs = $x->bg('primary')->pad(3)->mb(2)->text('white')->adiv('.bg-primary');
      $divs .= $x->bg('secondary')->pad(3)->mb(2)->text('white')->adiv('.bg-secondary');
      $divs .= $x->bg('success')->pad(3)->mb(2)->text('white')->adiv('.bg-success');
      $divs .= $x->bg('danger')->pad(3)->mb(2)->text('white')->adiv('.bg-danger');
      $divs .= $x->bg('warning')->pad(3)->mb(2)->text('dark')->adiv('.bg-warning');
      $divs .= $x->bg('info')->pad(3)->mb(2)->text('dark')->adiv('.bg-info');
      $divs .= $x->bg('light')->pad(3)->mb(2)->text('dark')->adiv('.bg-light');
      $divs .= $x->bg('dark')->pad(3)->mb(2)->text('white')->adiv('.bg-dark');
      $divs .= $x->bg('body')->pad(3)->mb(2)->text('dark')->adiv('.bg-body');
      $divs .= $x->bg('white')->pad(3)->mb(2)->text('dark')->adiv('.bg-white');
      $divs .= $x->bg('transparent')->pad(3)->mb(2)->text('dark')->adiv('.bg-transparent');
      $p = $x->class('row')->adiv($divs);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-primary'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-secondary'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'success'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-success'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'danger'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-danger'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'warning'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-warning'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'info'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-info'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-light'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-dark'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'body'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-body'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-white'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'transparent'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-transparent'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-success text-white">.bg-success</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-info text-dark">.bg-info</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-light text-dark">.bg-light</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-body text-dark">.bg-body</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-white text-dark">.bg-white</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-transparent text-dark">.bg-transparent</div>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Background Colors', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('gradient')->h4('Background Gradient');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('By adding a .bg-gradient class, a linear gradient is added as background image to the backgrounds. This gradient starts with a semi-transparent white which fades out to the bottom.')
        . $x->p('Do you need a gradient in your custom CSS? Just add background-image: var(--bs-gradient);.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $divs = $x->bg('primary')->gradient()->pad(3)->mb(2)->text('white')->adiv('.bg-primary');
      $divs .= $x->bg('secondary')->gradient()->pad(3)->mb(2)->text('white')->adiv('.bg-secondary');
      $divs .= $x->bg('success')->gradient()->pad(3)->mb(2)->text('white')->adiv('.bg-success');
      $divs .= $x->bg('danger')->gradient()->pad(3)->mb(2)->text('white')->adiv('.bg-danger');
      $divs .= $x->bg('warning')->gradient()->pad(3)->mb(2)->text('dark')->adiv('.bg-warning');
      $divs .= $x->bg('info')->gradient()->pad(3)->mb(2)->text('dark')->adiv('.bg-info');
      $divs .= $x->bg('light')->gradient()->pad(3)->mb(2)->text('dark')->adiv('.bg-light');
      $divs .= $x->bg('dark')->gradient()->pad(3)->mb(2)->text('white')->adiv('.bg-dark');
      $p = $x->class('row')->adiv($divs);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('gradient()')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-primary'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('gradient()')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-secondary'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'success'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('gradient()')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-success'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'danger'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('gradient()')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-danger'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'warning'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('gradient()')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-warning'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'info'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('gradient()')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-info'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('gradient()')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-light'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('gradient()')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.bg-dark'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="p-3 mb-2 bg-primary bg-gradient text-white">.bg-primary</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-secondary bg-gradient text-white">.bg-secondary</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-success bg-gradient text-white">.bg-success</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-danger bg-gradient text-white">.bg-danger</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-warning bg-gradient text-dark">.bg-warning</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-info bg-gradient text-dark">.bg-info</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-light bg-gradient text-dark">.bg-light</div>' . PHP_EOL
        . '<div class="p-3 mb-2 bg-dark bg-gradient text-white">.bg-dark</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Background Gradient', null, $p
      );
      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Background Colors');
      $content .= $x->text('center')->lead('Similar to the contextual text color classes, set the background of an element to any contextual class. Background utilities do not set color, so in some cases you’ll want to use .text-* color utilities.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'borders') {

      $p = $x->id('additive')->h4('Additive');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->astyle("width: 75px; height: 75px;")->border()->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border('top')->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border('end')->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border('bottom')->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border('start')->m(2)->bg('light')->adiv();
      $p = $x->class('row')->adiv($p);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'top'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'end'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'bottom'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'start'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="border"></div>' . PHP_EOL
        . '<div class="border-top"></div>' . PHP_EOL
        . '<div class="border-end"></div>' . PHP_EOL
        . '<div class="border-bottom"></div>' . PHP_EOL
        . '<div class="border-start"></div>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Border', null, $p
      );

      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('color')->h4('Border Color');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Change the border color using utilities built on our theme colors.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->astyle("width: 75px; height: 75px;")->border()->border('primary')->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border()->border('secondary')->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border()->border('success')->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border()->border('danger')->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border()->border('warning')->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border()->border('info')->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border()->border('light')->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border()->border('dark')->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border()->border('white')->m(2)->bg('light')->adiv();
      $p = $x->class('row')->adiv($p);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'success'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'danger'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'warning'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'info'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="border border-primary"></div>' . PHP_EOL
        . '<div class="border border-secondary"></div>' . PHP_EOL
        . '<div class="border border-success"></div>' . PHP_EOL
        . '<div class="border border-danger"></div>' . PHP_EOL
        . '<div class="border border-warning"></div>' . PHP_EOL
        . '<div class="border border-info"></div>' . PHP_EOL
        . '<div class="border border-light"></div>' . PHP_EOL
        . '<div class="border border-dark"></div>' . PHP_EOL
        . '<div class="border border-white"></div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Border Color', null, $p
      );

      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('width')->h4('Border-width');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->astyle("width: 75px; height: 75px;")->border()->border(1)->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border()->border(2)->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border()->border(3)->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border()->border(4)->m(2)->bg('light')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->border()->border(5)->m(2)->bg('light')->adiv();
      $p = $x->class('row')->adiv($p);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("1")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("2")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("3")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("4")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("5")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="border border-1"></div>' . PHP_EOL
        . '<div class="border border-2"></div>' . PHP_EOL
        . '<div class="border border-3"></div>' . PHP_EOL
        . '<div class="border border-4"></div>' . PHP_EOL
        . '<div class="border border-5"></div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Border Width', null, $p
      );

      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('radius')->h4('Border-radius');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Add classes to an element to easily round its corners.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->astyle("width: 75px; height: 75px;")->rounded()->m(2)->bg('secondary')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->rounded('top')->m(2)->bg('secondary')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->rounded('end')->m(2)->bg('secondary')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->rounded('bottom')->m(2)->bg('secondary')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->rounded('start')->m(2)->bg('secondary')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->rounded('circle')->m(2)->bg('secondary')->adiv()
       . $x->astyle("width: 150px; height: 75px;")->rounded('pill')->m(2)->bg('secondary')->adiv();
      $p = $x->class('row')->adiv($p);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('rounded()')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("'top'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("'end'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("'bottom'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("'start'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("'circle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("'pill'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="rounded"></div>' . PHP_EOL
        . '<div class="rounded-top"></div>' . PHP_EOL
        . '<div class="rounded-end"></div>' . PHP_EOL
        . '<div class="rounded-bottom"></div>' . PHP_EOL
        . '<div class="rounded-start"></div>' . PHP_EOL
        . '<div class="rounded-circle"></div>' . PHP_EOL
        . '<div class="rounded-pill"></div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Border Radius', null, $p
      );

      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('sizes')->h4('Sizes');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Use the scaling classes for larger or smaller rounded corners. Sizes range from 0 to 3, and can be configured by modifying the utilities API.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->astyle("width: 75px; height: 75px;")->m(2)->bg('secondary')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->rounded(1)->m(2)->bg('secondary')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->rounded(2)->m(2)->bg('secondary')->adiv()
       . $x->astyle("width: 75px; height: 75px;")->rounded(3)->m(2)->bg('secondary')->adiv();
      $p = $x->class('row')->adiv($p);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("0")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("1")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("2")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("3")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="rounded-0"></div>' . PHP_EOL
        . '<div class="rounded-1"></div>' . PHP_EOL
        . '<div class="rounded-2"></div>' . PHP_EOL
        . '<div class="rounded-3"></div>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Border Sizes', null, $p
      );

      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Borders');
      $content .= $x->text('center')->lead('Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons, or any other element.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'colors') {

      $p = $x->text('primary')->p('.text-primary')
        . $x->text('secondary')->p('.text-secondary')
        . $x->text('success')->p('.text-success')
        . $x->text('danger')->p('.text-danger')
        . $x->text('warning')->bg('dark')->p('.text-warning')
        . $x->text('info')->bg('dark')->p('.text-info')
        . $x->text('light')->bg('dark')->p('.text-light')
        . $x->text('dark')->p('.text-dark')
        . $x->text('body')->p('.text-body')
        . $x->text('muted')->p('.text-muted')
        . $x->text('white')->bg('dark')->p('.text-white')
        . $x->text('black-50')->p('.text-black-50')
        . $x->text('white-50')->bg('dark')->p('.text-white-50');
      $p = $x->class('row')->adiv($p);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-primary'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-secondary'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'success'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-success'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'danger'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-danger'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'warning'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-warning'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'info'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-info'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-light'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-dark'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'body'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-body'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'muted'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-muted'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-white'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'black-50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-black-50'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white-50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'.text-white-50'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<p class="text-primary">.text-primary</p>' . PHP_EOL
        . '<p class="text-secondary">.text-secondary</p>' . PHP_EOL
        . '<p class="text-success">.text-success</p>' . PHP_EOL
        . '<p class="text-danger">.text-danger</p>' . PHP_EOL
        . '<p class="text-warning bg-dark">.text-warning</p>' . PHP_EOL
        . '<p class="text-info bg-dark">.text-info</p>' . PHP_EOL
        . '<p class="text-light bg-dark">.text-light</p>' . PHP_EOL
        . '<p class="text-dark">.text-dark</p>' . PHP_EOL
        . '<p class="text-body">.text-body</p>' . PHP_EOL
        . '<p class="text-muted">.text-muted</p>' . PHP_EOL
        . '<p class="text-white bg-dark">.text-white</p>' . PHP_EOL
        . '<p class="text-black-50">.text-black-50</p>' . PHP_EOL
        . '<p class="text-white-50 bg-dark">.text-white-50</p>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Text Colors', null, $p
      );

      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->text('primary')->a('.text-primary')
        . $x->text('secondary')->a('.text-secondary')
        . $x->text('success')->a('.text-success')
        . $x->text('danger')->a('.text-danger')
        . $x->text('warning')->bg('dark')->a('.text-warning')
        . $x->text('info')->bg('dark')->a('.text-info')
        . $x->text('light')->bg('dark')->a('.text-light')
        . $x->text('dark')->a('.text-dark')
        . $x->text('body')->a('.text-body')
        . $x->text('muted')->a('.text-muted')
        . $x->text('white')->bg('dark')->a('.text-white')
        . $x->text('black-50')->a('.text-black-50')
        . $x->text('white-50')->bg('dark')->a('.text-white-50');
      $p = $x->class('row')->adiv($p);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-primary'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-secondary'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'success'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-success'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'danger'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-danger'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'warning'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-warning'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'info'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-info'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-light'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-dark'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'body'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-body'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'muted'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-muted'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-white'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'black-50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-black-50'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white-50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'.text-white-50'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<a class="text-primary">.text-primary</a>' . PHP_EOL
        . '<a class="text-secondary">.text-secondary</a>' . PHP_EOL
        . '<a class="text-success">.text-success</a>' . PHP_EOL
        . '<a class="text-danger">.text-danger</a>' . PHP_EOL
        . '<a class="text-warning bg-dark">.text-warning</a>' . PHP_EOL
        . '<a class="text-info bg-dark">.text-info</a>' . PHP_EOL
        . '<a class="text-light bg-dark">.text-light</a>' . PHP_EOL
        . '<a class="text-dark">.text-dark</a>' . PHP_EOL
        . '<a class="text-body">.text-body</a>' . PHP_EOL
        . '<a class="text-muted">.text-muted</a>' . PHP_EOL
        . '<a class="text-white bg-dark">.text-white</a>' . PHP_EOL
        . '<a class="text-black-50">.text-black-50</a>' . PHP_EOL
        . '<a class="text-white-50 bg-dark">.text-white-50</a>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Link Colors', null, $p
      );

      $x->col()->div();
      $x->col(7)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Colors');
      $content .= $x->text('center')->lead('Colorize text with color utilities. If you want to colorize links, you can use the .link-* helper classes which have :hover and :focus states.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'display') {

      $p = $x->id('how-it-works')->h4('How It Works');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Change the value of the display property with our responsive display utility classes. We purposely support only a subset of all possible values for display. Classes can be combined for various effects as you need.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('notation')->h4('Notation');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Display utility classes that apply to all breakpoints, from xs to xxl, have no breakpoint abbreviation in them. This is because those classes are applied from min-width: 0; and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.');
      $x->text('center')->div($p);
      $x->row();

      $x->li('.d-{value} for xs');
      $x->li('.d-{breakpoint}-{value} for sm, md, lg, xl, and xxl.');
      $p = $x->p('As such, the classes are named using the format:')
        . $x->ul()
        . $x->p('Where value is one of:');
      $x->th('Class');
      $x->th('Function');
      $x->tr();
      $x->td('none');
      $x->td($x->code('$x->d(' . "'none'" . ')'));
      $x->tr();
      $x->td('inline');
      $x->td($x->code('$x->d(' . "'inline'" . ')'));
      $x->tr();
      $x->td('inline-block');
      $x->td($x->code('$x->d(' . "'inline-block'" . ')'));
      $x->tr();
      $x->td('block');
      $x->td($x->code('$x->d(' . "'block'" . ')'));
      $x->tr();
      $x->td('grid');
      $x->td($x->code('$x->d(' . "'grid'" . ')'));
      $x->tr();
      $x->td('table');
      $x->td($x->code('$x->d(' . "'table'" . ')'));
      $x->tr();
      $x->td('table-cell');
      $x->td($x->code('$x->d(' . "'table-cell'" . ')'));
      $x->tr();
      $x->td('table-row');
      $x->td($x->code('$x->d(' . "'table-row'" . ')'));
      $x->tr();
      $x->td('flex');
      $x->td($x->code('$x->d(' . "'flex'" . ')'));
      $x->tr();
      $x->td('inline-flex');
      $x->td($x->code('$x->d(' . "'inline-flex'" . ')'));
      $x->tr();
      $p .= $x->class('table')->table()
        . $x->p('The display values can be altered by changing the $displays variable and recompiling the SCSS.')
        . $x->p('The media queries affect screen widths with the given breakpoint or larger. For example, .d-lg-none sets display: none; on lg, xl, and xxl screens.');
      $x->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('examples')->h4('Examples');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->d('inline')->pad(2)->m(2)->bg('primary')->text('white')->adiv('d-inline')
        . $x->d('inline')->pad(2)->m(2)->bg('dark')->text('white')->adiv('d-inline');
      $p = $x->d('flex')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'inline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span("2")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.d-inline'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'inline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span("2")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.d-inline'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'd-inline', null, $p
      );

      $x->col()->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->d('block')->pad(2)->m(2)->bg('primary')->text('white')->adiv('d-inline')
        . $x->d('block')->pad(2)->m(2)->bg('dark')->text('white')->adiv('d-inline');
      $p = $x->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'block'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span("2")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.d-inline'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'block'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span("2")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'white'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'.d-inline'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'd-inline', null, $p
      );

      $x->col()->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('hiding')->h4('Hiding Elements');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('For faster mobile-friendly development, use responsive display classes for showing and hiding elements by device. Avoid creating entirely different versions of the same site, instead hide elements responsively for each screen size.')
        . $x->p('To hide elements simply use the .d-none class or one of the .d-{sm,md,lg,xl,xxl}-none classes for any responsive screen variation.')
        . $x->p('To show an element only on a given interval of screen sizes you can combine one .d-*-none class with a .d-*-* class, for example .d-none .d-md-block .d-xl-none .d-xxl-none will hide the element for all screen sizes except on medium and large devices.');
      $x->text('center')->div($p);
      $x->row();

      $x->th('Screen Size');
      $x->th('Class');
      $x->th('Function');
      $x->tr();

      $x->td('Hidden on all');
      $x->td('d-none');
      $x->td($x->code('$x->d(' . "'none'" . ')'));
      $x->tr();

      $x->td('Hidden only on xs');
      $x->td('d-none <br> d-sm-block');
      $x->td($x->code('$x->d(' . "'none'" . ')' . '<br>' . '$x->d(' . "'sm-block'" . ')'));
      $x->tr();

      $x->td('Hidden only on sm');
      $x->td('d-sm-none <br> d-md-block');
      $x->td($x->code('$x->d(' . "'sm-none'" . ') <br> $x->d(' . "'md-block')"));
      $x->tr();

      $x->td('Hidden only on md');
      $x->td('d-md-none <br> d-lg-block');
      $x->td($x->code('$x->d(' . "'md-none') <br>" . '$x->d(' . "'lg-block')"));
      $x->tr();

      $x->td('Hidden only on lg');
      $x->td('d-lg-none <br> d-xl-block');
      $x->td($x->code('$x->d(' . "'lg-none')<br>" . '$x->d(' . "'xl-block')"));
      $x->tr();

      $x->td('Hidden only on xl');
      $x->td('d-xl-none <br> d-xxl-block');
      $x->td($x->code('$x->d(' . "'xl-none')<br>" . '$x->d(' . "'xxl-block')"));
      $x->tr();

      $x->td('Hidden only on xxl');
      $x->td('d-xxl-none');
      $x->td($x->code('$x->d(' . "'xxl-none')"));
      $x->tr();

      $x->td('Visible on all');
      $x->td('d-block');
      $x->td($x->code('$x->d(' . "'block')"));
      $x->tr();

      $x->td('Visible only on xs');
      $x->td('d-block <br> d-sm-none');
      $x->td($x->code('$x->d(' . "'block')<br>" . '$x->d(' . "'sm-none')"));
      $x->tr();

      $x->td('Visible only on sm');
      $x->td('d-none <br> d-sm-block <br> d-md-none');
      $x->td($x->code('$x->d(' . "'none')<br>" . '$x->d(' . "'sm-block')<br>" . '$x->d(' . "'md-none')"));
      $x->tr();

      $x->td('Visible only on md');
      $x->td('d-none <br> d-md-block <br> d-lg-none');
      $x->td($x->code('$x->d(' . "'none')<br>" . '$x->d(' . "'md-block')<br>" . '$x->d(' . "'lg-none')"));
      $x->tr();

      $x->td('Visible only on lg');
      $x->td('d-none <br> d-lg-block <br> d-xl-none');
      $x->td($x->code('$x->d(' . "'none')<br>" . '$x->d(' . "'lg-block')<br>" . '$x->d(' . "'xl-none')"));
      $x->tr();

      $x->td('Visible only on xl');
      $x->td('d-none <br> d-xl-block <br> d-xxl-none');
      $x->td($x->code('$x->d(' . "'none')<br>" . '$x->d(' . "'xl-block')<br>" . '$x->d(' . "'xxl-none')"));
      $x->tr();

      $x->td('Visible only on xxl');
      $x->td('d-none <br> d-xxl-block');
      $x->td($x->code('$x->d(' . "'none')<br>" . '$x->d(' . "'xxl-block')"));
      $x->tr();

      $p = $x->class('table')->table();
      $x->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->d('lg-none')->adiv('hide on lg and wider screens')
        . $x->d('none')->d('lg-block')->adiv('hide on screens smaller than lg');
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'lg-none'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'hide on lg and wider screens'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'none'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'lg-block'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'hide on screens smaller than lg'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;

      $p .= $x->htmlchar(
        '<div class="d-lg-none">hide on lg and wider screens</div>' . PHP_EOL
        . '<div class="d-none d-lg-block">hide on screens smaller than lg</div>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Hidden / Visible', null, $p
      );

      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('print')->h4('Display in Print');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Change the display value of elements when printing with our print display utility classes. Includes support for the same display values as our responsive .d-* utilities.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->th('Class');
      $x->th('Function');
      $x->tr();

      $x->td('d-print-none');
      $x->td($x->code('$x->dprint(' . "'none'" . ')'));
      $x->tr();

      $x->td('d-print-inline');
      $x->td($x->code('$x->dprint(' . "'inline'" . ')'));
      $x->tr();

      $x->td('d-print-inline-block');
      $x->td($x->code('$x->dprint(' . "'inline-block'" . ')'));
      $x->tr();

      $x->td('d-print-block');
      $x->td($x->code('$x->dprint(' . "'block'" . ')'));
      $x->tr();

      $x->td('d-print-grid');
      $x->td($x->code('$x->dprint(' . "'grid'" . ')'));
      $x->tr();

      $x->td('d-print-table');
      $x->td($x->code('$x->dprint(' . "'table'" . ')'));
      $x->tr();

      $x->td('d-print-table-row');
      $x->td($x->code('$x->dprint(' . "'table-row'" . ')'));
      $x->tr();

      $x->td('d-print-table-cell');
      $x->td($x->code('$x->dprint(' . "'table-cell'" . ')'));
      $x->tr();

      $x->td('d-print-flex');
      $x->td($x->code('$x->dprint(' . "'flex'" . ')'));
      $x->tr();

      $x->td('d-print-inline-flex');
      $x->td($x->code('$x->dprint(' . "'inline-flex'" . ')'));
      $x->tr();

      $p = $x->class('table')->table();

      $x->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('The print and display classes can be combined.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->dprint('none')->adiv('Screen Only (Hide on print only)');
      $p .= $x->d('none')->dprint('block')->adiv('Print Only (Hide on screen only)');
      $p .= $x->d('none')->d('lg-block')->dprint('block')->adiv('Hide up to large on screen, but always show on print');
      $p = $x->class('row')->adiv($p);
      $p = $x->class('container')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('dprint(')
        . $x->text('warning')->span("'none'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Screen Only (Hide on print only)'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL;

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Display in Print', null, $p
      );

      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Display');
      $content .= $x->text('center')->lead('Quickly and responsively toggle the display value of components and more with our display utilities. Includes support for some of the more common values, as well as some extras for controlling display when printing.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'float') {

      $p = $x->id('overview')->h4('Overview');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('These utility classes float an element to the left or right, or disable floating, based on the current viewport size using the CSS float property. !important is included to avoid specificity issues. These use the same viewport breakpoints as our grid system. Please be aware float utilities have no effect on flex items.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->float('start')->adiv('Float start on all viewport sizes') . $br;
      $p .= $x->float('end')->adiv('Float end on all viewport sizes') . $br;
      $p .= $x->float('none')->adiv("Don't float on all viewport sizes");
      $p = $x->d('flex-column')->adiv($p);
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('Here are all the support classes:');
      $x->div($p);
      $x->row();

      $x->th('Class');
      $x->th('Function');
      $x->tr();

      $x->td('float-start');
      $x->td($x->code('$x->float(' . "'start')"));
      $x->tr();

      $x->td('float-end');
      $x->td($x->code('$x->float(' . "'end')"));
      $x->tr();

      $x->td('float-none');
      $x->td($x->code('$x->float(' . "'none')"));
      $x->tr();

      $x->td('float-sm-start');
      $x->td($x->code('$x->float(' . "'sm-start')"));
      $x->tr();

      $x->td('float-sm-end');
      $x->td($x->code('$x->float(' . "'sm-end')"));
      $x->tr();

      $x->td('float-sm-none');
      $x->td($x->code('$x->float(' . "'sm-none')"));
      $x->tr();

      $x->td('float-md-start');
      $x->td($x->code('$x->float(' . "'md-start')"));
      $x->tr();

      $x->td('float-md-end');
      $x->td($x->code('$x->float(' . "'md-end')"));
      $x->tr();

      $x->td('float-md-none');
      $x->td($x->code('$x->float(' . "'md-none')"));
      $x->tr();

      $x->td('float-lg-start');
      $x->td($x->code('$x->float(' . "'lg-start')"));
      $x->tr();

      $x->td('float-lg-end');
      $x->td($x->code('$x->float(' . "'lg-end')"));
      $x->tr();

      $x->td('float-lg-none');
      $x->td($x->code('$x->float(' . "'lg-none')"));
      $x->tr();

      $x->td('float-xl-start');
      $x->td($x->code('$x->float(' . "'xl-start')"));
      $x->tr();

      $x->td('float-xl-end');
      $x->td($x->code('$x->float(' . "'xl-end')"));
      $x->tr();

      $x->td('float-xl-none');
      $x->td($x->code('$x->float(' . "'xl-none')"));
      $x->tr();

      $x->td('float-xxl-start');
      $x->td($x->code('$x->float(' . "'xxl-start')"));
      $x->tr();

      $x->td('float-xxl-end');
      $x->td($x->code('$x->float(' . "'xxl-end')"));
      $x->tr();

      $x->td('float-xxl-none');
      $x->td($x->code('$x->float(' . "'xxl-none')"));
      $x->tr();

      $p = $x->class('table')->table();
      $x->div($p);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Float');
      $content .= $x->text('center')->lead('Toggle floats on any element, across any breakpoint, using our responsive float utilities.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'interactions') {

      $p = $x->id('text')->h4('Text Selection');
      $p .= $x->p('Change the way in which the content is selected when the user interacts with it.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->userselect('all')->p('This paragraph will be entirely selected when clicked by the user.')
        . $x->userselect('auto')->p('This paragraph has default select behavior.')
        . $x->userselect('none')->p('This paragraph will not be selectable when clicked by the user.');
      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('userselect(')
        . $x->text('warning')->span("'all'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . PHP_EOL
        . ' ' . $x->text('warning')->span("'This paragraph will be entirely selected when clicked by the user.'")
        . PHP_EOL
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('userselect(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . PHP_EOL
        . ' ' . $x->text('warning')->span("'This paragraph has default select behavior.'")
        . PHP_EOL
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('userselect(')
        . $x->text('warning')->span("'none'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . PHP_EOL
        . ' ' . $x->text('warning')->span("'This paragraph will not be selectable when clicked by the user.'")
        . PHP_EOL
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<p class="user-select-all">' . PHP_EOL
        . ' This paragraph will be entirely selected when clicked by the user.' . PHP_EOL
        . '</p>' . PHP_EOL
        . '<p class="user-select-auto">' . PHP_EOL
        . ' This paragraph has default select behavior.' . PHP_EOL
        . '</p>' . PHP_EOL
        . '<p class="user-select-none">' . PHP_EOL
        . ' This paragraph will not be selectable when clicked by the user.' . PHP_EOL
        . '</p>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Text Selection', null, $p
      );

      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('pointer')->h4('Pointer Events');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Bootstrap provides .pe-none and .pe-auto classes to prevent or add element interactions.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $a = $x->href('#')
        ->pe('none')
        ->tabindex('-1')
        ->aria('disabled', 'true')
        ->a('This link');
      $p = $x->p($a . ' can not be clicked.');

      $a = $x->href('#')
        ->pe()
        ->a('This link');
      $p .= $x->p($a . ' can be clicked (this is default behavior).');

      $a = $x->href('#')
        ->tabindex('-1')
        ->aria('disabled', 'true')
        ->a('This link');
      $a2 = $x->href('#')
        ->pe()
        ->a('this link');
      $p .= $x->pe('none')->p($a . ' can not be clicked because the <code>pointer-events</code> property is inherited from its parent. However, ' . $a2 . ' has a <code>pe-auto</code> class and can be clicked.');

      $x->class('card p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $a1 = $dollar . $x->text('danger')->span('a1');
      $a2 = $dollar . $x->text('danger')->span('a2');
      $a3 = $dollar . $x->text('danger')->span('a3');

      $p = $dollar . $x->text('danger')->span('a1')
        . ' = ' . $xx . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pe(')
        . $x->text('warning')->span("'none'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('tabindex(')
        . $x->text('warning')->span("'-1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'disabled', 'true'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'This link'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('a2')
        . ' = ' . $xx . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pe(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'This link'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('a3')
        . ' = ' . $xx . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('tabindex(')
        . $x->text('warning')->span("'-1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'disabled', 'true'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'This link'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span($a1 . " . ' can not be clicked.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span($a2 . " . ' can be clicked (this is default behavior).'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('pe(')
        . $x->text('warning')->span("'none'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . PHP_EOL
        . ' ' . $x->text('warning')->span($a3
          . PHP_EOL
          . " . 'can not be clicked because the pointer-events property is inherited from its parent. However,' "
          . PHP_EOL
          . ' . ' . $a2
          . PHP_EOL
          . " . 'has a pe-auto class and can be clicked.'")
        . PHP_EOL
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<p>' . PHP_EOL
        . ' <a href="#" class="pe-none" tabindex="-1" aria-disabled="true">' . PHP_EOL
        . '   This link' . PHP_EOL
        . ' </a>' . PHP_EOL
        . ' can not be clicked.' . PHP_EOL
        . '</p>' . PHP_EOL
        . '<p>' . PHP_EOL
        . ' <a href="#" class="pe-auto">' . PHP_EOL
        . '   This link' . PHP_EOL
        . ' </a>' . PHP_EOL
        . ' can be clicked (this is default behavior).' . PHP_EOL
        . '</p>' . PHP_EOL
        . '<p class="pe-none">' . PHP_EOL
        . ' <a href="#" tabindex="-1" aria-disabled="true">' . PHP_EOL
        . '   This link' . PHP_EOL
        . ' </a>' . PHP_EOL
        . ' can not be clicked because the ' . PHP_EOL
        . ' <code>' . PHP_EOL
        . '   pointer-events' . PHP_EOL
        . ' </code>' . PHP_EOL
        . ' property is inherited from its parent. However,' . PHP_EOL
        . ' <a href="#" class="pe-auto">' . PHP_EOL
        . '   this link' . PHP_EOL
        . ' </a>' . PHP_EOL
        . ' has a ' . PHP_EOL
        . ' <code>' . PHP_EOL
        . '   pe-auto' . PHP_EOL
        . ' </code>' . PHP_EOL
        . ' class and can be clicked.' . PHP_EOL
        . '</p>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Pointer Events', null, $p
      );

      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Interactions');
      $content .= $x->text('center')->lead('Utility classes that change how users interact with contents of a website.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'overflow') {

      $p = $x->p('Adjust the overflow property on the fly with four default values and classes. These classes are not responsive by default.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->overflow('auto')->pad(2)->astyle('max-width: 260px; max-height: 100px;')->adiv('This is an example of using .overflow-auto on an element with set width and height dimensions. By design, this content will vertically scroll.');
      $p .= $x->overflow('hidden')->pad(2)->astyle('max-width: 260px; max-height: 100px;')->adiv('This is an example of using <code>.overflow-hidden</code> on an element with set width and height dimensions.');
      $p .= $x->overflow('visible')->pad(2)->astyle('max-width: 260px; max-height: 100px;')->adiv('This is an example of using .overflow-visible on an element with set width and height dimensions.');
      $p .= $x->overflow('scroll')->pad(2)->astyle('max-width: 260px; max-height: 100px;')->adiv('This is an example of using .overflow-scroll on an element with set width and height dimensions.');

      $x->d('flex')->border()->class('p-3')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('overflow(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('overflow(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('overflow(')
        . $x->text('warning')->span("'visible'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('overflow(')
        . $x->text('warning')->span("'scroll'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="overflow-auto">...</div>' . PHP_EOL
        . '<div class="overflow-hidden">...</div>' . PHP_EOL
        . '<div class="overflow-visible">...</div>' . PHP_EOL
        . '<div class="overflow-scroll">...</div>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Overflow', null, $p
      );

      $x->col()->div();
      $x->col(8)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Overflow');
      $content .= $x->text('center')->lead('Use these shorthand utilities for quickly configuring how content overflows an element.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'position') {

      $p = $x->id('values')->h4('Position Values');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Quick positioning classes are available, though they are not responsive.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'static'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'fixed'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'sticky'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="position-static">...</div>' . PHP_EOL
        . '<div class="position-relative">...</div>' . PHP_EOL
        . '<div class="position-absolute">...</div>' . PHP_EOL
        . '<div class="position-fixed">...</div>' . PHP_EOL
        . '<div class="position-sticky">...</div>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Values', null, $p
      );

      $x->col()->div();
      $x->col(8)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('arrange')->h4('Arrange Elements');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Arrange elements easily with the edge positioning utilities. The format is {property}-{position}.');
      $x->text('center')->div($p);
      $x->row();

      $x->li($x->code('top') . ' - for the vertical ' . $x->code('top') . ' position');
      $x->li($x->code('start') . ' - for the horizontal ' . $x->code('left') . ' position (in LTR)');
      $x->li($x->code('bottom') . ' - for the vertical ' . $x->code('bottom') . ' position');
      $x->li($x->code('end') . ' - for the horizontal ' . $x->code('right') . ' position (in LTR)');
      $ul1 = $x->ul();

      $x->li($x->code('0') . ' - for ' . $x->code('0') . ' edge position');
      $x->li($x->code('50') . ' - for ' . $x->code('50%') . ' edge position');
      $x->li($x->code('100') . ' - for ' . $x->code('100%') . ' edge position');
      $ul2 = $x->ul();

      $p = 'Where ' . $x->i('property') . ' is one of:'
        . $ul1
        . 'Where ' . $x->i('position') . ' is one of:'
        . $ul2
        . '(You can add more position values by adding entries to the '
        . $x->code('$position-values')
        . ' Sass map variable.)';

      $x->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->position('absolute')->top('0')->start('0')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('1')
        . $x->position('absolute')->top('0')->end('0')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('2')
        . $x->position('absolute')->top('50')->start('50')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('3')
        . $x->position('absolute')->bottom('50')->end('50')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('4')
        . $x->position('absolute')->bottom('0')->start('0')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('5')
        . $x->position('absolute')->bottom('0')->end('0')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('6');

      $p = $x->position('relative')->astyle('height: 200px;')->bg('secondary')->adiv($p);
      $p = $x->pad(3)->adiv($p);

      $x->border()->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $divs = $dollar . $x->text('danger')->span('divs');

      $p = $divs
        . ' = ' . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('end(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bottm(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('end(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'4'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bottom(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'5'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bottom(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('end(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'6'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span($divs)
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="position-relative">' . PHP_EOL
        . ' <div class="position-absolute top-0 start-0">1</div>' . PHP_EOL
        . ' <div class="position-absolute top-0 end-0">2</div>' . PHP_EOL
        . ' <div class="position-absolute top-50 start-50">3</div>' . PHP_EOL
        . ' <div class="position-absolute bottom-50 end-50">4</div>' . PHP_EOL
        . ' <div class="position-absolute bottom-0 start-0">5</div>' . PHP_EOL
        . ' <div class="position-absolute bottom-0 end-0">6</div>' . PHP_EOL
        . '</div>'
      );

      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Arrange Elements', null, $p
      );

      $x->col()->div();
      $x->col(8)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('center')->h4('Center Elements');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('In addition, you can also center the elements with the transform utility class .translate-middle.')
        . $x->p('This class applies the transformations translateX(-50%) and translateY(-50%) to the element which, in combination with the edge positioning utilities, allows you to absolute center an element.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->position('absolute')->top('0')->start('0')->translate('middle')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('1')
        . $x->position('absolute')->top('0')->start('50')->translate('middle')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('2')
        . $x->position('absolute')->top('0')->start('100')->translate('middle')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('3')
        . $x->position('absolute')->top('50')->start('0')->translate('middle')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('4')
        . $x->position('absolute')->top('50')->start('50')->translate('middle')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('5')
        . $x->position('absolute')->top('50')->start('100')->translate('middle')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('6')
        . $x->position('absolute')->top('100')->start('0')->translate('middle')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('7')
        . $x->position('absolute')->top('100')->start('50')->translate('middle')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('8')
        . $x->position('absolute')->top('100')->start('100')->translate('middle')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('9');

      $p = $x->position('relative')->astyle('height: 200px;')->bg('secondary')->adiv($p);
      $p = $x->pad(3)->adiv($p);

      $x->border()->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $divs
        . ' = ' . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'100'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'4'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'5'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'100'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'6'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'100'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'7'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'100'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'8'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'100'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'100'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'9'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span($divs)
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="position-relative">' . PHP_EOL
        . ' <div class="position-absolute top-0 start-0 translate-middle">1</div>' . PHP_EOL
        . ' <div class="position-absolute top-0 start-50 translate-middle">2</div>' . PHP_EOL
        . ' <div class="position-absolute top-0 start-100 translate-middle">3</div>' . PHP_EOL
        . ' <div class="position-absolute top-50 start-0 translate-middle">4</div>' . PHP_EOL
        . ' <div class="position-absolute top-50 start-50 translate-middle">5</div>' . PHP_EOL
        . ' <div class="position-absolute top-50 start-100 translate-middle">6</div>' . PHP_EOL
        . ' <div class="position-absolute top-100 start-0 translate-middle">7</div>' . PHP_EOL
        . ' <div class="position-absolute top-100 start-50 translate-middle">8</div>' . PHP_EOL
        . ' <div class="position-absolute top-100 start-100 translate-middle">9</div>' . PHP_EOL
        . '</div>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Center Elements', null, $p
      );

      $x->col()->div();
      $x->col(8)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('By adding .translate-middle-x or .translate-middle-y classes, elements can be positioned only in horizontal or vertical direction.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->position('absolute')->top('0')->start('0')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('1')
        . $x->position('absolute')->top('0')->start('50')->translate('middle-x')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('2')
        . $x->position('absolute')->top('0')->end('0')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('3')
        . $x->position('absolute')->top('50')->start('0')->translate('middle-y')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('4')
        . $x->position('absolute')->top('50')->start('50')->translate('middle')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('5')
        . $x->position('absolute')->top('50')->end('0')->translate('middle-y')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('6')
        . $x->position('absolute')->bottom('0')->start('0')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('7')
        . $x->position('absolute')->bottom('0')->start('50')->translate('middle-x')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('8')
        . $x->position('absolute')->bottom('0')->end('0')->astyle('width: 30px; height: 30px;')->bg('dark')->rounded()->text('white')->text('center')->adiv('9');

      $p = $x->position('relative')->astyle('height: 200px;')->bg('secondary')->adiv($p);
      $p = $x->pad(3)->adiv($p);

      $x->border()->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $divs
        . ' = ' . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle-x'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('end(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle-y'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'4'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'5'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('end(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle-y'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'6'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bottom(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'7'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bottom(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span("'50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle-x'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'8'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $x->text('warning')->span(' . ')
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bottom(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('end(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'9'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content')
        . ' = ' . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span($divs)
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="position-relative">' . PHP_EOL
        . ' <div class="position-absolute top-0 start-0">1</div>' . PHP_EOL
        . ' <div class="position-absolute top-0 start-50 translate-middle-x">2</div>' . PHP_EOL
        . ' <div class="position-absolute top-0 end-0">3</div>' . PHP_EOL
        . ' <div class="position-absolute top-50 start-0 translate-middle-y">4</div>' . PHP_EOL
        . ' <div class="position-absolute top-50 start-50 translate-middle">5</div>' . PHP_EOL
        . ' <div class="position-absolute top-50 end-0 translate-middle-y">6</div>' . PHP_EOL
        . ' <div class="position-absolute bottom-0 start-0">7</div>' . PHP_EOL
        . ' <div class="position-absolute bottom-0 start-50 translate-middle-x">8</div>' . PHP_EOL
        . ' <div class="position-absolute bottom-0 end-0">9</div>' . PHP_EOL
        . '</div>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'middle-x & middle-y', null, $p
      );

      $x->col()->div();
      $x->col(8)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('examples')->h4('Examples');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Here are some real life examples of these classes:');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->visually('hidden')->span('unread messages');
      $p = $x->position('absolute')->top(0)->start(100)->translate('middle')->rounded('pill')->bg('secondary')->badge('+99' . $p);
      $btn = $x->position('relative')->btn('Mails' . $p);

      $p = html::make()->d('M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z')->path();
      $p = $x->width('1em')->height('1em')->viewbox('0 0 16 16')->position('absolute')->top(100)->start(50)->translate('middle')->mt(1)->bi()->bi('caret-down-fill')->fill('#212529')->xmlns('http://www.w3.org/2000/svg')->svg($p);
      $btn .= $x->position('relative')->dark()->btn('Marker' . $p);

      $p = $x->visually('hidden')->span('unread messages');
      $p = $x->position('absolute')->top(0)->start(100)->translate('middle')->border()->border('light')->rounded('circle')->bg('danger')->pad(2)->badge($p);
      $btn .= $x->position('relative')->btn('Alerts' . $p);

      $x->d('flex')->justify('content-around')->border()->pad(3)->div($btn);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'unread messages'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span('0')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span('100')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('badge()')
        . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("'pill'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'Mails ' . ")
        . $dollar . $x->text('danger')->span('span')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('btn') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $dollar . $x->text('danger')->span('span')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('path') . ' = '
        . $x->text('warning')->span('html')
        . '::' . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('path()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('svg') . ' = '
        . $xx . '->' . $x->text('info')->span('width(')
        . $x->text('warning')->span("'1em'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('height(')
        . $x->text('warning')->span("'1em'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('viewbox(')
        . $x->text('warning')->span("'0 0 16 16'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span('100')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mt(')
        . $x->text('warning')->span("1")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bi()')
        . '->' . $x->text('info')->span('bi(')
        . $x->text('warning')->span('caret-down-fill')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('fill(')
        . $x->text('warning')->span("'#212529'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('xmlns(')
        . $x->text('warning')->span("'http://www.w3.org/2000/svg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('svg(')
        . $dollar . $x->text('danger')->span('path')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('btn') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'dark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Marker ' . ")
        . $dollar . $x->text('danger')->span('svg')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'unread messages'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span('0')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span('100')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('badge()')
        . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('info')->span('border(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("'circle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'danger'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $dollar . $x->text('danger')->span('span')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('btn') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Alerts ' . ")
        . $dollar . $x->text('danger')->span('span')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<button type="button" class="btn btn-primary position-relative">' . PHP_EOL
        . ' Mails <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+99 <span class="visually-hidden">unread messages</span></span>' . PHP_EOL
        . '</button>' . PHP_EOL
        . PHP_EOL
        . '<button type="button" class="btn btn-dark position-relative">' . PHP_EOL
        . ' Marker <svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill" fill="#212529" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>' . PHP_EOL
        . '</button>' . PHP_EOL
        . PHP_EOL
        . '<button type="button" class="btn btn-primary position-relative">' . PHP_EOL
        . ' Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>' . PHP_EOL
        . '</button>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Buttons', null, $p
      );

      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();

      $x->div($br);
      $x->row();

      $p = $x->p('You can use these classes with existing components to create new ones. Remember that you can extend its functionality by adding entries to the $position-values variable.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->progress('bar')->role('progressbar')->astyle('width: 50%;')->aria('valuenow', '50')->aria('valuemin', '0')->aria('valuemax', '100')->adiv();
      $p = $x->progress()->astyle('height: 1px;')->adiv($p);
      $p .= $x->type('button')->position('absolute')->top(0)->start(0)->translate('middle')->cbtn()->cbtn('sm')->cbtn('primary')->rounded('pill')->astyle('width: 2rem; height: 2rem;')->button('1');
      $p .= $x->type('button')->position('absolute')->top(0)->start(50)->translate('middle')->cbtn()->cbtn('sm')->cbtn('primary')->rounded('pill')->astyle('width: 2rem; height: 2rem;')->button('2');
      $p .= $x->type('button')->position('absolute')->top(0)->start(100)->translate('middle')->cbtn()->cbtn('sm')->cbtn('secondary')->rounded('pill')->astyle('width: 2rem; height: 2rem;')->button('3');
      $p = $x->position('relative')->m(4)->adiv($p);
      $x->col()->div();
      $x->col(10)->border()->pad(3)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('progress(')
        . $x->text('warning')->span("'bar'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('role(')
        . $x->text('warning')->span("'progressbar'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'width: 50%;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'valuenow', '50'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'valuemin', '0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'valuemax', '100'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('progress()')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'height: 1px;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span('0')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span('0')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("'pill'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'width: 2rem; height: 2rem;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span('0')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span('50')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("'pill'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'width: 2rem; height: 2rem;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'absolute'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('top(')
        . $x->text('warning')->span('0')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('start(')
        . $x->text('warning')->span('100')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('translate(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('rounded(')
        . $x->text('warning')->span("'pill'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'width: 2rem; height: 2rem;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('m(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('container()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="position-relative m-4">' . PHP_EOL
        . ' <div class="progress" style="height: 1px;">' . PHP_EOL
        . '   <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>' . PHP_EOL
        . ' <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>' . PHP_EOL
        . ' <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Progress', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Position');
      $content .= $x->text('center')->lead('Use these shorthand utilities for quickly configuring the position of an element.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'shadow') {

      $p = $x->id('examples')->h4('Examples');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('While shadows on components are disabled by default in Bootstrap and can be enabled via $enable-shadows, you can also quickly add or remove a shadow with our box-shadow utility classes. Includes support for .shadow-none and three default sizes (which have associated variables to match).');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->shadow('none')->pad(3)->mb(5)->bg('light')->rounded()->adiv('No Shadow');
      $p .= $x->shadow('sm')->pad(3)->mb(5)->bg('body')->rounded()->adiv('Small Shadow');
      $p .= $x->shadow()->pad(3)->mb(5)->bg('body')->rounded()->adiv('Regular Shadow');
      $p .= $x->shadow('lg')->pad(3)->mb(5)->bg('body')->rounded()->adiv('Larger Shadow');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('shadow(')
        . $x->text('warning')->span("'none'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('5')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('rounded()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'No Shadow'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('shadow(')
        . $x->text('warning')->span("'sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('5')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'body'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('rounded()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Small Shadow'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('shadow()')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('5')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'body'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('rounded()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Regular Shadow'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('shadow(')
        . $x->text('warning')->span("'lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span('5')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'body'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('rounded()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Larger Shadow'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('container()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>' . PHP_EOL
        . '<div class="shadow-sm p-3 mb-5 bg-body rounded">Small shadow</div>' . PHP_EOL
        . '<div class="shadow p-3 mb-5 bg-body rounded">Regular shadow</div>' . PHP_EOL
        . '<div class="shadow-lg p-3 mb-5 bg-body rounded">Larger shadow</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Shadows', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Shadow');
      $content .= $x->text('center')->lead('Add or remove shadows to elements with box-shadow utilities.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'sizing') {

      $p = $x->id('parent')->h4('Relative to the parent');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Width and height utilities are generated from the utility API in _utilities.scss. Includes support for 25%, 50%, 75%, 100%, and auto by default. Modify those values as you need to generate different utilities here.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->w(25)->pad(3)->astyle('background-color: #eee')->adiv('Width 25%')
        . $x->w(50)->pad(3)->astyle('background-color: #eee')->adiv('Width 50%')
        . $x->w(75)->pad(3)->astyle('background-color: #eee')->adiv('Width 75%')
        . $x->w(100)->pad(3)->astyle('background-color: #eee')->adiv('Width 100%')
        . $x->w('auto')->pad(3)->astyle('background-color: #eee')->adiv('Width auto');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('w(')
        . $x->text('warning')->span('25')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'background-color: #eee;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Width 25%'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' .= '
        . $xx . '->' . $x->text('info')->span('w(')
        . $x->text('warning')->span('50')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'background-color: #eee;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Width 50%'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' .= '
        . $xx . '->' . $x->text('info')->span('w(')
        . $x->text('warning')->span('75')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'background-color: #eee;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Width 75%'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' .= '
        . $xx . '->' . $x->text('info')->span('w(')
        . $x->text('warning')->span('100')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'background-color: #eee;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Width 100%'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' .= '
        . $xx . '->' . $x->text('info')->span('w(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'background-color: #eee;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Width auto'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('container()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="border p-3">' . PHP_EOL
        . ' <div class="w-25 p-3" style="background-color: #eee;">Width 25%</div>' . PHP_EOL
        . ' <div class="w-50 p-3" style="background-color: #eee;">Width 50%</div>' . PHP_EOL
        . ' <div class="w-75 p-3" style="background-color: #eee;">Width 75%</div>' . PHP_EOL
        . ' <div class="w-100 p-3" style="background-color: #eee;">Width 100%</div>' . PHP_EOL
        . ' <div class="w-auto p-3" style="background-color: #eee;">Width auto</div>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Relative', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->h(25)->d('inline-block')->astyle('width: 120px; background-color: rgba(0,0,255,.1)')->adiv('Height 25%')
        . $x->h(50)->d('inline-block')->astyle('width: 120px; background-color: rgba(0,0,255,.1)')->adiv('Height 50%')
        . $x->h(75)->d('inline-block')->astyle('width: 120px; background-color: rgba(0,0,255,.1)')->adiv('Height 75%')
        . $x->h(100)->d('inline-block')->astyle('width: 120px; background-color: rgba(0,0,255,.1)')->adiv('Height 100%')
        . $x->h('auto')->d('inline-block')->astyle('width: 120px; background-color: rgba(0,0,255,.1)')->adiv('Height auto');
      $p = $x->astyle('height: 100px; background-color: rgba(255,0,0,0.1);')->adiv($p);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('h(')
        . $x->text('warning')->span('25')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'inline-block'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'width: 120px; background-color: rgba(0,0,255,.1)'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Height 25%'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' .= '
        . $xx . '->' . $x->text('info')->span('h(')
        . $x->text('warning')->span('50')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'inline-block'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'width: 120px; background-color: rgba(0,0,255,.1)'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Height 50%'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' .= '
        . $xx . '->' . $x->text('info')->span('h(')
        . $x->text('warning')->span('75')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'inline-block'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'width: 120px; background-color: rgba(0,0,255,.1)'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Height 75%'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' .= '
        . $xx . '->' . $x->text('info')->span('h(')
        . $x->text('warning')->span('100')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'inline-block'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'width: 120px; background-color: rgba(0,0,255,.1)'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Height 100%'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' .= '
        . $xx . '->' . $x->text('info')->span('h(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('d(')
        . $x->text('warning')->span("'inline-block'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'width: 120px; background-color: rgba(0,0,255,.1)'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Height auto'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'height: 100px; background-color: rgba(255,0,0,0.1);'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('container()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div style="height: 100px; background-color: rgba(255,0,0,0.1);">' . PHP_EOL
        . ' <div class="h-25 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 25%</div>' . PHP_EOL
        . ' <div class="h-50 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 50%</div>' . PHP_EOL
        . ' <div class="h-75 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 75%</div>' . PHP_EOL
        . ' <div class="h-100 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 100%</div>' . PHP_EOL
        . ' <div class="h-auto d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height auto</div>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Height', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('You can also use max-width: 100%; and max-height: 100%; utilities as needed.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('src(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mw(')
        . $x->text('warning')->span('100')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('alt(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('img()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<img src="..." class="mw-100" alt="...">' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Max Width', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->mh(100)->astyle('width: 100px; height: 200px; background-color: rgba(0,0,255,.1);')->adiv('Max-height 100%');
      $p = $x->astyle('height: 100px; background-color: rgba(255,0,0,.1);')->adiv($p);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('mh(')
        . $x->text('warning')->span('100')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'width: 100px; height: 200px; background-color: rgba(0,0,255,.1);'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Max-height 100%'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'height: 100px; background-color: rgba(255,0,0,.1);'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('container()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div style="height: 100px; background-color: rgba(255,0,0,.1);">' . PHP_EOL
        . ' <div class="mh-100" style="width: 100px; height: 200px; background-color: rgba(0,0,255,.1);">Max-height 100%</div>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Max Height', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('viewport')->h4('Relative to the Viewport');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('You can also use utilities to set the width and height relative to the viewport.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('minvw(')
        . $x->text('warning')->span('100')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Min-width 100vw'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('minvh(')
        . $x->text('warning')->span('100')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Min-height 100vh'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('vw(')
        . $x->text('warning')->span('100')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Width 100vw'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('vh(')
        . $x->text('warning')->span('100')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'Height 100vh'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="min-vw-100">Min-width 100vw</div>' . PHP_EOL
        . '<div class="min-vh-100">Min-height 100vh</div>' . PHP_EOL
        . '<div class="vw-100">Width 100vw</div>' . PHP_EOL
        . '<div class="vh-100">Height 100vh</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Viewport', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Sizing');
      $content .= $x->text('center')->lead('Easily make an element as wide or as tall with our width and height utilities.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'spacing') {

      $p = $x->id('margin')->h4('Margin and Padding');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Assign responsive-friendly margin or padding values to an element or a subset of its sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. Classes are built from a default Sass map ranging from .25rem to 3rem.')
        . $x->p('Using the CSS Grid layout module? Consider using the gap utility.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('notation')->h4('Notation');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Spacing utilities that apply to all breakpoints, from xs to xxl, have no breakpoint abbreviation in them. This is because those classes are applied from min-width: 0 and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.')
        . $x->p('The classes are named using the format {property}{sides}-{size} for xs and {property}{sides}-{breakpoint}-{size} for sm, md, lg, xl, and xxl.');
      $x->text('center')->div($p);
      $x->row();

      $x->li('m - for classes that set margin');
      $x->li('p - for classes that set padding');
      $p = 'Where ' . $x->i('property') . ' is one of:' . $x->ul();
      $x->div($p);
      $x->row();

      $x->li('t - for classes that set margin-top or padding-top');
      $x->li('b - for classes that set margin-bottom or padding-bottom');
      $x->li('s - (start) for classes that set margin-left or padding-left in LTR, margin-right or padding-right in RTL');
      $x->li('e - (end) for classes that set margin-right or padding-right in LTR, margin-left or padding-left in RTL');
      $x->li('x - for classes that set both *-left and *-right');
      $x->li('y - for classes that set both *-top and *-bottom');
      $x->li('blank - for classes that set a margin or padding on all 4 sides of the element');
      $p = 'Where ' . $x->i('sides') . ' is one of:' . $x->ul();
      $x->div($p);
      $x->row();

      $x->li('0 - for classes that eliminate the margin or padding by setting it to 0');
      $x->li('1 - (by default) for classes that set the margin or padding to $spacer * .25');
      $x->li('2 - (by default) for classes that set the margin or padding to $spacer * .5');
      $x->li('3 - (by default) for classes that set the margin or padding to $spacer');
      $x->li('4 - (by default) for classes that set the margin or padding to $spacer * 1.5');
      $x->li('5 - (by default) for classes that set the margin or padding to $spacer * 3');
      $x->li('auto - for classes that set the margin to auto');
      $p = 'Where ' . $x->i('size') . ' is one of:' . $x->ul() . '(You can add more sizes by adding entries to the $spacers Sass map variable.)';
      $x->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('examples')->h4('Examples');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Here are some representative examples of these classes:');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = '.mt-0 {' . PHP_EOL
        . ' margin-top: 0 !important;' . PHP_EOL
        . '}' . PHP_EOL
        . PHP_EOL
        . '.ms-1 {' . PHP_EOL
        . ' margin-left: ($spacer * .25) !important;' . PHP_EOL
        . '}' . PHP_EOL
        . PHP_EOL
        . '.px-2 {' . PHP_EOL
        . ' padding-left: ($spacer * .5) !important;' . PHP_EOL
        . ' padding-right: ($spacer * .5) !important;' . PHP_EOL
        . '}' . PHP_EOL
        . PHP_EOL
        . '.p-3 {' . PHP_EOL
        . ' padding: $spacer !important;' . PHP_EOL
        . '}' . PHP_EOL;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Examples', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('centering')->h4('Horizontal Centering');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Additionally, Bootstrap also includes an .mx-auto class for horizontally centering fixed-width block level content—that is, content that has display: block and a width set—by setting the horizontal margins to auto.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->mx('auto')->bg('light')->astyle('width: 200px;')->adiv('Centered element');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('mx(')
       . $x->text('warning')->span("'auto'")
       . $x->text('info')->span(')')
       . '->' . $x->text('info')->span('bg(')
       . $x->text('warning')->span("'light'")
       . $x->text('info')->span(')')
       . '->' . $x->text('info')->span('astyle(')
       . $x->text('warning')->span("'width: 200px;'")
       . $x->text('info')->span(')')
       . '->' . $x->text('info')->span('div(')
       . $x->text('warning')->span("'Centered element'")
       . $x->text('info')->span(')') . $colon
       . PHP_EOL
       . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="mx-auto bg-light" style="width: 200px;">' . PHP_EOL
        . ' Centered element' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Centering', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('negative')->h4('Negative Margin');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('In CSS, margin properties can utilize negative values (padding cannot). These negative margins are disabled by default, but can be enabled in Sass by setting $enable-negative-margins: true.')
        . $x->p('The syntax is nearly the same as the default, positive margin utilities, but with the addition of n before the requested size. Here’s an example class that’s the opposite of .mt-1:');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = '.mt-n1 {' . PHP_EOL
        . ' margin-top: -0.25rem !important;' . PHP_EOL
        . '}' . PHP_EOL;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Negative Margin', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('gap')->h4('Gap');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('When using display: grid, you can make use of gap utilities on the parent grid container. This can save on having to add margin utilities to individual grid items (children of a display: grid container). Gap utilities are responsive by default, and are generated via our utilities API, based on the $spacers Sass map.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->pad(2)->bg('light')->border()->adiv('Grid item 1')
        . $x->pad(2)->bg('light')->border()->adiv('Grid item 2')
        . $x->pad(2)->bg('light')->border()->adiv('Grid item 3');
      $p = $x->d('grid')->gap(3)->adiv($p);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('div') . ' = '
       . $xx . '->' . $x->text('info')->span('pad(')
       . $x->text('warning')->span('2')
       . $x->text('info')->span(')')
       . '->' . $x->text('info')->span('bg(')
       . $x->text('warning')->span("'light'")
       . $x->text('info')->span(')')
       . '->' . $x->text('info')->span('border()')
       . '->' . $x->text('info')->span('adiv(')
       . $x->text('warning')->span("'Grid item 1'")
       . $x->text('info')->span(')') . $colon
       . PHP_EOL
       . $dollar . $x->text('danger')->span('div') . ' .= '
        . $xx . '->' . $x->text('info')->span('pad(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('border()')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Grid item 2'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' .= '
         . $xx . '->' . $x->text('info')->span('pad(')
         . $x->text('warning')->span('2')
         . $x->text('info')->span(')')
         . '->' . $x->text('info')->span('bg(')
         . $x->text('warning')->span("'light'")
         . $x->text('info')->span(')')
         . '->' . $x->text('info')->span('border()')
         . '->' . $x->text('info')->span('adiv(')
         . $x->text('warning')->span("'Grid item 3'")
         . $x->text('info')->span(')') . $colon
         . PHP_EOL
         . $xx . '->' . $x->text('info')->span('d(')
         . $x->text('warning')->span("'grid'")
         . $x->text('info')->span(')')
         . '->' . $x->text('info')->span('gap(')
         . $x->text('warning')->span('3')
         . $x->text('info')->span(')')
         . '->' . $x->text('info')->span('div(')
         . $dollar . $x->text('danger')->span('div')
         . $x->text('info')->span(')') . $colon
         . PHP_EOL;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Gap', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('Support includes responsive options for all of Bootstrap’s grid breakpoints, as well as six sizes from the $spacers map (0–5). There is no .gap-auto utility class as it’s effectively the same as .gap-0.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Spacing');
      $content .= $x->text('center')->lead('Bootstrap includes a wide range of shorthand responsive margin, padding, and gap utility classes to modify an element’s appearance.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'text') {

      $p = $x->id('alignment')->h4('Text Alignment');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Easily realign text to components with text alignment classes. For start, end, and center alignment, responsive classes are available that use the same viewport width breakpoints as the grid system.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->text('start')->p('Start aligned text on all viewport sizes.')
        . $x->text('center')->p('Center aligned text on all viewport sizes.')
        . $x->text('end')->p('End aligned text on all viewport sizes.')
        . $x->text('sm-start')->p('Start aligned text on viewports sized SM (small) or wider.')
        . $x->text('md-start')->p('Start aligned text on viewports sized MD (medium) or wider.')
        . $x->text('lg-start')->p('Start aligned text on viewports sized LG (large) or wider.')
        . $x->text('xl-start')->p('Start aligned text on viewports sized XL (extra-large) or wider.');

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'start'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Start aligned text on all viewport sizes.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' .= '
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'center'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Center aligned text on all viewport sizes.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' .= '
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'end'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'End aligned text on all viewport sizes.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' .= '
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'sm-start'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Start aligned text on viewports sized SM (small) or wider.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' .= '
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'md-start'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Start aligned text on viewports sized MD (medium) or wider.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' .= '
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'lg-start'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Start aligned text on viewports sized LG (large) or wider.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' .= '
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'xl-start'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Start aligned text on viewports sized XL (extra-large) or wider.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<p class="text-start">Start aligned text on all viewport sizes.</p>' . PHP_EOL
        . '<p class="text-center">Center aligned text on all viewport sizes.</p>' . PHP_EOL
        . '<p class="text-end">End aligned text on all viewport sizes.</p>' . PHP_EOL
        . '<p class="text-sm-start">Start aligned text on viewports sized SM (small) or wider.</p>' . PHP_EOL
        . '<p class="text-md-start">Start aligned text on viewports sized MD (medium) or wider.</p>' . PHP_EOL
        . '<p class="text-lg-start">Start aligned text on viewports sized LG (large) or wider.</p>' . PHP_EOL
        . '<p class="text-xl-start">Start aligned text on viewports sized XL (extra-large) or wider.</p>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Alignment', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('Note that we don’t provide utility classes for justified text. While, aesthetically, justified text might look more appealing, it does make word-spacing more random and therefore harder to read.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('wrapping')->h4('Text Wrapping and Overflow');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Wrap text with a .text-wrap class.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->class('badge')->bg('primary')->text('wrap')->astyle('width: 6rem;')->adiv('This text should wrap');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('class(')
       . $x->text('warning')->span("'badge'")
       . $x->text('info')->span(')')
       . '->' . $x->text('info')->span('bg(')
       . $x->text('warning')->span("'primary'")
       . $x->text('info')->span(')')
       . '->' . $x->text('info')->span('text(')
       . $x->text('warning')->span("'wrap'")
       . $x->text('info')->span(')')
       . '->' . $x->text('info')->span('astyle(')
       . $x->text('warning')->span("'width: 6rem;'")
       . $x->text('info')->span(')')
       . '->' . $x->text('info')->span('div(')
       . $x->text('warning')->span("'This text should wrap'")
       . $x->text('info')->span(')') . $colon
       . PHP_EOL
       . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="badge bg-primary text-wrap" style="width: 6rem;">' . PHP_EOL
        . ' This text should wrap.' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Wrapping', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('Prevent text from wrapping with a .text-nowrap class.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->text('nowrap')->bg('warning')->astyle('width: 8rem;')->adiv('This text should overflow the parent');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'nowrap'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('bg(')
        . $x->text('warning')->span("'warning'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'width: 8rem;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'This text should overflow the parent.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="text-nowrap bg-warning" style="width: 8rem;">' . PHP_EOL
        . ' This text should overflow the parent.' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Overflow', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('break')->h4('Word Break');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p("Prevent long strings of text from breaking your components' layout by using .text-break to set word-wrap: break-word and word-break: break-word. We use word-wrap instead of the more common overflow-wrap for wider browser support, and add the deprecated word-break: break-word to avoid issues with flex containers.");
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->text('break')->p('mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'break'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span('mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<p class="text-break">mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Word Break', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('Note that breaking words isn’t possible in Arabic, which is the most used RTL language. Therefore .text-break is removed from our RTL compiled CSS.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('transform')->h4('Text Transform');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Transform text in components with text capitalization classes.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->text('lowercase')->p('Lowercased text.')
        . $x->text('uppercase')->p('Uppercased text.')
        . $x->text('capitalize')->p('CapiTaliZed text.');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'lowercase'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Lowercased text.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'uppercase'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Uppercased text.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'capitalize'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'CapiTaliZed text.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<p class="text-lowercase">Lowercased text.</p>' . PHP_EOL
        . '<p class="text-uppercase">Uppercased text.</p>' . PHP_EOL
        . '<p class="text-capitalize">CapiTaliZed text.</p>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Transform', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('Note how .text-capitalize only changes the first letter of each word, leaving the case of any other letters unaffected.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('size')->h4('Font Size');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Quickly change the font-size of text. While our heading classes (e.g., .h1–.h6) apply font-size, font-weight, and line-height, these utilities only apply font-size. Sizing for these utilities matches HTML’s heading elements, so as the number increases, their size decreases.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->fs(1)->p('.fs-1 text')
        . $x->fs(2)->p('.fs-2 text')
        . $x->fs(3)->p('.fs-3 text')
        . $x->fs(4)->p('.fs-4 text')
        . $x->fs(5)->p('.fs-5 text')
        . $x->fs(6)->p('.fs-6 text');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('fs(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span("'.fs-1 text'") . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('fs(')
        . $x->text('warning')->span('2')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span("'.fs-2 text'") . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('fs(')
        . $x->text('warning')->span('3')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span("'.fs-3 text'") . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('fs(')
        . $x->text('warning')->span('4')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span("'.fs-4 text'") . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('fs(')
        . $x->text('warning')->span('5')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span("'.fs-5 text'") . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('fs(')
        . $x->text('warning')->span('6')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span("'.fs-6 text'") . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<p class="fs-1">.fs-1 text</p>' . PHP_EOL
        . '<p class="fs-2">.fs-2 text</p>' . PHP_EOL
        . '<p class="fs-3">.fs-3 text</p>' . PHP_EOL
        . '<p class="fs-4">.fs-4 text</p>' . PHP_EOL
        . '<p class="fs-5">.fs-5 text</p>' . PHP_EOL
        . '<p class="fs-6">.fs-6 text</p>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Font Size', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('Customize your available font-sizes by modifying the $font-sizes Sass map.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('weight')->h4('Font Weight and Italics');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Quickly change the font-weight or font-style of text with these utilities. font-style utilities are abbreviated as .fst-* and font-weight utilities are abbreviated as .fw-*.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->fw('bold')->p('Bold text.')
        . $x->fw('bolder')->p('Bolder weight text (relative to the parent element).')
        . $x->fw('normal')->p('Normal weight text.')
        . $x->fw('light')->p('Light weight text.')
        . $x->fw('lighter')->p('Lighter weight text (relative to the parent element).')
        . $x->fst('italic')->p('Italic text.')
        . $x->fst('normal')->p('Text with normal font style.');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('fw(')
        . $x->text('warning')->span("'bold'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Bold text.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('fw(')
        . $x->text('warning')->span("'bolder'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Bolder weight text (relative to the parent element).'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('fw(')
        . $x->text('warning')->span("'normal'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Normal weight text.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('fw(')
        . $x->text('warning')->span("'light'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Light weight text.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('fw(')
        . $x->text('warning')->span("'lighter'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Lighter weight text (relative to the parent element).'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('fst(')
        . $x->text('warning')->span("'italic'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Italic text.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('fst(')
        . $x->text('warning')->span("'normal'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Text with normal font style.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<p class="fw-bold">Bold text.</p>' . PHP_EOL
        . '<p class="fw-bolder">Bolder weight text (relative to the parent element).</p>' . PHP_EOL
        . '<p class="fw-normal">Normal weight text.</p>' . PHP_EOL
        . '<p class="fw-light">Light weight text.</p>' . PHP_EOL
        . '<p class="fw-lighter">Lighter weight text (relative to the parent element).</p>' . PHP_EOL
        . '<p class="fst-italic">Italic text.</p>' . PHP_EOL
        . '<p class="fst-normal">Text with normal font style</p>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Font Weight & Italics', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('height')->h4('Line Height');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Change the line height with .lh-* utilities.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = 'This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.';
      $p = $x->lh(1)->p($p)
        . $x->lh('sm')->p($p)
        . $x->lh('base')->p($p)
        . $x->lh('lg')->p($p);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('lh(')
        . $x->text('warning')->span('1')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('lh(')
        . $x->text('warning')->span("'sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('lh(')
        . $x->text('warning')->span("'base'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('lh(')
        . $x->text('warning')->span("'lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<p class="lh-1">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>' . PHP_EOL
        . '<p class="lh-sm">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>' . PHP_EOL
        . '<p class="lh-base">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>' . PHP_EOL
        . '<p class="lh-lg">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Line Height', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('monospace')->h4('Monospace');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Change a selection to our monospace font stack with .font-monospace.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->font('monospace')->p('This is monospace');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('font(')
        . $x->text('warning')->span("'monospace'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'This is monospace'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<p class="font-monospace">This is in monospace</p>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Monospace', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('reset')->h4('Reset Color');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Reset a text or link’s color with .text-reset, so that it inherits the color from its parent.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->text('reset')->href('#')->a('reset link');
      $p = $x->text('muted')->p('Muted text with a ' . $p . '.');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danter')->span('link') . ' = '
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'reset'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'reset link'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'muted'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'Muted text with a ' . ")
        . $dollar . $x->text('danger')->span('link')
        . $x->text('warning')->span(" . '.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<p class="text-muted">' . PHP_EOL
        . ' Muted text with a <a href="#" class="text-reset">reset link</a>.' . PHP_EOL
        . '</p>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Reset Color', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('decoration')->h4('Text Decoration');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Decorate text in components with text decoration classes.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->text('decoration-underline')->p('This text has a line underneath it.')
        . $x->text('decoration-line-through')->p('This text has a line going through it.')
        . $x->text('decoration-none')->href('#')->a('This link has its text decoration removed');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'decoration-underline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'This text has a line underneath it.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'decoration-line-through'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('p(')
        . $x->text('warning')->span("'This text has a line going through it.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('text(')
        . $x->text('warning')->span("'decoration-none'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'This link has its text decoration removed'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<p class="text-decoration-underline">This text has a line underneath it.</p>' . PHP_EOL
        . '<p class="text-decoration-line-through">This text has a line going through it.</p>' . PHP_EOL
        . '<a href="#" class="text-decoration-none">This link has its text decoration removed</a>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Text Decoration', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Text');
      $content .= $x->text('center')->lead('Documentation and examples for common text utilities to control alignment, wrapping, weight, and more.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'vertical') {

      $p = $x->p('Change the alignment of elements with the vertical-alignment utilities. Please note that vertical-align only affects inline, inline-block, inline-table, and table cell elements.')
        . $x->p('Choose from .align-baseline, .align-top, .align-middle, .align-bottom, .align-text-bottom, and .align-text-top as needed.')
        . $x->p($x->htmlchar('To vertically center non-inline content (like <div>s and more), use our flex box utilities.'))
        . $x->p('With inline elements:');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->align('baseline')->span('baseline') . ' '
        . $x->align('top')->span('top') . ' '
        . $x->align('middle')->span('middle') . ' '
        . $x->align('bottom')->span('bottom') . ' '
        . $x->align('text-top')->span('text-top') . ' '
        . $x->align('text-bottom')->span('text-bottom');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'baseline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'baseline'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'top'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'top'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'bottom'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'bottom'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'text-top'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'text-top'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'text-bottom'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'text-bottom'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<span class="align-baseline">baseline</span>' . PHP_EOL
        . '<span class="align-top">top</span>' . PHP_EOL
        . '<span class="align-middle">middle</span>' . PHP_EOL
        . '<span class="align-bottom">bottom</span>' . PHP_EOL
        . '<span class="align-text-top">text-top</span>' . PHP_EOL
        . '<span class="align-text-bottom">text-bottom</span>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Inline', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('With table cells:');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->align('baseline')->td('baseline');
      $x->align('top')->td('top');
      $x->align('middle')->td('middle');
      $x->align('bottom')->td('bottom');
      $x->align('text-top')->td('text-top');
      $x->align('text-bottom')->td('text-bottom');
      $x->tr();
      $p = html::make()->astyle('height: 100px;')->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'baseline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'baseline'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'top'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'top'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'bottom'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'bottom'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'text-top'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'text-top'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'text-bottom'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'text-bottom'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'height: 100px;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table style="height: 100px;">' . PHP_EOL
        . ' <tbody>' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     <td class="align-baseline">baseline</td>' . PHP_EOL
        . '     <td class="align-top">top</td>' . PHP_EOL
        . '     <td class="align-middle">middle</td>' . PHP_EOL
        . '     <td class="align-bottom">bottom</td>' . PHP_EOL
        . '     <td class="align-text-top">text-top</td>' . PHP_EOL
        . '     <td class="align-text-bottom">text-bottom</td>' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . ' </tbody>' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Table Cells', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Vertical Alignment');
      $content .= $x->text('center')->lead('Easily change the vertical alignment of inline, inline-block, inline-table, and table cell elements.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'visibility') {

      $p = $x->p('Set the visibility of elements with our visibility utilities. These utility classes do not modify the display value at all and do not affect layout – .invisible elements still take up space in the page.')
        . $x->p('Elements with the .invisible class will be hidden both visually and for assistive technology/screen reader users.')
        . $x->p('Apply .visible or .invisible as needed.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('visible()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('invisible()')
        . '->' . $x->text('info')->span('div(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="visible">...</div>' . PHP_EOL
        . '<div class="invisible">...</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Elements', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->htmlchar(
        '// Class' . PHP_EOL
        . '.visible {' . PHP_EOL
        . ' visibility: visible !important;' . PHP_EOL
        . '}' . PHP_EOL
        . '.invisible {' . PHP_EOL
        . ' visibility: hidden !important;' . PHP_EOL
        . '}' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'CSS', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Splittlogic/bs5 - Visibility');
      $content .= $x->text('center')->lead('Control the visibility of elements, without modifying their display, with visibility utilities.');
      $content .= $br;
      $content .= $x->container();

    } else {

      $content = $x->aboutError();

    }

    return bs5::make()->aboutView($content);

  }


}
