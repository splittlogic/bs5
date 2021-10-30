<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use splittlogic\bs5\bs5;

class bs5ContentsController extends Controller
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

    if ($page == 'typography')
    {

      // Display
      $x->col()
        ->display(1)
        ->div('Display 1');
      $x->aboutCode('$x->display(1)');
      $x->row();
      $x->col()
        ->display(2)
        ->div('Display 2');
      $x->aboutCode('$x->display(2)');
      $x->row();
      $x->col()
        ->display(3)
        ->div('Display 3');
      $x->aboutCode('$x->display(3)');
      $x->row();
      $x->col()
        ->display(4)
        ->div('Display 4');
      $x->aboutCode('$x->display(4)');
      $x->row();
      $x->col()
        ->display(5)
        ->div('Display 5');
      $x->aboutCode('$x->display(5)');
      $x->row();
      $x->col()
        ->display(6)
        ->div('Display 6');
      $x->aboutCode('$x->display(6)');
      $x->row();

      $x->col()->id('heading')->div($br . '<hr>'. $br);
      $x->row();

      // Heading
      $h = $x->h1('Heading 1');
      $x->col()
        ->div($h);
      $x->aboutCode('$x->h1(' . "'Heading 1'" . ')');
      $x->row();
      $h = $x->h2('Heading 2');
      $x->col()
        ->div($h);
      $x->aboutCode('$x->h2(' . "'Heading 2'" . ')');
      $x->row();
      $h = $x->h3('Heading 3');
      $x->col()
        ->div($h);
      $x->aboutCode('$x->h3(' . "'Heading 3'" . ')');
      $x->row();
      $h = $x->h4('Heading 4');
      $x->col()
        ->div($h);
      $x->aboutCode('$x->h4(' . "'Heading 4'" . ')');
      $x->row();
      $h = $x->h5('Heading 5');
      $x->col()
        ->div($h);
      $x->aboutCode('$x->h5(' . "'Heading 5'" . ')');
      $x->row();
      $h = $x->h6('Heading 6');
      $x->col()
        ->div($h);
      $x->aboutCode('$x->h6(' . "'Heading 6'" . ')');
      $x->row();

      $x->col()->id('lead')->div($br . '<hr>'. $br);
      $x->row();

      $p = $x->lead(
        'This is a lead paragraph. It stands out from regular paragraphs.'
      );
      $x->col()->div($p);
      $x->row();
      $x->aboutCode('$x->lead('
        .  "'This is a lead paragraph. It stands out from regular paragraphs.'"
        . ')');
      $x->row();

      $x->col()->id('text')->div($br . '<hr>'. $br);
      $x->row();

      $p = $x->span('You can use the mark tag to ' . $x->mark('highlight') . ' text.');
      $x->col()->div($p);
      $x->row();
      $x->aboutCode('You can use the mark tag to $x->mark(' . "'highlight'" . '); text.');
      $x->row();

      $p = $br . $x->p($x->del('This line of text is meant to be treated as deleted text.'));
      $x->col()->div($p);
      $x->row();
      $x->aboutCode('$x->del(' . "'This line of text is meant to be treated as deleted text.'" . ')');
      $x->row();

      $p = $br . $x->p($x->s('This line of text is meant to be treated as no longer accurate.'));
      $x->col()->div($p);
      $x->row();
      $x->aboutCode('$x->s(' . "'This line of text is meant to be treated as no longer accurate.'" . ')');
      $x->row();

      $p = $br . $x->p($x->ins('This line of text is meant to be treated as an addition to the document.'));
      $x->col()->div($p);
      $x->row();
      $x->aboutCode('$x->ins(' . "'This line of text is meant to be treated as an addition to the document.'" . ')');
      $x->row();

      $p = $br . $x->p($x->u('This line of text will render as underlined.'));
      $x->col()->div($p);
      $x->row();
      $x->aboutCode('$x->u(' . "'This line of text will render as underlined.'" . ')');
      $x->row();

      $p = $br . $x->p($x->small('This line of text is meant to be treated as fine print.'));
      $x->col()->div($p);
      $x->row();
      $x->aboutCode('$x->small(' . "'This line of text is meant to be treated as fine print.'" . ')');
      $x->row();

      $p = $br . $x->p($x->strong('This line rendered as bold text.'));
      $x->col()->div($p);
      $x->row();
      $x->aboutCode('$x->strong(' . "'This line rendered as bold text.'" . ')');
      $x->row();

      $p = $br . $x->p($x->em('This line rendered as italicized text.'));
      $x->col()->div($p);
      $x->row();
      $x->aboutCode('$x->em(' . "'This line rendered as italicized text.'" . ')');
      $x->row();

      $x->col()->id('quote')->div($br . '<hr>'. $br);
      $x->row();

      $p = $x->p($x->blockquote('A well-known quote, contained in a blockquote element.', 'Someone famous in', 'Source Title', 'Source Title'));
      $x->col()->div($p);
      $x->row();
      $x->aboutCode(
        $x->pre(
          PHP_EOL
          . '$quote = ' . "'A well-known quote, contained in a blockquote element.';" . PHP_EOL
          . '$footer = ' . "'Someone famous in';" . PHP_EOL
          . '$cite = ' . "'Source Title';" . PHP_EOL
          . '$citeTitle = ' . "'Source Title';" . PHP_EOL . PHP_EOL
          . '$content = $x->blockquote($quote, $footer, $citeTitle, $citeTitle);'
        )
      );
      $x->row();

      $x->col()->id('list')->div($br . '<hr>'. $br);
      $x->row();

      $x->li('are unaffected by this style');
      $x->li('will still show a bullet');
      $x->li('an have appropriate left margin');
      $nest = $x->ul();
      $x->li('This is a list.');
      $x->li('It appears completely unstyled.');
      $x->li("Structurally, it's still a list.");
      $x->li('However, this style only applies to imeediate chiled elements.');
      $x->li('Nested lists:' . $nest);
      $x->li('This may still come in handy in some situations.');
      $p = $x->class('list-unstyled')->ul();
      $x->col()->div($p);
      $x->row();
      $x->aboutCode(
        $x->pre(
          PHP_EOL
          . '$x->li(' . "'are unaffected by this style'" . ');' . PHP_EOL
          . '$x->li(' . "'will still show a bullet'" . ');' . PHP_EOL
          . '$x->li(' . "'an have appropriate left margin'" . ');' . PHP_EOL
          . '$nest = $x->ul();' . PHP_EOL
          . PHP_EOL
          . '$x->li(' . "'This is a list.'" . ');' . PHP_EOL
          . '$x->li(' . "'It appears completely unstyled.'" . ');' . PHP_EOL
          . '$x->li(' . '"Structurally, it' . "'s still a list." . '");' . PHP_EOL
          . '$x->li(' . "'However, this style only applies to imeediate chiled elements.'" . ');' . PHP_EOL
          . '$x->li(' . "'Nested lists:' . " . '$nest);' . PHP_EOL
          . '$x->li(' . "'This may still come in handy in some situations.'" . ');' . PHP_EOL
          . '$content = $x->class(' . "'list-unstyled'" . ')->ul();'
        )
      );
      $x->row();

      $x->class('list-inline-item')->li('This is a list item.');
      $x->class('list-inline-item')->li('And another one.');
      $x->class('list-inline-item')->li("But they're displayed inline.");
      $p = $br . $x->class('list-inline')->ul();
      $x->col()->div($p);
      $x->row();
      $x->aboutCode(
        $x->pre(
          PHP_EOL
          . '$x->class(' . "'list-inline-item'" . ')->li(' . "'This is a list item.'" . ');' . PHP_EOL
          . '$x->class(' . "'list-inline-item'" . ')->li(' . "'And another one.'" . ');' . PHP_EOL
          . '$x->class(' . "'list-inline-item'" . ')->li(' . '"But they' . "'re displayed inline." . '");' . PHP_EOL
          . '$content = $x->class(' . "'list-inline'" . ')->ul();'
        )
      );
      $x->row();

      $x->col()->div($br . $br);
      $x->row();

      $content = $x->class('text-center')->h1('Typography');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'images') {

      $p = $x->lead('Examples for opting images into responsive behavior (so they never become larger than their parent elements) and add lightweight styles to them—all via classes.');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->id('responsive')->h4('Responsive Images');
      $x->text('center')->div($br . $p);
      $x->row();

      $p = $x->p('Images in Bootstrap are made responsive with .img-fluid. This applies max-width: 100%; and height: auto; to the image so that it scales with the parent element.');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->fluid()->img('https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png');
      $x->col()->class('card p-3')->div($p);
      $x->row();

      $x->aboutCode('$x->fluid()->img(' . "'https://link/to/image'" . ');');
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('thumbnails')->h4('Image Thumbnails');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('In addition to our border-radius utilities, you can use .img-thumbnail to give an image a rounded 1px border appearance.');
      $x->text('center')->div($p);
      $x->row();

      $img = $x->thumbnail()->img('https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png');
      $p = $x->col()->adiv($img);
      $p .= $x->col()->adiv();
      $p .= $x->col()->adiv();
      $p = $x->class('row')->adiv($p);
      $p = $x->class('container')->adiv($p);
      $x->col()->bg('light')->class('card p-3')->div($p);
      $x->row();

      $x->aboutCode('$x->thumbnail()->img(' . "'https://link/to/image'" . ');');
      $x->row();

      $p = $x->id('aligning')->h4('Aligning Images');
      $x->text('center')->div($br . $p);
      $x->row();

      $p = $x->p('Align images with the helper float classes or text alignment classes. block-level images can be centered using the .mx-auto margin utility class.');
      $x->text('center')->div($p);
      $x->row();

      $img = $x->width(250)->rounded()->float('start')->img('https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png');
      $img2 = $x->width(250)->rounded()->float('end')->img('https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png');
      $x->bg('light')->border()->border('secondary')->class('p-3')->div($img . $img2);
      $x->row();

      $x->aboutCode('$x->float(' . "'start'" . ')->img(' . "'https://link/to/image'" . ');');
      $x->aboutCode('$x->float(' . "'end'" . ')->img(' . "'https://link/to/image'" . ');');
      $x->row();

      $x->div($br);
      $x->row();

      $img = $x->width(250)->rounded()->mx()->d('block')->img('https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png');
      $x->bg('light')->border()->border('secondary')->class('p-3')->div($img);
      $x->row();

      $x->aboutCode('$x->mx()->d(' . "'block'" . ')->img(' . "'https://link/to/image'" . ');');
      $x->row();

      $content = $x->class('text-center')->h1('Images');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'tables') {

      $p = $x->id('overview')->h4('Overview');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p($x->htmlchar('Due to the widespread use of <table> elements across third-party widgets like calendars and date pickers, Bootstrap’s tables are opt-in. Add the base class .table to any <table>, then extend with our optional modifier classes or custom styles. All table styles are not inherited in Bootstrap, meaning any nested tables can be styled independent from the parent.'))
        . $x->p('Using the most basic table markup, here’s how .table-based tables look in Bootstrap.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th(1);
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th(2);
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th(3);
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('scope(')
        . $x->text('warning')->span("'col'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('th(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('scope(')
        . $x->text('warning')->span("'col'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('th(')
        . $x->text('warning')->span("'First'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('scope(')
        . $x->text('warning')->span("'col'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('th(')
        . $x->text('warning')->span("'Last'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('scope(')
        . $x->text('warning')->span("'col'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('th(')
        . $x->text('warning')->span("'Handle'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('thead()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('scope(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('th(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'Mark'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'Otto'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'@mdo'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('scope(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('th(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'Jacob'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'Thronton'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'@fat'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('scope(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('th(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('colspan(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'Larry the Bird'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'@twitter'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
          '<table class="table">' . PHP_EOL
        . ' <thead>' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     <th scope="col">#</th>' . PHP_EOL
        . '     <th scope="col">First</th>' . PHP_EOL
        . '     <th scope="col">Last</th>' . PHP_EOL
        . '     <th scope="col">Handle</th>' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . ' </thead>' . PHP_EOL
        . ' <tbody>' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     <th scope="row">1</th>' . PHP_EOL
        . '     <td>Mark</td>' . PHP_EOL
        . '     <td>Otto</td>' . PHP_EOL
        . '     <td>@mdo</td>' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     <th scope="row">2</th>' . PHP_EOL
        . '     <td>Jacob</td>' . PHP_EOL
        . '     <td>Thornton</td>' . PHP_EOL
        . '     <td>@fat</td>' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     <th scope="row">3</th>' . PHP_EOL
        . '     <td colspan="2">Larry the Bird</td>' . PHP_EOL
        . '     <td>@twitter</td>' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . ' </tbody>' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Overview', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('variants')->h4('Variants');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Use contextual classes to color tables, table rows or individual cells.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('Class');
      $x->scope('col')->th('Heading');
      $x->scope('col')->th('Heading');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('Default');
      $x->td('Cell');
      $x->td('Cell');
      $x->tr();
      $x->scope('row')->th('Primary');
      $x->td('Cell');
      $x->td('Cell');
      $x->primary()->tr();
      $x->scope('row')->th('Secondary');
      $x->td('Cell');
      $x->td('Cell');
      $x->secondary()->tr();
      $x->scope('row')->th('Success');
      $x->td('Cell');
      $x->td('Cell');
      $x->success()->tr();
      $x->scope('row')->th('Danger');
      $x->td('Cell');
      $x->td('Cell');
      $x->danger()->tr();
      $x->scope('row')->th('Warning');
      $x->td('Cell');
      $x->td('Cell');
      $x->warning()->tr();
      $x->scope('row')->th('Info');
      $x->td('Cell');
      $x->td('Cell');
      $x->class('table-info')->tr();
      $x->scope('row')->th('Light');
      $x->td('Cell');
      $x->td('Cell');
      $x->light()->tr();
      $x->scope('row')->th('Dark');
      $x->td('Cell');
      $x->td('Cell');
      $x->dark()->tr();
      $p = $x->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = '// On Tables' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('primary()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('secondary()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('success()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('danger()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('warning()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('info()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('light()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('dark()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL
        . '// On Rows'
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('primary()')
        . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('secondary()')
        . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('success()')
        . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('danger()')
        . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('warning()')
        . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('info()')
        . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('light()')
        . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('dark()')
        . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . PHP_EOL
        . "// On Cells ('td' or 'th')"
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('primary()')
        . '->' . $x->text('info')->span('td()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('secondary()')
        . '->' . $x->text('info')->span('td()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('success()')
        . '->' . $x->text('info')->span('td()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('danger()')
        . '->' . $x->text('info')->span('td()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('warning()')
        . '->' . $x->text('info')->span('td()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('info()')
        . '->' . $x->text('info')->span('td()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('light()')
        . '->' . $x->text('info')->span('td()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('dark()')
        . '->' . $x->text('info')->span('td()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<!-- On tables -->' . PHP_EOL
        . '<table class="table-primary">...</table>' . PHP_EOL
        . '<table class="table-secondary">...</table>' . PHP_EOL
        . '<table class="table-success">...</table>' . PHP_EOL
        . '<table class="table-danger">...</table>' . PHP_EOL
        . '<table class="table-warning">...</table>' . PHP_EOL
        . '<table class="table-info">...</table>' . PHP_EOL
        . '<table class="table-light">...</table>' . PHP_EOL
        . '<table class="table-dark">...</table>' . PHP_EOL
        . PHP_EOL
        . '<!-- On rows -->' . PHP_EOL
        . '<tr class="table-primary">...</tr>' . PHP_EOL
        . '<tr class="table-secondary">...</tr>' . PHP_EOL
        . '<tr class="table-success">...</tr>' . PHP_EOL
        . '<tr class="table-danger">...</tr>' . PHP_EOL
        . '<tr class="table-warning">...</tr>' . PHP_EOL
        . '<tr class="table-info">...</tr>' . PHP_EOL
        . '<tr class="table-light">...</tr>' . PHP_EOL
        . '<tr class="table-dark">...</tr>' . PHP_EOL
        . PHP_EOL
        . '<!-- On cells (`td` or `th`) -->' . PHP_EOL
        . '<tr>' . PHP_EOL
        . ' <td class="table-primary">...</td>' . PHP_EOL
        . ' <td class="table-secondary">...</td>' . PHP_EOL
        . ' <td class="table-success">...</td>' . PHP_EOL
        . ' <td class="table-danger">...</td>' . PHP_EOL
        . ' <td class="table-warning">...</td>' . PHP_EOL
        . ' <td class="table-info">...</td>' . PHP_EOL
        . ' <td class="table-light">...</td>' . PHP_EOL
        . ' <td class="table-dark">...</td>' . PHP_EOL
        . '</tr>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Variants', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('technologies')->h4('Conveying meaning to assistive technologies');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the .visually-hidden class.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('accented')->h3('Accented Tables');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->id('striped')->h4('Striped Rows');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p($x->htmlchar('Use .table-striped to add zebra-striping to any table row within the <tbody>.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th(1);
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th(2);
      $x->td('Jacob');
      $x->td('Thronton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th(3);
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->striped()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('striped()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-striped">' . PHP_EOL
        . ' ...' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Striped', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('These classes can also be added to table variants:');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->dark()->striped()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('dark()')
        . '->' . $x->text('info')->span('striped()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-dark table-striped">' . PHP_EOL
        . ' ...' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Dark & Striped', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->success()->striped()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('success()')
        . '->' . $x->text('info')->span('striped()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-success table-striped">' . PHP_EOL
        . ' ...' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Success & Striped', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('hoverable')->h4('Hoverable Rows');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p($x->htmlchar('Add .table-hover to enable a hover state on table rows within a <tbody>.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->hover()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('hover()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-hover">' . PHP_EOL
        . ' ...' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Hover', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->dark()->hover()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('dark()')
        . '->' . $x->text('info')->span('hover()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-dark table-hover">' . PHP_EOL
        . ' ...' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Dark & Hover', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('These hoverable rows can also be combined with the striped variant:');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->striped()->hover()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('striped()')
        . '->' . $x->text('info')->span('hover()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-striped table-hover">' . PHP_EOL
        . ' ...' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Striped & Hover', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('active')->h4('Active Tables');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Highlight a table row or cell by adding a .table-active class.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->active()->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->active()->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('active()')
        . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('colspan(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('active()')
        . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'Larry the Bird'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'@twitter'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table">' . PHP_EOL
        . ' <thead>' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </thead>' . PHP_EOL
        . ' <tbody>' . PHP_EOL
        . '   <tr class="table-active">' . PHP_EOL
        . '     ...' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     ...' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     <th scope="row">3</th>' . PHP_EOL
        . '     <td colspan="2" class="table-active">Larry the Bird</td>' . PHP_EOL
        . '     <td>@twitter</td>' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . ' </tbody>' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Active', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->active()->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->active()->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->dark()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('active()')
        . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('colspan(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('active()')
        . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'Larry the Bird'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span("'@twitter'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('dark()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-dark">' . PHP_EOL
        . ' <thead>' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </thead>' . PHP_EOL
        . ' <tbody>' . PHP_EOL
        . '   <tr class="table-active">' . PHP_EOL
        . '     ...' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     ...' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     <th scope="row">3</th>' . PHP_EOL
        . '     <td colspan="2" class="table-active">Larry the Bird</td>' . PHP_EOL
        . '     <td>@twitter</td>' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . ' </tbody>' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Active - Dark', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('borders')->h3('Table Borders');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('bordered')->h4('Bordered Tables');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Add .table-bordered for borders on all sides of the table and cells.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->bordered()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('bordered()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-bordered">' . PHP_EOL
        . ' ...' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Bordered', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('Border color utilities can be added to change colors:');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->bordered()->border('primary')->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('bordered()')
        . '->' . $x->text('info')->span('border(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-bordered border-primary">' . PHP_EOL
        . ' ...' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Color Border', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('borderless')->h4('Tables Without Borders');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Add .table-borderless for a table without borders.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->borderless()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('borderless()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-borderless">' . PHP_EOL
        . ' ...' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Borderless', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->borderless()->dark()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('borderless()')
        . '->' . $x->text('info')->span('dark()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-dark table-borderless">' . PHP_EOL
        . ' ...' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Borderless - Dark', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('vertical')->h4('Vertical Alignment');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p($x->htmlchar('Table cells of <thead> are always vertical aligned to the bottom. Table cells in <tbody> inherit their alignment from <table> and are aligned to the the top by default. Use the vertical align classes to re-align where needed.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->w(25)->th('Heading 1');
      $x->scope('col')->w(25)->th('Heading 2');
      $x->scope('col')->w(25)->th('Heading 3');
      $x->scope('col')->w(25)->th('Heading 4');
      $x->tr();
      $x->thead();
      $x->td('This cell inherits vertical-align: middle; from the table');
      $x->td('This cell inherits vertical-align: middle; from the table');
      $x->td('This cell inherits vertical-align: middle; from the table');
      $x->td('This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.');
      $x->tr();
      $x->td('This cell inherits vertical-align: bottom; from the table row');
      $x->td('This cell inherits vertical-align: bottom; from the table row');
      $x->td('This cell inherits vertical-align: bottom; from the table row');
      $x->td('This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.');
      $x->align('bottom')->tr();
      $x->td('This cell inherits vertical-align: middle; from the table');
      $x->td('This cell inherits vertical-align: middle; from the table');
      $x->align('top')->td('This cell is aligned to the top.');
      $x->td('This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.');
      $x->tr();
      $p = $x->align('middle')->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'bottom'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span('...')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span('...')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'top'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span('...')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('td(')
        . $x->text('warning')->span('...')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('tr()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'middle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table align-middle">' . PHP_EOL
        . ' <thead>' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     ...' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . ' </thead>' . PHP_EOL
        . ' <tbody>' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     ...' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . '   <tr class="align-bottom">' . PHP_EOL
        . '     ...' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     <td>...</td>' . PHP_EOL
        . '     <td>...</td>' . PHP_EOL
        . '     <td class="align-top">This cell is aligned to the top.</td>' . PHP_EOL
        . '     <td>...</td>' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . ' </tbody>' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Vertical Alignment', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('nesting')->h4('Nesting');
      $p .= $x->p('Border styles, active styles, and table variants are not inherited by nested tables.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('Header');
      $x->scope('col')->th('Header');
      $x->scope('col')->th('Header');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('A');
      $x->td('First');
      $x->td('Last');
      $x->tr();
      $x->scope('row')->th('B');
      $x->td('First');
      $x->td('Last');
      $x->tr();
      $x->scope('row')->th('C');
      $x->td('First');
      $x->td('Last');
      $x->tr();
      $p = $x->mb(0)->table();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->colspan(4)->td($p);
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->striped()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = '...' . PHP_EOL
        . '...' . PHP_EOL
        . $dollar . $x->text('danger')->span('nest') . ' = '
        . $xx . '->' . $x->text('info')->span('md(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('colspan(')
        . $x->text('warning')->span("'4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('td(')
        . $dollar . $x->text('danger')->span('nest')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('striped()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-striped">' . PHP_EOL
        . ' <thead>' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </thead>' . PHP_EOL
        . ' <tbody>' . PHP_EOL
        . '   ...' . PHP_EOL
        . '   <tr>' . PHP_EOL
        . '     <td colspan="4">' . PHP_EOL
        . '       <table class="table mb-0">' . PHP_EOL
        . '         ...' . PHP_EOL
        . '       </table>' . PHP_EOL
        . '     </td>' . PHP_EOL
        . '   </tr>' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </tbody>' . PHP_EOL
        . '</table>' . PHP_EOL
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

      $p = $x->id('how')->h4('How Nesting Works');
      $p .= $x->p($x->htmlchar('To prevent any styles from leaking to nested tables, we use the child combinator (>) selector in our CSS. Since we need to target all the tds and ths in the thead, tbody, and tfoot, our selector would look pretty long without it. As such, we use the rather odd looking .table > :not(caption) > * > * selector to target all tds and ths of the .table, but none of any potential nested tables.'));
      $p .= $x->p($x->htmlchar('Note that if you add <tr>s as direct children of a table, those <tr> will be wrapped in a <tbody> by default, thus making our selectors work as intended.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('anatomy')->h3('Anatomy');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('table-head')->h4('Table Head');
      $p .= $x->p($x->htmlchar('Similar to tables and dark tables, use the modifier classes .table-light or .table-dark to make <thead>s appear light or dark gray.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->light()->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('light()')
        . '->' . $x->text('info')->span('thead()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table">' . PHP_EOL
        . ' <thead class="table-light">' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </thead>' . PHP_EOL
        . ' <tbody>' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </tbody>' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Table Head Light', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->dark()->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('dark()')
        . '->' . $x->text('info')->span('thead()') . $colon
        . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table">' . PHP_EOL
        . ' <thead class="table-dark">' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </thead>' . PHP_EOL
        . ' <tbody>' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </tbody>' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Table Head Dark', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('foot')->h4('Table Foot');
      $p .= $x->p('tbody() must be called before tfoot() to wrap all previous table rows.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->light()->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $x->tbody();
      $x->td('Footer');
      $x->td('Footer');
      $x->td('Footer');
      $x->td('Footer');
      $x->tr();
      $x->tfoot();
      $p = $x->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('light()')
        . '->' . $x->text('info')->span('thead()') . $colon
        . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('tbody()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('tfoot()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table">' . PHP_EOL
        . ' <thead class="table-light">' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </thead>' . PHP_EOL
        . ' <tbody>' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </tbody>' . PHP_EOL
        . ' <tfoot>' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </tfoot>' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Table Foot', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('captions')->h4('Captions')
        . $x->p($x->htmlchar('A <caption> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->tcaption('List of users');
      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $p = $x->sm()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('tcaption(')
        . $x->text('warning')->span("'List of users'")
        . $x->text('info')->span(')') . $colon . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('thead()') . $colon
        . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('tbody()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('sm()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-sm">' . PHP_EOL
        . ' <caption>List of users</caption>' . PHP_EOL
        . ' <thead>' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </thead>' . PHP_EOL
        . ' <tbody>' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </tbody>' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Caption', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('You can also put the <caption> on the top of the table with .caption-top.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->tcaption('List of users');
      $x->scope('col')->th('#');
      $x->scope('col')->th('First');
      $x->scope('col')->th('Last');
      $x->scope('col')->th('Handle');
      $x->tr();
      $x->thead();
      $x->scope('row')->th('1');
      $x->td('Mark');
      $x->td('Otto');
      $x->td('@mdo');
      $x->tr();
      $x->scope('row')->th('2');
      $x->td('Jacob');
      $x->td('Thornton');
      $x->td('@fat');
      $x->tr();
      $x->scope('row')->th('3');
      $x->colspan(2)->td('Larry the Bird');
      $x->td('@twitter');
      $x->tr();
      $x->captiontop();
      $p = $x->sm()->table();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('tcaption(')
        . $x->text('warning')->span("'List of users'")
        . $x->text('info')->span(')') . $colon . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('thead()') . $colon
        . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $xx . '->' . $x->text('info')->span('tbody()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('captiontop()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('sm()')
        . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<table class="table table-sm">' . PHP_EOL
        . ' <caption>List of users</caption>' . PHP_EOL
        . ' <thead>' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </thead>' . PHP_EOL
        . ' <tbody>' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </tbody>' . PHP_EOL
        . '</table>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Caption Top', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('responsive')->h4('Responsive Tables');
      $p .= $x->p('Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a .table with .table-responsive. Or, pick a maximum breakpoint with which to have a responsive table up to by using .table-responsive{-sm|-md|-lg|-xl|-xxl}.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('truncation')->h5('Vertical Clipping/Truncation');
      $p .= $x->p('Responsive tables make use of overflow-y: hidden, which clips off any content that goes beyond the bottom or top edges of the table. In particular, this can clip off dropdown menus and other third-party widgets.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('always')->h4('Always Responsive');
      $p .= $x->p('Across every breakpoint, use .table-responsive for horizontally scrolling tables.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->scope('col')->th('#');
      $x->scope('col')->th('Heading');
      $x->scope('col')->th('Heading');
      $x->scope('col')->th('Heading');
      $x->scope('col')->th('Heading');
      $x->scope('col')->th('Heading');
      $x->scope('col')->th('Heading');
      $x->scope('col')->th('Heading');
      $x->scope('col')->th('Heading');
      $x->scope('col')->th('Heading');
      $x->tr();
      $x->thead();
      $x->scope('row')->th(1);
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->tr();
      $x->scope('row')->th(2);
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->tr();
      $x->scope('row')->th(3);
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->td('Cell');
      $x->tr();
      $x->tbody();
      $table = $x->table();

      $p = $x->class('table-responsive')->adiv($table);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = '...' . PHP_EOL
        . '...' . PHP_EOL
        . $dollar . $x->text('danger')->span('table') . ' = '
        . $xx . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'table-responsive'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('table')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="table-responsive">' . PHP_EOL
        . ' <table class="table">' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </table>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Always Responsive', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('breakpoint')->h4('Breakpoint Specific');
      $p .= $x->p('Use .table-responsive{-sm|-md|-lg|-xl|-xxl} as needed to create responsive tables up to a particular breakpoint. From that breakpoint and up, the table will behave normally and not scroll horizontally.');
      $p .= $x->p($x->strong('These tables may appear broken until their responsive styles apply at specific viewport widths.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->class('table-responsive')->adiv($table);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->class('table-responsive-sm')->adiv($table);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->class('table-responsive-md')->adiv($table);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->class('table-responsive-lg')->adiv($table);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->class('table-responsive-xl')->adiv($table);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->class('table-responsive-xxl')->adiv($table);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = '...' . PHP_EOL
        . '...' . PHP_EOL
        . $dollar . $x->text('danger')->span('table') . ' = '
        . $xx . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'table-responsive'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('table')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $dollar . $x->text('danger')->span('table') . ' = '
        . $xx . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'table-responsive-sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('table')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $dollar . $x->text('danger')->span('table') . ' = '
        . $xx . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'table-responsive-md'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('table')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $dollar . $x->text('danger')->span('table') . ' = '
        . $xx . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'table-responsive-lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('table')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $dollar . $x->text('danger')->span('table') . ' = '
        . $xx . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'table-responsive-xl'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('table')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . '...' . PHP_EOL
        . '...' . PHP_EOL
        . $dollar . $x->text('danger')->span('table') . ' = '
        . $xx . '->' . $x->text('info')->span('table()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'table-responsive-xxl'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('table')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="table-responsive">' . PHP_EOL
        . ' <table class="table">' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </table>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="table-responsive-sm">' . PHP_EOL
        . ' <table class="table">' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </table>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="table-responsive-md">' . PHP_EOL
        . ' <table class="table">' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </table>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="table-responsive-lg">' . PHP_EOL
        . ' <table class="table">' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </table>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="table-responsive-lg">' . PHP_EOL
        . ' <table class="table">' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </table>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="table-responsive-xl">' . PHP_EOL
        . ' <table class="table">' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </table>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="table-responsive-xxl">' . PHP_EOL
        . ' <table class="table">' . PHP_EOL
        . '   ...' . PHP_EOL
        . ' </table>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Breakpoint', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Tables');
      $content .= $x->text('center')->lead('Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'icons') {

      // Get list of icons
      $icons = File::files(public_path('vendor/splittlogic/css/bootstrap-icons-1.5.0/'));

      // Check there are icons
      if (is_null($icons))
      {

      // List of icons found
      } else {

        // Cycle through icons
        foreach($icons as $icon)
        {

          // Check for svg file
          if (substr($icon, -4) == '.svg')
          {

            // Replace path & .svg
            $path = public_path('vendor/splittlogic/css/bootstrap-icons-1.5.0');
            $icon = str_replace($path, "", $icon);
            $icon = str_replace("\\", '', $icon);
            $icon = str_replace('/', '', $icon);
            $icon = str_replace('.svg', '', $icon);

            // Create icon element
            $i = $x->astyle('font-size: 32px;')->icon($icon);

            // Create icon box
            $i = $x->pad(3)->py(4)->mb(2)->bg('light')->text('center')->rounded()->adiv($i)
              . $x->text('center')->adiv($icon);
            $i = $x->d('block')->text('dark')->text('decoration-none')->href(route('splittlogic.bs5.icon', $icon))->a($i);
            $x->col()->mb(4)->li($i);

          }

        }

        // Create list
        $p = $x->class('row row-cols-3 row-cols-sm-4 row-cols-lg-6 row-cols-xl-8 list-unstyled list')
          ->ul();

        $x->div($p);
        $x->row();

      }

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Bootstrap Icons');
      $content .= $x->text('center')->lead('Free, high quality, open source icon library with over 1,300 icons. Include them anyway you like—SVGs, SVG sprite, or web fonts. Use them with or without Bootstrap in any project.');
      $content .= $br;
      $content .= $x->container();

    } else {

      $content = $x->aboutError();

    }

    return bs5::make()->aboutView($content);

  }


}
