<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5CarouselController extends Controller
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
      . $x->p('The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. It works with a series of images, text, or custom markup. It also includes support for previous/next controls and indicators.')
      . $x->p('In browsers where the Page Visibility API is supported, the carousel will avoid sliding when the webpage is not visible to the user (such as when the browser tab is inactive, the browser window is minimized, etc.).')
      . $x->p('The animation effect of this component is dependent on the prefers-reduced-motion media query. See the reduced motion section of our accessibility documentation.')
      . $x->p('Please be aware that nested carousels are not supported, and carousels are generally not compliant with accessibility standards.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('example')->h4('Example')
      . $x->p('Carousels don’t automatically normalize slide dimensions. As such, you may need to use additional utilities or custom styles to appropriately size content. While carousels support previous/next controls and indicators, they’re not explicitly required. Add and customize as you see fit.')
      . $x->p($x->strong('The .active class needs to be added to one of the slides') . ' otherwise the carousel will not be visible. Also be sure to set a unique id on the .carousel for optional controls, especially if you’re using multiple carousels on a single page. Control and indicator elements must have a data-bs-target attribute (or href for links) that matches the id of the .carousel element.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('slides')->h4('Slides Only')
      . $x->p('Here’s a carousel with slides only. Note the presence of the .d-block and .w-100 on carousel images to prevent browser default image alignment.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->dummy()->citem('First Slide');
    $x->dummy()->citem('Second Slide');
    $x->dummy()->citem('Third Slide');
    $p = $x->carousel();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('carousel()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">' . PHP_EOL
      . ' <div class="carousel-inner">' . PHP_EOL
      . '   <div class="carousel-item active">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Slides Only', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('controls')->h4('With Controls')
      . $x->p($x->htmlchar('Adding in the previous and next controls. We recommend using <button> elements, but you can also use <a> elements with role="button".'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->dummy()->citem('First Slide');
    $x->dummy()->citem('Second Slide');
    $x->dummy()->citem('Third Slide');
    $p = $x->control()->carousel();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('control()')
      . '->' . $x->text('info')->span('carousel()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">' . PHP_EOL
      . ' <div class="carousel-inner">' . PHP_EOL
      . '   <div class="carousel-item active">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">' . PHP_EOL
      . '   <span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Previous</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">' . PHP_EOL
      . '   <span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Next</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'With Controls', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('indicators')->h4('With Indicators')
      . $x->p('You can also add the indicators to the carousel, alongside the controls, too.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->active()->dummy()->citem('First Slide');
    $x->dummy()->citem('Second Slide');
    $x->dummy()->citem('Third Slide');
    $p = $x->control()->indicators()->carousel();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('control()')
      . '->' . $x->text('info')->span('indicators()')
      . '->' . $x->text('info')->span('carousel()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">' . PHP_EOL
      . ' <div class="carousel-indicators">' . PHP_EOL
      . '   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>' . PHP_EOL
      . '   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>' . PHP_EOL
      . '   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="carousel-inner">' . PHP_EOL
      . '   <div class="carousel-item active">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">' . PHP_EOL
      . '   <span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Previous</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">' . PHP_EOL
      . '   <span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Next</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'With Indicators', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('captions')->h4('With Captions')
      . $x->p('Add captions to your slides easily with the .carousel-caption element within any .carousel-item. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We hide them initially with .d-none and bring them back on medium-sized devices with .d-md-block.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->citemcaption('First slide label', 'Some representative placeholder content for the first slide.');
    $x->active()->dummy()->citem('First Slide');
    $x->citemcaption('Second slide label', 'Some representative placeholder content for the first slide.');
    $x->dummy()->citem('Second Slide');
    $x->citemcaption('Third slide label', 'Some representative placeholder content for the first slide.');
    $x->dummy()->citem('Third Slide');
    $p = $x->control()->indicators()->carousel();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('citemcaption(')
      . $x->text('warning')->span("'First slide label', 'Some representative...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'First Slide'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citemcaption(')
      . $x->text('warning')->span("'Second slide label', 'Some representative...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'Second Slide'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citemcaption(')
      . $x->text('warning')->span("'Third slide label', 'Some representative...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'Third Slide'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('control()')
      . '->' . $x->text('info')->span('indicators()')
      . '->' . $x->text('info')->span('carousel()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">' . PHP_EOL
      . ' <div class="carousel-indicators">' . PHP_EOL
      . '   <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>' . PHP_EOL
      . '   <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>' . PHP_EOL
      . '   <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="carousel-inner">' . PHP_EOL
      . '   <div class="carousel-item active">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '     <div class="carousel-caption d-none d-md-block">' . PHP_EOL
      . '       <h5>First slide label</h5>' . PHP_EOL
      . '       <p>Some representative placeholder content for the first slide.</p>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '     <div class="carousel-caption d-none d-md-block">' . PHP_EOL
      . '       <h5>Second slide label</h5>' . PHP_EOL
      . '       <p>Some representative placeholder content for the second slide.</p>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '     <div class="carousel-caption d-none d-md-block">' . PHP_EOL
      . '       <h5>Third slide label</h5>' . PHP_EOL
      . '       <p>Some representative placeholder content for the third slide.</p>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">' . PHP_EOL
      . '   <span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Previous</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">' . PHP_EOL
      . '   <span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Next</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'With Captions', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('crossfade')->h4('Crossfade')
      . $x->p('Add .carousel-fade to your carousel to animate slides with a fade transition instead of a slide.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->dummy()->active()->citem('First Slide');
    $x->dummy()->citem('Second Slide');
    $x->dummy()->citem('Third Slide');
    $p = $x->control()->fade()->carousel();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('control()')
      . '->' . $x->text('info')->span('fade()')
      . '->' . $x->text('info')->span('carousel()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">' . PHP_EOL
      . ' <div class="carousel-inner">' . PHP_EOL
      . '   <div class="carousel-item active">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">' . PHP_EOL
      . '   <span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Previous</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">' . PHP_EOL
      . '   <span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Next</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Crossfade', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('interval')->h4('Individual .carousel-item interval')
      . $x->p('Add data-bs-interval="" to a .carousel-item to change the amount of time to delay between automatically cycling to the next item.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->dummy()->active()->interval(10000)->citem('First Slide');
    $x->dummy()->interval(2000)->citem('Second Slide');
    $x->dummy()->citem('Third Slide');
    $p = $x->control()->carousel();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('interval(')
      . $x->text('warning')->span("'10000'")
      . $cp . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('interval(')
      . $x->text('warning')->span("'2000'")
      . $cp . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('control()')
      . '->' . $x->text('info')->span('carousel()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">' . PHP_EOL
      . ' <div class="carousel-inner">' . PHP_EOL
      . '   <div class="carousel-item active" data-bs-interval="10000">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item" data-bs-interval="2000">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">' . PHP_EOL
      . '   <span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Previous</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">' . PHP_EOL
      . '   <span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Next</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Interval', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('disable')->h4('Disable Touch Swiping')
      . $x->p('Carousels support swiping left/right on touchscreen devices to move between slides. This can be disabled using the data-bs-touch attribute. The example below also does not include the data-bs-ride attribute and has data-bs-interval="false" so it doesn’t autoplay.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->dummy()->active()->citem('First Slide');
    $x->dummy()->citem('Second Slide');
    $x->dummy()->citem('Third Slide');
    $p = $x->control()->notouch()->carousel();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('control()')
      . '->' . $x->text('info')->span('notouch()')
      . '->' . $x->text('info')->span('carousel()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">' . PHP_EOL
      . ' <div class="carousel-inner">' . PHP_EOL
      . '   <div class="carousel-item active">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">' . PHP_EOL
      . '   <span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Previous</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">' . PHP_EOL
      . '   <span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Next</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'No Touch', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('dark')->h4('Dark Variant')
      . $x->p('Add .carousel-dark to the .carousel for darker controls, indicators, and captions. Controls have been inverted from their default white fill with the filter CSS property. Captions and controls have additional Sass variables that customize the color and background-color.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->citemcaption('First slide label', 'Some representative placeholder content for the first slide.');
    $x->dummy()->active()->citem('First Slide');
    $x->citemcaption('Second slide label', 'Some representative placeholder content for the second slide.');
    $x->dummy()->citem('Second Slide');
    $x->citemcaption('Third slide label', 'Some representative placeholder content for the third slide.');
    $x->dummy()->citem('Third Slide');
    $p = $x->control()->indicators()->dark()->carousel();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('citemcaption(')
      . $x->text('warning')->span("'First slide label', 'Some represantative...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citemcaption(')
      . $x->text('warning')->span("'Second slide label', 'Some represantative...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citemcaption(')
      . $x->text('warning')->span("'Third slide label', 'Some represantative...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('citem(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('control()')
      . '->' . $x->text('info')->span('indicators()')
      . '->' . $x->text('info')->span('dark()')
      . '->' . $x->text('info')->span('carousel()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">' . PHP_EOL
      . ' <div class="carousel-indicators">' . PHP_EOL
      . '   <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>' . PHP_EOL
      . '   <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>' . PHP_EOL
      . '   <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="carousel-inner">' . PHP_EOL
      . '   <div class="carousel-item active" data-bs-interval="10000">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '     <div class="carousel-caption d-none d-md-block">' . PHP_EOL
      . '       <h5>First slide label</h5>' . PHP_EOL
      . '       <p>Some representative placeholder content for the first slide.</p>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item" data-bs-interval="2000">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '     <div class="carousel-caption d-none d-md-block">' . PHP_EOL
      . '       <h5>Second slide label</h5>' . PHP_EOL
      . '       <p>Some representative placeholder content for the second slide.</p>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="carousel-item">' . PHP_EOL
      . '     <img src="..." class="d-block w-100" alt="...">' . PHP_EOL
      . '     <div class="carousel-caption d-none d-md-block">' . PHP_EOL
      . '       <h5>Third slide label</h5>' . PHP_EOL
      . '       <p>Some representative placeholder content for the third slide.</p>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">' . PHP_EOL
      . '   <span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Previous</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . ' <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">' . PHP_EOL
      . '   <span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL
      . '   <span class="visually-hidden">Next</span>' . PHP_EOL
      . ' </button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Dark', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Carousel');
    $content .= $x->text('center')->lead('A slideshow component for cycling through elements—images or slides of text—like a carousel.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
