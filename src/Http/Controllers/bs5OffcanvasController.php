<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5OffcanvasController extends Controller
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

    $p = $x->id('howitworks')->h4('How It Works')
      . $x->p('Offcanvas is a sidebar component that can be toggled via JavaScript to appear from the left, right, or bottom edge of the viewport. Buttons or anchors are used as triggers that are attached to specific elements you toggle, and data attributes are used to invoke our JavaScript.');
    $x->text('center')->div($p);
    $x->row();

    $x->li('Offcanvas shares some of the same JavaScript code as modals. Conceptually, they are quite similar, but they are separate plugins.');
    $x->li('Similarly, some source Sass variables for offcanvas’s styles and dimensions are inherited from the modal’s variables.');
    $x->li('When shown, offcanvas includes a default backdrop that can be clicked to hide the offcanvas.');
    $x->li('Similar to modals, only one offcanvas can be shown at a time.');
    $p = $x->ul();
    $x->div($p);
    $x->row();

    $p = $x->strong('Heads up!');
    $p = $x->p($p . '  Given how CSS handles animations, you cannot use margin or translate on an .offcanvas element. Instead, use the class as an independent wrapping element.');
    $x->div($p);
    $x->row();

    $p = $x->p('The animation effect of this component is dependent on the prefers-reduced-motion media query. See the reduced motion section of our accessibility documentation.');
    $x->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('examples')->h4('Examples')
      . $x->id('components')->h4('Offcanvas Components')
      . $x->p('Below is an offcanvas example that is shown by default (via .show on .offcanvas). Offcanvas includes support for a header with a close button and an optional body class for some initial padding. We suggest that you include offcanvas headers with dismiss actions whenever possible, or provide an explicit dismiss action.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->offcanvastitle('Offcanvas');
    $x->offcanvasbody('Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.');
    $x->astyle('position: static; display: block; height: 200px; visibility: visible; transform: translate(0)');
    $p = $x->ostart()->offcanvas();

    $x->border()->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('offcanvastitle(')
      . $x->text('warning')->span("'Offcanvas'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('offcanvasbody(')
      . $x->text('warning')->span("'Content for the offcanvas...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('ostart()')
      . '->' . $x->text('info')->span('offcanvas()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">' . PHP_EOL
      . ' <div class="offcanvas-header">' . PHP_EOL
      . '   <h5 class="offcanvas-title" id="offcanvasLabel">Offcanvas</h5>' . PHP_EOL
      . '   <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="offcanvas-body">' . PHP_EOL
      . '   Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Offcanvas', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('live')->h4('Live Demo')
      . $x->p('Use the buttons below to show and hide an offcanvas element via JavaScript that toggles the .show class on an element with the .offcanvas class.');
    $x->text('center')->div($p);
    $x->row();

    $x->li('.offcanvas hides content (default)');
    $x->li('.offcanvas.show shows content');
    $p = $x->ul();
    $x->div($p);
    $x->row();

    $p = $x->p('You can use a link with the href attribute, or a button with the data-bs-target attribute. In both cases, the data-bs-toggle="offcanvas" is required.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->ditem('Action','#');
    $x->ditem('Another action','#');
    $x->ditem('Something else here','#');
    $p = $x->mt(3)->secondary()->dropdown('Dropdown button');
    $p = $x->div('Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.') . $p;

    $x->offcanvastitle('Offcanvas');
    $x->offcanvasbody($p);
    $p = $x->ostart()->offcanvas()
      . $x->offcanvasbutton('Button with data-bs-target');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Another action', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('ditem(')
      . $x->text('warning')->span("'Something else here', '#'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('dropdown') . ' = '
      . $xx . '->' . $x->text('info')->span('mt(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('dropdown(')
      . $x->text('warning')->span("'Dropdown button'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('offcanvastitle(')
      . $x->text('warning')->span("'Offcanvas'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('offcanvasbody(')
      . $x->text('warning')->span("'Some text as placeholder...'")
      . ' . ' . $dollar . $x->text('danger')->span('dropdown')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('ostart()')
      . '->' . $x->text('info')->span('offcanvas()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('offcanvasbutton(')
      . $x->text('warning')->span("'Button with data-bs-target'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
        '<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">' . PHP_EOL
        . ' Button with data-bs-target' . PHP_EOL
        . '</button>' . PHP_EOL
        . PHP_EOL
        . '<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">' . PHP_EOL
        . ' <div class="offcanvas-header">' . PHP_EOL
        . '   <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>' . PHP_EOL
        . '   <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="offcanvas-body">' . PHP_EOL
        . '   <div>' . PHP_EOL
        . '     Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.' . PHP_EOL
        . '   </div>' . PHP_EOL
        . '   <div class="dropdown mt-3">' . PHP_EOL
        . '     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">' . PHP_EOL
        . '       Dropdown button' . PHP_EOL
        . '     </button>' . PHP_EOL
        . '     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">' . PHP_EOL
        . '       <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
        . '       <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
        . '       <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
        . '     </ul>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Live Demo', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('placement')->h4('Placement')
      . $x->p('There’s no default placement for offcanvas components, so you must add one of the modifier classes below;');

    $x->text('center')->div($p);
    $x->row();

    $x->li('.offcanvas-start places offcanvas on the left of the viewport (shown above)');
    $x->li('.offcanvas-end places offcanvas on the right of the viewport');
    $x->li('.offcanvas-top places offcanvas on the top of the viewport');
    $x->li('.offcanvas-bottom places offcanvas on the bottom of the viewport');
    $p = $x->ul();

    $x->div($p);
    $x->row();

    $p = $x->p('Try the top, right, and bottom examples out below.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->offcanvastitle('Offcanvas top');
    $x->offcanvasbody('...');
    $p = $x->otop()->offcanvas()
      . $x->offcanvasbutton('Toggle top offcanvas');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('offcanvastitle(')
      . $x->text('warning')->span("'Offcanvas top'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('offcanvasbody(')
      . $x->text('warning')->span("'...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('otop()')
      . '->' . $x->text('info')->span('offcanvas()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('offcanvasbutton(')
      . $x->text('warning')->span("'Toggle top offcanvas'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle top offcanvas</button>' . PHP_EOL
      . PHP_EOL
      . '<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">' . PHP_EOL
      . ' <div class="offcanvas-header">' . PHP_EOL
      . '   <h5 id="offcanvasTopLabel">Offcanvas top</h5>' . PHP_EOL
      . '   <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="offcanvas-body">' . PHP_EOL
      . '   ...' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Top Offcanvas', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->offcanvastitle('Offcanvas right');
    $x->offcanvasbody('...');
    $p = $x->oright()->offcanvas()
      . $x->offcanvasbutton('Toggle right offcanvas');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('offcanvastitle(')
      . $x->text('warning')->span("'Offcanvas right'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('offcanvasbody(')
      . $x->text('warning')->span("'...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('oright()')
      . '->' . $x->text('info')->span('offcanvas()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('offcanvasbutton(')
      . $x->text('warning')->span("'Toggle right offcanvas'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>' . PHP_EOL
      . PHP_EOL
      . '<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">' . PHP_EOL
      . ' <div class="offcanvas-header">' . PHP_EOL
      . '   <h5 id="offcanvasRightLabel">Offcanvas right</h5>' . PHP_EOL
      . '   <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="offcanvas-body">' . PHP_EOL
      . '   ...' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Offcanvas Right', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->offcanvastitle('Offcanvas bottom');
    $x->offcanvasbody('...');
    $p = $x->obottom()->offcanvas()
      . $x->offcanvasbutton('Toggle bottom offcanvas');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('offcanvastitle(')
      . $x->text('warning')->span("'Offcanvas bottom'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('offcanvasbody(')
      . $x->text('warning')->span("'...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('obottom()')
      . '->' . $x->text('info')->span('offcanvas()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('offcanvasbutton(')
      . $x->text('warning')->span("'Toggle bottom offcanvas'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>' . PHP_EOL
      . PHP_EOL
      . '<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">' . PHP_EOL
      . ' <div class="offcanvas-header">' . PHP_EOL
      . '   <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>' . PHP_EOL
      . '   <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="offcanvas-body small">' . PHP_EOL
      . '   ...' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Offcanvas Bottom', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('backdrop')->h4('Backdrop')
      . $x->p($x->htmlchar('Scrolling the <body> element is disabled when an offcanvas and its backdrop are visible. Use the data-bs-scroll attribute to toggle <body> scrolling and data-bs-backdrop to toggle the backdrop.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->offcanvastitle('Colored with scrolling');
    $x->offcanvasbody('Try scrolling the rest of the page to see this option in action.');
    $p = $x->ostart()->scroll()->nobackdrop()->offcanvas()
      . $x->offcanvasbutton('Enable body scrolling');

    $x->offcanvastitle('Offcanvas with backdrop');
    $x->offcanvasbody('.....');
    $p .= $x->ostart()->offcanvas()
      . $x->mx(2)->offcanvasbutton('Enable backdrop (default)');

    $x->offcanvastitle('Backdrop with scrolling');
    $x->offcanvasbody('Try scrolling the rest of the page to see this option in action.');
    $p .= $x->ostart()->scroll()->offcanvas()
      . $x->offcanvasbutton('Enable both scrolling & backdrop');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('offcanvastitle(')
      . $x->text('warning')->span("'Colored with scrolling'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('offcanvasbody(')
      . $x->text('warning')->span("'Try scrolling...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('ostart()')
      . '->' . $x->text('info')->span('scroll()')
      . '->' . $x->text('info')->span('nobackdrop()')
      . '->' . $x->text('info')->span('offcanvas()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('offcanvasbutton(')
      . $x->text('warning')->span("'Toggle bottom offcanvas'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('offcanvastitle(')
      . $x->text('warning')->span("'Offcanvas with backdrop'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('offcanvasbody(')
      . $x->text('warning')->span("'.....'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('ostart()')
      . '->' . $x->text('info')->span('offcanvas()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('offcanvasbutton(')
      . $x->text('warning')->span("'Enable backdrop (default)'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('offcanvastitle(')
      . $x->text('warning')->span("'Backdrop with scrolling'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('offcanvasbody(')
      . $x->text('warning')->span("'Try scrolling...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('ostart()')
      . '->' . $x->text('info')->span('scroll()')
      . '->' . $x->text('info')->span('offcanvas()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('offcanvasbutton(')
      . $x->text('warning')->span("'Enable both scrolling & backdrop'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button>' . PHP_EOL
      . '<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">Enable backdrop (default)</button>' . PHP_EOL
      . '<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>' . PHP_EOL
      . PHP_EOL
      . '<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">' . PHP_EOL
      . ' <div class="offcanvas-header">' . PHP_EOL
      . '   <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with scrolling</h5>' . PHP_EOL
      . '   <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="offcanvas-body">' . PHP_EOL
      . '   <p>Try scrolling the rest of the page to see this option in action.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">' . PHP_EOL
      . ' <div class="offcanvas-header">' . PHP_EOL
      . '   <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with backdrop</h5>' . PHP_EOL
      . '   <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="offcanvas-body">' . PHP_EOL
      . '   <p>.....</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">' . PHP_EOL
      . ' <div class="offcanvas-header">' . PHP_EOL
      . '   <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>' . PHP_EOL
      . '   <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="offcanvas-body">' . PHP_EOL
      . '   <p>Try scrolling the rest of the page to see this option in action.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Backdrop', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Offcanvas');
    $content .= $x->text('center')->lead('Build hidden sidebars into your project for navigation, shopping carts, and more with a few classes and our JavaScript plugin.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
