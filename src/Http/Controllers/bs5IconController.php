<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\bs5\bs5;

class bs5IconController extends Controller
{


  public function index($icon)
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

    $p = $x->astyle('font-size: 160px;')->icon($icon);
    $x->border()->mb(4)->rounded(3)->d('flex')
      ->align('items-center')->justify('content-center')->pad(3)->py(6)
      ->astyle('background-color: #fdfdfd; background-image: radial-gradient(circle, #ddd 1px, rgba(0,0,0,0) 1px); background-size: 1rem 1rem;')
      ->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->span($x->htmlchar('<i class="bi bi-' . $icon . '"></i>'));
    $p = $x->pre($p);
    $p = $x->code($p);
    $x->col()->border()->m(2)->pad(3)->bg('dark')->text('center')->rounded()->div($p);

    $p = $xx . '->' . $x->text('info')->span('icon(')
      . $x->text('warning')->span("'" . $icon . "'")
      . $x->text('info')->span(')') . $colon;
    $p = $x->pre($p);
    $p = $x->code($p);
    $x->col()->border()->m(2)->pad(3)->bg('dark')->text('center')->rounded()->div($p);

    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->h4('Examples');
    $x->div($p);
    $x->row();

    $i = $x->icon($icon);

    $buttons1 = $x->type('button')->cbtn()->cbtn('primary')->button($i . ' Button')
      . $x->mx(2)->type('button')->cbtn()->cbtn('success')->button($i . ' Button')
      . $x->type('button')->cbtn()->cbtn('outline-danger')->button($i . ' Button');

    $buttons2 = $x->type('button')->cbtn()->cbtn('secondary')->button($i);

    $buttons3 = $x->type('button')->cbtn()->cbtn('outline-secondary')->button($i);
    $buttons3 = $x->cbtn('group')->mb(3)->adiv($buttons3 . $buttons3 . $buttons3);

    $p = $x->h1($i . ' Heading 1')
      . $x->h2($i . ' Heading 2')
      . $x->h3($i . ' Heading 3')
      . $x->h4($i . ' Heading 4')
      . $x->h5($i . ' Heading 5')
      . $x->h6($i . ' Heading 6')
      . $br
      . $x->p('Inline text ' . $i)
      . $x->p($buttons1)
      . $x->p($buttons2)
      . $x->p($buttons3);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->href(route('splittlogic.bs5.contents', 'icons'))->a('Back to Icons');
    $content .= $x->text('center')->h1(ucwords(str_replace('-', ' ', $icon)));
    $content .= $x->text('center')->lead('');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
