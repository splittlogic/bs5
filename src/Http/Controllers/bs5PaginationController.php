<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5PaginationController extends Controller
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
      . $x->p($x->htmlchar('We use a large block of connected links for our pagination, making links hard to miss and easily scalable—all while providing large hit areas. Pagination is built with list HTML elements so screen readers can announce the number of available links. Use a wrapping <nav> element to identify it as a navigation section to screen readers and other assistive technologies.'))
      . $x->p($x->htmlchar('In addition, as pages likely have more than one such navigation section, it’s advisable to provide a descriptive aria-label for the <nav> to reflect its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be aria-label="Search results pages".'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->plink('Previous', '#');
    $x->pitem();
    $x->plink('1', '#');
    $x->pitem();
    $x->plink('2', '#');
    $x->pitem();
    $x->plink('3', '#');
    $x->pitem();
    $x->plink('Next', '#');
    $x->pitem();
    $x->pul();
    $p = $x->pagination();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = '// Simple pitem() Example' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'Previous', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'1', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'2', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'3', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'Next', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pagination()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . '// Simple plink() Example' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'Previous', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'1', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'2', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'3', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'Next', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pagination()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . '// Full Example - If you want to set classes or attributes for each element' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'Previous', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'1', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'2', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'3', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'Next', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem()')
      . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pul()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pagination()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav aria-label="Page navigation example">' . PHP_EOL
      . ' <ul class="pagination">' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">Previous</a></li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">1</a></li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">2</a></li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">3</a></li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">Next</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</nav>' . PHP_EOL
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

    $p = $x->id('icons')->h4('Working with Icons')
      . $x->p('Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with aria attributes.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->aria('hidden', 'true')->span('&laquo;');
    $x->aria('label', 'Previous')->plink($p, '#');
    $x->plink('1', '#');
    $x->plink('2', '#');
    $x->plink('3', '#');
    $p = $x->aria('hidden', 'true')->span('&raquo;');
    $x->aria('label', 'Next')->plink($p, '#');
    $p = $x->pagination();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('laquo') . ' = '
      . $xx . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'hidden', 'true'")
      . $cp . '->' . $x->text('info')->span('span(')
      . $x->text('warning')->span("'" . $x->htmlchar('&laquo;') . "'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Previous'")
      . $cp . '->' . $x->text('info')->span('plink(')
      . $dollar . $x->text('danger')->span('laquo')
      . $x->text('warning')->span(", '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'1', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'2', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('plink(')
      . $x->text('warning')->span("'3', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('raquo') . ' = '
      . $xx . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'hidden', 'true'")
      . $cp . '->' . $x->text('info')->span('span(')
      . $x->text('warning')->span("'" . $x->htmlchar('&raquo;') . "'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'label', 'Next'")
      . $cp . '->' . $x->text('info')->span('plink(')
      . $dollar . $x->text('danger')->span('raquo')
      . $x->text('warning')->span(", '#'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pagination()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav aria-label="Page navigation example">' . PHP_EOL
      . ' <ul class="pagination">' . PHP_EOL
      . '   <li class="page-item">' . PHP_EOL
      . '     <a class="page-link" href="#" aria-label="Previous">' . PHP_EOL
      . '       <span aria-hidden="true">&laquo;</span>' . PHP_EOL
      . '     </a>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">1</a></li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">2</a></li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">3</a></li>' . PHP_EOL
      . '   <li class="page-item">' . PHP_EOL
      . '     <a class="page-link" href="#" aria-label="Next">' . PHP_EOL
      . '       <span aria-hidden="true">&raquo;</span>' . PHP_EOL
      . '     </a>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Working with Icons', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('disabled')->h4('Disabled and Active States')
      . $x->p('Pagination links are customizable for different circumstances. Use .disabled for links that appear un-clickable and .active to indicate the current page.')
      . $x->p($x->htmlchar('While the .disabled class uses pointer-events: none to try to disable the link functionality of <a>s, that CSS property is not yet standardized and doesn’t account for keyboard navigation. As such, you should always add tabindex="-1" on disabled links and use custom JavaScript to fully disable their functionality.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->disabled()->pitem('Previous', '#');
    $x->pitem('1', '#');
    $x->active()->pitem('2', '#');
    $x->pitem('3', '#');
    $x->pitem('Next', '#');
    $p = $x->pagination();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'Previous', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'1', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'2', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'3', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'Next', '#'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pagination()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav aria-label="...">' . PHP_EOL
      . ' <ul class="pagination">' . PHP_EOL
      . '   <li class="page-item disabled">' . PHP_EOL
      . '     <a class="page-link">Previous</a>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">1</a></li>' . PHP_EOL
      . '   <li class="page-item active" aria-current="page">' . PHP_EOL
      . '     <a class="page-link" href="#">2</a>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">3</a></li>' . PHP_EOL
      . '   <li class="page-item">' . PHP_EOL
      . '     <a class="page-link" href="#">Next</a>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Disabled and Active States', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('sizing')->h4('Sizing')
      . $x->p('Fancy larger or smaller pagination? Add .pagination-lg or .pagination-sm for additional sizes.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->pitem('1');
    $x->pitem('2', '#');
    $x->pitem('3', '#');
    $p = $x->lg()->pagination();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'1'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'2', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'3', '#'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('pagination()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . '// OR'
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'1'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'2', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'3', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('pul()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pagination()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav aria-label="...">' . PHP_EOL
      . ' <ul class="pagination pagination-lg">' . PHP_EOL
      . '   <li class="page-item active" aria-current="page">' . PHP_EOL
      . '     <span class="page-link">1</span>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">2</a></li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">3</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'pagination-lg', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->pitem('1');
    $x->pitem('2', '#');
    $x->pitem('3', '#');
    $p = $x->sm()->pagination();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'1'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'2', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'3', '#'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('pagination()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . '// OR'
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'1'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'2', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'3', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('pul()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pagination()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav aria-label="...">' . PHP_EOL
      . ' <ul class="pagination pagination-sm">' . PHP_EOL
      . '   <li class="page-item active" aria-current="page">' . PHP_EOL
      . '     <span class="page-link">1</span>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">2</a></li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">3</a></li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'pagination-sm', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('alignment')->h4('Alignment')
      . $x->p('Change the alignment of pagination components with flexbox utilities.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->disabled()->pitem('Previous');
    $x->pitem('1', '#');
    $x->pitem('2', '#');
    $x->pitem('3', '#');
    $x->pitem('Next', '#');
    $x->justify('content-center')->pul();
    $p = $x->pagination();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'Previous'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'1', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'2', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'3', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'Next', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-center'")
      . $cp . '->' . $x->text('info')->span('pul()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pagination()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav aria-label="Page navigation example">' . PHP_EOL
      . ' <ul class="pagination justify-content-center">' . PHP_EOL
      . '   <li class="page-item disabled">' . PHP_EOL
      . '     <a class="page-link">Previous</a>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">1</a></li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">2</a></li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">3</a></li>' . PHP_EOL
      . '   <li class="page-item">' . PHP_EOL
      . '     <a class="page-link" href="#">Next</a>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Center', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->disabled()->pitem('Previous');
    $x->pitem('1', '#');
    $x->pitem('2', '#');
    $x->pitem('3', '#');
    $x->pitem('Next', '#');
    $x->justify('content-end')->pul();
    $p = $x->pagination();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'Previous'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'1', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'2', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'3', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('pitem(')
      . $x->text('warning')->span("'Next', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-end'")
      . $cp . '->' . $x->text('info')->span('pul()')
      . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('pagination()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<nav aria-label="Page navigation example">' . PHP_EOL
      . ' <ul class="pagination justify-content-end">' . PHP_EOL
      . '   <li class="page-item disabled">' . PHP_EOL
      . '     <a class="page-link">Previous</a>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">1</a></li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">2</a></li>' . PHP_EOL
      . '   <li class="page-item"><a class="page-link" href="#">3</a></li>' . PHP_EOL
      . '   <li class="page-item">' . PHP_EOL
      . '     <a class="page-link" href="#">Next</a>' . PHP_EOL
      . '   </li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</nav>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'End', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Pagination');
    $content .= $x->text('center')->lead('Documentation and examples for showing pagination to indicate a series of related content exists across multiple pages.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
