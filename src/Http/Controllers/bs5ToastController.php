<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5ToastController extends Controller
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

    $p = $x->p('Toasts are lightweight notifications designed to mimic the push notifications that have been popularized by mobile and desktop operating systems. They’re built with flexbox, so they’re easy to align and position.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('overview')->h4('Overview')
      . $x->p('Things to know when using the toast plugin:');
    $x->text('center')->div($p);
    $x->row();

    $x->li('Toasts are opt-in for performance reasons, so ' . $x->strong('you must initialize them yourself.'));
    $x->li('Toasts will automatically hide if you do not specify autohide: false.');
    $p = $x->ul();
    $x->div($p);
    $x->row();

    $p = $x->p('The animation effect of this component is dependent on the prefers-reduced-motion media query. See the reduced motion section of our accessibility documentation.');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->id('examples')->h4('Examples')
      . $x->id('basic')->h4('Basic')
      . $x->p('To encourage extensible and predictable toasts, we recommend a header and body. Toast headers use display: flex, allowing easy alignment of content thanks to our margin and flexbox utilities.')
      . $x->p('Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $img = '<svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"></rect></svg>';

    $x->toasttitle('Bootstrap');
    $x->toastsmall('11 mins ago');
    $x->prehtml($img);
    $x->toastheader();
    $x->toastbody('Hello, world! This is a toast message.');
    $p = $x->show()->toast();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('toasttitle(')
      . $x->text('warning')->span("'Bootstrap'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastsmall(')
      . $x->text('warning')->span("'11 mins ago'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('img') . ' = '
      . $xx . '->' . $x->text('info')->span('rounded()')
      . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('img(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('prehtml(')
      . $dollar . $x->text('danger')->span('img')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastheader()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastbody(')
      . $x->text('warning')->span("'Hello, world! This is a toast message.'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('show()')
      . '->' . $x->text('info')->span('toast()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">' . PHP_EOL
      . ' <div class="toast-header">' . PHP_EOL
      . '   <img src="..." class="rounded me-2" alt="...">' . PHP_EOL
      . '   <strong class="me-auto">Bootstrap</strong>' . PHP_EOL
      . '   <small>11 mins ago</small>' . PHP_EOL
      . '   <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="toast-body">' . PHP_EOL
      . '   Hello, world! This is a toast message.' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Basic', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Previously, our scripts dynamically added the .hide class to completely hide a toast (with display:none, rather than just with opacity:0). This is now not necessary anymore. However, for backwards compatibility, our script will continue to toggle the class (even though there is no practical need for it) until the next major version.')
      . $x->id('live')->h4('Live Example')
      . $x->p('Click the button below to show a toast (positioned with our utilities in the lower right corner) that has been hidden by default.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->toasttitle('Bootstrap');
    $x->toastsmall('11 mins ago');
    $x->prehtml($img);
    $x->toastheader();
    $x->toastbody('Hello, world! This is a toast message.');
    $p = $x->toast();
    $p = $x->position('fixed')->bottom(0)->end(0)->pad(3)->astyle('z-index: 11;')->adiv($p);
    $p .= $x->toastbutton('Show live toast');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('toasttitle(')
      . $x->text('warning')->span("'Bootstrap'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastsmall(')
      . $x->text('warning')->span("'11 mins ago'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('img') . ' = '
      . $xx . '->' . $x->text('info')->span('rounded()')
      . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('img(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('prehtml(')
      . $dollar . $x->text('danger')->span('img')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastheader()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastbody(')
      . $x->text('warning')->span("'Hello, world! This is a toast message.'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('toast') . ' = '
      . $xx . '->' . $x->text('info')->span('toast()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('position(')
      . $x->text('warning')->span("'fixed'")
      . $cp . '->' . $x->text('info')->span('bottom(')
      . $x->text('warning')->span("'0'")
      . $cp . '->' . $x->text('info')->span('end(')
      . $x->text('warning')->span("'0'")
      . $cp . '->' . $x->text('info')->span('pad(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'z-index: 11;'")
      . $cp . '->' . $x->text("info")->span('adiv(')
      . $dollar . $x->text('danger')->span('toast')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('toastbutton(')
      . $x->text("warning")->span("'Show live toast'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>' . PHP_EOL
      . PHP_EOL
      . '<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">' . PHP_EOL
      . ' <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">' . PHP_EOL
      . '   <div class="toast-header">' . PHP_EOL
      . '     <img src="..." class="rounded me-2" alt="...">' . PHP_EOL
      . '     <strong class="me-auto">Bootstrap</strong>' . PHP_EOL
      . '     <small>11 mins ago</small>' . PHP_EOL
      . '     <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="toast-body">' . PHP_EOL
      . '     Hello, world! This is a toast message.' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Live Example', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('We use the following JavaScript to trigger our live toast demo:');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->htmlchar(
      '// A unique version of this javascript is automatically created and added' . PHP_EOL
      . '// to the webpade when toastbutton() is called.' . PHP_EOL
      . PHP_EOL
      . "var toastTrigger = document.getElementById('liveToastBtn')" . PHP_EOL
      . "var toastLiveExample = document.getElementById('liveToast')" . PHP_EOL
      . "if (toastTrigger) {" . PHP_EOL
      . " toastTrigger.addEventListener('click', function () {" . PHP_EOL
      . "   var toast = new bootstrap.Toast(toastLiveExample)" . PHP_EOL
      . "   toast.show()" . PHP_EOL
      . " })" . PHP_EOL
      . "}" . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Live Example Javascript', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('translucent')->h4('Translucent')
      . $x->p('Toasts are slightly translucent to blend in with what’s below them.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->toasttitle('Bootstrap');
    $x->toastsmall('11 mins ago');
    $x->prehtml($img);
    $x->toastheader();
    $x->toastbody('Hello, world! This is a toast message.');
    $p = $x->show()->toast();

    $x->border()->pad(3)->bg('dark')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('stacking')->h4('Stacking')
      . $x->p('You can stack toasts by wrapping them in a toast container, which will vertically add some spacing.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->toasttitle('Bootstrap');
    $x->toastsmall('just now');
    $x->prehtml($img);
    $x->toastheader();
    $x->toastbody('See? Just like this.');
    $p = $x->show()->toast();

    $x->toasttitle('Bootstrap');
    $x->toastsmall('2 seconds ago');
    $x->prehtml($img);
    $x->toastheader();
    $x->toastbody('Heads up, toasts will stack automatically');
    $p .= $x->show()->toast();

    $p = $x->toastcontainer($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('toasttitle(')
      . $x->text('warning')->span("'Bootstrap'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastsmall(')
      . $x->text('warning')->span("'just now'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('img') . ' = '
      . $xx . '->' . $x->text('info')->span('rounded()')
      . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('img(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('prehtml(')
      . $dollar . $x->text('danger')->span('img')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastheader()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastbody(')
      . $x->text('warning')->span("'See? Just like this.'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('show()')
      . '->' . $x->text('info')->span('toast()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toasttitle(')
      . $x->text('warning')->span("'Bootstrap'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastsmall(')
      . $x->text('warning')->span("'2 seconds ago'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('img') . ' = '
      . $xx . '->' . $x->text('info')->span('rounded()')
      . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('img(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('prehtml(')
      . $dollar . $x->text('danger')->span('img')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastheader()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastbody(')
      . $x->text('warning')->span("'Heads up, toasts will stack automatically'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('show()')
      . '->' . $x->text('info')->span('toast()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="toast-container">' . PHP_EOL
      . ' <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">' . PHP_EOL
      . '   <div class="toast-header">' . PHP_EOL
      . '     <img src="..." class="rounded me-2" alt="...">' . PHP_EOL
      . '     <strong class="me-auto">Bootstrap</strong>' . PHP_EOL
      . '     <small class="text-muted">just now</small>' . PHP_EOL
      . '     <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="toast-body">' . PHP_EOL
      . '     See? Just like this.' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . PHP_EOL
      . ' <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">' . PHP_EOL
      . '   <div class="toast-header">' . PHP_EOL
      . '     <img src="..." class="rounded me-2" alt="...">' . PHP_EOL
      . '     <strong class="me-auto">Bootstrap</strong>' . PHP_EOL
      . '     <small class="text-muted">2 seconds ago</small>' . PHP_EOL
      . '     <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="toast-body">' . PHP_EOL
      . '     Heads up, toasts will stack automatically' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Stacking', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('custom')->h4('Custom Content')
      . $x->p('Customize your toasts by removing sub-components, tweaking them with utilities, or by adding your own markup. Here we’ve created a simpler toast by removing the default .toast-header, adding a custom hide icon from Bootstrap Icons, and using some flexbox utilities to adjust the layout.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->toastbody('Hello, world! This is a toast message');
    $c = $x->type('button')->cbtn('close')->me(2)->m('auto')->data('bs-dismiss', 'toast')->aria('label', 'Close')->button();
    $x->prehtml('<div class="d-flex">');
    $x->posthtml($c . '</div>');
    $p = $x->show()->toast();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'button'")
      . $cp . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'close'")
      . $cp . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('m(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-dismiss', 'toast'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Close'")
      . $cp . '->' . $x->text('info')->span('button()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastbody(')
      . $x->text('warning')->span("'Hello, world! This is a toast message'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('prehtml(')
      . $x->text('warning')->span($x->htmlchar("'<div class=" . '"' . 'd-flex' . '"' . ">'"))
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $dollar . $x->text('danger')->span('button')
      . ' . '
      . $x->text('warning')->span($x->htmlchar("'</div>'"))
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('show()')
      . '->' . $x->text('info')->span('toast()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">' . PHP_EOL
      . ' <div class="d-flex">' . PHP_EOL
      . '   <div class="toast-body">' . PHP_EOL
      . '     Hello, world! This is a toast message.' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
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

    $p = $x->p('Alternatively, you can also add additional controls and components to toasts.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->sm()->btn('Take action')
      . $x->mx(2)->sm()->secondary()->data('bs-dismiss', 'toast')->btn('Close');
    $p = $x->mt(2)->pt(2)->border('top')->adiv($p);
    $x->toastbody('Hello, world! This is a toast message.' . $p);
    $p = $x->show()->toast();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Take action'")
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-dismiss', 'toast'")
      . $cp . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Close'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('mt(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('pt(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'top'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('buttons')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastbody(')
      . $x->text('warning')->span("'Hello, world! This is a toast message.'")
      . ' . ' . $dollar . $x->text('danger')->span('buttons')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('show()')
      . '->' . $x->text('info')->span('toast()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">' . PHP_EOL
      . ' <div class="toast-body">' . PHP_EOL
      . '   Hello, world! This is a toast message.' . PHP_EOL
      . '   <div class="mt-2 pt-2 border-top">' . PHP_EOL
      . '     <button type="button" class="btn btn-primary btn-sm">Take action</button>' . PHP_EOL
      . '     <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Custom Content - 2', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('color')->h4('Color Schemes')
      . $x->p('Building on the above example, you can create different toast color schemes with our color and background utilities. Here we’ve added .bg-primary and .text-white to the .toast, and then added .btn-close-white to our close button. For a crisp edge, we remove the default border with .border-0.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->type('button')->cbtn('close')->cbtn('close-white')->me(2)->m('auto')->data('bs-dismiss', 'toast')->aria('label', 'Close')->button();
    $x->toastbody('Hello, world! This is a toast message.');
    $x->prehtml('<div class="d-flex">');
    $x->posthtml($p . '</div>');
    $p = $x->show()->align('items-center')->primary()->border(0)->toast();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'button'")
      . $cp . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'close'")
      . $cp . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('m(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-dismiss', 'toast'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Close'")
      . $cp . '->' . $x->text('info')->span('button()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastbody(')
      . $x->text('warning')->span("'Hello, world! This is a toast message'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('prehtml(')
      . $x->text('warning')->span($x->htmlchar("'<div class=" . '"' . 'd-flex' . '"' . ">'"))
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $dollar . $x->text('danger')->span('button')
      . ' . '
      . $x->text('warning')->span($x->htmlchar("'</div>'"))
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('show()')
      . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('toast()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">' . PHP_EOL
      . ' <div class="d-flex">' . PHP_EOL
      . '   <div class="toast-body">' . PHP_EOL
      . '     Hello, world! This is a toast message.' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
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

    $p = $x->id('placement')->h4('Placement')
      . $x->p('Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle. If you’re only ever going to show one toast at a time, put the positioning styles right on the .toast.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->selected()->option('Select a position...');
    $x->value('top-0 start-0')->option('Top left');
    $x->value('top-0 start-50 translate-middle-x')->option('Top center');
    $x->value('top-0 end-0')->option('Top right');
    $x->value('top-50 start-0 translate-middle-y')->option('Middle left');
    $x->value('top-50 start-50 translate-middle')->option('Middle center');
    $x->value('top-50 end-0 translate-middle-y')->option('Middle right');
    $x->value('bottom-0 start-0')->option('Bottom left');
    $x->value('bottom-0 start-50 translate-middle-x')->option('Bottom center');
    $x->value('bottom-0 end-0')->option('Bottom right');
    $p = $x->class('form-select')->mt(2)->id('selectToastPlacement')->select();
    $p = $x->label('Toast plcement') . $p;
    $p = $x->mb(3)->form($p);

    $x->toasttitle('Bootstrap');
    $x->toastsmall('11 mins ago');
    $x->prehtml($img);
    $x->toastheader();
    $x->toastbody('Hello, world! This is a toast message.');
    $c = $x->show()->toast();
    $c = $x->class('toast-container')->position('absolute')->pad(3)->id('toastPlacement')->adiv($c);
    $p .= $x->astyle('min-height: 240px;')->aria('live', 'polite')->aria('atomic', 'true')->bg('dark')->position('relative')->adiv($c);

    $js = "a=document.getElementById('toastPlacement'),a&&document.getElementById('selectToastPlacement').addEventListener('change',function(){a.dataset.originalClass||(a.dataset.originalClass=a.className),a.className=a.dataset.originalClass+' '+this.value})";
    $x->savejs($js);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('accessibility')->h4('Accessibility')
      . $x->p('Toasts are intended to be small interruptions to your visitors or users, so to help those with screen readers and similar assistive technologies, you should wrap your toasts in an aria-live region. Changes to live regions (such as injecting/updating a toast component) are automatically announced by screen readers without needing to move the user’s focus or otherwise interrupt the user. Additionally, include aria-atomic="true" to ensure that the entire toast is always announced as a single (atomic) unit, rather than just announcing what was changed (which could lead to problems if you only update part of the toast’s content, or if displaying the same toast content at a later point in time). If the information needed is important for the process, e.g. for a list of errors in a form, then use the alert component instead of toast.')
      . $x->p('Note that the live region needs to be present in the markup before the toast is generated or updated. If you dynamically generate both at the same time and inject them into the page, they will generally not be announced by assistive technologies.')
      . $x->p('You also need to adapt the role and aria-live level depending on the content. If it’s an important message like an error, use role="alert" aria-live="assertive", otherwise use role="status" aria-live="polite" attributes.')
      . $x->p('As the content you’re displaying changes, be sure to update the delay timeout so that users have enough time to read the toast.');

    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->htmlchar(
      '<div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-bs-delay="10000">' . PHP_EOL
      . ' <div role="alert" aria-live="assertive" aria-atomic="true">...</div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Accessibility', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('When using autohide: false, you must add a close button to allow users to dismiss the toast.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->toasttitle('Bootstrap');
    $x->toastsmall('11 mins ago');
    $x->prehtml($img);
    $x->toastheader();
    $x->toastbody('Hello, world! This is a toast message.');
    $p = $x->show()->autohide('false')->toast();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('toasttitle(')
      . $x->text('warning')->span("'Bootstrap'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastsmall(')
      . $x->text('warning')->span("'11 mins ago'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('img') . ' = '
      . $xx . '->' . $x->text('info')->span('rounded()')
      . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('img(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('prehtml(')
      . $dollar . $x->text('danger')->span('img')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastheader()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toastbody(')
      . $x->text('warning')->span("'Hello, world! This is a toast message'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('show()')
      . '->' . $x->text('info')->span('autohide(')
      . $x->text('warning')->span("'false'")
      . $cp . '->' . $x->text('info')->span('toast()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-bs-autohide="false">' . PHP_EOL
      . ' <div class="toast-header">' . PHP_EOL
      . '   <img src="..." class="rounded me-2" alt="...">' . PHP_EOL
      . '   <strong class="me-auto">Bootstrap</strong>' . PHP_EOL
      . '   <small>11 mins ago</small>' . PHP_EOL
      . '   <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="toast-body">' . PHP_EOL
      . '   Hello, world! This is a toast message.' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Autohide', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('While technically it’s possible to add focusable/actionable controls (such as additional buttons or links) in your toast, you should avoid doing this for autohiding toasts. Even if you give the toast a long delay timeout, keyboard and assistive technology users may find it difficult to reach the toast in time to take action (since toasts don’t receive focus when they are displayed). If you absolutely must have further controls, we recommend using a toast with autohide: false.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Toast');
    $content .= $x->text('center')->lead('Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
