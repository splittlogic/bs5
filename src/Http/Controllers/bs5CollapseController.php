<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5CollapseController extends Controller
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
      . $x->p('The collapse JavaScript plugin is used to show and hide content. Buttons or anchors are used as triggers that are mapped to specific elements you toggle. Collapsing an element will animate the height from its current value to 0. Given how CSS handles animations, you cannot use padding on a .collapse element. Instead, use the class as an independent wrapping element.')
      . $x->p('The animation effect of this component is dependent on the prefers-reduced-motion media query. See the reduced motion section of our accessibility documentation.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('example')->h4('Example')
      . $x->p('Click the buttons below to show and hide another element via class changes:');
    $x->text('center')->div($p);
    $x->row();

    $x->li('.collapse hides content');
    $x->li('.collapsing is applied during transitions');
    $x->li('.collapse.show shows content');
    $p = $x->ul();
    $x->div($p);
    $x->row();

    $p = $x->p('Generally, we recommend using a button with the data-bs-target attribute. While not recommended from a semantic point of view, you can also use a link with the href attribute (and a role="button"). In both cases, the data-bs-toggle="collapse" is required.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->data('bs-toggle', 'collapse')->href('#collapseExample')->role('button')->aria('expanded', 'false')->aria('collapseExample')->btna('Link with href')
      . $x->mx(2)->data('bs-toggle', 'collapse')->data('bs-target', '#collapseExample')->aria('expanded', 'false')->aria('controls', 'collapseExample')->btn('Button with data-bs-target');
    $p = $x->p($p);

    $c = $x->class('card card-body')->adiv('Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.');
    $p .= $x->collapse()->id('collapseExample')->adiv($c);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-toggle', 'collapse'")
      . $cp . '->' . $x->text('info')->span('href(')
      . $x->text('warning')->span("'#collapseExample'")
      . $cp . '->' . $x->text('info')->span('role(')
      . $x->text('warning')->span("'button'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'expanded', 'false'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'controls', 'collapseExample'")
      . $cp . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Link with href'")
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-toggle', 'collapse'")
      . $cp . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-target', '#collapseExample'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'expanded', 'false'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'controls', 'collapseExample'")
      . $cp . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Button with data-bs-target'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $dollar . $x->text('danger')->span('buttons')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('card') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'card card-body'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'Some placeholder...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('card') . ' = '
      . $xx . '->' . $x->text('info')->span('collapse()')
      . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'collapseExample'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('card')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $dollar . $x->text('danger')->span('buttons')
      . ' . '
      . $dollar . $x->text('danger')->span('card') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<p>' . PHP_EOL
      . ' <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">' . PHP_EOL
      . '   Link with href' . PHP_EOL
      . ' </a>' . PHP_EOL
      . ' <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">' . PHP_EOL
      . '   Button with data-bs-target' . PHP_EOL
      . ' </button>' . PHP_EOL
      . '</p>' . PHP_EOL
      . '<div class="collapse" id="collapseExample">' . PHP_EOL
      . ' <div class="card card-body">' . PHP_EOL
      . '   Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.' . PHP_EOL
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

    $p = $x->id('horizontal')->h4('Horizontal')
      . $x->p('The collapse plugin also supports horizontal collapsing. Add the .collapse-horizontal modifier class to transition the width instead of height and set a width on the immediate child element. Feel free to write your own custom Sass, use inline styles, or use our width utilities.')
      . $x->p('Please note that while the example below has a min-height set to avoid excessive repaints in our docs, this is not explicitly required. ' . $x->strong('Only the width on the child element is required.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->data('bs-toggle', 'collapse')->data('bs-target', '#collapseWidthExample')->aria('expanded', 'false')->aria('controls', 'collaspeWidthExample')->btn('Toggle with collapse');
    $p = $x->p($p);

    $c = $x->class('card card-body')->astyle('width: 300px;')->adiv("This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.");
    $c = $x->collapse('horizontal')->id('collapseWidthExample')->adiv($c);
    $c = $x->astyle('min-height: 120px;')->adiv($c);
    $p .= $c;

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-toggle', 'collapse'")
      . $cp . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-target', '#collapseWidthExample'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'expanded', 'false'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'controls', 'collapseWidthExample'")
      . $cp . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Toggle width collapse'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $dollar . $x->text('danger')->span('button')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'card card-body'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 300px;'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'This is some placeholder...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('collapse(')
      . $x->text('warning')->span("'horizontal'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'collapseWidthExample'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('div')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'min-height: 120px;'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('div')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $dollar . $x->text('danger')->span('button')
      . ' . '
      . $dollar . $x->text('danger')->span('div') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<p>' . PHP_EOL
      . ' <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">' . PHP_EOL
      . '   Toggle width collapse' . PHP_EOL
      . ' </button>' . PHP_EOL
      . '</p>' . PHP_EOL
      . '<div style="min-height: 120px;">' . PHP_EOL
      . ' <div class="collapse collapse-horizontal" id="collapseWidthExample">' . PHP_EOL
      . '   <div class="card card-body" style="width: 300px;">' . PHP_EOL
      . "     This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered." . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Horizontal', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('multiple')->h4('Multiple Targets')
      . $x->p($x->htmlchar('A <button> or <a> can show and hide multiple elements by referencing them with a selector in its href or data-bs-target attribute. Multiple <button> or <a> can show and hide an element if they each reference it with their href or data-bs-target attribute'));
    $x->text('center')->div($p);
    $x->row();

    $p = $x->data('bs-toggle', 'collapse')->href('#multiCollapseExample1')->aria('expanded', 'false')->aria('controls', 'multiCollapseExample1')->btna('Toggle first element')
      . $x->mx(2)->data('bs-toggle', 'collapse')->data('bs-target', '#multiCollapseExample2')->aria('expanded', 'false')->aria('controls', 'multiCollapseExample2')->btn('Toggle second element')
      . $x->data('bs-toggle', 'collapse')->data('bs-target', '.multi-collapse')->aria('expanded', 'false')->aria('controls', 'multiCollapseExample1 multiCollapseExample2')->btn('Toggle both elements');
    $p = $x->p($p);

    $c = $x->class('card cardbody')->pad(2)->adiv('Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.');
    $c = $x->collapse('multi')->id('multiCollapseExample1')->adiv($c);
    $c = $x->col()->adiv($c);

    $t = $x->class('card cardbody')->pad(2)->adiv('Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.');
    $t = $x->collapse('multi')->id('multiCollapseExample2')->adiv($t);
    $t = $x->col()->adiv($t);

    $p .= $x->class('row')->adiv($c . $t);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-toggle', 'collapse'")
      . $cp . '->' . $x->text('info')->span('href(')
      . $x->text('warning')->span("'#multiCollapseExample1'")
      . $cp . '->' . $x->text('info')->span('role(')
      . $x->text('warning')->span("'button'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'expanded', 'false'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'controls', 'multiCollapseExample1'")
      . $cp . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Toggle first element'")
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-toggle', 'collapse'")
      . $cp . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-target', '#multiCollapseExample2'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'expanded', 'false'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'controls', 'multiCollapseExample2'")
      . $cp . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Toggle second element'")
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-toggle', 'collapse'")
      . $cp . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-target', '.multi-collapse'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'expanded', 'false'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'controls', 'multiCollapseExample1 multiCollapseExample2'")
      . $cp . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Toggle both elements'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('p(')
      . $dollar . $x->text('danger')->span('buttons')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('col1') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'card cardbody'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'Some placeholder content...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('col1') . ' = '
      . $xx . '->' . $x->text('info')->span('collapse(')
      . $x->text('warning')->span("'multi'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'multiCollapseExample1'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('col1')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('col1') . ' = '
      . $xx . '->' . $x->text('info')->span('col()')
      . '->' . $x->text('info')->span('adiv(')
      . $x->text('danger')->span('col1')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('col2') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'card cardbody'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'Some placeholder content...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('col2') . ' = '
      . $xx . '->' . $x->text('info')->span('collapse(')
      . $x->text('warning')->span("'multi'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'multiCollapseExample2'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('col2')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('col2') . ' = '
      . $xx . '->' . $x->text('info')->span('col()')
      . '->' . $x->text('info')->span('adiv(')
      . $x->text('danger')->span('col2')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $dollar . $x->text('danger')->span('buttons')
      . ' . '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'row'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('col1')
      . ' . '
      . $dollar . $x->text('danger')->span('col2')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<p>' . PHP_EOL
      . ' <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>' . PHP_EOL
      . ' <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>' . PHP_EOL
      . ' <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>' . PHP_EOL
      . '</p>' . PHP_EOL
      . '<div class="row">' . PHP_EOL
      . ' <div class="col">' . PHP_EOL
      . '   <div class="collapse multi-collapse" id="multiCollapseExample1">' . PHP_EOL
      . '     <div class="card card-body">' . PHP_EOL
      . '       Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="col">' . PHP_EOL
      . '   <div class="collapse multi-collapse" id="multiCollapseExample2">' . PHP_EOL
      . '     <div class="card card-body">' . PHP_EOL
      . '       Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Multiple Targets', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('accessibility')->h4('Accessibility')
      . $x->p($x->htmlchar('Be sure to add aria-expanded to the control element. This attribute explicitly conveys the current state of the collapsible element tied to the control to screen readers and similar assistive technologies. If the collapsible element is closed by default, the attribute on the control element should have a value of aria-expanded="false". If you’ve set the collapsible element to be open by default using the show class, set aria-expanded="true" on the control instead. The plugin will automatically toggle this attribute on the control based on whether or not the collapsible element has been opened or closed (via JavaScript, or because the user triggered another control element also tied to the same collapsible element). If the control element’s HTML element is not a button (e.g., an <a> or <div>), the attribute role="button" should be added to the element.'))
      . $x->p('If your control element is targeting a single collapsible element – i.e. the data-bs-target attribute is pointing to an id selector – you should add the aria-controls attribute to the control element, containing the id of the collapsible element. Modern screen readers and similar assistive technologies make use of this attribute to provide users with additional shortcuts to navigate directly to the collapsible element itself.')
      . $x->p('Note that Bootstrap’s current implementation does not cover the various optional keyboard interactions described in the WAI-ARIA Authoring Practices 1.1 accordion pattern - you will need to include these yourself with custom JavaScript.');

    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Collapse');
    $content .= $x->text('center')->lead('Toggle the visibility of content across your project with a few classes and our JavaScript plugins.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
