<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\bs5\bs5;

class bs5AlertsController extends Controller
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

    $p = $x->id('examples')->h4('Examples')
      . $x->p('Alerts are available for any length of text, as well as an optional close button. For proper styling, use one of the eight required contextual classes (e.g., .alert-success). For inline dismissal, use the alerts JavaScript plugin.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->primary()->alert('A simple primary alert—check it out!')
      . $x->secondary()->alert('A simple secondary alert—check it out!')
      . $x->success()->alert('A simple success alert—check it out!')
      . $x->danger()->alert('A simple danger alert—check it out!')
      . $x->warning()->alert('A simple warning alert—check it out!')
      . $x->info()->alert('A simple info alert—check it out!')
      . $x->light()->alert('A simple light alert—check it out!')
      . $x->dark()->alert('A simple dark alert—check it out!');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span('...')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span('...')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span('...')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span('...')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span('...')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('info()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span('...')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('light()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span('...')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('dark()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span('...')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="alert alert-primary" role="alert">' . PHP_EOL
      . ' A simple primary alert—check it out!' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-secondary" role="alert">' . PHP_EOL
      . ' A simple secondary alert—check it out!' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-success" role="alert">' . PHP_EOL
      . ' A simple success alert—check it out!' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-danger" role="alert">' . PHP_EOL
      . ' A simple danger alert—check it out!' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-warning" role="alert">' . PHP_EOL
      . ' A simple warning alert—check it out!' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-info" role="alert">' . PHP_EOL
      . ' A simple info alert—check it out!' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-light" role="alert">' . PHP_EOL
      . ' A simple light alert—check it out!' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-dark" role="alert">' . PHP_EOL
      . ' A simple dark alert—check it out!' . PHP_EOL
      . '</div>' . PHP_EOL
    );
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

    $p = $x->id('meaning')->h4('Conveying meaning to assistive technologies')
      . $x->p('Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the .visually-hidden class.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('live')->h4('Live example')
      . $x->p('Click the button below to show an alert (hidden with inline styles to start), then dismiss (and destroy) it with the built-in close button.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->livealert('Show live alert', "Nice, you triggered this alert message!");
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('livealert(')
      . $x->text('warning')->span("'Show live alert', 'Nice, you triggered this alert message!'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>' . PHP_EOL
      . PHP_EOL
      . '<div class="alert alert-primary alert-dismissible" role="alert" id="liveAlert">' . PHP_EOL
      . " <strong>Nice!</strong> You've triggered this alert." . PHP_EOL
      . ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Live Alert', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();

    $x->div($br);
    $x->row();

    $p = 'A form of this JavaScript formatted to the live alert being called is added to the return:';
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->htmlchar(
      "var alertPlaceholder = document.getElementById('liveAlertPlaceholder')" . PHP_EOL
      . "var alertTrigger = document.getElementById('liveAlertBtn')" . PHP_EOL
      . PHP_EOL
      . "function alert(message, type) {" . PHP_EOL
      . " var wrapper = document.createElement('div')" . PHP_EOL
      . ' wrapper.innerHTML = ' . "'" . '<div class="alert alert-' . "'" . ' + type + ' . "'" . ' alert-dismissible" role="alert">' . "'" . ' + message + ' . "'" . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>' . PHP_EOL
      . PHP_EOL
      . " alertPlaceholder.append(wrapper)" . PHP_EOL
      . "}" . PHP_EOL
      . PHP_EOL
      . "if (alertTrigger) {" . PHP_EOL
      . " alertTrigger.addEventListener('click', function () {" . PHP_EOL
      . " alert('Nice, you triggered this alert message!', 'success')" . PHP_EOL
      . "})" . PHP_EOL
      . "}" . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Live Alert JavaScript', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('livealert(')
      . $dollar . $x->text('danger')->span('buttonText')
      . ', ' . $dollar . $x->text('danger')->span('alertText')
      . ', ' . $dollar . $x->text('danger')->span('buttonColor')
      . ', ' . $dollar . $x->text('danger')->span('alertColor')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . 'Default color (if no color is set) is primary.'
      . PHP_EOL;
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Full Live Alert Options', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('link')->h4('Link Color')
      . $x->p('Use the .alert-link utility class to quickly provide matching colored links within any alert.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    // $link = $x->class('alert-link')->href('#')->a('an example link');
    $link = $x->href('#')->alertlink('an example link');
    $msg1 = 'A simple ';
    $color = 'primary';
    $msg2 = ' alert with ' . $link . '. Give it a click if you like.';
    $p = $x->primary()->alert($msg1 . $color . $msg2);
    $color = 'secondary';
    $p .= $x->secondary()->alert($msg1 . $color . $msg2);
    $color = 'success';
    $p .= $x->success()->alert($msg1 . $color . $msg2);
    $color = 'danger';
    $p .= $x->danger()->alert($msg1 . $color . $msg2);
    $color = 'warning';
    $p .= $x->warning()->alert($msg1 . $color . $msg2);
    $color = 'info';
    $p .= $x->info()->alert($msg1 . $color . $msg2);
    $color = 'light';
    $p .= $x->light()->alert($msg1 . $color . $msg2);
    $color = 'dark';
    $p .= $x->dark()->alert($msg1 . $color . $msg2);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('link') . ' = '
      . $xx . '->' . $x->text('info')->span('alertlink(')
      . $x->text('warning')->span("'an example link', '#'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span("'A simple primary alert with a '")
      . ' . ' . $dollar . $x->text('danger')->span('link')
      . ' . ' . $x->text('warning')->span("'. Give it a click if you like.'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span("'A simple secondary alert with a '")
      . ' . ' . $dollar . $x->text('danger')->span('link')
      . ' . ' . $x->text('warning')->span("'. Give it a click if you like.'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span("'A simple success alert with a '")
      . ' . ' . $dollar . $x->text('danger')->span('link')
      . ' . ' . $x->text('warning')->span("'. Give it a click if you like.'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span("'A simple danger alert with a '")
      . ' . ' . $dollar . $x->text('danger')->span('link')
      . ' . ' . $x->text('warning')->span("'. Give it a click if you like.'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span("'A simple warning alert with a '")
      . ' . ' . $dollar . $x->text('danger')->span('link')
      . ' . ' . $x->text('warning')->span("'. Give it a click if you like.'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('info()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span("'A simple info alert with a '")
      . ' . ' . $dollar . $x->text('danger')->span('link')
      . ' . ' . $x->text('warning')->span("'. Give it a click if you like.'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('light()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span("'A simple light alert with a '")
      . ' . ' . $dollar . $x->text('danger')->span('link')
      . ' . ' . $x->text('warning')->span("'. Give it a click if you like.'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('dark()')
      . '->' . $x->text('info')->span('alert(')
      . $x->text('warning')->span("'A simple dark alert with a '")
      . ' . ' . $dollar . $x->text('danger')->span('link')
      . ' . ' . $x->text('warning')->span("'. Give it a click if you like.'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="alert alert-primary" role="alert">' . PHP_EOL
      . ' A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-secondary" role="alert">' . PHP_EOL
      . ' A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-success" role="alert">' . PHP_EOL
      . ' A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-danger" role="alert">' . PHP_EOL
      . ' A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-warning" role="alert">' . PHP_EOL
      . ' A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-info" role="alert">' . PHP_EOL
      . ' A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-light" role="alert">' . PHP_EOL
      . ' A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-dark" role="alert">' . PHP_EOL
      . ' A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Link Color', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('additional')->h4('Additional Content')
      . $x->p('Alerts can also contain additional HTML elements like headings, paragraphs and dividers.');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->alerthead('Well done!')
      . $x->p('Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.')
      . $x->hr()
      . $x->mb('0')->p('Whenever you need to, be sure to use margin utilities to keep things nice and tidy.');
    $p = $x->success()->alert($p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('alert') . ' = '
      . $xx . '->' . $x->text('info')->span('alerthead(')
      . $x->text('warning')->span("'Well done!'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('alert') . ' .= '
      . $xx . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('alert') . ' .= '
      . $xx . '->' . $x->text('info')->span('hr()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('alert') . ' .= '
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'0'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('p(')
      . $x->text('warning')->span("'Whenever you need to, be sure to use margin utilities to keep things nice and tidy.'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('alert(')
      . $dollar . $x->text('danger')->span('alert')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="alert alert-success" role="alert">' . PHP_EOL
      . ' <h4 class="alert-heading">Well done!</h4>' . PHP_EOL
      . ' <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>' . PHP_EOL
      . ' <hr>' . PHP_EOL
      . ' <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Additional Content', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('icons')->h4('Icons')
      . $x->p('Similarly, you can use flexbox utilities and Bootstrap Icons to create alerts with icons. Depending on your icons and content, you may want to add more utilities or custom styles.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->flex('shrink-0')->me(2)->icon('exclamation-triangle-fill', 24)
      . $x->adiv('An example alert with an icon');
    $p = $x->primary()->d('flex')->align('items-center')->alert($p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('icon') . ' = '
      . $xx . '->' . $x->text('info')->span('flex(')
      . $x->text('warning')->span("'shrink-0'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('icon(')
      . $x->text('warning')->span("'exclamation-triangle-fill', 24")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('message') . ' = '
      . $xx . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'An example with an icon'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'items-center'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('alert(')
      . $dollar . $x->text('danger')->span('icon')
      . ' . '
      . $dollar . $x->text('danger')->span('message')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="alert alert-primary d-flex align-items-center" role="alert">' . PHP_EOL
      . ' <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">' . PHP_EOL
      . '   <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>' . PHP_EOL
      . ' </svg>' . PHP_EOL
      . ' <div>' . PHP_EOL
      . '   An example alert with an icon' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Icons', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Need more than one icon for your alerts? Consider using more Bootstrap Icons and making a local SVG sprite like so to easily reference the same icons repeatedly.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->flex('shrink-0')->me(2)->icon('info-circle-fill', 24)
      . $x->adiv('An example alert with an icon');
    $p = $x->primary()->d('flex')->align('items-center')->alert($c);

    $c = $x->flex('shrink-0')->me(2)->icon('check-circle-fill', 24)
      . $x->adiv('An example success alert with an icon');
    $p .= $x->success()->d('flex')->align('items-center')->alert($c);

    $c = $x->flex('shrink-0')->me(2)->icon('exclamation-triangle-fill', 24)
      . $x->adiv('An example warning alert with an icon');
    $p .= $x->warning()->d('flex')->align('items-center')->alert($c);

    $c = $x->flex('shrink-0')->me(2)->icon('exclamation-triangle-fill', 24)
      . $x->adiv('An example danger alert with an icon');
    $p .= $x->danger()->d('flex')->align('items-center')->alert($c);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('icon') . ' = '
      . $xx . '->' . $x->text('info')->span('flex(')
      . $x->text('warning')->span("'shrink-0'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('icon(')
      . $x->text('warning')->span("'info-circle-fill', 24")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('message') . ' = '
      . $xx . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span('An example alert with an icon')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('alerts') . ' = '
      . $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'items-center'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('alert(')
      . $dollar . $x->text('danger')->span('icon')
      . ' . '
      . $dollar . $x->text('danger')->span('message')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('icon') . ' = '
      . $xx . '->' . $x->text('info')->span('flex(')
      . $x->text('warning')->span("'shrink-0'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('icon(')
      . $x->text('warning')->span("'check-circle-fill', 24")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('message') . ' = '
      . $xx . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span('An example success alert with an icon')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('alerts') . ' .= '
      . $xx . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'items-center'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('alert(')
      . $dollar . $x->text('danger')->span('icon')
      . ' . '
      . $dollar . $x->text('danger')->span('message')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('icon') . ' = '
      . $xx . '->' . $x->text('info')->span('flex(')
      . $x->text('warning')->span("'shrink-0'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('icon(')
      . $x->text('warning')->span("'exclamation-triangle-fill', 24")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('message') . ' = '
      . $xx . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span('An example warning alert with an icon')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('alerts') . ' .= '
      . $xx . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'items-center'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('alert(')
      . $dollar . $x->text('danger')->span('icon')
      . ' . '
      . $dollar . $x->text('danger')->span('message')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('icon') . ' = '
      . $xx . '->' . $x->text('info')->span('flex(')
      . $x->text('warning')->span("'shrink-0'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'2'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('icon(')
      . $x->text('warning')->span("'exclamation-triangle-fill', 24")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('message') . ' = '
      . $xx . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span('An example danger alert with an icon')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('alerts') . ' .= '
      . $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'flex'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('align(')
      . $x->text('warning')->span("'items-center'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('alert(')
      . $dollar . $x->text('danger')->span('icon')
      . ' . '
      . $dollar . $x->text('danger')->span('message')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">' . PHP_EOL
      . ' <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">' . PHP_EOL
      . '   <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>' . PHP_EOL
      . ' </symbol>' . PHP_EOL
      . ' <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">' . PHP_EOL
      . '   <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>' . PHP_EOL
      . ' </symbol>' . PHP_EOL
      . ' <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">' . PHP_EOL
      . '   <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>' . PHP_EOL
      . ' </symbol>' . PHP_EOL
      . '</svg>' . PHP_EOL
      . PHP_EOL
      . '<div class="alert alert-primary d-flex align-items-center" role="alert">' . PHP_EOL
      . ' <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>' . PHP_EOL
      . ' <div>' . PHP_EOL
      . '   An example alert with an icon' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-success d-flex align-items-center" role="alert">' . PHP_EOL
      . ' <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>' . PHP_EOL
      . ' <div>' . PHP_EOL
      . '   An example success alert with an icon' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-warning d-flex align-items-center" role="alert">' . PHP_EOL
      . ' <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>' . PHP_EOL
      . ' <div>' . PHP_EOL
      . '   An example warning alert with an icon' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="alert alert-danger d-flex align-items-center" role="alert">' . PHP_EOL
      . ' <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>' . PHP_EOL
      . ' <div>' . PHP_EOL
      . '   An example danger alert with an icon' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Icons 2', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('dismissing')->h4('Dismissing')
      . $x->p('Using the alert JavaScript plugin, it’s possible to dismiss any alert inline. Here’s how:');
    $x->text('center')->div($p);
    $x->row();

    $x->li('Be sure you’ve loaded the alert plugin, or the compiled Bootstrap JavaScript.');
    $x->li('Add a close button and the .alert-dismissible class, which adds extra padding to the right of the alert and positions the close button.');
    $x->li($x->htmlchar('On the close button, add the data-bs-dismiss="alert" attribute, which triggers the JavaScript functionality. Be sure to use the <button> element with it for proper behavior across all devices.'));
    $x->li('To animate alerts when dismissing them, be sure to add the .fade and .show classes.');
    $p = $x->ul();
    $x->div($p);
    $x->row();

    $p = $x->p('You can see this in action with a live demo:');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->strong('Holy guacamole!')
      . ' You schould check in on some of those fields below.';
    $p = $x->warning()->dismissible()->fade()->show()->alert($p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('message') . ' = '
      . $xx . '->' . $x->text('info')->span('strong(')
      . $x->text('warning')->span("'Holy guacamole!'")
      . $x->text('info')->span(')')
      . ' . '
      . $x->text('warning')->span("' You should check in on some of those fields below.'")
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('dismissible()')
      . '->' . $x->text('info')->span('fade()')
      . '->' . $x->text('info')->span('show()')
      . '->' . $x->text('info')->span('alert(')
      . $dollar . $x->text('danger')->span('message')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="alert alert-warning alert-dismissible fade show" role="alert">' . PHP_EOL
      . ' <strong>Holy guacamole!</strong> You should check in on some of those fields below.' . PHP_EOL
      . ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Dismissing', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('When an alert is dismissed, the element is completely removed from the page structure. If a keyboard user dismisses the alert using the close button, their focus will suddenly be lost and, depending on the browser, reset to the start of the page/document. For this reason, we recommend including additional JavaScript that listens for the closed.bs.alert event and programmatically sets focus() to the most appropriate location in the page. If you’re planning to move focus to a non-interactive element that normally does not receive focus, make sure to add tabindex="-1" to the element.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Alerts');
    $content .= $x->text('center')->lead('Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
