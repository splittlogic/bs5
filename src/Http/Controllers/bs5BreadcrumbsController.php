<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\bs5\bs5;

class bs5BreadcrumbsController extends Controller
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

    $p = $x->id('example')->h4('Example')
      . $x->p('Use an ordered or unordered list with linked list items to create a minimally styled breadcrumb. Use our utilities to add additional styles as desired.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->bitem('Home');
    $p = $x->breadcrumb();

    $x->bitem('Home', '#');
    $x->active()->bitem('Library');
    $p .= $x->breadcrumb();

    $x->bitem('Home', '#');
    $x->bitem('Library', '#');
    $x->active()->bitem('Data');
    $p .= $x->breadcrumb();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('bitem(')
      . $x->text('warning')->span("'Home'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('breadcrumb()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bitem(')
      . $x->text('warning')->span("'Home', '#'")
      . $cp
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('bitem(')
      . $x->text('warning')->span("'Library'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('breadcrumb()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bitem(')
      . $x->text('warning')->span("'Home', '#'")
      . $cp
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bitem(')
      . $x->text('warning')->span("'Library', '#'")
      . $cp
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('bitem(')
      . $x->text('warning')->span("'Data'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('breadcrumb()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav aria-label="breadcrumb">' . PHP_EOL
      . ' <ol class="breadcrumb">' . PHP_EOL
      . '   <li class="breadcrumb-item active" aria-current="page">Home</li>' . PHP_EOL
      . ' </ol>' . PHP_EOL
      . '</nav>' . PHP_EOL
      . PHP_EOL
      . '<nav aria-label="breadcrumb">' . PHP_EOL
      . ' <ol class="breadcrumb">' . PHP_EOL
      . '   <li class="breadcrumb-item"><a href="#">Home</a></li>' . PHP_EOL
      . '   <li class="breadcrumb-item active" aria-current="page">Library</li>' . PHP_EOL
      . ' </ol>' . PHP_EOL
      . '</nav>' . PHP_EOL
      . PHP_EOL
      . '<nav aria-label="breadcrumb">' . PHP_EOL
      . ' <ol class="breadcrumb">' . PHP_EOL
      . '   <li class="breadcrumb-item"><a href="#">Home</a></li>' . PHP_EOL
      . '   <li class="breadcrumb-item"><a href="#">Library</a></li>' . PHP_EOL
      . '   <li class="breadcrumb-item active" aria-current="page">Data</li>' . PHP_EOL
      . ' </ol>' . PHP_EOL
      . '</nav>' . PHP_EOL
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

    $p = $x->id('dividers')->h4('Dividers')
      . $x->p('Dividers are automatically added in CSS through ::before and content. They can be changed by modifying a local CSS custom property --bs-breadcrumb-divider, or through the $breadcrumb-divider Sass variable — and $breadcrumb-divider-flipped for its RTL counterpart, if needed. We default to our Sass variable, which is set as a fallback to the custom property. This way, you get a global divider that you can override without recompiling CSS at any time.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->bitem('Home', '#');
    $x->active()->bitem('Library');
    $p = $x->breadcrumb('>');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('bitem(')
    . $x->text('warning')->span("'Home', '#'")
    . $cp
    . PHP_EOL
    . $xx . '->' . $x->text('info')->span('active()')
    . '->' . $x->text('info')->span('bitem(')
    . $x->text('warning')->span("'Library'")
    . $x->text('info')->span(')') . $colon
    . PHP_EOL
    . $dollar . $x->text('danger')->span('content') . ' = '
    . $xx . '->' . $x->text('info')->span('breadcrumb(')
    . $x->text('warning')->span("'>'")
    . $cp . $colon
    . PHP_EOL
    . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav style="--bs-breadcrumb-divider: ' . "'>'" . ';" aria-label="breadcrumb">' . PHP_EOL
      . ' <ol class="breadcrumb">' . PHP_EOL
      . '   <li class="breadcrumb-item"><a href="#">Home</a></li>' . PHP_EOL
      . '   <li class="breadcrumb-item active" aria-current="page">Library</li>' . PHP_EOL
      . ' </ol>' . PHP_EOL
      . '</nav>' . PHP_EOL
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

    $p = $x->p('When modifying via Sass, the quote function is required to generate the quotes around a string. For example, using <code>></code> as the divider, you can use this:');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = '$breadcrumb-divider: quote(">");';
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Sass', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p("It’s also possible to use an embedded SVG icon. Apply it via our CSS custom property, or use the Sass variable.");
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->bitem('Home', '#');
    $x->active()->bitem('Library');
    $p = $x->breadcrumb("url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;)");
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('bitem(')
    . $x->text('warning')->span("'Home', '#'")
    . $cp
    . PHP_EOL
    . $xx . '->' . $x->text('info')->span('active()')
    . '->' . $x->text('info')->span('bitem(')
    . $x->text('warning')->span("'Library'")
    . $x->text('info')->span(')') . $colon
    . PHP_EOL
    . $dollar . $x->text('danger')->span('content') . ' = '
    . $xx . '->' . $x->text('info')->span('breadcrumb(')
    . $x->text('warning')->span('"' . "url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;)" . '"')
    . $cp . $colon
    . PHP_EOL
    . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns=' . "'http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" . '" aria-label="breadcrumb">' . PHP_EOL
      . ' <ol class="breadcrumb">' . PHP_EOL
      . '   <li class="breadcrumb-item"><a href="#">Home</a></li>' . PHP_EOL
      . '   <li class="breadcrumb-item active" aria-current="page">Library</li>' . PHP_EOL
      . ' </ol>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'SVG Icon', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = '$breadcrumb-divider: url("data:image/svg+xml,%3Csvg xmlns=' . "'" . 'http://www.w3.org/2000/svg' . "'" . " width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E" . "');";
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Sass SVG Icon', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p("You can also remove the divider setting --bs-breadcrumb-divider: ''; (empty strings in CSS custom properties counts as a value), or setting the Sass variable to " . '$breadcrumb-divider:' . " none;.");
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->bitem('Home', '#');
    $x->active()->bitem('Library');
    $p = $x->breadcrumb(' ');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('bitem(')
    . $x->text('warning')->span("'Home', '#'")
    . $cp
    . PHP_EOL
    . $xx . '->' . $x->text('info')->span('active()')
    . '->' . $x->text('info')->span('bitem(')
    . $x->text('warning')->span("'Library'")
    . $x->text('info')->span(')') . $colon
    . PHP_EOL
    . $dollar . $x->text('danger')->span('content') . ' = '
    . $xx . '->' . $x->text('info')->span('breadcrumb(')
    . $x->text('warning')->span("' '")
    . $cp . $colon
    . PHP_EOL
    . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav style="--bs-breadcrumb-divider: ' . "' '" . ';" aria-label="breadcrumb">' . PHP_EOL
      . ' <ol class="breadcrumb">' . PHP_EOL
      . '   <li class="breadcrumb-item"><a href="#">Home</a></li>' . PHP_EOL
      . '   <li class="breadcrumb-item active" aria-current="page">Library</li>' . PHP_EOL
      . ' </ol>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'No Dividers', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = '$breadcrumb-divider: none;';
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Sass No Dividers', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Breadcrumb');
    $content .= $x->text('center')->lead('Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
