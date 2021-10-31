<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5ButtonsController extends Controller
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

    $p = $x->id('examples')->h4('Examples')
      . $x->p('Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->mx(2)->primary()->btn('Primary')
      . $x->mx(2)->secondary()->btn('Secondary')
      . $x->mx(2)->success()->btn('Success')
      . $x->mx(2)->danger()->btn('Danger')
      . $x->mx(2)->warning()->btn('Warning')
      . $x->mx(2)->info()->btn('Info')
      . $x->mx(2)->light()->btn('Light')
      . $x->mx(2)->dark()->btn('Dark')
      . $x->mx(2)->colink()->btn('Link');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Primary'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Secondary'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Success'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Danger'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Warning'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('info()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Info'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('light()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Light'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('dark()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Dark'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('colink()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Link'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-primary">Primary</button>' . PHP_EOL
      . '<button type="button" class="btn btn-secondary">Secondary</button>' . PHP_EOL
      . '<button type="button" class="btn btn-success">Success</button>' . PHP_EOL
      . '<button type="button" class="btn btn-danger">Danger</button>' . PHP_EOL
      . '<button type="button" class="btn btn-warning">Warning</button>' . PHP_EOL
      . '<button type="button" class="btn btn-info">Info</button>' . PHP_EOL
      . '<button type="button" class="btn btn-light">Light</button>' . PHP_EOL
      . '<button type="button" class="btn btn-dark">Dark</button>' . PHP_EOL
      . '<button type="button" class="btn btn-link">Link</button>' . PHP_EOL
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

    $p = $x->id('disabletext')->h4('Disable Text Wrapping')
      . $x->p('If you don’t want the button text to wrap, you can add the .text-nowrap class to the button. In Sass, you can set $btn-white-space: nowrap to disable text wrapping for each button.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('tags')->h4('Button Tags')
      . $x->p($x->htmlchar('The .btn classes are designed to be used with the <button> element. However, you can also use these classes on <a> or <input> elements (though some browsers may apply a slightly different rendering).'))
      . $x->p('When using button classes on <a> elements that are used to trigger in-page functionality (like collapsing content), rather than linking to new pages or sections within the current page, these links should be given a role="button" to appropriately convey their purpose to assistive technologies such as screen readers.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->mx(2)->btna('Link', '#')
      . $x->mx(2)->type('submit')->btn('Button')
      . $x->mx(2)->cbtn()->cbtn('primary')->type('button')->value('Input')->input()
      . $x->mx(2)->cbtn()->cbtn('primary')->type('submit')->value('Submit')->input()
      . $x->mx(2)->cbtn()->cbtn('primary')->type('reset')->value('Reset')->input();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Link', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'submit'")
      . $cp . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Button'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'primary'")
      . $cp . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'button'")
      . $cp . '->' . $x->text('info')->span('value(')
      . $x->text('warning')->span("'Input'")
      . $cp . '->' . $x->text('info')->span('input()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'primary'")
      . $cp . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'submit'")
      . $cp . '->' . $x->text('info')->span('value(')
      . $x->text('warning')->span("'Submit'")
      . $cp . '->' . $x->text('info')->span('input()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'primary'")
      . $cp . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'reset'")
      . $cp . '->' . $x->text('info')->span('value(')
      . $x->text('warning')->span("'Reset'")
      . $cp . '->' . $x->text('info')->span('input()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<a class="btn btn-primary" href="#" role="button">Link</a>' . PHP_EOL
      . '<button class="btn btn-primary" type="submit">Button</button>' . PHP_EOL
      . '<input class="btn btn-primary" type="button" value="Input">' . PHP_EOL
      . '<input class="btn btn-primary" type="submit" value="Submit">' . PHP_EOL
      . '<input class="btn btn-primary" type="reset" value="Reset">' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Button Tags', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('outline')->h4('Outline Buttons')
      . $x->p('In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the .btn-outline-* ones to remove all background images and colors on any button.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->mx(2)->outline()->primary()->btn('Primary')
      . $x->mx(2)->outline()->secondary()->btn('Secondary')
      . $x->mx(2)->outline()->success()->btn('Success')
      . $x->mx(2)->outline()->danger()->btn('Danger')
      . $x->mx(2)->outline()->warning()->btn('Warning')
      . $x->mx(2)->outline()->info()->btn('Info')
      . $x->mx(2)->outline()->light()->btn('Light')
      . $x->mx(2)->outline()->dark()->btn('Dark');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Primary'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Secondary'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Success'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Danger'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Warning'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('info()')
      . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Info'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('light()')
      . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Light'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('dark()')
      . '->' . $x->text('info')->span('outline()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Dark'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-primary">Primary</button>' . PHP_EOL
      . '<button type="button" class="btn btn-outline-secondary">Secondary</button>' . PHP_EOL
      . '<button type="button" class="btn btn-outline-success">Success</button>' . PHP_EOL
      . '<button type="button" class="btn btn-outline-danger">Danger</button>' . PHP_EOL
      . '<button type="button" class="btn btn-outline-warning">Warning</button>' . PHP_EOL
      . '<button type="button" class="btn btn-outline-info">Info</button>' . PHP_EOL
      . '<button type="button" class="btn btn-outline-light">Light</button>' . PHP_EOL
      . '<button type="button" class="btn btn-outline-dark">Dark</button>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Outline Buttons', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Some of the button styles use a relatively light foreground color, and should only be used on a dark background in order to have sufficient contrast.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('sizes')->h4('Sizes')
      . $x->p('Fancy larger or smaller buttons? Add .btn-lg or .btn-sm for additional sizes.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->mx(2)->lg()->btn('Large button')
      . $x->mx(2)->lg()->secondary()->btn('Large button');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Large button'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Large button'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-primary btn-lg">Large button</button>' . PHP_EOL
      . '<button type="button" class="btn btn-secondary btn-lg">Large button</button>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Large Buttons', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->mx(2)->sm()->btn('Small button')
      . $x->mx(2)->sm()->secondary()->btn('Small button');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Small button'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Small button'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-primary btn-sm">Small button</button>' . PHP_EOL
      . '<button type="button" class="btn btn-secondary btn-sm">Small button</button>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Small Buttons', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('disabled')->h4('Disabled State')
      . $x->p($x->htmlchar('Make buttons look inactive by adding the disabled boolean attribute to any <button> element. Disabled buttons have pointer-events: none applied to, preventing hover and active states from triggering.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->mx(2)->lg()->disabled()->btn('Primary button')
      . $x->mx(2)->lg()->disabled()->secondary()->btn('Button');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Small button'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Small button'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-primary btn-lg disabled">Small button</button>' . PHP_EOL
      . '<button type="button" class="btn btn-secondary btn-lg disabled">Small button</button>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Disabled Buttons', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p($x->htmlchar('Disabled buttons using the <a> element behave a bit different:'));
    $x->text('center')->div($p);
    $x->row();

    $x->li($x->htmlchar('<a>s don’t support the disabled attribute, so you must add the .disabled class to make it visually appear disabled.'));
    $x->li('Some future-friendly styles are included to disable all pointer-events on anchor buttons.');
    $x->li('Disabled buttons should include the aria-disabled="true" attribute to indicate the state of the element to assistive technologies.');
    $p = $x->ul();
    $x->div($p);
    $x->row();

    $p = $x->mx(2)->href('#')->lg()->disabled()->btna('Primary link')
      . $x->mx(2)->href('#')->lg()->disabled()->secondary()->btna('Link');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Primary link'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Link'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<a href="#" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a>' . PHP_EOL
      . '<a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Disabled Links', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('functionality')->h4('Link functionality caveat')
      . $x->p($x->htmlchar('The .disabled class uses pointer-events: none to try to disable the link functionality of <a>s, but that CSS property is not yet standardized. In addition, even in browsers that do support pointer-events: none, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. So to be safe, in addition to aria-disabled="true", also include a tabindex="-1" attribute on these links to prevent them from receiving keyboard focus, and use custom JavaScript to disable their functionality altogether.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('block')->h4('Block Buttons')
      . $x->p('Create responsive stacks of full-width, “block buttons” like those in Bootstrap 4 with a mix of our display and gap utilities. By using utilities instead of button specific classes, we have much greater control over spacing, alignment, and responsive behaviors.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->btn('Button') . $x->btn('Button');
    $p = $x->d('grid')->gap(2)->adiv($p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Button'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'grid'")
      . $cp . '->' . $x->text('info')->span('gap(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('button')
      . ' . '
      . $dollar . $x->text('danger')->span('button')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="d-grid gap-2">' . PHP_EOL
      . ' <button class="btn btn-primary" type="button">Button</button>' . PHP_EOL
      . ' <button class="btn btn-primary" type="button">Button</button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Block Buttons', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Here we create a responsive variation, starting with vertically stacked buttons until the md breakpoint, where .d-md-block replaces the .d-grid class, thus nullifying the gap-2 utility. Resize your browser to see them change.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->mx(2)->btn('Button');
    $p = $x->d('grid')->gap(2)->d('md-block')->adiv($p . $p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Button'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'grid'")
      . $cp . '->' . $x->text('info')->span('gap(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'md-block'")
      . $cp . '->' . $x->text('info')->span('div(')
      . $dollar . $x->text('danger')->span('button')
      . ' . '
      . $dollar . $x->text('danger')->span('button')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('row()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('container()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="d-grid gap-2 d-md-block">' . PHP_EOL
      . ' <button class="btn btn-primary" type="button">Button</button>' . PHP_EOL
      . ' <button class="btn btn-primary" type="button">Button</button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Block Buttons - 2', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('You can adjust the width of your block buttons with grid column width classes. For example, for a half-width “block button”, use .col-6. Center it horizontally with .mx-auto, too.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->btn('Button');
    $p = $x->d('grid')->gap(2)->col(6)->mx('auto')->adiv($p . $p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Button'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'grid'")
      . $cp . '->' . $x->text('info')->span('gap(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'6'")
      . $cp . '->' . $x->text('info')->span('mx(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('div(')
      . $dollar . $x->text('danger')->span('button')
      . ' . '
      . $dollar . $x->text('danger')->span('button')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('row()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('container()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="d-grid gap-2 col-6 mx-auto">' . PHP_EOL
      . ' <button class="btn btn-primary" type="button">Button</button>' . PHP_EOL
      . ' <button class="btn btn-primary" type="button">Button</button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Block Buttons - 3', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Additional utilities can be used to adjust the alignment of buttons when horizontal. Here we’ve taken our previous responsive example and added some flex utilities and a margin utility on the button to right align the buttons when they’re no longer stacked.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->md('md-2')->btn('Button')
      . $x->btn('Button');
    $p = $x->d('grid')->gap(2)->d('md-flex')->justify('content-md-end')->adiv($p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('button1') . ' = '
      . $xx . '->' . $x->text('info')->span('me(')
      . $x->text('warning')->span("'md-2'")
      . $cp . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Button'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('button2') . ' = '
      . $xx . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Button'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'grid'")
      . $cp . '->' . $x->text('info')->span('gap(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('d(')
      . $x->text('warning')->span("'md-flex'")
      . $cp . '->' . $x->text('info')->span('justify(')
      . $x->text('warning')->span("'content-md-end'")
      . $cp . '->' . $x->text('info')->span('div(')
      . $dollar . $x->text('danger')->span('button1')
      . ' . '
      . $dollar . $x->text('danger')->span('button2')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('row()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('container()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="d-grid gap-2 d-md-flex justify-content-md-end">' . PHP_EOL
      . ' <button class="btn btn-primary me-md-2" type="button">Button</button>' . PHP_EOL
      . ' <button class="btn btn-primary" type="button">Button</button>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Block Buttons - 4', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('plugin')->h4('Button Plugin')
      . $x->p('The button plugin allows you to create simple on/off toggle buttons.')
      . $x->p('Visually, these toggle buttons are identical to the checkbox toggle buttons. However, they are conveyed differently by assistive technologies: the checkbox toggles will be announced by screen readers as “checked”/“not checked” (since, despite their appearance, they are fundamentally still checkboxes), whereas these toggle buttons will be announced as “button”/“button pressed”. The choice between these two approaches will depend on the type of toggle you are creating, and whether or not the toggle will make sense to users when announced as a checkbox or as an actual button.');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->id('toggle')->h4('Toggle States')
      . $x->p('Add data-bs-toggle="button" to toggle a button’s active state. If you’re pre-toggling a button, you must manually add the .active class and aria-pressed="true" to ensure that it is conveyed appropriately to assistive technologies.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->mx(2)->toggle()->btn('Toggle button')
      . $x->mx(2)->toggle()->active()->btn('Active toggle button')
      . $x->mx(2)->toggle()->disabled()->btn('Disabled toggle button');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Toggle button'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text("info")->span('toggle()')
      . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Active toggle button'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span("'disabled()'")
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Disabled toggle button'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Toggle button</button>' . PHP_EOL
      . '<button type="button" class="btn btn-primary active" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Active toggle button</button>' . PHP_EOL
      . '<button type="button" class="btn btn-primary" disabled data-bs-toggle="button" autocomplete="off">Disabled toggle button</button>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Toggle Buttons - 1', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->mx(2)->toggle()->btna('Toggle link')
      . $x->mx(2)->toggle()->active()->btna('Active toggle link')
      . $x->mx(2)->toggle()->disabled()->btna('Disabled toggle link');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Toggle link'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('active()')
      . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Active toggle link'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('toggle()')
      . '->' . $x->text('info')->span('disabled()')
      . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Disabled toggle link'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<a href="#" class="btn btn-primary" role="button" data-bs-toggle="button">Toggle link</a>' . PHP_EOL
      . '<a href="#" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Active toggle link</a>' . PHP_EOL
      . '<a href="#" class="btn btn-primary disabled" tabindex="-1" aria-disabled="true" role="button" data-bs-toggle="button">Disabled toggle link</a>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Toggle Buttons - 2', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Buttons');
    $content .= $x->text('center')->lead('Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
