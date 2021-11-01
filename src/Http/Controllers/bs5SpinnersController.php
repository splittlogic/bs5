<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5SpinnersController extends Controller
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

    $p = $x->id('about')->h4('About')
      . $x->p('Bootstrap “spinners” can be used to show the loading state in your projects. They’re built only with HTML and CSS, meaning you don’t need any JavaScript to create them. You will, however, need some custom JavaScript to toggle their visibility. Their appearance, alignment, and sizing can be easily customized with our amazing utility classes.')
      . $x->p($x->htmlchar('For accessibility purposes, each loader here includes role="status" and a nested <span class="visually-hidden">Loading...</span>.'))
      . $x->p('The animation effect of this component is dependent on the prefers-reduced-motion media query. See the reduced motion section of our accessibility documentation.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('border')->h4('Border Spinner')
      . $x->p('Use the border spinners for a lightweight loading indicator.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->spinner();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('spinner()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="spinner-border" role="status"></div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Border Spinner', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('colors')->h4('Colors')
      . $x->p('The border spinner uses currentColor for its border-color, meaning you can customize the color with text color utilities. You can use any of our text color utilities on the standard spinner.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->primary()->spinner()
      . $x->mx(1)->secondary()->spinner()
      . $x->success()->spinner()
      . $x->mx(1)->danger()->spinner()
      . $x->warning()->spinner()
      . $x->mx(1)->info()->spinner()
      . $x->light()->spinner()
      . $x->mx(1)->dark()->spinner();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('info()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('light()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('dark()')
      . '->' . $x->text('info')->span('spinner()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="spinner-border text-primary" role="status"></div>' . PHP_EOL
      . '<div class="spinner-border text-secondary" role="status"></div>' . PHP_EOL
      . '<div class="spinner-border text-success" role="status"></div>' . PHP_EOL
      . '<div class="spinner-border text-danger" role="status"></div>' . PHP_EOL
      . '<div class="spinner-border text-warning" role="status"></div>' . PHP_EOL
      . '<div class="spinner-border text-info" role="status"></div>' . PHP_EOL
      . '<div class="spinner-border text-light" role="status"></div>' . PHP_EOL
      . '<div class="spinner-border text-dark" role="status"></div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Colors', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p($x->strong('Why not use border-color utilities?') . ' Each border spinner specifies a transparent border for at least one side, so .border-{color} utilities would override that.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('growing')->h4('Growing Spinner')
      . $x->p('If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->grow()->spinner();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('spinner()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="spinner-grow" role="status"></div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Growing Spinner', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Once again, this spinner is built with currentColor, so you can easily change its appearance with text color utilities. Here it is in blue, along with the supported variants.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->grow()->primary()->spinner()
      . $x->mx(1)->grow()->secondary()->spinner()
      . $x->grow()->success()->spinner()
      . $x->mx(1)->grow()->danger()->spinner()
      . $x->grow()->warning()->spinner()
      . $x->mx(1)->grow()->info()->spinner()
      . $x->grow()->light()->spinner()
      . $x->mx(1)->grow()->dark()->spinner();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('info()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('light()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('dark()')
      . '->' . $x->text('info')->span('spinner()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="spinner-grow text-primary" role="status"></div>' . PHP_EOL
      . '<div class="spinner-grow text-secondary" role="status"></div>' . PHP_EOL
      . '<div class="spinner-grow text-success" role="status"></div>' . PHP_EOL
      . '<div class="spinner-grow text-danger" role="status"></div>' . PHP_EOL
      . '<div class="spinner-grow text-warning" role="status"></div>' . PHP_EOL
      . '<div class="spinner-grow text-info" role="status"></div>' . PHP_EOL
      . '<div class="spinner-grow text-light" role="status"></div>' . PHP_EOL
      . '<div class="spinner-grow text-dark" role="status"></div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Color Growing Spinner', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('alignment')->h4('Alignment')
      . $x->p('Spinners in Bootstrap are built with rems, currentColor, and display: inline-flex. This means they can easily be resized, recolored, and quickly aligned.');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->id('margin')->h4('Margin')
      . $x->p('Use margin utilities like .m-5 for easy spacing.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->m(5)->spinner();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('m(')
      . $x->text('warning')->span("'5'")
      . $cp . '->' . $x->text('info')->span('spinner()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="spinner-border m-5" role="status"></div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Margin', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('placement')->h4('Placement')
      . $x->p('Use flexbox utilities, float utilities, or text alignment utilities to place spinners exactly where you need them in any situation.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('flex')->h4('Flex');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->spinner();
    $x->border()->pad(3)->d('flex')->justify('content-center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('spinner') . ' = '
      . $x->text('info')->span('spinner()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-center'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('spinner')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="d-flex justify-content-center">' . PHP_EOL
      . ' <div class="spinner-border" role="status"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Flex', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->strong('Loading...')
      . $x->ms('auto')->spinner();
    $x->border()->pad(3)->d('flex')->align('items-center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('spinner') . ' = '
      . $xx . '->' . $x->text('info')->span('strong(')
      . $x->text('warning')->span("'Loading...'")
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('ms(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('spinner()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $cp . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'items-center'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('spinner')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="d-flex align-items-center">' . PHP_EOL
      . ' <strong>Loading...</strong>' . PHP_EOL
      . ' <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Flex - Loading', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('floats')->h4('Floats');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->float('end')->spinner();
    $x->border()->pad(3)->clearfix()->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('spinner') . ' = '
      . $xx . '->' . $x->text('info')->span('float(')
      . $x->text('warning')->span("'end'")
      . $cp . '->' . $x->text('info')->span('spinner()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('clearfix()')
      . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('spinner')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="clearfix">' . PHP_EOL
      . ' <div class="spinner-border float-end" role="status"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Floats', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('text')->h4('Text Align');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->spinner();
    $x->border()->pad(3)->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('spinner') . ' = '
      . $xx . '->' . $x->text('info')->span('spinner()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'center'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('spinner')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="text-center">' . PHP_EOL
      . ' <div class="spinner-border" role="status"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Text Align', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('size')->h4('Size')
      . $x->p('Add .spinner-border-sm and .spinner-grow-sm to make a smaller spinner that can quickly be used within other components.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->sm()->spinner()
      . $x->mx(1)->sm()->grow()->spinner();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('spinner()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="spinner-border spinner-border-sm" role="status"></div>' . PHP_EOL
      . '<div class="spinner-grow spinner-grow-sm" role="status"></div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Size', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Or, use custom CSS or inline styles to change the dimensions as needed.');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->astyle('width: 3rem; height: 3rem;')->spinner()
      . $x->mx(1)->astyle('width: 3rem; height: 3rem;')->grow()->spinner();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 3rem; height: 3rem;'")
      . $cp . '->' . $x->text('info')->span('spinner()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 3rem; height: 3rem;'")
      . $cp . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('spinner()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"></div>' . PHP_EOL
      . '<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status"></div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Custom CSS', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('buttons')->h4('Buttons')
      . $x->p('Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->sm()->spinner(true);
    $p = $x->disabled()->btn($c);
    $c = $c . ' Loading...';
    $p .= $x->mx(1)->disabled()->btn($c);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('spinner') . ' = '
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('spinner(')
      . $x->text('warning')->span("'true'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('btn(')
      . $dollar . $x->text('danger')->span('spinner')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('spinner') . ' = '
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('spinner(')
      . $x->text('warning')->span("'true'")
      . $cp
      . PHP_EOL
      . " . ' Loading...'" . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('btn(')
      . $dollar . $x->text('danger')->span('spinner')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button class="btn btn-primary" type="button" disabled>' . PHP_EOL
      . ' <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>' . PHP_EOL
      . '</button>' . PHP_EOL
      . '<button class="btn btn-primary" type="button" disabled>' . PHP_EOL
      . ' <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>' . PHP_EOL
      . ' Loading...' . PHP_EOL
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
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->sm()->grow()->spinner(true);
    $p = $x->disabled()->btn($c);
    $c = $c . ' Loading...';
    $p .= $x->mx(1)->disabled()->btn($c);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('spinner') . ' = '
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('spinner(')
      . $x->text('warning')->span("'true'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('btn(')
      . $dollar . $x->text('danger')->span('spinner')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('spinner') . ' = '
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('grow()')
      . '->' . $x->text('info')->span('spinner(')
      . $x->text('warning')->span("'true'")
      . $cp
      . PHP_EOL
      . " . ' Loading...'" . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('btn(')
      . $dollar . $x->text('danger')->span('spinner')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button class="btn btn-primary" type="button" disabled>' . PHP_EOL
      . ' <span class="spinner-border spinner-grow-sm" role="status" aria-hidden="true"></span>' . PHP_EOL
      . '</button>' . PHP_EOL
      . '<button class="btn btn-primary" type="button" disabled>' . PHP_EOL
      . ' <span class="spinner-border spinner-grow-sm" role="status" aria-hidden="true"></span>' . PHP_EOL
      . ' Loading...' . PHP_EOL
      . '</button>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Buttons 2', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Spinners');
    $content .= $x->text('center')->lead('Indicate the loading state of a component or page with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
