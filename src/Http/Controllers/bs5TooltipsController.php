<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5TooltipsController extends Controller
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
      . $x->p('Things to know when using the tooltip plugin:');
    $x->text('center')->div($p);
    $x->row();

    $x->li('Tooltips rely on the 3rd party library Popper for positioning. You must include popper.min.js before bootstrap.js or use bootstrap.bundle.min.js / bootstrap.bundle.js which contains Popper in order for tooltips to work!');
    $x->li('Tooltips are opt-in for performance reasons, so ' . $x->strong('you must initialize them yourself.'));
    $x->li('Tooltips with zero-length titles are never displayed.');
    $x->li("Specify container: 'body' to avoid rendering problems in more complex components (like our input groups, button groups, etc).");
    $x->li('Triggering tooltips on hidden elements will not work.');
    $x->li('Tooltips for .disabled or disabled elements must be triggered on a wrapper element.');
    $x->li($x->htmlchar('When triggered from hyperlinks that span multiple lines, tooltips will be centered. Use white-space: nowrap; on your <a>s to avoid this behavior.'));
    $x->li('Tooltips must be hidden before their corresponding elements have been removed from the DOM.');
    $x->li('Tooltips can be triggered thanks to an element inside a shadow DOM.');
    $p = $x->ul();
    $x->div($p);
    $x->row();

    $p = $x->p('By default, this component uses the built-in content sanitizer, which strips out any HTML elements that are not explicitly allowed. See the sanitizer section in our JavaScript documentation for more details.')
      . $x->p('The animation effect of this component is dependent on the prefers-reduced-motion media query. See the reduced motion section of our accessibility documentation.')
      . $x->p('Got all that? Great, let’s see how they work with some examples.');

    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('enable')->h4('Example: Enable tooltips everywhere')
      . $x->p('One way to initialize all tooltips on a page would be to select them by their data-bs-toggle attribute:');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = '*** Note *** This javascript is automatically added to the page when tooltip() is called.' . PHP_EOL
      . PHP_EOL
      . "var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=" . '"tooltip"' . "]'))" . PHP_EOL
      . 'var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {' . PHP_EOL
      . ' return new bootstrap.Tooltip(tooltipTriggerEl)' . PHP_EOL
      . '})' . PHP_EOL;
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Enable tooltips', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('examples')->h4('Examples')
      . $x->p('Hover over the links below to see tooltips:');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = 'Placeholder text to demonstrate some '
      . $x->tooltip('Default tooltip')->a('inline links', '#')
      . ' with tooltips. This is now just filler, no killer. Content placed here just to mimic the presence of '
      . $x->tooltip('Another tooltip')->a('real text', '#')
      . ". And all that just to give you an idea of how tooltips would look when used in real-world situations. So hopefully you've now seen how "
      . $x->tooltip('Another one here too')->a('these tooltips on links', '#')
      . ' can work in practice, once you use them on '
      . $x->tooltip('The last tip!')->a('your own', '#')
      . ' site or project.';

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left. Directions are mirrored when using Bootstrap in RTL.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->secondary()->tooltip('Tooltip on top', 'top')->btn('Tooltip on top')
      . $x->mx(2)->secondary()->tooltip('Tooltip on right', 'right')->btn('Tooltip on right')
      . $x->secondary()->tooltip('Tooltip on bottom', 'bottom')->btn('Tooltip on bottom')
      . $x->mx(2)->secondary()->tooltip('Tooltip on left', 'left')->btn('Tooltip on left');

    $c = $x->em('Tooltip') . ' ' . $x->u('with') . ' ' . $x->b('HTML');
    $p .= $x->secondary()->tooltip($c, 'top', true)->btn('Tooltip with HTML');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('tooltip(')
      . $x->text('warning')->span("'Tooltip on top', 'top'")
      . $cp . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Tooltip on top'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('tooltip(')
      . $x->text('warning')->span("'Tooltip on right', 'right'")
      . $cp . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Tooltip on right'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('tooltip(')
      . $x->text('warning')->span("'Tooltip on bottom', 'bottom'")
      . $cp . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Tooltip on bottom'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('tooltip(')
      . $x->text('warning')->span("'Tooltip on left', 'left'")
      . $cp . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Tooltip on left'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('html') . ' = '
      . $xx . '->' . $x->text('info')->span('em(')
      . $x->text('warning')->span("'Tooltip '") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('u(')
      . $x->text('warning')->span("'with '") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('b(')
      . $x->text('warning')->span("'HTML'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('tooltip(')
      . $dollar . $x->text('danger')->span('html')
      . ', ' . $x->text('warning')->span("'top', true")
      . $cp . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Tooltip with HTML'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Button Examples', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Tooltips');
    $content .= $x->text('center')->lead('Documentation and examples for adding custom Bootstrap tooltips with CSS and JavaScript using CSS3 for animations and data-bs-attributes for local title storage.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
