<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5PlaceholdersController extends Controller
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
      . $x->p('Placeholders can be used to enhance the experience of your application. They’re built only with HTML and CSS, meaning you don’t need any JavaScript to create them. You will, however, need some custom JavaScript to toggle their visibility. Their appearance, color, and sizing can be easily customized with our utility classes.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('example')->h4('Example')
      . $x->p('In the example below, we take a typical card component and recreate it with placeholders applied to create a “loading card”. Size and proportions are the same between the two.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $img = '<svg class="card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" style="font-size: 1.125rem; text-anchor: middle;"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>';
    $extra = $x->btna('Go somewhere', '#');

    $x->cardtitle('Card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->posthtml($extra);
    $x->cardbody();

    $x->prehtml($img);
    $p = $x->astyle('width: 18rem;')->card();

    $c = $x->placeholder()->col(6)->span();
    $x->placeholder('glow')->cardtitle($c);
    $c = $x->placeholder()->col(7)->span()
      . $x->mx(1)->placeholder()->col(4)->span()
      . $x->placeholder()->col(4)->span()
      . $x->mx(1)->placeholder()->col(6)->span()
      . $x->placeholder()->col(8)->span();
    $x->placeholder('glow')->cardtext($c);
    $pbtn = $x->href('#')->tabindex(-1)->primary()->disabled()->placeholder()->col(6)->btn();
    $x->posthtml($pbtn);
    $x->cardbody();

    $x->prehtml($img);
    $p .= $x->astyle('width: 18rem;')->card();

    $x->d('flex')->justify('content-around')->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('src') . ' = '
      . "'...'" . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('alt') . ' = '
      . "'...'" . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $dollar . $x->text('danger')->span('src')
      . ' . '
      . $dollar . $x->text('danger')->span('alt')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Go somewhere', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $dollar . $x->text('danger')->span('button')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $dollar . $x->text('danger')->span('src')
      . ' . '
      . $dollar . $x->text('danger')->span('alt')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('title') . ' = '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'6'")
      . $cp . '->' . $x->text('info')->span('span()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'glow'")
      . $cp . '->' . $x->text('info')->span('cardtitle(')
      . $dollar . $x->text('danger')->span('title')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('text') . ' = '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'7'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'4'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'4'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'6'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'8'")
      . $cp . '->' . $x->text('info')->span('span()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'glow'")
      . $cp . '->' . $x->text('info')->span('cardtext(')
      . $dollar . $x->text('danger')->span('text')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('tabindex(')
      . $x->text('warning')->span("'-1'")
      . $cp . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'6'")
      . $cp . '->' . $x->text('info')->span('btna()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $dollar . $x->text('danger')->span('button')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card">' . PHP_EOL
      . ' <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . '   <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="card" aria-hidden="true">' . PHP_EOL
      . ' <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title placeholder-glow">' . PHP_EOL
      . '     <span class="placeholder col-6"></span>' . PHP_EOL
      . '   </h5>' . PHP_EOL
      . '   <p class="card-text placeholder-glow">' . PHP_EOL
      . '     <span class="placeholder col-7"></span>' . PHP_EOL
      . '     <span class="placeholder col-4"></span>' . PHP_EOL
      . '     <span class="placeholder col-4"></span>' . PHP_EOL
      . '     <span class="placeholder col-6"></span>' . PHP_EOL
      . '     <span class="placeholder col-8"></span>' . PHP_EOL
      . '   </p>' . PHP_EOL
      . '   <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Example', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('howitworks')->h4('How It Works')
      . $x->p('Create placeholders with the .placeholder class and a grid column class (e.g., .col-6) to set the width. They can replace the text inside an element or be added as a modifier class to an existing component.')
      . $x->p($x->htmlchar('We apply additional styling to .btns via ::before to ensure the height is respected. You may extend this pattern for other situations as needed, or add a &nbsp; within the element to reflect the height when actual text is rendered in its place.'));

    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->placeholder()->col(6)->span();
    $p = $x->aria('hidden', 'true')->p($p);
    $p .= $x->tabindex(-1)->disabled()->placeholder()->col(4)->aria('hidden', 'true')->btna();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('span') . ' = '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'6'")
      . $cp . '->' . $x->text('info')->span('span()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'hidden', 'true'")
      . $cp . '->' . $x->text('info')->span('p(')
      . $dollar . $x->text('danger')->span('span')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('tabindex(')
      . $x->text('warning')->span("'-1'")
      . $cp . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'4'")
      . $cp . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'hidden', 'true'")
      . $cp . $x->text('info')->span('btna()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<p aria-hidden="true">' . PHP_EOL
      . ' <span class="placeholder col-6"></span>' . PHP_EOL
      . '</p>' . PHP_EOL
      . PHP_EOL
      . '<a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'How It Works', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('The use of aria-hidden="true" only indicates that the element should be hidden to screen readers. The loading behavior of the placeholder depends on how authors will actually use the placeholder styles, how they plan to update things, etc. Some JavaScript code may be needed to swap the state of the placeholder and inform AT users of the update.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('width')->h4('Width')
      . $x->p('You can change the width through grid column classes, width utilities, or inline styles.');

    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->placeholder()->col(6)->span()
      . $x->placeholder()->w(75)->span() . $br
      . $x->placeholder()->astyle('width: 25%;')->span();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'6'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('w(')
      . $x->text('warning')->span("'75'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 25%;'")
      . $cp . '->' . $x->text('info')->span('span()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<span class="placeholder col-6"></span>' . PHP_EOL
      . '<span class="placeholder w-75"></span>' . PHP_EOL
      . '<span class="placeholder" style="width: 25%;"></span>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Width', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('color')->h4('Color')
      . $x->p('By default, the placeholder uses currentColor. This can be overridden with a custom color or utility class.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->placeholder()->col(12)->span()
      . $x->placeholder()->col(12)->bg('primary')->span()
      . $x->placeholder()->col(12)->bg('secondary')->span()
      . $x->placeholder()->col(12)->bg('success')->span()
      . $x->placeholder()->col(12)->bg('danger')->span()
      . $x->placeholder()->col(12)->bg('warning')->span()
      . $x->placeholder()->col(12)->bg('info')->span()
      . $x->placeholder()->col(12)->bg('light')->span()
      . $x->placeholder()->col(12)->bg('dark')->span();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'primary'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'secondary'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'success'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'danger'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'warning'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'info'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'light'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'dark'")
      . $cp . '->' . $x->text('info')->span('span()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<span class="placeholder col-12"></span>' . PHP_EOL
      . '<span class="placeholder col-12 bg-primary"></span>' . PHP_EOL
      . '<span class="placeholder col-12 bg-secondary"></span>' . PHP_EOL
      . '<span class="placeholder col-12 bg-success"></span>' . PHP_EOL
      . '<span class="placeholder col-12 bg-danger"></span>' . PHP_EOL
      . '<span class="placeholder col-12 bg-warning"></span>' . PHP_EOL
      . '<span class="placeholder col-12 bg-info"></span>' . PHP_EOL
      . '<span class="placeholder col-12 bg-light"></span>' . PHP_EOL
      . '<span class="placeholder col-12 bg-dark"></span>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Color', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('sizing')->h4('Sizing')
      . $x->p('The size of .placeholders are based on the typographic style of the parent element. Customize them with sizing modifiers: .placeholder-lg, .placeholder-sm, or .placeholder-xs.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->placeholder()->col(12)->placeholder('lg')->span()
      . $x->placeholder()->col(12)->span()
      . $x->placeholder()->col(12)->placeholder('sm')->span()
      . $x->placeholder()->col(12)->placeholder('xs')->span();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'lg'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'sm'")
      . $cp . '->' . $x->text('info')->span('span()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'xs'")
      . $cp . '->' . $x->text('info')->span('span()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<span class="placeholder col-12 placeholder-lg"></span>' . PHP_EOL
      . '<span class="placeholder col-12"></span>' . PHP_EOL
      . '<span class="placeholder col-12 placeholder-sm"></span>' . PHP_EOL
      . '<span class="placeholder col-12 placeholder-xs"></span>' . PHP_EOL
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

    $p = $x->id('animation')->h4('Animation')
      . $x->p('Animate placeholders with .placeholder-glow or .placeholder-wave to better convey the perception of something being actively loaded.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->placeholder()->col(12)->span();
    $p = $x->placeholder('glow')->p($c)
      . $x->placeholder('wave')->p($c);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('span') . ' = '
      . $xx . '->' . $x->text('info')->span('placeholder()')
      . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'12'")
      . $cp . '->' . $x->text('info')->span('span()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'glow'")
      . $cp . '->' . $x->text('info')->span('p(')
      . $dollar . $x->text('danger')->span('span')
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('placeholder(')
      . $x->text('warning')->span("'wave'")
      . $cp . '->' . $x->text('info')->span('p(')
      . $dollar . $x->text('danger')->span('span')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<p class="placeholder-glow">' . PHP_EOL
      . ' <span class="placeholder col-12"></span>' . PHP_EOL
      . '</p>' . PHP_EOL
      . PHP_EOL
      . '<p class="placeholder-wave">' . PHP_EOL
      . ' <span class="placeholder col-12"></span>' . PHP_EOL
      . '</p>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Animation', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Placeholders');
    $content .= $x->text('center')->lead('Use loading placeholders for your components or pages to indicate something may still be loading.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
