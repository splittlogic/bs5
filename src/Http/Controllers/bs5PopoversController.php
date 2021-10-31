<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5PopoversController extends Controller
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
      . $x->p('Things to know when using the popover plugin:');
    $x->text('center')->div($p);
    $x->row();

    $x->li('Popovers rely on the 3rd party library Popper for positioning. You must include popper.min.js before bootstrap.js or use bootstrap.bundle.min.js / bootstrap.bundle.js which contains Popper in order for popovers to work!');
    $x->li('Popovers require the tooltip plugin as a dependency.');
    $x->li('Popovers are opt-in for performance reasons, so ' . $x->strong('you must initialize them yourself.'));
    $x->li('Zero-length title and content values will never show a popover.');
    $x->li("Specify container: 'body' to avoid rendering problems in more complex components (like our input groups, button groups, etc).");
    $x->li('Triggering popovers on hidden elements will not work.');
    $x->li('Popovers for .disabled or disabled elements must be triggered on a wrapper element.');
    $x->li($x->htmlchar("When triggered from anchors that wrap across multiple lines, popovers will be centered between the anchors' overall width. Use .text-nowrap on your <a>s to avoid this behavior."));
    $x->li('Popovers must be hidden before their corresponding elements have been removed from the DOM.');
    $x->li('Popovers can be triggered thanks to an element inside a shadow DOM.');

    $p = $x->ul();
    $x->div($p);
    $x->row();

    $p = $x->p('By default, this component uses the built-in content sanitizer, which strips out any HTML elements that are not explicitly allowed. See the sanitizer section in our JavaScript documentation for more details.')
      . $x->p('The animation effect of this component is dependent on the prefers-reduced-motion media query. See the reduced motion section of our accessibility documentation.')
      . $x->p('Keep reading to see how popovers work with some examples.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('enable')->h4('Example: Enable popovers everywhere')
      . $x->p('One way to initialize all popovers on a page would be to select them by their data-bs-toggle attribute:');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = '*** Note *** This javascript is automatically added to the page when popover() is called.' . PHP_EOL
      . PHP_EOL
      . "var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=" . '"popover"' . "]'))" . PHP_EOL
      . 'var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {' . PHP_EOL
      . ' return new bootstrap.Popover(popoverTriggerEl)' . PHP_EOL
      . '})' . PHP_EOL;
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Enable popovers', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('container')->h4('Example: Using the container option')
      . $x->p('When you have some styles on a parent element that interfere with a popover, you’ll want to specify a custom container so that the popover’s HTML appears within that element instead.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = "var popover = new bootstrap.Popover(document.querySelector('.example-popover'), {" . PHP_EOL
      . " container: 'body'" . PHP_EOL
      . '})' . PHP_EOL;
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

    $p = $x->id('example')->h4('Example');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = "And here's some amazing content. It's very engaging. Right?";
    $p = $x->popover($p, 'Popover title')->lg()->danger()->btn('Click to toggle popover');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('text') . ' = '
      . '"' . "And here's some amazing content. It's very engaging. Right?" . '"'
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('popover(')
      . $dollar . $x->text('danger')->span('text')
      . ', '
      . $x->text('warning')->span("'Popover title'")
      . $cp . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Click to toggle popover'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here' . "'" . 's some amazing content. It' . "'" . 's very engaging. Right?">Click to toggle popover</button>' . PHP_EOL
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

    $p = $x->id('directions')->h4('Four Directions')
      . $x->p('Four options are available: top, right, bottom, and left aligned. Directions are mirrored when using Bootstrap in RTL.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->popover('Top popover',null,'top')->secondary()->btn('Popover on top')
      . $x->mx(2)->popover('Right popover', null, 'right')->secondary()->btn('Popover on right')
      . $x->popover('Bottom popover',null,'bottom')->secondary()->btn('Popover on bottom')
      . $x->mx(2)->popover('Left popover',null,'left')->secondary()->btn('Popover on left');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('popover(')
      . $x->text('warning')->span("'Top popover', null, 'top'")
      . $cp . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Popover on top'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('popover(')
      . $x->text('warning')->span("'Right popover', null, 'right'")
      . $cp . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Popover on right'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('popover(')
      . $x->text('warning')->span("'Bottom popover', null, 'bottom'")
      . $cp . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Popover on bottom'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('popover(')
      . $x->text('warning')->span("'Left popover', null, 'left'")
      . $cp . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Popover on left'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">' . PHP_EOL
      . ' Popover on top' . PHP_EOL
      . '</button>' . PHP_EOL
      . '<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">' . PHP_EOL
      . ' Popover on right' . PHP_EOL
      . '</button>' . PHP_EOL
      . '<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">' . PHP_EOL
      . ' Popover on bottom' . PHP_EOL
      . '</button>' . PHP_EOL
      . '<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">' . PHP_EOL
      . ' Popover on left' . PHP_EOL
      . '</button>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Four Directions', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('dismiss')->h4('Dismiss On Next Click')
      . $x->p('Use the focus trigger to dismiss popovers on the user’s next click of a different element than the toggle element.');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->h4('Specific markup required for dismiss-on-next-click')
      . $x->p($x->htmlchar('For proper cross-browser and cross-platform behavior, you must use the <a> tag, not the <button> tag, and you also must include a tabindex attribute.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = "And here's some amazing content. It's very engaging. Right?";
    $p = $x->dismiss()->popover($p,'Dismissible popover')->lg()->danger()->btna('Dismissible popover');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = '*** Note *** dismiss() must be called before popover()'
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('text') . ' = '
      . '"And here' . "'" . 's some amazing content. It' . "'" . 's very engaging. Right?"' . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('dismiss()')
      . '->' . $x->text('info')->span('popover(')
      . $dollar . $x->text('danger')->span('text')
      . ', '
      . $x->text('warning')->span("'Dismissible popover'")
      . $cp . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Dismissible popover'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-content="And here' . "'" . 's some amazing content. It' . "'" . 's very engaging. Right?">Dismissible popover</a>' . PHP_EOL
      . PHP_EOL
      . '// Dismiss javascript' . PHP_EOL
      . "var popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {" . PHP_EOL
      . " trigger: 'focus'" . PHP_EOL
      . "})" . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Dismiss', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('disabled')->h4('Disabled Elements')
      . $x->p($x->htmlchar('Elements with the disabled attribute aren’t interactive, meaning users cannot hover or click them to trigger a popover (or tooltip). As a workaround, you’ll want to trigger the popover from a wrapper <div> or <span>, ideally made keyboard-focusable using tabindex="0".'))
      . $x->p('For disabled popover triggers, you may also prefer data-bs-trigger="hover focus" so that the popover appears as immediate visual feedback to your users as they may not expect to click on a disabled element.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->disabled()->btn('Disabled button');
    $p = $x->disabled()->popover('Disabled popover')->span($p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = '// disabled() must be called before popover' . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Disabled button'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('popover(')
      . $x->text('warning')->span("'Disabled popover'")
      . $cp . '->' . $x->text('info')->span('span(')
      . $dollar . $x->text('danger')->span('button')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">' . PHP_EOL
      . ' <button class="btn btn-primary" type="button" disabled>Disabled button</button>' . PHP_EOL
      . '</span>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Disabled', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Popovers');
    $content .= $x->text('center')->lead('Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
