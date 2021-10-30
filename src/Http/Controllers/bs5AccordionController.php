<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\bs5\bs5;

class bs5AccordionController extends Controller
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

    $p = $x->id('howitworks')->h4('How It Works')
      . $x->p('The accordion uses collapse internally to make it collapsible. To render an accordion that’s expanded, add the .open class on the .accordion.')
      . $x->p('The animation effect of this component is dependent on the prefers-reduced-motion media query. See the reduced motion section of our accessibility documentation.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('example')->h4('Example')
      . $x->p('Click the accordions below to expand/collapse the accordion content.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $heading = 'Accordion Item #1';
    $body = $x->strong("This is the first item's accordion body.")
      . " It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.";
    $x->show()->aitem($heading, $body);

    $heading = 'Accordion Item #2';
    $body = $x->strong("This is the second item's accordion body.")
      . " It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.";
    $x->aitem($heading, $body);

    $heading = 'Accordion Item #3';
    $body = $x->strong("This is the third item's accordion body.")
      . " It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.";
    $x->aitem($heading, $body);

    $p = $x->accordion();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('heading') . ' = '
      . $x->text('warning')->span("'Accordion Item #1'") . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('body') . ' = '
      . $x->text('warning')->span("'...'") . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('aitem(')
      . $dollar . $x->text('danger')->span('heading')
      . ', '
      . $dollar . $x->text('danger')->span('body')
      . ', '
      . $x->text('warning')->span("'show'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('heading') . ' = '
      . $x->text('warning')->span("'Accordion Item #2'") . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('body') . ' = '
      . $x->text('warning')->span("'...'") . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('aitem(')
      . $dollar . $x->text('danger')->span('heading')
      . ', '
      . $dollar . $x->text('danger')->span('body')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('heading') . ' = '
      . $x->text('warning')->span("'Accordion Item #3'") . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('body') . ' = '
      . $x->text('warning')->span("'...'") . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('aitem(')
      . $dollar . $x->text('danger')->span('heading')
      . ', '
      . $dollar . $x->text('danger')->span('body')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('accordion()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="accordion" id="accordionExample">' . PHP_EOL
      . ' <div class="accordion-item">' . PHP_EOL
      . '   <h2 class="accordion-header" id="headingOne">' . PHP_EOL
      . '     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">' . PHP_EOL
      . '       Accordion Item #1' . PHP_EOL
      . '     </button>' . PHP_EOL
      . '   </h2>' . PHP_EOL
      . '   <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">' . PHP_EOL
      . '     <div class="accordion-body">' . PHP_EOL
      . "       <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow." . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="accordion-item">' . PHP_EOL
      . '   <h2 class="accordion-header" id="headingTwo">' . PHP_EOL
      . '     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">' . PHP_EOL
      . '       Accordion Item #2' . PHP_EOL
      . '     </button>' . PHP_EOL
      . '   </h2>' . PHP_EOL
      . '   <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">' . PHP_EOL
      . '     <div class="accordion-body">' . PHP_EOL
      . "       <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow." . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="accordion-item">' . PHP_EOL
      . '   <h2 class="accordion-header" id="headingThree">' . PHP_EOL
      . '     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">' . PHP_EOL
      . '       Accordion Item #3' . PHP_EOL
      . '     </button>' . PHP_EOL
      . '   </h2>' . PHP_EOL
      . '   <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">' . PHP_EOL
      . '     <div class="accordion-body">' . PHP_EOL
      . "       <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow." . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
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

    $p = $x->id('flush')->h4('Flush')
      . $x->p('Add .accordion-flush to remove the default background-color, some borders, and some rounded corners to render accordions edge-to-edge with their parent container.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $heading = 'Accordion Item #1';
    $body = "Placeholder content for this accordion, which is intended to demonstrate the .accordion-flush class. This is the first item's accordion body.";
    $x->aitem($heading, $body);

    $heading = 'Accordion Item #2';
    $body = "Placeholder content for this accordion, which is intended to demonstrate the .accordion-flush class. This is the second item's accordion body. Let's imagine this being filled with some actual content.";
    $x->aitem($heading, $body);

    $heading = 'Accordion Item #3';
    $body = "Placeholder content for this accordion, which is intended to demonstrate the .accordion-flush class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.";
    $x->aitem($heading, $body);

    $p = $x->flush()->accordion();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('heading') . ' = '
      . $x->text('warning')->span("'Accordion Item #1'") . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('body') . ' = '
      . $x->text('warning')->span("'...'") . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('aitem(')
      . $dollar . $x->text('danger')->span('heading')
      . ', '
      . $dollar . $x->text('danger')->span('body')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('heading') . ' = '
      . $x->text('warning')->span("'Accordion Item #2'") . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('body') . ' = '
      . $x->text('warning')->span("'...'") . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('aitem(')
      . $dollar . $x->text('danger')->span('heading')
      . ', '
      . $dollar . $x->text('danger')->span('body')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('heading') . ' = '
      . $x->text('warning')->span("'Accordion Item #3'") . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('body') . ' = '
      . $x->text('warning')->span("'...'") . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('aitem(')
      . $dollar . $x->text('danger')->span('heading')
      . ', '
      . $dollar . $x->text('danger')->span('body')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('flush()')
      . '->' . $x->text('info')->span('accordion()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="accordion accordion-flush" id="accordionFlushExample">' . PHP_EOL
      . ' <div class="accordion-item">' . PHP_EOL
      . '   <h2 class="accordion-header" id="flush-headingOne">' . PHP_EOL
      . '     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">' . PHP_EOL
      . '       Accordion Item #1' . PHP_EOL
      . '     </button>' . PHP_EOL
      . '   </h2>' . PHP_EOL
      . '   <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">' . PHP_EOL
      . '     <div class="accordion-body">' . "Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body." . '</div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="accordion-item">' . PHP_EOL
      . '   <h2 class="accordion-header" id="flush-headingTwo">' . PHP_EOL
      . '     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">' . PHP_EOL
      . '       Accordion Item #2' . PHP_EOL
      . '     </button>' . PHP_EOL
      . '   </h2>' . PHP_EOL
      . '   <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">' . PHP_EOL
      . '     <div class="accordion-body">' . "Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content." . '</div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="accordion-item">' . PHP_EOL
      . '   <h2 class="accordion-header" id="flush-headingThree">' . PHP_EOL
      . '     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">' . PHP_EOL
      . '       Accordion Item #3' . PHP_EOL
      . '     </button>' . PHP_EOL
      . '   </h2>' . PHP_EOL
      . '   <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">' . PHP_EOL
      . '     <div class="accordion-body">' . "Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application." . '</div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Flush', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('always')->h4('Always Open')
      . $x->p('Omit the data-bs-parent attribute on each .accordion-collapse to make accordion items stay open when another item is opened.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $heading = 'Accordion Item #1';
    $body = $x->strong("This is the first item's accordion body.")
      . " It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.";
    $x->show()->aitem($heading, $body);

    $heading = 'Accordion Item #2';
    $body = $x->strong("This is the second item's accordion body.")
      . " It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.";
    $x->aitem($heading, $body);

    $heading = 'Accordion Item #3';
    $body = $x->strong("This is the third item's accordion body.")
      . " It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.";
    $x->aitem($heading, $body);

    $p = $x->alwaysopen()->accordion();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('heading') . ' = '
      . $x->text('warning')->span("'Accordion Item #1'") . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('body') . ' = '
      . $x->text('warning')->span("'...'") . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('aitem(')
      . $dollar . $x->text('danger')->span('heading')
      . ', '
      . $dollar . $x->text('danger')->span('body')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('heading') . ' = '
      . $x->text('warning')->span("'Accordion Item #2'") . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('body') . ' = '
      . $x->text('warning')->span("'...'") . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('aitem(')
      . $dollar . $x->text('danger')->span('heading')
      . ', '
      . $dollar . $x->text('danger')->span('body')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('heading') . ' = '
      . $x->text('warning')->span("'Accordion Item #3'") . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('body') . ' = '
      . $x->text('warning')->span("'...'") . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('aitem(')
      . $dollar . $x->text('danger')->span('heading')
      . ', '
      . $dollar . $x->text('danger')->span('body')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('alwaysopen()')
      . '->' . $x->text('info')->span('accordion()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="accordion" id="accordionPanelsStayOpenExample">' . PHP_EOL
      . ' <div class="accordion-item">' . PHP_EOL
      . '   <h2 class="accordion-header" id="panelsStayOpen-headingOne">' . PHP_EOL
      . '     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">' . PHP_EOL
      . '       Accordion Item #1' . PHP_EOL
      . '     </button>' . PHP_EOL
      . '   </h2>' . PHP_EOL
      . '   <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">' . PHP_EOL
      . '     <div class="accordion-body">' . PHP_EOL
      . '       <strong>This is the first item' . "'" . 's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It' . "'" . 's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="accordion-item">' . PHP_EOL
      . '   <h2 class="accordion-header" id="panelsStayOpen-headingTwo">' . PHP_EOL
      . '     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">' . PHP_EOL
      . '       Accordion Item #2' . PHP_EOL
      . '     </button>' . PHP_EOL
      . '   </h2>' . PHP_EOL
      . '   <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">' . PHP_EOL
      . '     <div class="accordion-body">' . PHP_EOL
      . '       <strong>This is the second item' . "'" . 's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It' . "'" . 's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="accordion-item">' . PHP_EOL
      . '   <h2 class="accordion-header" id="panelsStayOpen-headingThree">' . PHP_EOL
      . '     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">' . PHP_EOL
      . '       Accordion Item #3' . PHP_EOL
      . '     </button>' . PHP_EOL
      . '   </h2>' . PHP_EOL
      . '   <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">' . PHP_EOL
      . '     <div class="accordion-body">' . PHP_EOL
      . '       <strong>This is the third item' . "'" . 's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It' . "'" . 's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Always Open', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Accordion');
    $content .= $x->text('center')->lead('Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
