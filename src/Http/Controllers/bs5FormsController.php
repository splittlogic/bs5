<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5FormsController extends Controller
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

    if ($page == 'overview')
    {

      $p = $x->id('overview')->h4('Overview');
      $p .= $x->p('Bootstrap’s form controls expand on our Rebooted form styles with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices.')
        . $x->p('Be sure to use an appropriate type attribute on all inputs (e.g., email for email address or number for numerical information) to take advantage of newer input controls like email verification, number selection, and more.')
        . $x->p('Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->for('exampleInputEmail1')->class('form-label')->label('Email address');
      $p .= $x->type('email')->class('form-control')->id('exampleInputEmail1')->aria('describedby', 'emailHelp')->input();
      $p .= $x->id('emailHelp')->class('form-text')->adiv("We'll never share your email with anyone else.");
      $divs = $x->mb(3)->adiv($p);
      $p = $x->for('exampleInputPassword1')->class('form-label')->label('Password');
      $p .= $x->type('password')->class('form-control')->id('exampleInputPassword1')->input();
      $divs .= $x->mb(3)->adiv($p);
      $p = $x->type('checkbox')->class('form-check-input')->id('exampleCheck1')->input();
      $p .= $x->class('form-check-label')->for('exampleCheck1')->label('Check me out');
      $divs .= $x->mb(3)->class('form-check')->adiv($p);
      $divs .= $x->type('submit')->cbtn()->cbtn('primary')->button('Submit');

      $p = $x->form($divs);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('c') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'exampleInputEmail1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Email address'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('c') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'email'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span("class(")
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'exampleInputEmail1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'emailHelp'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('c') . ' .= '
        . $xx . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'emailHelp'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'We'll never share your email with anyone else.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('c')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('c') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'exampleInputPassword1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Password'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('c') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'password'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'exampleInputPassword1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('c')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('c') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'exampleCheck1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('c') . ' .= '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'exampleCheck1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Check me out'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('c')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Submit'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form>' . PHP_EOL
        . ' <div class="mb-3">' . PHP_EOL
        . '   <label for="exampleInputEmail1" class="form-label">Email address</label>' . PHP_EOL
        . '   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">' . PHP_EOL
        . '   <div id="emailHelp" class="form-text">We' . "'ll never share your email with anyone else.</div>" . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="mb-3">' . PHP_EOL
        . '   <label for="exampleInputPassword1" class="form-label">Password</label>' . PHP_EOL
        . '   <input type="password" class="form-control" id="exampleInputPassword1">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="mb-3 form-check">' . PHP_EOL
        . '   <input type="checkbox" class="form-check-input" id="exampleCheck1">' . PHP_EOL
        . '   <label class="form-check-label" for="exampleCheck1">Check me out</label>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <button type="submit" class="btn btn-primary">Submit</button>' . PHP_EOL
        . '</form>' . PHP_EOL
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

      $p = $x->id('text')->h4('Form Text')
        . $x->p('Block-level or inline-level form text can be created using .form-text.');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->id('associating')->h5('Associating Form Text With Form Controls')
        . $x->p('Form text should be explicitly associated with the form control it relates to using the aria-describedby attribute. This will ensure that assistive technologies—such as screen readers—will announce this form text when the user focuses or enters the control.');
      $x->text('center')->div($p);
      $x->row();

      $p = $x->p('Form text below inputs can be styled with .form-text. If a block-level element will be used, a top margin is added for easy spacing from the inputs above.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->for('inputPassword5')->class('form-label')->label('Password')
        . $x->type('password')->id('inputPassword5')->class('form-control')->aria('describedby', 'passwordHelpBlock')->input()
        . $x->id('passwordHelpBlock')->class('form-text')->adiv('Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputPassword5'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Password'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'password'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputPassword5'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'passwordHelpBlock'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'passwordHelpBlock'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<label for="inputPassword5" class="form-label">Password</label>' . PHP_EOL
        . '<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">' . PHP_EOL
        . '<div id="passwordHelpBlock" class="form-text">' . PHP_EOL
        . ' Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Form Text', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p($x->htmlchar('Inline text can use any typical inline HTML element (be it a <span>, <small>, or something else) with nothing more than the .form-text class.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->for('inputPassword6')->col('form-label')->label('Password');
      $divs = $x->col('auto')->adiv($p);
      $p = $x->type('password')->id('inputPassword6')->class('form-control')->aria('describedby', 'passwordHelpInline')->input();
      $divs .= $x->col('auto')->adiv($p);
      $p = $x->id('passwordHelpInline')->class('form-text')->span('Must be 8-20 characters long.');
      $divs .= $x->col('auto')->adiv($p);
      $p = $x->class('row')->g(3)->align('items-center')->adiv($divs);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputPassword6'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Password'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'password'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputPassword6'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'passwordHelpInline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'passwordHelpInline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'Must be 8-20 characters long.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('span')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'items-center'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="row g-3 align-items-center">' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <label for="inputPassword6" class="col-form-label">Password</label>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <span id="passwordHelpInline" class="form-text">' . PHP_EOL
        . '     Must be 8-20 characters long.' . PHP_EOL
        . '   </span>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Inline', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('disabled')->h4('Disabled Forms');
      $p .= $x->p('Add the disabled boolean attribute on an input to prevent user interactions and make it appear lighter.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->text('warning')->span('html')
        . '::' . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'disabledInput'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Disabled input here...'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>'
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Disabled Forms', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p($x->htmlchar('Add the disabled attribute to a <fieldset> to disable all the controls within. Browsers treat all native form controls (<input>, <select>, and <button> elements) inside a <fieldset disabled> as disabled, preventing both keyboard and mouse interactions on them.'))
        . $x->p($x->htmlchar('However, if your form also includes custom button-like elements such as <a class="btn btn-*">...</a>, these will only be given a style of pointer-events: none, meaning they are still focusable and operable using the keyboard. In this case, you must manually modify these controls by adding tabindex="-1" to prevent them from receiving focus and aria-disabled="disabled" to signal their state to assistive technologies.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $divs = $x->legend('Disabled fieldset example');
      $p = $x->for('disabledTextInput')->class('form-label')->label('Disabled input');
      $p .= $x->type('text')->id('disabledTextInput')->class('form-control')->aplaceholder('Disabled input')->input();
      $divs .= $x->mb(3)->adiv($p);
      $p = $x->for('disabledSelect')->class('form-label')->label('Disabled select menu');
      $option = $x->option('Disabled select');
      $p .= $x->id('disabledSelect')->class('form-select')->select($option);
      $divs .= $x->mb(3)->adiv($p);
      html::make()->disabled();
      $p = $x->class('form-check-input')->type('checkbox')->id('disabledFieldsetCheck')->input();
      $p .= $x->class('form-check-label')->for('disabledFieldsetCheck')->label("Can't check this");
      $p = $x->class('form-check')->adiv($p);
      $divs .= $x->mb(3)->adiv($p);
      $divs .= $x->type('submit')->cbtn()->cbtn('primary')->button('Submit');
      html::make()->disabled();
      $p = $x->fieldset($divs);
      $p = $x->form($p);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('fs') . ' = '
        . $xx . '->' . $x->text('info')->span('legend(')
        . $x->text('warning')->span("'Disabled fieldset example'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'disabledTextInput'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Disabled input'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'disabledTextInput'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span('form-control')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Disabled input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('fs') . ' .= '
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . ' . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'disabledSelect'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span('Disabled input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('option') . ' = '
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span('Disabled select')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'disabledSelect'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select(')
        . $dollar . $x->text('danger')->span('option')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('fs') . ' .= '
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . ' . $dollar . $x->text('danger')->span('select')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'disabledFieldsetCheck'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'disabledFieldsetCheck'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span('"' . "Can't check this" . '"')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('fs') . ' .= '
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . ' . ' . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('fs') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Submit'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('form') . ' = '
        . $xx . '->' . $x->text('info')->span('fieldset(')
        . $dollar . $x->text('danger')->span('fs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('form')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form>' . PHP_EOL
        . ' <fieldset disabled>' . PHP_EOL
        . '   <legend>Disabled fieldset example</legend>' . PHP_EOL
        . '   <div class="mb-3">' . PHP_EOL
        . '     <label for="disabledTextInput" class="form-label">Disabled input</label>' . PHP_EOL
        . '     <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">' . PHP_EOL
        . '   </div>' . PHP_EOL
        . '   <div class="mb-3">' . PHP_EOL
        . '     <label for="disabledSelect" class="form-label">Disabled select menu</label>' . PHP_EOL
        . '     <select id="disabledSelect" class="form-select">' . PHP_EOL
        . '       <option>Disabled select</option>' . PHP_EOL
        . '     </select>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . '   <div class="mb-3">' . PHP_EOL
        . '     <div class="form-check">' . PHP_EOL
        . '       <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>' . PHP_EOL
        . '       <label class="form-check-label" for="disabledFieldsetCheck">' . PHP_EOL
        . "         Can't check this" . PHP_EOL
        . '       </label>' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . '   <button type="submit" class="btn btn-primary">Submit</button>' . PHP_EOL
        . ' </fieldset>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Disabled Fieldset', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('accessibility')->h4('Accessibility')
        . $x->p($x->htmlchar('Ensure that all form controls have an appropriate accessible name so that their purpose can be conveyed to users of assistive technologies. The simplest way to achieve this is to use a <label> element, or—in the case of buttons—to include sufficiently descriptive text as part of the <button>...</button> content.'))
        . $x->p($x->htmlchar('For situations where it’s not possible to include a visible <label> or appropriate text content, there are alternative ways of still providing an accessible name, such as:'));
      $x->text('center')->div($p);
      $x->row();

      $x->li($x->htmlchar('<label> elements hidden using the .visually-hidden class'));
      $x->li('Pointing to an existing element that can act as a label using aria-labelledby');
      $x->li('Providing a title attribute');
      $x->li('Explicitly setting the accessible name on an element using aria-label');
      $p = $x->ul();
      $x->div($p);
      $x->row();

      $p = $x->p($x->htmlchar('If none of these are present, assistive technologies may resort to using the placeholder attribute as a fallback for the accessible name on <input> and <textarea> elements. The examples in this section provide a few suggested, case-specific approaches.'))
        . $x->p('While using visually hidden content (.visually-hidden, aria-label, and even placeholder content, which disappears once a form field has content) will benefit assistive technology users, a lack of visible label text may still be problematic for certain users. Some form of visible label is generally the best approach, both for accessibility and usability.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Forms');
      $content .= $x->text('center')->lead('Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'control') {

      $p = $x->id('example')->h4('Example');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->for('exampleFormControlInput1')->class('form-label')->label('Email address');
      $p .= $x->type('email')->class('form-control')->id('exampleFormControlInput1')->aplaceholder('name@exapmle.com')->input();
      $p = $x->mb(3)->adiv($p);

      $c = $x->for('exampleFormControlTextarea1')->class('form-label')->label('Example textarea');
      $c .= $x->class('form-control')->id('exampleFormControlTextarea1')->rows(3)->textarea();
      $p .= $x->mb(3)->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'exampleFormControlInput1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Email address'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'email'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'exampleFormControlInput1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'name@example.com'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'exampleFormControlTextarea1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Example textarea'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('textarea') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'exampleFormControlTextarea1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('rows(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('textarea()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('textarea')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="mb-3">' . PHP_EOL
        . ' <label for="exampleFormControlInput1" class="form-label">Email address</label>' . PHP_EOL
        . ' <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="mb-3">' . PHP_EOL
        . ' <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>' . PHP_EOL
        . ' <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>' . PHP_EOL
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

      $p = $x->id('sizing')->h4('Sizing')
        . $x->p('Set heights using classes like .form-control-lg and .form-control-sm.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->class('form-control form-control-lg')->m(2)->type('text')->aplaceholder('.form-control-lg')->aria('label', '.form-control-lg example')->input()
        . $x->class('form-control')->type('text')->m(2)->aplaceholder('Default input')->aria('label', 'default input example')->input()
        . $x->class('form-control form-control-sm')->m(2)->type('text')->aplaceholder('.form-control-sm')->aria('label', '.form-control-sm expample')->input();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control form-control-lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'.form-control-lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', '.form-control-lg example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Default input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'default input example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control form-control-sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'.form-control-sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', '.form-control-sm example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">' . PHP_EOL
        . '<input class="form-control" type="text" placeholder="Default input" aria-label="default input example">' . PHP_EOL
        . '<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Sizing', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('disabled')->h4('Disabled')
        . $x->p('Add the disabled boolean attribute on an input to give it a grayed out appearance and remove pointer events.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      html::make()->disabled();
      $p = $x->class('form-control')->m(2)->type('text')->aplaceholder('Disabled input')->aria('label', 'Disabled input example')->input();
      html::make()->disabled();
      $p .= $x->class('form-control')->m(2)->type('text')->value('Disabled readonly input')->aria('label', 'Disabled input example')->readonly()->input();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Disabled input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Disabled input example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Disabled readonly input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Disabled input example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('readonly()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>' . PHP_EOL
        . '<input class="form-control" type="text" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Disabled', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('readonly')->h4('Readonly')
        . $x->p('Add the readonly boolean attribute on an input to prevent modification of the input’s value.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->class('form-control')->type('text')->value('Readonly input here...')->aria('label', 'readonly input example')->readonly()->input();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Readonly input here...'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'readonly input example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('readonly()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Readonly', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('plaintext')->h4('Readonly Plain Text')
        . $x->p('Add the readonly boolean attribute on an input to prevent modification of the input’s value.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $label = $x->for('staticEmail')->col('sm-2')->col('form-label')->label('Email');
      $input = $x->type('text')->readonly()->class('form-control-plaintext')->id('staticEmail')->value('email@example.com')->input();
      $div = $x->col('sm-10')->adiv($input);
      $divs = $x->mb(3)->class('row')->adiv($label . $div);
      $label = $x->for('inputPassword')->col('sm-2')->col('form-label')->label('Password');
      $input = $x->type('password')->class('form-control')->id('inputPassword')->input();
      $div = $x->col('sm-10')->adiv($input);
      $divs .= $x->mb(3)->class('row')->adiv($label . $div);
      $x->border()->pad(3)->div($divs);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'staticEmail'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Email'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('readonly()')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control-plaintext'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'staticEmail'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'email@example.com'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-10'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputPassword'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Password'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'password'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputPassword'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-10'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="mb-3 row">' . PHP_EOL
        . ' <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>' . PHP_EOL
        . ' <div class="col-sm-10">' . PHP_EOL
        . '   <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="mb-3 row">' . PHP_EOL
        . ' <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>' . PHP_EOL
        . ' <div class="col-sm-10">' . PHP_EOL
        . '   <input type="password" class="form-control" id="inputPassword">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Plaintext', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->for('staticEmail2')->visually('hidden')->label('Email');
      $c .= $x->type('text')->readonly()->class('form-control-plaintext')->id('staticEmail2')->value('email@example.com')->input();
      $p = $x->col('auto')->adiv($c);
      $c = $x->for('inputPassword2')->visually('hidden')->label('Password');
      $c .= $x->type('password')->class('form-control')->id('inputPassword2')->aplaceholder('Password')->input();
      $p .= $x->col('auto')->adiv($c);
      $c = $x->type('submit')->cbtn()->cbtn('primary')->mb(3)->button('Confirm identity');
      $p .= $x->col('auto')->adiv($c);
      $p = $x->class('row')->g(3)->form($p);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'staticEmail2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Email'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('readonly()')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control-plaintext'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'staticEmail2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'email@example.com'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputPassword2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Password'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'password'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputPassword2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Password'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Confirm identity'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form class="row g-3">' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <label for="staticEmail2" class="visually-hidden">Email</label>' . PHP_EOL
        . '   <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <label for="inputPassword2" class="visually-hidden">Password</label>' . PHP_EOL
        . '   <input type="password" class="form-control" id="inputPassword2" placeholder="Password">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Inline', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->for('formFile')->class('form-label')->label('Default file input example');
      $c .= $x->class('form-control')->type('file')->id('formFile')->input();
      $p = $x->mb(3)->adiv($c);
      $c = $x->for('formFile')->class('form-label')->label('Multiple files input example');
      $c .= $x->class('form-control')->type('file')->id('formFile')->multiple()->input();
      $p .= $x->mb(3)->adiv($c);
      $c = $x->for('formFileDisabled')->class('form-label')->label('Disabled file input example');
      html::make()->disabled();
      $c .= $x->class('form-control')->type('file')->id('formFileDisabled')->input();
      $p .= $x->mb(3)->adiv($c);
      $c = $x->for('formFilesm')->class('form-label')->label('Small file input example');
      $c .= $x->class('form-control form-control-sm')->id('formFileSm')->type('file')->input();
      $p .= $x->mb(3)->adiv($c);
      $c = $x->for('formFileLg')->class('form-label')->label('Large file input example');
      $c .= $x->class('form-control form-control-lg')->id('formFileLg')->type('file')->input();
      $p .= $x->mb(3)->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'formFile'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Default file input example'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'file'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'formFile'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'formFileMultiple'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Multiple files input example'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'file'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'formFileMultiple'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('multiple()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'formFileDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Disabled file input example'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'file'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'formFileDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'formFileSm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Small file input example'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control form-control-sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'file'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'formFileSm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'formFileLg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Large file input example'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control form-control-lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'file'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'formFileLg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="mb-3">' . PHP_EOL
        . ' <label for="formFile" class="form-label">Default file input example</label>' . PHP_EOL
        . ' <input class="form-control" type="file" id="formFile">' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="mb-3">' . PHP_EOL
        . ' <label for="formFileMultiple" class="form-label">Multiple files input example</label>' . PHP_EOL
        . ' <input class="form-control" type="file" id="formFileMultiple" multiple>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="mb-3">' . PHP_EOL
        . ' <label for="formFileDisabled" class="form-label">Disabled file input example</label>' . PHP_EOL
        . ' <input class="form-control" type="file" id="formFileDisabled" disabled>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="mb-3">' . PHP_EOL
        . ' <label for="formFileSm" class="form-label">Small file input example</label>' . PHP_EOL
        . ' <input class="form-control form-control-sm" id="formFileSm" type="file">' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div>' . PHP_EOL
        . ' <label for="formFileLg" class="form-label">Large file input example</label>' . PHP_EOL
        . ' <input class="form-control form-control-lg" id="formFileLg" type="file">' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'File Input', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('color')->h4('Color');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->for('exampleColorInput')->class('form-label')->label('Color picker')
        . $x->type('color')->class('form-control form-control-color')->id('exampleColorInput')->value('#563d7c')->atitle('Choose your color')->input();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'exampleColorInput'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Color picker'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'color'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control form-control-color'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'exampleColorInput'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'#563d7c'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('atitle(')
        . $x->text('warning')->span("'Choose your color'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<label for="exampleColorInput" class="form-label">Color picker</label>' . PHP_EOL
        . '<input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Color', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('datalists')->h4('Datalists')
        . $x->p($x->htmlchar('Datalists allow you to create a group of <option>s that can be accessed (and autocompleted) from within an <input>. These are similar to <select> elements, but come with more menu styling limitations and differences. While most browsers and operating systems include some support for <datalist> elements, their styling is inconsistent at best.'))
        . $x->p('Learn more about support for datalist elements.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->for('exampleDataList')->class('form-label')->label('Datalist example')
        . $x->class('form-control')->list('datalistOptions')->id('exampleDataList')->aplaceholder('Type to search...')->input();
      $x->value('San Francisco')->option();
      $x->value('New York')->option();
      $x->value('Seattle')->option();
      $x->value('Los Angeles')->option();
      $x->value('Chicago')->option();
      $p .= $x->id('datalistOptions')->datalist();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'exampleDataList'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Datalist example'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' .= '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('list(')
        . $x->text('warning')->span("'datalistOptions'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'exampleDataList'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Type to search...'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'San Francisco'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'New York'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Seattle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Los Angeles'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Chicago'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' .= '
        . $xx . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'datalistOptions'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('datalist()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<label for="exampleDataList" class="form-label">Datalist example</label>' . PHP_EOL
        . '<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">' . PHP_EOL
        . '<datalist id="datalistOptions">' . PHP_EOL
        . ' <option value="San Francisco">' . PHP_EOL
        . ' <option value="New York">' . PHP_EOL
        . ' <option value="Seattle">' . PHP_EOL
        . ' <option value="Los Angeles">' . PHP_EOL
        . ' <option value="Chicago">' . PHP_EOL
        . '</datalist>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Datalists', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Form controls');
      $content .= $x->text('center')->lead($x->htmlchar('Give textual form controls like <input>s and <textarea>s an upgrade with custom styles, sizing, focus states, and more.'));
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'select') {

      $p = $x->id('default')->h4('Default')
        . $x->p($x->htmlchar('Custom <select> menus need only a custom class, .form-select to trigger the custom styles. Custom styles are limited to the <select>’s initial appearance and cannot modify the <option>s due to browser limitations.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->selected()->option('Open this select menu');
      $x->option('One', '1');
      $x->option('Two', '2');
      $x->option('Three', '3');
      $p = $x->class('form-select')->aria('label', 'Default select example')->select();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Open this select menu'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One', '1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two', '2'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three', '3'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Default select example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<select class="form-select" aria-label="Default select example">' . PHP_EOL
        . ' <option selected>Open this select menu</option>' . PHP_EOL
        . ' <option value="1">One</option>' . PHP_EOL
        . ' <option value="2">Two</option>' . PHP_EOL
        . ' <option value="3">Three</option>' . PHP_EOL
        . '</select>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Default', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('sizing')->h4('Sizing')
        . $x->p('You may also choose from small and large custom selects to match our similarly sized text inputs.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->selected()->option('Open this select menu');
      $x->option('One', '1');
      $x->option('Two', '2');
      $x->option('Three', '3');
      $p = $x->class('form-select form-select-lg mb-3')->aria('label', '.form-select-lg example')->select();
      $x->selected()->option('Open this select menu');
      $x->option('One', '1');
      $x->option('Two', '2');
      $x->option('Three', '3');
      $p .= $x->class('form-select form-select-sm')->aria('label', '.form-select-sm example')->select();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Open this select menu'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One', '1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two', '2'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three', '3'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select form-select-lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', '.form-select-lg example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Open this select menu'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One', '1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two', '2'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three', '3'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select form-select-sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', '.form-select-sm example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">' . PHP_EOL
        . ' <option selected>Open this select menu</option>' . PHP_EOL
        . ' <option value="1">One</option>' . PHP_EOL
        . ' <option value="2">Two</option>' . PHP_EOL
        . ' <option value="3">Three</option>' . PHP_EOL
        . '</select>' . PHP_EOL
        . PHP_EOL
        . '<select class="form-select form-select-sm" aria-label=".form-select-sm example">' . PHP_EOL
        . ' <option selected>Open this select menu</option>' . PHP_EOL
        . ' <option value="1">One</option>' . PHP_EOL
        . ' <option value="2">Two</option>' . PHP_EOL
        . ' <option value="3">Three</option>' . PHP_EOL
        . '</select>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Sizing', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('The multiple attribute is also supported:');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->selected()->option('Open this select menu');
      $x->option('One', '1');
      $x->option('Two', '2');
      $x->option('Three', '3');
      $p = $x->class('form-select')->multiple()->aria('label', 'multiple select example')->select();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Open this select menu'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One', '1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two', '2'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three', '3'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('multiple()')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'multiple select example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<select class="form-select" multiple aria-label="multiple select example">' . PHP_EOL
        . ' <option selected>Open this select menu</option>' . PHP_EOL
        . ' <option value="1">One</option>' . PHP_EOL
        . ' <option value="2">Two</option>' . PHP_EOL
        . ' <option value="3">Three</option>' . PHP_EOL
        . '</select>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Multiple', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('As is the size attribute:');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->selected()->option('Open this select menu');
      $x->option('One', '1');
      $x->option('Two', '2');
      $x->option('Three', '3');
      $p = $x->class('form-select')->size(3)->aria('label', 'multiple select example')->select();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Open this select menu'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One', '1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two', '2'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three', '3'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('size(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'size 3 select example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<select class="form-select" size="3" aria-label="size 3 select example">' . PHP_EOL
        . ' <option selected>Open this select menu</option>' . PHP_EOL
        . ' <option value="1">One</option>' . PHP_EOL
        . ' <option value="2">Two</option>' . PHP_EOL
        . ' <option value="3">Three</option>' . PHP_EOL
        . '</select>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Multiple Size', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('disabled')->h4('Disabled')
        . $x->p('Add the disabled boolean attribute on a select to give it a grayed out appearance and remove pointer events.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->selected()->option('Open this select menu');
      $x->option('One', '1');
      $x->option('Two', '2');
      $x->option('Three', '3');
      html::make()->disabled();
      $p = $x->class('form-select')->aria('label', 'Disabled select example')->select();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Open this select menu'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One', '1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two', '2'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three', '3'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('content') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Disabled select example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<select class="form-select" aria-label="Disabled select example" disabled>' . PHP_EOL
        . ' <option selected>Open this select menu</option>' . PHP_EOL
        . ' <option value="1">One</option>' . PHP_EOL
        . ' <option value="2">Two</option>' . PHP_EOL
        . ' <option value="3">Three</option>' . PHP_EOL
        . '</select>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Disabled', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Select');
      $content .= $x->text('center')->lead($x->htmlchar('Customize the native <select>s with custom CSS that changes the element’s initial appearance.'));
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'checksandradios') {

      $p = $x->id('approach')->h4('Approach')
        . $x->p('Browser default checkboxes and radios are replaced with the help of .form-check, a series of classes for both input types that improves the layout and behavior of their HTML elements, that provide greater customization and cross browser consistency. Checkboxes are for selecting one or several options in a list, while radios are for selecting one option from many.')
        . $x->p($x->htmlchar('Structurally, our <input>s and <label>s are sibling elements as opposed to an <input> within a <label>. This is slightly more verbose as you must specify id and for attributes to relate the <input> and <label>. We use the sibling selector (~) for all our <input> states, like :checked or :disabled. When combined with the .form-check-label class, we can easily style the text for each item based on the <input>’s state.'))
        . $x->p('Our checks use custom Bootstrap icons to indicate checked or indeterminate states.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('form-check-input')->type('checkbox')->value('')->id('flexCheckDefault')->input()
        . $x->class('form-check-label')->for('flexCheckDefault')->label('Default checkbox');
      $p = $x->class('form-check')->adiv($c);
      $c = $x->class('form-check-input')->type('checkbox')->value('')->id('flexCheckChecked')->checked()->input()
        . $x->class('form-check-label')->for('flexCheckChecked')->label('Checked checkbox');
      $p .= $x->class('form-check')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexCheckDefault'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexCheckDefault'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Default checkbox'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexCheckChecked'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('checked()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexCheckChecked'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Default checkbox'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">' . PHP_EOL
        . ' <label class="form-check-label" for="flexCheckDefault">' . PHP_EOL
        . '   Default checkbox' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>' . PHP_EOL
        . ' <label class="form-check-label" for="flexCheckChecked">' . PHP_EOL
        . '   Checked checkbox' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Checks', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('indeterminate')->h4('Indeterminate')
        . $x->p('Checkboxes can utilize the :indeterminate pseudo class when manually set via JavaScript (there is no available HTML attribute for specifying it).')
        . $x->p('For indeterminate() to work correctly, it must be set after id().  indeterminate() automatically adds the needed javascript to the page.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->class('form-check-input')->type('checkbox')->id('flexCheckIndeterminate')->indeterminate()->input()
        . $x->class('form-check-label')->for('flexCheckIndeterminate')->label('Indeterminate checkbox');
      $p = $x->class('form-check')->adiv($p);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexCheckIndeterminate'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('indeterminate()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexCheckIndeterminate'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Indeterminate checkbox'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">' . PHP_EOL
        . ' <label class="form-check-label" for="flexCheckIndeterminate">' . PHP_EOL
        . '   Indeterminate checkbox' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Indeterminate', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('checkboxdisabled')->h4('Disabled')
        . $x->p($x->htmlchar('Add the disabled attribute and the associated <label>s are automatically styled to match with a lighter color to help indicate the input’s state.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      html::make()->disabled();
      $c = $x->class('form-check-input')->type('checkbox')->id('flexCheckDisabled')->input()
        . $x->class('form-check-label')->for('flexCheckDisabled')->label('Disabled checkbox');
      $p = $x->class('form-check')->adiv($c);
      html::make()->disabled();
      $c = $x->class('form-check-input')->type('checkbox')->id('flexCheckCheckedDisabled')->checked()->input()
        . $x->class('form-check-label')->for('flexCheckCheckedDisabled')->label('Disabled checked checkbox');
      $p .= $x->class('form-check')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexCheckDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexCheckDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Disabled checkbox'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexCheckCheckedDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('checked()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexCheckCheckedDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Disabled checked checkbox'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>' . PHP_EOL
        . ' <label class="form-check-label" for="flexCheckDisabled">' . PHP_EOL
        . '   Disabled checkbox' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>' . PHP_EOL
        . ' <label class="form-check-label" for="flexCheckCheckedDisabled">' . PHP_EOL
        . '   Disabled checked checkbox' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Checkbox Disabled', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('radios')->h4('Radios');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('form-check-input')->type('radio')->name('flexRadioDefault')->id('flexRadioDefault1')->input()
        . $x->class('form-check-label')->for('flexRadioDefault1')->label('Default radio');
      $p = $x->class('form-check')->adiv($c);
      $c = $x->class('form-check-input')->type('radio')->name('flexRadioDefault')->id('flexRadioDefault2')->checked()->input()
        . $x->class('form-check-label')->for('flexRadioDefault2')->label('Default checked radio');
      $p .= $x->class('form-check')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'flexRadioDefault'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexRadioDefault1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexRadioDefault1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Default radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'flexRadioDefault'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexRadioDefault2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('checked()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexRadioDefault2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Default radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">' . PHP_EOL
        . ' <label class="form-check-label" for="flexRadioDefault1">' . PHP_EOL
        . '   Default radio' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>' . PHP_EOL
        . ' <label class="form-check-label" for="flexRadioDefault2">' . PHP_EOL
        . '   Default checked radio' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Radios', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('disabledradios')->h4('Disabled')
        . $x->p($x->htmlchar('Add the disabled attribute and the associated <label>s are automatically styled to match with a lighter color to help indicate the input’s state.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      html::make()->disabled();
      $c = $x->class('form-check-input')->type('radio')->name('flexRadioDisabled')->id('flexRadioDisabled')->input()
        . $x->class('form-check-label')->for('flexRadioDisabled')->label('Disabled radio');
      $p = $x->class('form-check')->adiv($c);
      html::make()->disabled();
      $c = $x->class('form-check-input')->type('radio')->name('flexRadioDisabled')->id('flexRadioCheckedDisabled')->checked()->input()
        . $x->class('form-check-label')->for('flexRadioCheckedDisabled')->label('Disabled checked radio');
      $p .= $x->class('form-check')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'flexRadioDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexRadioDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexRadioDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Disabled radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'flexRadioDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexRadioCheckedDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('checked()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexRadioCheckedDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Disabled checked radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>' . PHP_EOL
        . ' <label class="form-check-label" for="flexRadioDisabled">' . PHP_EOL
        . '   Default radio' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled>' . PHP_EOL
        . ' <label class="form-check-label" for="flexRadioCheckedDisabled">' . PHP_EOL
        . '   Default checked radio' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Radios', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('switches')->h4('Switches')
        . $x->p('A switch has the markup of a custom checkbox but uses the .form-switch class to render a toggle switch. Switches also support the disabled attribute.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('form-check-input')->type('checkbox')->id('flexSwitchCheckDefault')->input()
        . $x->class('form-check-label')->for('flexSwitchCheckDefault')->label('Default switch checkbox input');
      $p = $x->class('form-check form-switch')->adiv($c);
      $c = $x->class('form-check-input')->type('checkbox')->id('flexSwitchCheckChecked')->checked()->input()
        . $x->class('form-check-label')->for('flexSwitchCheckChecked')->label('Checked switch checkbox input');
      $p .= $x->class('form-check form-switch')->adiv($c);
      html::make()->disabled();
      $c = $x->class('form-check-input')->type('checkbox')->id('flexSwitchCheckDisabled')->input()
        . $x->class('form-check-label')->for('flexSwitchCheckDisabled')->label('Disabled switch checkbox input');
      $p .= $x->class('form-check form-switch')->adiv($c);
      html::make()->disabled();
      $c = $x->class('form-check-input')->type('checkbox')->id('flexSwitchCheckCheckedDisabled')->checked()->input()
        . $x->class('form-check-label')->for('flexSwitchCheckCheckedDisabled')->label('Disabled checked switch checkbox input');
      $p .= $x->class('form-check form-switch')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexSwitchCheckDefault'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexSwitchCheckDefault'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Default switch checkbox input'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check form-switch'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexSwitchCheckChecked'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('checked()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexSwitchCheckChecked'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Checked switch checkbox input'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check form-switch'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexSwitchCheckDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexSwitchCheckDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Disabled switch checkbox input'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check form-switch'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'flexSwitchCheckCheckedDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('checked()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'flexSwitchCheckCheckedDisabled'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Disabled checked switch checkbox input'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check form-switch'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-check form-switch">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">' . PHP_EOL
        . ' <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check form-switch">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>' . PHP_EOL
        . ' <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check form-switch">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>' . PHP_EOL
        . ' <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check form-switch">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>' . PHP_EOL
        . ' <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Switches', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('stacked')->h4('Default (stacked)')
        . $x->p('By default, any number of checkboxes and radios that are immediate sibling will be vertically stacked and appropriately spaced with .form-check.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('form-check-input')->type('checkbox')->id('defaultCheck1')->input()
        . $x->class('form-check-label')->for('defaultCheck1')->label('Default checkbox');
      $p = $x->class('form-check')->adiv($c);
      html::make()->disabled();
      $c = $x->class('form-check-input')->type('checkbox')->id('defaultCheck2')->input()
        . $x->class('form-check-label')->for('defaultCheck2')->label('Disabled checkbox');
      $p .= $x->class('form-check')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'defaultCheck1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'defaultCheck1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Default checkbox'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'defaultCheck2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'defaultCheck2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Disabled checkbox'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">' . PHP_EOL
        . ' <label class="form-check-label" for="defaultCheck1">' . PHP_EOL
        . '   Default checkbox' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>' . PHP_EOL
        . ' <label class="form-check-label" for="defaultCheck2">' . PHP_EOL
        . '   Disabled checkbox' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Checkbox', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('form-check-input')->type('radio')->name('exampleRadios')->id('exampleRadios1')->value('option1')->checked()->input()
        . $x->class('form-check-label')->for('exampleRadios1')->label('Default radio');
      $p = $x->class('form-check')->adiv($c);
      $c = $x->class('form-check-input')->type('radio')->name('exampleRadios')->id('exampleRadios2')->value('option2')->input()
        . $x->class('form-check-label')->for('exampleRadios2')->label('Second default radio');
      $p .= $x->class('form-check')->adiv($c);
      html::make()->disabled();
      $c = $x->class('form-check-input')->type('radio')->name('exampleRadios')->id('exampleRadios3')->value('option3')->input()
        . $x->class('form-check-label')->for('exampleRadios3')->label('Disabled radio');
      $p .= $x->class('form-check')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'exampleRadios'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'exampleRadios1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'option1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('checked()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'exampleRadios1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Default radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'exampleRadios'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'exampleRadios2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'option1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'exampleRadios2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Second default radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'exampleRadios'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'exampleRadios3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'option1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'exampleRadios3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Disabled radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>' . PHP_EOL
        . ' <label class="form-check-label" for="exampleRadios1">' . PHP_EOL
        . '   Default radio' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">' . PHP_EOL
        . ' <label class="form-check-label" for="exampleRadios2">' . PHP_EOL
        . '   Second default radio' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check">' . PHP_EOL
        . ' <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>' . PHP_EOL
        . ' <label class="form-check-label" for="exampleRadios3">' . PHP_EOL
        . '   Disabled radio' . PHP_EOL
        . ' </label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Radios', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('inline')->h4('Inline')
        . $x->p('Group checkboxes or radios on the same horizontal row by adding .form-check-inline to any .form-check.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('form-check-input')->type('checkbox')->id('inlineCheckbox1')->value('option1')->input()
        . $x->class('form-check-label')->for('inlineCheckbox1')->label(1);
      $p = $x->class('form-check form-check-inline')->adiv($c);
      $c = $x->class('form-check-input')->type('checkbox')->id('inlineCheckbox2')->value('option2')->input()
        . $x->class('form-check-label')->for('inlineCheckbox2')->label(2);
      $p .= $x->class('form-check form-check-inline')->adiv($c);
      html::make()->disabled();
      $c = $x->class('form-check-input')->type('checkbox')->id('inlineCheckbox3')->value('option3')->input()
        . $x->class('form-check-label')->for('inlineCheckbox3')->label('3 (disabled)');
      $p .= $x->class('form-check form-check-inline')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inlineCheckbox1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'option1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inlineCheckbox1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check form-check-inline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inlineCheckbox2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'option1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inlineCheckbox2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check form-check-inline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inlineCheckbox3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'option1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inlineCheckbox3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'3 (disabled)'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check form-check-inline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-check form-check-inline">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">' . PHP_EOL
        . ' <label class="form-check-label" for="inlineCheckbox1">1</label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check form-check-inline">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">' . PHP_EOL
        . ' <label class="form-check-label" for="inlineCheckbox2">2</label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check form-check-inline">' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>' . PHP_EOL
        . ' <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Inline Checkbox', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('form-check-input')->type('radio')->name('inlineRadioOptions')->id('inlineRadio1')->value('option1')->input()
        . $x->class('form-check-label')->for('inlineRadio1')->label(1);
      $p = $x->class('form-check form-check-inline')->adiv($c);
      $c = $x->class('form-check-input')->type('radio')->name('inlineRadioOptions')->id('inlineRadio2')->value('option2')->input()
        . $x->class('form-check-label')->for('inlineRadio1')->label(2);
      $p .= $x->class('form-check form-check-inline')->adiv($c);
      html::make()->disabled();
      $c = $x->class('form-check-input')->type('radio')->name('inlineRadioOptions')->id('inlineRadio3')->value('option3')->input()
        . $x->class('form-check-label')->for('inlineRadio1')->label('3 (disabled)');
      $p .= $x->class('form-check form-check-inline')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'inlineRadioOptions'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inlineRadio1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'option1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inlineRadio1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check form-check-inline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'inlineRadioOptions'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inlineRadio2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'option1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inlineRadio2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check form-check-inline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'inlineRadioOptions'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inlineRadio3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'option1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inlineRadio3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'3 (disabled)'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check form-check-inline'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-check form-check-inline">' . PHP_EOL
        . ' <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">' . PHP_EOL
        . ' <label class="form-check-label" for="inlineRadio1">1</label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check form-check-inline">' . PHP_EOL
        . ' <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">' . PHP_EOL
        . ' <label class="form-check-label" for="inlineRadio2">2</label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-check form-check-inline">' . PHP_EOL
        . ' <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>' . PHP_EOL
        . ' <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Inline Radio', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('withoutlabels')->h4('Without Labels')
        . $x->p('Omit the wrapping .form-check for checkboxes and radios that have no label text. Remember to still provide some form of accessible name for assistive technologies (for instance, using aria-label). See the forms overview accessibility section for details.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('form-check-input')->type('checkbox')->id('checkboxNoLabel')->aria('label', '...')->input();
      $p = $x->adiv($c);
      $c = $x->class('form-check-input')->type('radio')->name('radioNoLabel')->id('radioNoLabel1')->aria('label', '...')->input();
      $p .= $x->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'checkboxNoLabel'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', '...'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'radioNoLabel'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'radioNoLabel1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', '...'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div>' . PHP_EOL
        . ' <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div>' . PHP_EOL
        . ' <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Without Labels', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('toggle')->h4('Toggle Buttons')
        . $x->p($x->htmlchar('Create button-like checkboxes and radio buttons by using .btn styles rather than .form-check-label on the <label> elements. These toggle buttons can further be grouped in a button group if needed.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('checkboxtoggle')->h4('Checkbox Toggle Buttons');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->type('checkbox')->cbtn('check')->id('btn-check')->autocomplete('off')->input()
        . $x->cbtn()->cbtn('primary')->for('btn-check')->label('Single toggle');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'btn-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('autocomple(')
        . $x->text('warning')->span("'off'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'btn-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Single toggle'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<input type="checkbox" class="btn-check" id="btn-check" autocomplete="off">' . PHP_EOL
        . '<label class="btn btn-primary" for="btn-check">Single toggle</label>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Single toggle', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->type('checkbox')->cbtn('check')->id('btn-check-2')->checked()->autocomplete('off')->input()
        . $x->cbtn()->cbtn('primary')->for('btn-check-2')->label('Checked');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'btn-check-2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('checked()')
        . '->' . $x->text('info')->span('autocomple(')
        . $x->text('warning')->span("'off'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'btn-check-2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Checked'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off">' . PHP_EOL
        . '<label class="btn btn-primary" for="btn-check-2">Checked</label>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Checked', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      html::make()->disabled();
      $p = $x->type('checkbox')->cbtn('check')->id('btn-check-3')->autocomplete('off')->input()
        . $x->cbtn()->cbtn('primary')->for('btn-check-3')->label('Disabled');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'btn-check-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('autocomple(')
        . $x->text('warning')->span("'off'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'btn-check-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Disabled'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<input type="checkbox" class="btn-check" id="btn-check-3" autocomplete="off" disabled>' . PHP_EOL
        . '<label class="btn btn-primary" for="btn-check-3">Disabled</label>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Disabled', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('Visually, these checkbox toggle buttons are identical to the button plugin toggle buttons. However, they are conveyed differently by assistive technologies: the checkbox toggles will be announced by screen readers as “checked”/“not checked” (since, despite their appearance, they are fundamentally still checkboxes), whereas the button plugin toggle buttons will be announced as “button”/“button pressed”. The choice between these two approaches will depend on the type of toggle you are creating, and whether or not the toggle will make sense to users when announced as a checkbox or as an actual button.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('radiotoggle')->h4('Radio Toggle Buttons');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->type('radio')->cbtn('check')->name('options')->id('option1')->autocomplete('off')->checked()->input()
        . $x->m(2)->cbtn()->cbtn('secondary')->for('option1')->label('Checked')
        . $x->type('radio')->cbtn('check')->name('options')->id('option2')->autocomplete('off')->input()
        . $x->m(2)->cbtn()->cbtn('secondary')->for('option2')->label('Radio');

      html::make()->disabled();
      $p .= $x->type('radio')->cbtn('check')->name('options')->id('option3')->autocomplete('off')->input()
        . $x->m(2)->cbtn()->cbtn('secondary')->for('option3')->label('Disabled')
        . $x->type('radio')->cbtn('check')->name('options')->id('option4')->autocomplete('off')->input()
        . $x->m(2)->cbtn()->cbtn('secondary')->for('option4')->label('Radio');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input1') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'options'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'option1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('autocomplete(')
        . $x->text('warning')->span("'off'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('checked()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label1') . ' = '
        . $xx . '->' . $x->text('info')->span('m(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'option1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Checked'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input2') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'options'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'option2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('autocomplete(')
        . $x->text('warning')->span("'off'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label2') . ' = '
        . $xx . '->' . $x->text('info')->span('m(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'option2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input3') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'options'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'option3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('autocomplete(')
        . $x->text('warning')->span("'off'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label3') . ' = '
        . $xx . '->' . $x->text('info')->span('m(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'option3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input4') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'options'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'option4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('autocomplete(')
        . $x->text('warning')->span("'off'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label4') . ' = '
        . $xx . '->' . $x->text('info')->span('m(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'option4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input1')
        . ' . '
        . $dollar . $x->text('danger')->span('label1')
        . ' . '
        . $dollar . $x->text('danger')->span('input2')
        . ' . '
        . $dollar . $x->text('danger')->span('label2')
        . ' . '
        . $dollar . $x->text('danger')->span('input3')
        . ' . '
        . $dollar . $x->text('danger')->span('label3')
        . ' . '
        . $dollar . $x->text('danger')->span('input4')
        . ' . '
        . $dollar . $x->text('danger')->span('label4')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>' . PHP_EOL
        . '<label class="m-2 btn btn-secondary" for="option1">Checked</label>' . PHP_EOL
        . PHP_EOL
        . '<input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">' . PHP_EOL
        . '<label class="m-2 btn btn-secondary" for="option2">Radio</label>' . PHP_EOL
        . PHP_EOL
        . '<input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" disabled>' . PHP_EOL
        . '<label class="m-2 btn btn-secondary" for="option3">Disabled</label>' . PHP_EOL
        . PHP_EOL
        . '<input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">' . PHP_EOL
        . '<label class="m-2 btn btn-secondary" for="option4">Radio</label>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Radio Toggle', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('outlined')->h4('Outlined Styles')
        . $x->p('Different variants of .btn, such at the various outlined styles, are supported.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->type('checkbox')->cbtn('check')->id('btn-check-outlined')->autocomplete('off')->input()
        . $x->m(2)->cbtn()->cbtn('outline-primary')->for('btn-check-outlined')->label('Single toggle')
        . $br
        . $x->type('checkbox')->cbtn('check')->id('btn-check-2-outlined')->checked()->autocomplete('off')->input()
        . $x->m(2)->cbtn()->cbtn('outline-secondary')->for('btn-check-2-outlined')->label('Checked')
        . $br
        . $x->type('radio')->cbtn('check')->name('options-outlined')->id('success-outlined')->autocomplete('off')->checked()->input()
        . $x->m(2)->cbtn()->cbtn('outline-success')->for('success-outlined')->label('Checked success radio')
        . $x->type('radio')->cbtn('check')->name('options-outlined')->id('danger-outlined')->autocomplete('off')->input()
        . $x->m(2)->cbtn()->cbtn('outline-danger')->for('danger-outlined')->label('Danger radio');
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('br') . ' = '
        . $xx . '->' . $x->text('info')->span('br()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input1') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'btn-check-outlined'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('autocomplete(')
        . $x->text('warning')->span("'off'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label1') . ' = '
        . $xx . '->' . $x->text('info')->span('m(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'outline-primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'btn-check-outlined'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Single toggle'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input2') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'btn-check-2-outlined'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('checked()')
        . '->' . $x->text('info')->span('autocomplete(')
        . $x->text('warning')->span("'off'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label2') . ' = '
        . $xx . '->' . $x->text('info')->span('m(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'outline-secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'btn-check-2-outlined'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Checked'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input3') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'options-outlined'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'success-outlined'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('checked()')
        . '->' . $x->text('info')->span('autocomplete(')
        . $x->text('warning')->span("'off'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label3') . ' = '
        . $xx . '->' . $x->text('info')->span('m(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'outline-success'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'success-outlined'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Checked success radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input4') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'options-outlined'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'danger-outlined'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('autocomplete(')
        . $x->text('warning')->span("'off'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label4') . ' = '
        . $xx . '->' . $x->text('info')->span('m(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'outline-danger'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'danger-outlined'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Danger radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input1')
        . ' . '
        . $dollar . $x->text('danger')->span('label1')
        . ' . '
        . $dollar . $x->text('danger')->span('br')
        . ' . '
        . $dollar . $x->text('danger')->span('input2')
        . ' . '
        . $dollar . $x->text('danger')->span('label2')
        . ' . '
        . $dollar . $x->text('danger')->span('br')
        . ' . '
        . $dollar . $x->text('danger')->span('input3')
        . ' . '
        . $dollar . $x->text('danger')->span('label3')
        . ' . '
        . $dollar . $x->text('danger')->span('input4')
        . ' . '
        . $dollar . $x->text('danger')->span('label4')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Outlined Styles', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Checks and radios');
      $content .= $x->text('center')->lead('Create consistent cross-browser and cross-device checkboxes and radios with our completely rewritten checks component.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'range') {

      $p = $x->id('overview')->h4('Overview')
        . $x->p($x->htmlchar('Create custom <input type="range"> controls with .form-range. The track (the background) and thumb (the value) are both styled to appear the same across browsers. As only Firefox supports “filling” their track from the left or right of the thumb as a means to visually indicate progress, we do not currently support it.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->for('customRange1')->class('form-label')->label('Example range')
        . $x->type('range')->class('form-range')->id('customRange1')->input();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'customRange1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Example range'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'range'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'from-range'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'customRange1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<label for="customRange1" class="form-label">Example range</label>' . PHP_EOL
        . '<input type="range" class="form-range" id="customRange1">' . PHP_EOL
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

      $p = $x->id('disabled')->h4('Disabled')
        . $x->p('Add the disabled boolean attribute on an input to give it a grayed out appearance and remove pointer events.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->for('disabledRange')->class('form-label')->label('Disabed range');
      html::make()->disabled();
      $p .= $x->type('range')->class('form-range')->id('disabledRange')->input();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'disabledRange'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Disabled range'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'range'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'from-range'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'disabledRange'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<label for="disabledRange" class="form-label">Disabled range</label>' . PHP_EOL
        . '<input type="range" class="form-range" id="disabledRange">' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Disabled', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('minandmax')->h4('Min and Max')
        . $x->p('Range inputs have implicit values for min and max—0 and 100, respectively. You may specify new values for those using the min and max attributes.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->for('customRange2')->class('form-label')->label('Example range')
        . $x->type('range')->class('form-range')->min(0)->max(5)->id('customRange2')->input();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'customRange2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Example range'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'range'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'from-range'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('min(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('max(')
        . $x->text('warning')->span("'5'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'customRange2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<label for="customRange2" class="form-label">Example range</label>' . PHP_EOL
        . '<input type="range" class="form-range" min="0" max="5" id="customRange2">' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Min and Max', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('steps')->h4('Steps')
        . $x->p('By default, range inputs “snap” to integer values. To change this, you can specify a step value. In the example below, we double the number of steps by using step="0.5".');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->for('customRange3')->class('form-label')->label('Example range')
        . $x->type('range')->class('form-range')->min(0)->max(5)->step('0.5')->id('customRange3')->input();
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'customRange3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Example range'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'range'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'from-range'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('min(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('max(')
        . $x->text('warning')->span("'5'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('step(')
        . $x->text('warning')->span("'0.5'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'customRange3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<label for="customRange3" class="form-label">Example range</label>' . PHP_EOL
        . '<input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Steps', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Range');
      $content .= $x->text('center')->lead('Use our custom range inputs for consistent cross-browser styling and built-in customization.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'input') {

      $p = $x->id('basic')->h4('Basic Example')
        . $x->p($x->htmlchar('Place one add-on or button on either side of an input. You may also place one on both sides of an input. Remember to place <label>s outside the input group.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('input-group-text')->id('basic-addon1')->span('@')
        . $x->type('text')->class('form-control')->aplaceholder('Username')->aria('label', 'Username')->aria('describedby', 'basic-addon1')->input();
      $p = $x->class('input-group')->mb(3)->adiv($c);

      $c = $x->type('text')->class('form-control')->aplaceholder("Recipient's username")->aria('label', "Recipient's username")->aria('describedby', 'basic-addon2')->input()
        . $x->class('input-group-text')->id('basic-addon2')->span('@example.com');
      $p .= $x->class('input-group')->mb(3)->adiv($c);

      $p .= $x->for('basic-url')->class('form-label')->label('Your vanity URL');

      $c = $x->class('input-group-text')->id('basic-addon3')->span('https://example.com/users/')
        . $x->type('text')->class('form-control')->id('basic-url')->aria('describedby', 'basic-addon3')->input();
      $p .= $x->class('input-group')->mb(3)->adiv($c);

      $c = $x->class('input-group-text')->span('$')
        . $x->type('text')->class('form-control')->aria('label', 'Amount (to the nearest dollar)')->input()
        . $x->class('input-group-text')->span('.00');
      $p .= $x->class('input-group')->mb(3)->adiv($c);

      $c = $x->type('text')->class('form-control')->aplaceholder('Username')->aria('label', 'Username')->input()
        . $x->class('input-group-text')->span('@')
        . $x->type('text')->class('form-control')->aplaceholder('Server')->aria('label', 'Server')->input();
      $p .= $x->class('input-group')->mb(3)->adiv($c);

      $c = $x->class('input-group-text')->span('With textarea')
        . $x->class('form-control')->aria('label', 'With textarea')->textarea();
      $p .= $x->class('input-group')->adiv($c);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'basic-addon1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'@'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Username'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'basic-addon1'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span('"' . "Recipient's username" . '"')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', " . '"' . "Recipient's username" . '"')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'basic-addon2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'basic-addon2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'@example.com'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('span')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'basic-url'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Your vanity URL'")
        . $x->text('info')->span(')')
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'basic-addon3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'https://example.com/users/'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'basic-url'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'basic-addon3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span1') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'$'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Amount (to the nearest dollar)'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span2') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'.00'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('span1')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('span2')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input1') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Username'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $dollar
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'@'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input2') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Server'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Server'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input1')
        . ' . '
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('input2')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'With textarea'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('textarea') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'With textarea'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('textarea()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('textarea')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="input-group mb-3">' . PHP_EOL
        . ' <span class="input-group-text" id="basic-addon1">@</span>' . PHP_EOL
        . ' <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group mb-3">' . PHP_EOL
        . ' <input type="text" class="form-control" placeholder="Recipient' . "'s username" . '" aria-label="Recipient' . "'s username" . '" aria-describedby="basic-addon2">' . PHP_EOL
        . ' <span class="input-group-text" id="basic-addon2">@example.com</span>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<label for="basic-url" class="form-label">Your vanity URL</label>' . PHP_EOL
        . '<div class="input-group mb-3">' . PHP_EOL
        . ' <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>' . PHP_EOL
        . ' <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group mb-3">' . PHP_EOL
        . ' <span class="input-group-text">$</span>' . PHP_EOL
        . ' <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">' . PHP_EOL
        . ' <span class="input-group-text">.00</span>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group mb-3">' . PHP_EOL
        . ' <input type="text" class="form-control" placeholder="Username" aria-label="Username">' . PHP_EOL
        . ' <span class="input-group-text">@</span>' . PHP_EOL
        . ' <input type="text" class="form-control" placeholder="Server" aria-label="Server">' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group">' . PHP_EOL
        . ' <span class="input-group-text">With textarea</span>' . PHP_EOL
        . ' <textarea class="form-control" aria-label="With textarea"></textarea>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Basic Example', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('wrapping')->h4('Wrapping')
        . $x->p('Input groups wrap by default via flex-wrap: wrap in order to accommodate custom form field validation within an input group. You may disable this with .flex-nowrap.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('input-group-text')->id('addon-wrapping')->span('@')
        . $x->type('text')->class('form-control')->aplaceholder('Username')->aria('label', 'Username')->aria('describedby', 'addon-wrapping')->input();
      $p = $x->class('input-group')->flex('nowrap')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'addon-wrapping'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'@'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Username'")
        . $x->text('info')->span(')')
        . '->'. $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'addon-wrapping'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('flex(')
        . $x->text('warning')->span("'nowrap'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="input-group flex-nowrap">' . PHP_EOL
        . ' <span class="input-group-text" id="addon-wrapping">@</span>' . PHP_EOL
        . ' <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Wrapping', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('sizing')->h4('Sizing')
        . $x->p('Add the relative form sizing classes to the .input-group itself and contents within will automatically resize—no need for repeating the form control size classes on each element.')
        . $x->p($x->strong('Sizing on the individual input group elements isn’t supported.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('input-group-text')->id('inputGroup-sizing-sm')->span('Small')
        . $x->type('text')->class('form-control')->aria('label', 'Sizing example input')->aria('describedby', 'inputGroup-sizing-sm')->input();
      $p = $x->class('input-group input-group-sm')->mb(3)->adiv($c);

      $c = $x->class('input-group-text')->id('inputGroup-sizing-default')->span('Default')
        . $x->type('text')->class('form-control')->aria('label', 'Sizing example input')->aria('describedby', 'inputGroup-sizing-default')->input();
      $p .= $x->class('input-group')->mb(3)->adiv($c);

      $c = $x->class('input-group-text')->id('inputGroup-sizing-lg')->span('Large')
        . $x->type('text')->class('form-control')->aria('label', 'Sizing example input')->aria('describedby', 'inputGroup-sizing-lg')->input();
      $p .= $x->class('input-group input-group-lg')->adiv($c);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroup-sizing-sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'Small'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Sizing example input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'inputGroup-sizing-sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group input-group-sm mb-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroup-sizing-default'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'Default'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Sizing example input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'inputGroup-sizing-default'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group mb-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroup-sizing-lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'Large'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Sizing example input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'inputGroup-sizing-lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group input-group-lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Sizing', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('checkboxesandradios')->h4('Checkboxes and Radios')
        . $x->p('Place any checkbox or radio option within an input group’s addon instead of text. We recommend adding .mt-0 to the .form-check-input when there’s no visible text next to the input.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('form-check-input')->mt(0)->type('checkbox')->aria('label', 'Checkbox for following text input')->input();
      $c = $x->class('input-group-text')->adiv($c);
      $c .= $x->type('text')->class('form-control')->aria('label', 'Text input with checkbox')->input();
      $p = $x->class('input-group')->mb(3)->adiv($c);

      $c = $x->class('form-check-input')->mt(0)->type('radio')->aria('label', 'Radio button for following text input')->input();
      $c = $x->class('input-group-text')->adiv($c);
      $c .= $x->type('text')->class('form-control')->aria('label', 'Text input with radio buttons')->input();
      $p .= $x->class('input-group')->adiv($c);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input1') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mt(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Checkbox for following text input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input1') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input1')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input2') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Text input with checkbox'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input1')
        . ' . '
        . $dollar . $x->text('danger')->span('input2')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input1') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mt(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Radio for following text input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input1') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input1')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input2') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Text input with radio button'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input1')
        . ' . '
        . $dollar . $x->text('danger')->span('input2')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="input-group mb-3">' . PHP_EOL
        . ' <div class="input-group-text">' . PHP_EOL
        . '   <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <input type="text" class="form-control" aria-label="Text input with checkbox">' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group">' . PHP_EOL
        . ' <div class="input-group-text">' . PHP_EOL
        . '   <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <input type="text" class="form-control" aria-label="Text input with radio button">' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Checkboxes and Radios', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('multiple')->h4('Multiple Inputs')
        . $x->p($x->htmlchar('While multiple <input>s are supported visually, validation styles are only available for input groups with a single <input>.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->class('input-group-text')->span('First and last name')
        . $x->type('text')->aria('label', 'First name')->class('form-control')->input()
        . $x->type('text')->aria('label', 'Last name')->class('form-control')->input();
      $p = $x->class('input-group')->adiv($p);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'First and last name'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input1') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'First name'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input2') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Last name'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('input1')
        . ' . '
        . $dollar . $x->text('danger')->span('input2')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="input-group">' . PHP_EOL
        . ' <span class="input-group-text">First and last name</span>' . PHP_EOL
        . ' <input type="text" aria-label="First name" class="form-control">' . PHP_EOL
        . ' <input type="text" aria-label="Last name" class="form-control">' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Multiple Inputs', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('multipleaddons')->h4('Multiple Addons')
        . $x->p('Multiple add-ons are supported and can be mixed with checkbox and radio input versions.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('input-group-text')->span('$')
        . $x->class('input-group-text')->span('0.00')
        . $x->type('text')->class('form-control')->aria('label', 'Dollar amount (with dot and two decimal places)')->input();
      $p = $x->class('input-group')->mb(3)->adiv($c);

      $c = $x->type('text')->class('form-control')->aria('label', 'Dollar amount (with dot and two decimal places)')->input()
        . $x->class('input-group-text')->span('$')
        . $x->class('input-group-text')->span('0.00');
      $p .= $x->class('input-group')->adiv($c);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('span1') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'$'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span2') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'0.00'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Dollar amount (with dot and two decimal places)'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('span1')
        . ' . '
        . $dollar . $x->text('danger')->span('span2')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('span1')
        . ' . '
        . $dollar . $x->text('danger')->span('span2')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="input-group mb-3">' . PHP_EOL
        . ' <span class="input-group-text">$</span>' . PHP_EOL
        . ' <span class="input-group-text">0.00</span>' . PHP_EOL
        . ' <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group">' . PHP_EOL
        . ' <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">' . PHP_EOL
        . ' <span class="input-group-text">$</span>' . PHP_EOL
        . ' <span class="input-group-text">0.00</span>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Multiple Addons', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('buttonaddons')->h4('Button Addons');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->cbtn()->cbtn('outline-secondary')->type('button')->id('button-addon1')->button('Button')
        . $x->type('text')->class('form-control')->aria('label', 'Example text with button addon')->aria('describedby', 'button-addon1')->input();
      $p = $x->class('input-group')->mb(3)->adiv($c);

      $c = $x->type('text')->class('form-control')->aplaceholder("Recipient's username")->aria('label', "Recipient's username")->aria('describedby', 'button-addon2')->input()
        . $x->cbtn()->cbtn('outline-secondary')->type('button')->id('button-addon2')->button('Button');
      $p .= $x->class('input-group')->mb(3)->adiv($c);

      $btn = $x->cbtn()->cbtn('outline-secondary')->type('button')->button('Button');
      $c = $btn . $btn . $x->type('text')->class('form-control')->aria('label', 'Example text with two button addons')->input();
      $p .= $x->class('input-group')->mb(3)->adiv($c);

      $c = $x->type('text')->class('form-control')->aplaceholder("Recipient's username")->aria('label', "Recipient's username with two button addons")->input()
        . $btn . $btn;
      $p .= $x->class('input-group')->adiv($c);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'outline-secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'button-addon1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Button'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Example text with button addon'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'button-addon1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('button')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span('"' . "Recipient's username" . '"')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', " . '"' . "Recipient's username" . '"')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'button-addon2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'outline-secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'button-addon2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Button'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'outline-secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Button'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input1') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Example text with two button addons'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input2') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span('"' . "Recipient's username" . '"')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', " . '"' . "Recipient's username with two button addons" . '"')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('button')
        . ' . '
        . $dollar . $x->text('danger')->span('button')
        . ' . '
        . $dollar . $x->text('danger')->span('input1')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input2')
        . ' . '
        . $dollar . $x->text('danger')->span('button')
        . ' . '
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="input-group mb-3">' . PHP_EOL
        . ' <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>' . PHP_EOL
        . ' <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group mb-3">' . PHP_EOL
        . ' <input type="text" class="form-control" placeholder="Recipient' . "'s username" . '" aria-label="Recipient' . "'s username" . '" aria-describedby="button-addon2">' . PHP_EOL
        . ' <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group mb-3">' . PHP_EOL
        . ' <button class="btn btn-outline-secondary" type="button">Button</button>' . PHP_EOL
        . ' <button class="btn btn-outline-secondary" type="button">Button</button>' . PHP_EOL
        . ' <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group">' . PHP_EOL
        . ' <input type="text" class="form-control" placeholder="Recipient' . "'s username" . '" aria-label="Recipient' . "'s " . 'username with two button addons">' . PHP_EOL
        . ' <button class="btn btn-outline-secondary" type="button">Button</button>' . PHP_EOL
        . ' <button class="btn btn-outline-secondary" type="button">Button</button>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Button Addons', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('buttonswithdropdowns')->h4('Buttons With Dropdowns');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $input = $x->type('text')->class('form-control')->aria('label', 'Text input with dropdown button')->input();
      $x->ditem('Action', '#');
      $x->ditem('Another action', '#');
      $x->ditem('Something else here', '#');
      $x->ddivider();
      $x->ditem('Separated link', '#');
      $x->posthtml($input);
      $p = $x->secondary()->outline()->class('input-group')->mb(3)->dropdown('Dropdown');

      $x->ditem('Action', '#');
      $x->ditem('Another action', '#');
      $x->ditem('Something else here', '#');
      $x->ddivider();
      $x->ditem('Separated link', '#');
      $x->prehtml($input);
      $p .= $x->secondary()->outline()->class('input-group')->mb(3)->menuend()->dropdown('Dropdown');

      $x->li($x->class('dropdown-item')->href('#')->a('Action'));
      $x->li($x->class('dropdown-item')->href('#')->a('Another action'));
      $x->li($x->class('dropdown-item')->href('#')->a('Something else here'));
      $x->li($x->class('dropdown-divider')->hr());
      $x->li($x->class('dropdown-item')->href('#')->a('Separated link'));
      $btn = $x->cbtn()->cbtn('outline-secondary')->class('dropdown-toggle')->type('button')->data('bs-toggle', 'dropdown')->aria('expanded', 'false')->button('Dropdown')
        . $x->class('dropdown-menu dropdown-menu-end')->ul();

      $x->ditem('Action before', '#');
      $x->ditem('Another action before', '#');
      $x->ditem('Something else here', '#');
      $x->ddivider();
      $x->ditem('Separated link', '#');
      $x->posthtml($input . $btn);
      $p .= $x->secondary()->outline()->class('input-group')->mb(3)->dropdown('Dropdown');

/*
      $btn = $x->cbtn()->cbtn('outline-secondary')->dropdown('toggle')->type('button')->data('bs-toggle', 'dropdown')->aria('expanded', 'false')->button('Dropdown');
      $x->li($x->dropdown('item')->href('#')->a('Action'));
      $x->li($x->dropdown('item')->href('#')->a('Another action'));
      $x->li($x->dropdown('item')->href('#')->a('Something else here'));
      $x->li($x->dropdown('divider')->hr());
      $x->li($x->dropdown('item')->href('#')->a('Separated link'));
      $ul1 = $x->dropdown('menu')->ul();
      $x->li($x->dropdown('item')->href('#')->a('Action'));
      $x->li($x->dropdown('item')->href('#')->a('Another action'));
      $x->li($x->dropdown('item')->href('#')->a('Something else here'));
      $x->li($x->dropdown('divider')->hr());
      $x->li($x->dropdown('item')->href('#')->a('Separated link'));
      $ul2 = $x->dropdown('menu')->dropdown('menu-end')->ul();
      $input1 = $x->type('text')->class('form-control')->aria('label', 'Text input with dropdown button')->input();
      $input2 = $x->type('text')->class('form-control')->aria('label', 'Text input with 2 dropdown buttons')->input();
      $p = $x->class('input-group')->mb(3)->adiv($btn . $ul1 . $input1)
        . $x->class('input-group')->mb(3)->adiv($input1 . $btn . $ul2)
        . $x->class('input-group')->adiv($btn . $ul1 . $input2 . $btn . $ul2);
*/
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'outline-secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'toggle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('data(')
        . $x->text('warning')->span("'bs-toggle', 'dropdown'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'expanded', 'false'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Dropdown'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input1') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Text input with dropdown button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input2') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Text input with 2 dropdown buttons'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Action'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Another action'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Something else here'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'divider'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('hr())') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Separated link'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('ul1') . ' = '
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'menu'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('ul()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Action'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Another action'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Something else here'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'divider'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('hr())') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Separated link'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('ul2') . ' = '
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'menu'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'menu-end'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('ul()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('button')
        . ' . '
        . $dollar . $x->text('danger')->span('ul1')
        . ' . '
        . $dollar . $x->text('danger')->span('input1')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input1')
        . ' . '
        . $dollar . $x->text('danger')->span('button')
        . ' . '
        . $dollar . $x->text('danger')->span('ul2')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('button')
        . ' . '
        . $dollar . $x->text('danger')->span('ul1')
        . ' . '
        . $dollar . $x->text('danger')->span('input2')
        . ' . '
        . $dollar . $x->text('danger')->span('button')
        . ' . '
        . $dollar . $x->text('danger')->span('ul2')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="input-group mb-3">' . PHP_EOL
        . ' <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>' . PHP_EOL
        . ' <ul class="dropdown-menu">' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
        . '   <li><hr class="dropdown-divider"></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Separated link</a></li>' . PHP_EOL
        . ' </ul>' . PHP_EOL
        . ' <input type="text" class="form-control" aria-label="Text input with dropdown button">' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group mb-3">' . PHP_EOL
        . ' <input type="text" class="form-control" aria-label="Text input with dropdown button">' . PHP_EOL
        . ' <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>' . PHP_EOL
        . ' <ul class="dropdown-menu dropdown-menu-end">' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
        . '   <li><hr class="dropdown-divider"></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Separated link</a></li>' . PHP_EOL
        . ' </ul>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group">' . PHP_EOL
        . ' <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>' . PHP_EOL
        . ' <ul class="dropdown-menu">' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Action before</a></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Another action before</a></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
        . '   <li><hr class="dropdown-divider"></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Separated link</a></li>' . PHP_EOL
        . ' </ul>' . PHP_EOL
        . ' <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">' . PHP_EOL
        . ' <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>' . PHP_EOL
        . ' <ul class="dropdown-menu dropdown-menu-end">' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
        . '   <li><hr class="dropdown-divider"></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Separated link</a></li>' . PHP_EOL
        . ' </ul>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Buttons With Dropdowns', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('segmented')->h4('Segmented Buttons');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $input = $x->type('text')->class('form-control')->aria('label', 'Text input with segmented dropdown button')->input();

      $x->ditem('Action', '#');
      $x->ditem('Another action', '#');
      $x->ditem('Something else here', '#');
      $x->ddivider();
      $x->ditem('Separated link', '#');
      $x->posthtml($input);
      $p = $x->nobtngroup()->class('input-group')->mb(3)->secondary()->outline()->split()->dropdown('Action');

      $x->ditem('Action', '#');
      $x->ditem('Another action', '#');
      $x->ditem('Something else here', '#');
      $x->ddivider();
      $x->ditem('Separated link', '#');
      $x->prehtml($input);
      $p .= $x->nobtngroup()->class('input-group')->mb(3)->secondary()->outline()->split()->menuend()->dropdown('Action');
/*
      $btn1 = $x->type('button')->cbtn()->cbtn('outline-secondary')->button('Action');
      $btn2 = $x->visually('hidden')->span('Toggle Dropdown');
      $btn2 = $x->type('button')->cbtn()->cbtn('outline-secondary')->dropdown('toggle')->dropdown('toggle-split')->data('bs-toggle', 'dropdown')->aria('expanded', 'false')->button($btn2);
      $input = $x->type('text')->class('form-control')->aria('label', 'Text input with segmented dropdown button')->input();

      $x->li($x->dropdown('item')->href('#')->a('Action'));
      $x->li($x->dropdown('item')->href('#')->a('Another action'));
      $x->li($x->dropdown('item')->href('#')->a('Something else here'));
      $x->li($x->dropdown('divider')->hr());
      $x->li($x->dropdown('item')->href('#')->a('Separated link'));
      $ul1 = $x->dropdown('menu')->ul();

      $x->li($x->dropdown('item')->href('#')->a('Action'));
      $x->li($x->dropdown('item')->href('#')->a('Another action'));
      $x->li($x->dropdown('item')->href('#')->a('Something else here'));
      $x->li($x->dropdown('divider')->hr());
      $x->li($x->dropdown('item')->href('#')->a('Separated link'));
      $ul2 = $x->dropdown('menu')->dropdown('menu-end')->ul();

      $p = $x->class('input-group')->mb(3)->adiv($btn1 . $btn2 . $ul1 . $input)
        . $x->class('input-group')->adiv($input . $btn1 . $btn2 . $ul2);
*/
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('button1') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'outline-secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Action'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button2') . ' = '
        . $xx . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'Toggle Dropdown'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button2') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'outline-secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'toggle'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'toggle-split'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('data(')
        . $x->text('warning')->span("'bs-toggle', 'dropdown'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'expanded', 'false'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $dollar . $x->text('danger')->span('button2')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Text input with segmented dropdown button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Action'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Another action'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Something else here'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'divider'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('hr())') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Separated link'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('ul1') . ' = '
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'menu'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('ul()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Action'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Another action'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Something else here'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'divider'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('hr())') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('li(')
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'item'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('href(')
        . $x->text('warning')->span("'#'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('a(')
        . $x->text('warning')->span("'Separated link'")
        . $x->text('info')->span('))') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('ul2') . ' = '
        . $xx . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'menu'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('dropdown(')
        . $x->text('warning')->span("'menu-end'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('ul()') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('button1')
        . ' . '
        . $dollar . $x->text('danger')->span('button2')
        . ' . '
        . $dollar . $x->text('danger')->span('ul1')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('button1')
        . ' . '
        . $dollar . $x->text('danger')->span('button2')
        . ' . '
        . $dollar . $x->text('danger')->span('ul2')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="input-group mb-3">' . PHP_EOL
        . ' <button type="button" class="btn btn-outline-secondary">Action</button>' . PHP_EOL
        . ' <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
        . '   <span class="visually-hidden">Toggle Dropdown</span>' . PHP_EOL
        . ' </button>' . PHP_EOL
        . ' <ul class="dropdown-menu">' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
        . '   <li><hr class="dropdown-divider"></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Separated link</a></li>' . PHP_EOL
        . ' </ul>' . PHP_EOL
        . ' <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group">' . PHP_EOL
        . ' <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">' . PHP_EOL
        . ' <button type="button" class="btn btn-outline-secondary">Action</button>' . PHP_EOL
        . ' <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL
        . '   <span class="visually-hidden">Toggle Dropdown</span>' . PHP_EOL
        . ' </button>' . PHP_EOL
        . ' <ul class="dropdown-menu dropdown-menu-end">' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Action</a></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Another action</a></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Something else here</a></li>' . PHP_EOL
        . '   <li><hr class="dropdown-divider"></li>' . PHP_EOL
        . '   <li><a class="dropdown-item" href="#">Separated link</a></li>' . PHP_EOL
        . ' </ul>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Segmented Buttons', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('customforms')->h4('Custom Forms')
        . $x->p('Input groups include support for custom selects and custom file inputs. Browser default versions of these are not supported.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('customselect')->h4('Custom Select');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->selected()->option('Choose...');
      $x->value(1)->option('One');
      $x->value(2)->option('Two');
      $x->value(3)->option('Three');
      $c = $x->class('input-group-text')->for('inputGroupSelect01')->label('Options')
        . $x->class('form-select')->id('inputGroupSelect01')->select();
      $p = $x->class('input-group')->mb(3)->adiv($c);

      $x->selected()->option('Choose...');
      $x->value(1)->option('One');
      $x->value(2)->option('Two');
      $x->value(3)->option('Three');
      $c = $x->class('form-select')->id('inputGroupSelect02')->select()
        . $x->class('input-group-text')->for('inputGroupSelect02')->label('Options');
      $p .= $x->class('input-group')->mb(3)->adiv($c);

      $x->selected()->option('Choose...');
      $x->value(1)->option('One');
      $x->value(2)->option('Two');
      $x->value(3)->option('Three');
      $c = $x->cbtn()->cbtn('outline-secondary')->type('button')->button('Button')
        . $x->class('form-select')->id('inputGroupSelect03')->aria('label', 'Example select with button addon')->select();
      $p .= $x->class('input-group')->mb(3)->adiv($c);

      $x->selected()->option('Choose...');
      $x->value(1)->option('One');
      $x->value(2)->option('Two');
      $x->value(3)->option('Three');
      $c = $x->class('form-select')->id('inputGroupSelect04')->aria('label', 'Example select with button addon')->select()
        . $x->cbtn()->cbtn('outline-secondary')->type('button')->button('Button');
      $p .= $x->class('input-group')->adiv($c);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('options') . ' = '
        . $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Choose...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('options') . ' .= '
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('options') . ' .= '
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('options') . ' .= '
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("input-group-text")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputGroupSelect01'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Options'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupSelect01'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select(')
        . $dollar . $x->text('danger')->span('options')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('select')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("input-group-text")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputGroupSelect02'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Options'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupSelect02'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select(')
        . $dollar . $x->text('danger')->span('options')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('select')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("outline-secondary")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Button'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupSelect03'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Example select with button addon'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select(')
        . $dollar . $x->text('danger')->span('options')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('button')
        . ' . '
        . $dollar . $x->text('danger')->span('select')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("outline-secondary")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Button'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupSelect04'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Example select with button addon'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select(')
        . $dollar . $x->text('danger')->span('options')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('select')
        . ' . '
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="input-group mb-3">' . PHP_EOL
        . ' <label class="input-group-text" for="inputGroupSelect01">Options</label>' . PHP_EOL
        . ' <select class="form-select" id="inputGroupSelect01">' . PHP_EOL
        . '   <option selected>Choose...</option>' . PHP_EOL
        . '   <option value="1">One</option>' . PHP_EOL
        . '   <option value="2">Two</option>' . PHP_EOL
        . '   <option value="3">Three</option>' . PHP_EOL
        . ' </select>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group mb-3">' . PHP_EOL
        . ' <select class="form-select" id="inputGroupSelect02">' . PHP_EOL
        . '   <option selected>Choose...</option>' . PHP_EOL
        . '   <option value="1">One</option>' . PHP_EOL
        . '   <option value="2">Two</option>' . PHP_EOL
        . '   <option value="3">Three</option>' . PHP_EOL
        . ' </select>' . PHP_EOL
        . ' <label class="input-group-text" for="inputGroupSelect02">Options</label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group mb-3">' . PHP_EOL
        . ' <button class="btn btn-outline-secondary" type="button">Button</button>' . PHP_EOL
        . ' <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">' . PHP_EOL
        . '   <option selected>Choose...</option>' . PHP_EOL
        . '   <option value="1">One</option>' . PHP_EOL
        . '   <option value="2">Two</option>' . PHP_EOL
        . '   <option value="3">Three</option>' . PHP_EOL
        . ' </select>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group">' . PHP_EOL
        . ' <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">' . PHP_EOL
        . '   <option selected>Choose...</option>' . PHP_EOL
        . '   <option value="1">One</option>' . PHP_EOL
        . '   <option value="2">Two</option>' . PHP_EOL
        . '   <option value="3">Three</option>' . PHP_EOL
        . ' </select>' . PHP_EOL
        . ' <button class="btn btn-outline-secondary" type="button">Button</button>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Custom Select', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('customfile')->h4('Custom File Input');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('input-group-text')->for('inputGroupFile01')->label('Upload')
        . $x->type('file')->class('form-control')->id('inputGroupFile01')->input();
      $p = $x->class('input-group')->mb(3)->adiv($c);

      $c = $x->type('file')->class('form-control')->id('inputGroupFile02')->input()
        . $x->class('input-group-text')->for('inputGroupFile02')->label('Upload');
      $p .= $x->class('input-group')->mb(3)->adiv($c);

      $c = $x->cbtn()->cbtn('outline-secondary')->type('button')->id('inputGroupFileAddon03')->button('Button')
        . $x->type('file')->class('form-control')->id('inputGroupFile03')->aria('describedby', 'inputGroupFile03')->aria('label', 'Upload')->input();
      $p .= $x->class('input-group')->mb(3)->adiv($c);

      $c = $x->type('file')->class('form-control')->id('inputGroupFile04')->aria('describedby', 'inputGroupFileAddon04')->aria('label', 'Upload')->input()
        . $x->cbtn()->cbtn('outline-secondary')->type('button')->id('inputGroupFileAddon04')->button('Button');
      $p .= $x->class('input-group')->adiv($c);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputGroupFile01'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Upload'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'file'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupFile01'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputGroupFile02'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Upload'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'file'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupFile02'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'outline-secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupFileAddon03'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Button'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'file'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupFile03'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'inputGroupFileAddon03'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Upload'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('button')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'outline-secondary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'button'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupFileAddon04'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Button'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'file'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupFile04'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'inputGroupFileAddon04'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Upload'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="input-group mb-3">' . PHP_EOL
        . ' <label class="input-group-text" for="inputGroupFile01">Upload</label>' . PHP_EOL
        . ' <input type="file" class="form-control" id="inputGroupFile01">' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group mb-3">' . PHP_EOL
        . ' <input type="file" class="form-control" id="inputGroupFile02">' . PHP_EOL
        . ' <label class="input-group-text" for="inputGroupFile02">Upload</label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group mb-3">' . PHP_EOL
        . ' <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>' . PHP_EOL
        . ' <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">' . PHP_EOL
        . '</div>' . PHP_EOL
        . PHP_EOL
        . '<div class="input-group">' . PHP_EOL
        . ' <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">' . PHP_EOL
        . ' <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Custom File Input', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Input Group');
      $content .= $x->text('center')->lead('Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'floating') {

      $p = $x->id('example')->h4('Example')
        . $x->p($x->htmlchar('Wrap a pair of <input class="form-control"> and <label> elements in .form-floating to enable floating labels with Bootstrap’s textual form fields. A placeholder is required on each <input> as our method of CSS-only floating labels uses the :placeholder-shown pseudo-element. Also note that the <input> must come first so we can utilize a sibling selector (e.g., ~).'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->type('email')->class('form-control')->id('floatingInput')->aplaceholder('name@example')->input()
        . $x->for('floatingInput')->label('Email address');
      $p = $x->class('form-floating')->mb(3)->adiv($c);

      $c = $x->type('password')->class('form-control')->id('floatingPassword')->aplaceholder('Password')->input()
        . $x->for('floatingPassword')->label('Password');
      $p .= $x->class('form-floating')->adiv($c);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'email'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'floatingInput'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'name@example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'floatingInput'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Email address'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-floating'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-floating mb-3">' . PHP_EOL
        . ' <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">' . PHP_EOL
        . ' <label for="floatingInput">Email address</label>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="form-floating">' . PHP_EOL
        . ' <input type="password" class="form-control" id="floatingPassword" placeholder="Password">' . PHP_EOL
        . ' <label for="floatingPassword">Password</label>' . PHP_EOL
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

      $p = $x->p($x->htmlchar('When there’s a value already defined, <label>s will automatically adjust to their floated position.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->type('email')->class('form-control')->id('floatingInputValue')->aplaceholder('name@example.com')->value('test@example.com')->input()
        . $x->for('floatingInputValue')->label('Input with value');
      $p = $x->class('form-floating')->form($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'email'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'floatingInputValue'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'name@example.com'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'test@example.com'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'floatingInputValue'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Input with value'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-floating'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form class="form-floating">' . PHP_EOL
        . ' <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com">' . PHP_EOL
        . ' <label for="floatingInputValue">Input with value</label>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Input With Value', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('Form validation styles also work as expected.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->type('email')->class('form-control is-invalid')->id('floatingInputInvalid')->aplaceholder('name@example.com')->value('test@example.com')->input()
        . $x->for('floatingInputInvalid')->label('Invalid input');
      $p = $x->class('form-floating')->form($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'email'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control is-invalid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'floatingInputInvalid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'name@example.com'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'test@example.com'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'floatingInputInvalid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Invalid input'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-floating'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form class="form-floating">' . PHP_EOL
        . ' <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">' . PHP_EOL
        . ' <label for="floatingInputInvalid">Invalid input</label>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Invalid Input', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('textareas')->h4('Textareas')
        . $x->p($x->htmlchar('By default, <textarea>s with .form-control will be the same height as <input>s.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('form-control')->aplaceholder('Leave a comment here')->id('floatingTextarea')->textarea()
        . $x->for('floatingTextarea')->label('Comments');
      $p = $x->class('form-floating')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('textarea') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Leave a comment here'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'floatingTextarea'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('textarea()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'floatingTextarea'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Comments'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-floating'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('textarea')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-floating">' . PHP_EOL
        . ' <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>' . PHP_EOL
        . ' <label for="floatingTextarea">Comments</label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Textareas', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p($x->htmlchar('To set a custom height on your <textarea>, do not use the rows attribute. Instead, set an explicit height (either inline or via custom CSS).'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('form-control')->aplaceholder('Leave a comment here')->id('floatingTextarea2')->astyle('height: 100px;')->textarea()
        . $x->for('floatingTextarea2')->label('Comments');
      $p = $x->class('form-floating')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('textarea') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Leave a comment here'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'floatingTextarea2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('astyle(')
        . $x->text('warning')->span("'height: 100px;'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('textarea()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'floatingTextarea2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Comments'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-floating'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('textarea')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-floating">' . PHP_EOL
        . ' <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;"></textarea>' . PHP_EOL
        . ' <label for="floatingTextarea2">Comments</label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Textareas Height', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('selects')->h4('Selects')
        . $x->p($x->htmlchar('Other than .form-control, floating labels are only available on .form-selects. They work in the same way, but unlike <input>s, they’ll always show the <label> in its floated state. Selects with size and multiple are not supported.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $x->selected()->option('Open the select menu');
      $x->value('1')->option('One');
      $x->value('2')->option('Two');
      $x->value('3')->option('Three');
      $c = $x->class('form-select')->id('floatingSelect')->aria('label', 'Floating label select example')->select()
        . $x->for('floatingSelect')->label('Works with selects');
      $p = $x->class('form-floating')->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Open this select menu'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'floatingSelect'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Floating label select example'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'floatingSelect'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Works with selects'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-floating'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('select')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="form-floating">' . PHP_EOL
        . ' <select class="form-select" id="floatingSelect" aria-label="Floating label select example">' . PHP_EOL
        . '   <option selected>Open this select menu</option>' . PHP_EOL
        . '   <option value="1">One</option>' . PHP_EOL
        . '   <option value="2">Two</option>' . PHP_EOL
        . '   <option value="3">Three</option>' . PHP_EOL
        . ' </select>' . PHP_EOL
        . ' <label for="floatingSelect">Works with selects</label>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Selects', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('layout')->h4('Layout')
        . $x->p('When working with the Bootstrap grid system, be sure to place form elements within column classes.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->type('email')->class('form-control')->id('floatingInputGrid')->aplaceholder('name@example.com')->value('mdo@example.com')->input()
        . $x->for('floatingInputGrid')->label('Email address');
      $c = $x->class('form-floating')->adiv($c);
      $p = $x->col('md')->adiv($c);

      $x->selected()->option('Open this select menu');
      $x->value(1)->option('One');
      $x->value(2)->option('Two');
      $x->value(3)->option('Three');
      $c = $x->class('form-select')->id('floatingSelectGrid')->aria('label', 'Floating label select example')->select()
        . $x->for('floatingSelectGrid')->label('Works with selects');
      $c = $x->class('form-floating')->adiv($c);
      $p .= $x->col('md')->adiv($c);

      $p = $x->class('row')->g(2)->adiv($p);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'email'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'floatingInputGrid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'name@example.com'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'mdo@example.com'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'floatingInputGrid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Email address'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-floating'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Open this select menu'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'floatingSelectGrid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Floating label select example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'floatingSelectGrid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Works with selects'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-floating'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('select')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="row g-2">' . PHP_EOL
        . ' <div class="col-md">' . PHP_EOL
        . '   <div class="form-floating">' . PHP_EOL
        . '     <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">' . PHP_EOL
        . '     <label for="floatingInputGrid">Email address</label>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md">' . PHP_EOL
        . '   <div class="form-floating">' . PHP_EOL
        . '     <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">' . PHP_EOL
        . '       <option selected>Open this select menu</option>' . PHP_EOL
        . '       <option value="1">One</option>' . PHP_EOL
        . '       <option value="2">Two</option>' . PHP_EOL
        . '       <option value="3">Three</option>' . PHP_EOL
        . '     </select>' . PHP_EOL
        . '     <label for="floatingSelectGrid">Works with selects</label>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Layout', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Floating labels');
      $content .= $x->text('center')->lead('Create beautifully simple form labels that float over your input fields.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'layout') {

      $p = $x->id('forms')->h4('Forms')
        . $x->p($x->htmlchar('Every group of form fields should reside in a <form> element. Bootstrap provides no default styling for the <form> element, but there are some powerful browser features that are provided by default.'));
      $x->text('center')->div($p);
      $x->row();

      $x->li('New to browser forms? Consider reviewing ' . $x->href('https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form')->a('the MDN form docs') . ' for an overview and complete list of available attributes.');
      $x->li($x->htmlchar('<button>s within a <form> default to type="submit", so strive to be specific and always include a type.'));
      $x->li($x->htmlchar('You can disable every form element within a form with the disabled attribute on the <form>.'));

      $x->div($x->ul());
      $x->row();

      $p = $x->p('Since Bootstrap applies display: block and width: 100% to almost all our form controls, forms will by default stack vertically. Additional classes can be used to vary this layout on a per-form basis.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('utilities')->h4('Utilities')
        . $x->p('Margin utilities are the easiest way to add some structure to forms. They provide basic grouping of labels, controls, optional form text, and form validation messaging. We recommend sticking to margin-bottom utilities, and using a single direction throughout the form for consistency.')
        . $x->p($x->htmlchar('Feel free to build your forms however you like, with <fieldset>s, <div>s, or nearly any other element.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->for('formGroupExampleInput')->class('form-label')->label('Example label')
        . $x->type('text')->class('form-control')->id('formGroupExampleInput')->aplaceholder('Example input placeholder')->input();
      $p = $x->mb(3)->adiv($c);
      $c = $x->for('formGroupExampleInput2')->class('form-label')->label('Another label')
        . $x->type('text')->class('form-control')->id('fromGroupExampleInput2')->aplaceholder('Another input placeholder')->input();
      $p .= $x->mb(3)->adiv($c);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'formGroupExampleInput'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Example label'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'formGroupExampleInput'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Example input placeholder'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'formGroupExampleInput2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Another label'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'formGroupExampleInput2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Another input placeholder'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="mb-3">' . PHP_EOL
        . ' <label for="formGroupExampleInput" class="form-label">Example label</label>' . PHP_EOL
        . ' <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="mb-3">' . PHP_EOL
        . ' <label for="formGroupExampleInput2" class="form-label">Another label</label>' . PHP_EOL
        . ' <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Utilities', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('grid')->h4('Form Grid')
        . $x->p('More complex forms can be built using our grid classes. Use these for form layouts that require multiple columns, varied widths, and additional alignment options. Requires the $enable-grid-classes Sass variable to be enabled (on by default).');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->type('text')->class('form-control')->aplaceholder('First name')->aria('label', 'First name')->input();
      $p = $x->col()->adiv($c);
      $c = $x->type('text')->class('form-control')->aplaceholder('Last name')->aria('label', 'Last name')->input();
      $p .= $x->col()->adiv($c);
      $p = $x->class('row')->adiv($p);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'First name'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span('label', 'First name')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Last name'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span('label', 'Last name')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="row">' . PHP_EOL
        . ' <div class="col">' . PHP_EOL
        . '   <input type="text" class="form-control" placeholder="First name" aria-label="First name">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col">' . PHP_EOL
        . '   <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Form grid', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('gutters')->h4('Gutters')
        . $x->p('By adding gutter modifier classes, you can have control over the gutter width in as well the inline as block direction. Also requires the $enable-grid-classes Sass variable to be enabled (on by default).');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->type('text')->class('form-control')->aplaceholder('First name')->aria('label', 'First name')->input();
      $p = $x->col()->adiv($c);
      $c = $x->type('text')->class('form-control')->aplaceholder('Last name')->aria('label', 'Last name')->input();
      $p .= $x->col()->adiv($c);
      $p = $x->class('row g-3')->adiv($p);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'First name'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span('label', 'First name')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Last name'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span('label', 'Last name')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('col(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('row()') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="row g-3">' . PHP_EOL
        . ' <div class="col">' . PHP_EOL
        . '   <input type="text" class="form-control" placeholder="First name" aria-label="First name">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col">' . PHP_EOL
        . '   <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Gutters', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('More complex layouts can also be created with the grid system.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->for('inputEmail4')->class('form-label')->label('Email')
        . $x->type('email')->class('form-control')->id('inputEmail4')->input();
      $p = $x->col('md-6')->adiv($c);

      $c = $x->for('inputPassword4')->class('form-label')->label('Password')
        . $x->type('password')->class('form-control')->id('inputPassword4')->input();
      $p .= $x->col('md-6')->adiv($c);

      $c = $x->for('inputAddress')->class('form-label')->label('Address')
        . $x->type('text')->class('form-control')->id('inputAddress')->aplaceholder('1234 Main St')->input();
      $p .= $x->col(12)->adiv($c);

      $c = $x->for('inputAddress2')->class('form-label')->label('Address 2')
        . $x->type('text')->class('form-control')->id('inputAddress2')->aplaceholder('Apartment, studio, or floor')->input();
      $p .= $x->col(12)->adiv($c);

      $c = $x->for('inputCity')->class('form-label')->label('City')
        . $x->type('text')->class('form-control')->id('inputCity')->input();
      $p .= $x->col('md-6')->adiv($c);

      $x->selected()->option('Choose...');
      $x->option('...');
      $c = $x->for('inputState')->class('form-label')->label('State')
        . $x->id('inputState')->class('form-select')->select();
      $p .= $x->col('md-4')->adiv($c);

      $c = $x->for('inputZip')->class('form-label')->label('Zip')
        . $x->type('text')->class('form-control')->id('inputZip')->input();
      $p .= $x->col('md-2')->adiv($c);

      $c = $x->class('form-check-input')->type('checkbox')->id('gridCheck')->input()
        . $x->class('form-check-label')->for('gridCheck')->label('Check me out');
      $c = $x->class('form-check')->adiv($c);
      $p .= $x->col(12)->adiv($c);

      $c = $x->type('submit')->cbtn()->cbtn('primary')->button('Sign in');
      $p .= $x->col(12)->adiv($c);

      $p = $x->class('row g-3')->form($p);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputEmail4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Email'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'email'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputEmail4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-6'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputPassword4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Password'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'password'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputPassword4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-6'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputAddress'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Address'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputAddress'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'1234 Main St'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputAddress2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Address 2'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputAddress2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Apartment, studio, or floor'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputCity'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'City'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputCity'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-6'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputState'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'State'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Choose...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputState'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('select')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'gridCheck'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'gridCheck'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Check me out'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Sign in'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('form(')
        . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form class="row g-3">' . PHP_EOL
        . ' <div class="col-md-6">' . PHP_EOL
        . '   <label for="inputEmail4" class="form-label">Email</label>' . PHP_EOL
        . '   <input type="email" class="form-control" id="inputEmail4">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-6">' . PHP_EOL
        . '   <label for="inputPassword4" class="form-label">Password</label>' . PHP_EOL
        . '   <input type="password" class="form-control" id="inputPassword4">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <label for="inputAddress" class="form-label">Address</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <label for="inputAddress2" class="form-label">Address 2</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-6">' . PHP_EOL
        . '   <label for="inputCity" class="form-label">City</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="inputCity">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-4">' . PHP_EOL
        . '   <label for="inputState" class="form-label">State</label>' . PHP_EOL
        . '   <select id="inputState" class="form-select">' . PHP_EOL
        . '     <option selected>Choose...</option>' . PHP_EOL
        . '     <option>...</option>' . PHP_EOL
        . '   </select>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-2">' . PHP_EOL
        . '   <label for="inputZip" class="form-label">Zip</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="inputZip">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <div class="form-check">' . PHP_EOL
        . '     <input class="form-check-input" type="checkbox" id="gridCheck">' . PHP_EOL
        . '     <label class="form-check-label" for="gridCheck">' . PHP_EOL
        . '       Check me out' . PHP_EOL
        . '     </label>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <button type="submit" class="btn btn-primary">Sign in</button>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Complex Gutters', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('horizontalform')->h4('Horizontal Form')
        . $x->p($x->htmlchar('Create horizontal forms with the grid by adding the .row class to form groups and using the .col-*-* classes to specify the width of your labels and controls. Be sure to add .col-form-label to your <label>s as well so they’re vertically centered with their associated form controls.'))
        . $x->p('At times, you maybe need to use margin or padding utilities to create that perfect alignment you need. For example, we’ve removed the padding-top on our stacked radio inputs label to better align the text baseline.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->type('email')->class('form-control')->id('inputEmail3')->input();
      $c = $x->col('sm-10')->adiv($c);
      $c = $x->for('inputEmail3')->col('sm-2')->col('form-label')->label('Email') . $c;
      $p = $x->class('row')->mb(3)->adiv($c);

      $c = $x->type('password')->class('form-control')->id('inputPassword3')->input();
      $c = $x->col('sm-10')->adiv($c);
      $c = $x->for('inputPassword3')->col('sm-2')->col('form-label')->label('Password') . $c;
      $p .= $x->class('row')->mb(3)->adiv($c);

      $c = $x->class('form-check-input')->type('radio')->name('gridRadios')->id('gridRadios1')->value('option1')->checked()->input()
        . $x->class('form-check-label')->for('gridRadios1')->label('First radio');
      $c = $x->class('form-check')->adiv($c);
      $d = $x->class('form-check-input')->type('radio')->name('gridRadios')->id('gridRadios2')->value('option2')->input()
        . $x->class('form-check-label')->for('gridRadios2')->label('Second radio');
      $c = $c . $x->class('form-check')->adiv($d);
      html::make()->disabled();
      $d = $x->class('form-check-input')->type('radio')->name('gridRadios')->id('gridRadios3')->value('option3')->input()
        . $x->class('form-check-label')->for('gridRadios3')->label('Thrid disabled radio');
      $c = $c . $x->class('form-check disabled')->adiv($d);
      $c = $x->col('sm-10')->adiv($c);
      $c = $x->col('form-label')->col('sm-2')->pt('0')->legend('Radios') . $c;
      $p .= $x->class('row')->mb(3)->fieldset($c);

      $c = $x->class('form-check-input')->type('checkbox')->id('gridCheck1')->input()
        . $x->class('form-check-label')->for('gridCheck1')->label('Example checkbox');
      $c = $x->class('form-check')->adiv($c);
      $c = $x->col('sm-10')->offset('sm-2')->adiv($c);
      $p .= $x->class('row')->mb(3)->adiv($c);

      $p .= $x->type('submit')->cbtn()->cbtn('primary')->button('Sign in');

      $p = $x->form($p);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputEmail3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Email'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'email'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputEmail3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-10'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inputPassword3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Password'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'password'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputPassword3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-10'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'gridRadios'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'gridRadios1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'option1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('checked()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'gridRadios1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'First radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('fieldDiv') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('danger')->span('input')
        . ' . '
        . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'gridRadios'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'gridRadios2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'option2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'gridRadios2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Second radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('fieldDiv') . ' .= '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('danger')->span('input')
        . ' . '
        . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'gridRadios'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'gridRadios3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'option3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'gridRadios3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Third disabled radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('fieldDiv') . ' .= '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('danger')->span('input')
        . ' . '
        . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('fieldDiv') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-10'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('fieldDiv')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('fieldDiv') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('pt(')
        . $x->text('warning')->span("'0'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('legend(')
        . $x->text('warning')->span("'Radios'")
        . $x->text('info')->span(')')
        . ' . '
        . $dollar . $x->text('danger')->span('fieldDiv') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('fieldset(')
        . $dollar . $x->text('danger')->span('fieldDiv')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'gridCheck1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'gridCheck1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Example checkbox'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-10'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('offset(')
        . $x->text('warning')->span("'sm-2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Sign in'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form>' . PHP_EOL
        . ' <div class="row mb-3">' . PHP_EOL
        . '   <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>' . PHP_EOL
        . '   <div class="col-sm-10">' . PHP_EOL
        . '     <input type="email" class="form-control" id="inputEmail3">' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="row mb-3">' . PHP_EOL
        . '   <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>' . PHP_EOL
        . '   <div class="col-sm-10">' . PHP_EOL
        . '     <input type="password" class="form-control" id="inputPassword3">' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <fieldset class="row mb-3">' . PHP_EOL
        . '   <legend class="col-form-label col-sm-2 pt-0">Radios</legend>' . PHP_EOL
        . '   <div class="col-sm-10">' . PHP_EOL
        . '     <div class="form-check">' . PHP_EOL
        . '       <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>' . PHP_EOL
        . '       <label class="form-check-label" for="gridRadios1">' . PHP_EOL
        . '         First radio' . PHP_EOL
        . '       </label>' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '     <div class="form-check">' . PHP_EOL
        . '       <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">' . PHP_EOL
        . '       <label class="form-check-label" for="gridRadios2">' . PHP_EOL
        . '         Second radio' . PHP_EOL
        . '       </label>' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '     <div class="form-check disabled">' . PHP_EOL
        . '       <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>' . PHP_EOL
        . '       <label class="form-check-label" for="gridRadios3">' . PHP_EOL
        . '         Third disabled radio' . PHP_EOL
        . '       </label>' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </fieldset>' . PHP_EOL
        . ' <div class="row mb-3">' . PHP_EOL
        . '   <div class="col-sm-10 offset-sm-2">' . PHP_EOL
        . '     <div class="form-check">' . PHP_EOL
        . '       <input class="form-check-input" type="checkbox" id="gridCheck1">' . PHP_EOL
        . '       <label class="form-check-label" for="gridCheck1">' . PHP_EOL
        . '         Example checkbox' . PHP_EOL
        . '       </label>' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <button type="submit" class="btn btn-primary">Sign in</button>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Horizontal Form', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('horizontalformlabelsizing')->h4('Horizontal Form Label Sizing')
        . $x->p($x->htmlchar('Be sure to use .col-form-label-sm or .col-form-label-lg to your <label>s or <legend>s to correctly follow the size of .form-control-lg and .form-control-sm.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->type('email')->class('form-control form-control-sm')->id('colFormLabelSm')->aplaceholder('col-form-label-sm')->input();
      $c = $x->col('sm-10')->adiv($c);
      $c = $x->for('colFormLabelSm')->col('sm-2')->col('form-label')->col('form-label-sm')->label('Email') . $c;
      $p = $x->class('row')->mb(3)->adiv($c);

      $c = $x->type('email')->class('form-control')->id('colFormLabel')->aplaceholder('col-form-label')->input();
      $c = $x->col('sm-10')->adiv($c);
      $c = $x->for('colFormLabel')->col('sm-2')->col('form-label')->label('Email') . $c;
      $p .= $x->class('row')->mb(3)->adiv($c);

      $c = $x->type('email')->class('form-control from-control-lg')->id('colFormLabelLg')->aplaceholder('col-form-label-lg')->input();
      $c = $x->col('sm-10')->adiv($c);
      $c = $x->for('colFormLabelLg')->col('sm-2')->col('form-label')->col('form-label-lg')->label('Email') . $c;
      $p .= $x->class('row')->adiv($c);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'colFormLabelSm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'form-label-sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Email'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'email'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control form-control-sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'colFormLabelSm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'col-form-label-sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-10'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'colFormLabel'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Email'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'email'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'colFormLabel'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'col-form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-10'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'colFormLabelLg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'form-label-lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Email'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'email'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control form-control-lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'colFormLabelLg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'col-form-label-lg'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-10'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="row mb-3">' . PHP_EOL
        . ' <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>' . PHP_EOL
        . ' <div class="col-sm-10">' . PHP_EOL
        . '   <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="row mb-3">' . PHP_EOL
        . ' <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>' . PHP_EOL
        . ' <div class="col-sm-10">' . PHP_EOL
        . '   <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>' . PHP_EOL
        . '<div class="row">' . PHP_EOL
        . ' <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>' . PHP_EOL
        . ' <div class="col-sm-10">' . PHP_EOL
        . '   <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Horizontal Form Label Sizing', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('columnsizing')->h4('Column Sizing')
        . $x->p('As shown in the previous examples, our grid system allows you to place any number of .cols within a .row. They’ll split the available width equally between them. You may also pick a subset of your columns to take up more or less space, while the remaining .cols equally split the rest, with specific column classes like .col-sm-7.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->type('text')->class('form-control')->aplaceholder('City')->aria('label', 'City')->input();
      $p = $x->col('sm-7')->adiv($c);
      $c = $x->type('text')->class('form-control')->aplaceholder('State')->aria('label', 'State')->input();
      $p .= $x->col('sm')->adiv($c);
      $c = $x->type('text')->class('form-control')->aplaceholder('Zip')->aria('label', 'Zip')->input();
      $p .= $x->col('sm')->adiv($c);
      $p = $x->class('row')->g(3)->adiv($p);
      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'City'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'City'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-7'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'State'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'State'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Zip'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'Zip'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('div(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<div class="row g-3">' . PHP_EOL
        . ' <div class="col-sm-7">' . PHP_EOL
        . '   <input type="text" class="form-control" placeholder="City" aria-label="City">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-sm">' . PHP_EOL
        . '   <input type="text" class="form-control" placeholder="State" aria-label="State">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-sm">' . PHP_EOL
        . '   <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</div>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Column Sizing', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('autosizing')->h4('Auto-sizing')
        . $x->p('The example below uses a flexbox utility to vertically center the contents and changes .col to .col-auto so that your columns only take up as much space as needed. Put another way, the column sizes itself based on the contents.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->visually('hidden')->for('autoSizingInput')->label('Name')
        . $x->type('text')->class('form-control')->id('autoSizingInput')->aplaceholder('Jane Doe')->input();
      $p = $x->col('auto')->adiv($c);

      $c = $x->class('input-group-text')->adiv('@')
        . $x->type('text')->class('form-control')->id('autoSizingInputGroup')->aplaceholder('Username')->input();
      $c = $x->class('input-group')->adiv($c);
      $c = $x->visually('hidden')->for('autoSizingInputGroup')->label('Username') . $c;
      $p .= $x->col('auto')->adiv($c);

      $x->selected()->option('Choose...');
      $x->value(1)->option('One');
      $x->value(2)->option('Two');
      $x->value(3)->option('Three');
      $c = $x->visually('hidden')->for('autoSizingSelect')->label('Preference')
        . $x->class('form-select')->id('autoSizingSelect')->select();
      $p .= $x->col('auto')->adiv($c);

      $c = $x->class('form-check-input')->type('checkbox')->id('autoSizingCheck')->input()
        . $x->class('form-check-label')->for('autoSizingCheck')->label('Remember me');
      $c = $x->class('form-check')->adiv($c);
      $p .= $x->col('auto')->adiv($c);

      $c = $x->type('submit')->cbtn()->cbtn('primary')->button('Submit');
      $p .= $x->col('auto')->adiv($c);

      $p = $x->class('row')->gy(2)->gx(3)->align('items-center')->form($p);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'autoSizingInput'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Name'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text("warning")->span("'autoSizingInput'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Jane Doe'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'autoSizingInputGroup'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'@'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'autoSizingInputGroup'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'autoSizingSelect'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Preference'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Choose...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'autoSizingSelect'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('select')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'autoSizingCheck'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'autoSizingCheck'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Remember me'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Submit'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('gy(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('gx(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'items-center'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form class="row gy-2 gx-3 align-items-center">' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <label class="visually-hidden" for="autoSizingInput">Name</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <label class="visually-hidden" for="autoSizingInputGroup">Username</label>' . PHP_EOL
        . '   <div class="input-group">' . PHP_EOL
        . '     <div class="input-group-text">@</div>' . PHP_EOL
        . '       <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <label class="visually-hidden" for="autoSizingSelect">Preference</label>' . PHP_EOL
        . '   <select class="form-select" id="autoSizingSelect">' . PHP_EOL
        . '     <option selected>Choose...</option>' . PHP_EOL
        . '     <option value="1">One</option>' . PHP_EOL
        . '     <option value="2">Two</option>' . PHP_EOL
        . '     <option value="3">Three</option>' . PHP_EOL
        . '   </select>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <div class="form-check">' . PHP_EOL
        . '     <input class="form-check-input" type="checkbox" id="autoSizingCheck">' . PHP_EOL
        . '     <label class="form-check-label" for="autoSizingCheck">' . PHP_EOL
        . '       Remember me' . PHP_EOL
        . '     </label>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <button type="submit" class="btn btn-primary">Submit</button>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Auto-sizing', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->p('You can then remix that once again with size-specific column classes.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->visually('hidden')->for('specificSizeInputName')->label('Name')
        . $x->type('text')->class('form-control')->id('specificSizeInputName')->aplaceholder('Jane Doe')->input();
      $p = $x->col('sm-3')->adiv($c);

      $c = $x->class('input-group-text')->adiv('@')
        . $x->type('text')->class('form-control')->id('specificSizeInputGroupUsername')->aplaceholder('Username')->input();
      $c = $x->class('input-group')->adiv($c);
      $c = $x->visually('hidden')->for('specificSizeInputGroupUsername')->label('Username') . $c;
      $p .= $x->col('sm-3')->adiv($c);

      $x->selected()->option('Choose...');
      $x->value(1)->option('One');
      $x->value(2)->option('Two');
      $x->value(3)->option('Three');
      $c = $x->visually('hidden')->for('specificSizeSelect')->label('Preference')
        . $x->class('form-select')->id('specificSizeSelect')->select();
      $p .= $x->col('sm-3')->adiv($c);

      $c = $x->class('form-check-input')->type('checkbox')->id('autoSizingCheck2')->input()
        . $x->class('form-check-label')->for('autoSizingCheck2')->label('Remember me');
      $c = $x->class('form-check')->adiv($c);
      $p .= $x->col('auto')->adiv($c);

      $c = $x->type('submit')->cbtn()->cbtn('primary')->button('Submit');
      $p .= $x->col('auto')->adiv($c);

      $p = $x->class('row')->gx(3)->gy(2)->align('items-center')->form($p);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'specificSizeInputName'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Name'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span('text')
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("form-control")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'specificSizeInputName'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Jane Doe'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'specificSizeInputGroupUsername'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'@'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'specificSizeInputGroupUsername'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'specificSizeSelect'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Preference'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Choose...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'specificSizeSelect'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'sm-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'autoSizingCheck2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'autoSizingCheck2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Remember me'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Submit'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'auto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('gx(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('gy(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'items-center'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form class="row gx-3 gy-2 align-items-center">' . PHP_EOL
        . ' <div class="col-sm-3">' . PHP_EOL
        . '   <label class="visually-hidden" for="specificSizeInputName">Name</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="specificSizeInputName" placeholder="Jane Doe">' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-sm-3">' . PHP_EOL
        . '   <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>' . PHP_EOL
        . '   <div class="input-group">' . PHP_EOL
        . '     <div class="input-group-text">@</div>' . PHP_EOL
        . '     <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-sm-3">' . PHP_EOL
        . '   <label class="visually-hidden" for="specificSizeSelect">Preference</label>' . PHP_EOL
        . '   <select class="form-select" id="specificSizeSelect">' . PHP_EOL
        . '     <option selected>Choose...</option>' . PHP_EOL
        . '     <option value="1">One</option>' . PHP_EOL
        . '     <option value="2">Two</option>' . PHP_EOL
        . '     <option value="3">Three</option>' . PHP_EOL
        . '   </select>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <div class="form-check">' . PHP_EOL
        . '     <input class="form-check-input" type="checkbox" id="autoSizingCheck2">' . PHP_EOL
        . '     <label class="form-check-label" for="autoSizingCheck2">' . PHP_EOL
        . '       Remember me' . PHP_EOL
        . '     </label>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-auto">' . PHP_EOL
        . '   <button type="submit" class="btn btn-primary">Submit</button>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Size Specific', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('inlineforms')->h4('Inline Forms')
        . $x->p('Use the .row-cols-* classes to create responsive horizontal layouts. By adding gutter modifier classes, we’ll have gutters in horizontal and vertical directions. On narrow mobile viewports, the .col-12 helps stack the form controls and more. The .align-items-center aligns the form elements to the middle, making the .form-checkbox align properly.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->class('input-group-text')->adiv('@')
        . $x->type('text')->class('form-control')->id('inlineFormInputGroupUsername')->aplaceholder('Username')->input();
      $c = $x->class('input-group')->adiv($c);
      $c = $x->visually('hidden')->for('inlineFormInputGroupUsername')->label('Username') . $c;
      $p = $x->col(12)->adiv($c);

      $x->selected()->option('Choose...');
      $x->value(1)->option('One');
      $x->value(2)->option('Two');
      $x->value(3)->option('Three');
      $c = $x->visually('hidden')->for('inlineFormSelectPref')->label('Preference')
        . $x->class('form-select')->id('inlineFormSelectPref')->select();
      $p .= $x->col(12)->adiv($c);

      $c = $x->class('form-check-input')->type('checkbox')->id('inlineFormCheck')->input()
        . $x->class('form-check-label')->for('inlineFormCheck')->label('Remember me');
      $c = $x->class('form-check')->adiv($c);
      $p .= $x->col(12)->adiv($c);

      $c = $x->type('submit')->cbtn()->cbtn('primary')->button('Submit');
      $p .= $x->col(12)->adiv($c);

      $p = $x->class('row')->g(3)->align('items-center')->form($p);
      $p = $x->class('container')->adiv($p);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inlineFormInputGroupUsername'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'@'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' .= '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inlineFormInputGroupUsername'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('visually(')
        . $x->text('warning')->span("'hidden'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inlineFormSelectPref'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Preference'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Choose...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->'
        . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inlineFormSelectPref'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('select')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inlineFormCheck'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'inlineFormCheck'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Remember me'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Submit'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('align(')
        . $x->text('warning')->span("'items-center'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form class="row g-3 align-items-center">' . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>' . PHP_EOL
        . '   <div class="input-group">' . PHP_EOL
        . '     <div class="input-group-text">@</div>' . PHP_EOL
        . '     <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>' . PHP_EOL
        . '   <select class="form-select" id="inlineFormSelectPref">' . PHP_EOL
        . '     <option selected>Choose...</option>' . PHP_EOL
        . '     <option value="1">One</option>' . PHP_EOL
        . '     <option value="2">Two</option>' . PHP_EOL
        . '     <option value="3">Three</option>' . PHP_EOL
        . '   </select>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <div class="form-check">' . PHP_EOL
        . '     <input class="form-check-input" type="checkbox" id="inlineFormCheck">' . PHP_EOL
        . '     <label class="form-check-label" for="inlineFormCheck">' . PHP_EOL
        . '       Remember me' . PHP_EOL
        . '     </label>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <button type="submit" class="btn btn-primary">Submit</button>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Inline Forms', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Layout');
      $content .= $x->text('center')->lead('Give your forms some structure—from inline to horizontal to custom grid implementations—with our form layout options.');
      $content .= $br;
      $content .= $x->container();

    } elseif ($page == 'validation') {

      $x->savejs(
        "
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.prototype.slice.call(forms)
            .forEach(function (form) {
              form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
                }

                form.classList.add('was-validated')
              }, false)
            })
        })()
        "
      );

      $p = $x->p('We are aware that currently the client-side custom validation styles and tooltips are not accessible, since they are not exposed to assistive technologies. While we work on a solution, we’d recommend either using the server-side option or the default browser validation method.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('howitworks')->h4('How It Works')
        . $x->p('Here’s how form validation works with Bootstrap:');
      $x->text('center')->div($p);
      $x->row();

      $x->li($x->htmlchar('HTML form validation is applied via CSS’s two pseudo-classes, :invalid and :valid. It applies to <input>, <select>, and <textarea> elements.'));
      $x->li($x->htmlchar('Bootstrap scopes the :invalid and :valid styles to parent .was-validated class, usually applied to the <form>. Otherwise, any required field without a value shows up as invalid on page load. This way, you may choose when to activate them (typically after form submission is attempted).'));
      $x->li($x->htmlchar('To reset the appearance of the form (for instance, in the case of dynamic form submissions using AJAX), remove the .was-validated class from the <form> again after submission.'));
      $x->li('As a fallback, .is-invalid and .is-valid classes may be used instead of the pseudo-classes for server-side validation. They do not require a .was-validated parent class.');
      $x->li($x->htmlchar('Due to constraints in how CSS works, we cannot (at present) apply styles to a <label> that comes before a form control in the DOM without the help of custom JavaScript.'));
      $x->li('All modern browsers support the constraint validation API, a series of JavaScript methods for validating form controls.');
      $x->li('Feedback messages may utilize the browser defaults (different for each browser, and unstylable via CSS) or our custom feedback styles with additional HTML and CSS.');
      $x->li('You may provide custom validity messages with setCustomValidity in JavaScript.');
      $x->div($x->ul());
      $x->row();

      $p = $x->p('With that in mind, consider the following demos for our custom form validation styles, optional server-side classes, and browser defaults.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('customstyles')->h4('Custom Styles')
        . $x->p($x->htmlchar('For custom Bootstrap form validation messages, you’ll need to add the novalidate boolean attribute to your <form>. This disables the browser default feedback tooltips, but still provides access to the form validation APIs in JavaScript. Try to submit the form below; our JavaScript will intercept the submit button and relay feedback to you. When attempting to submit, you’ll see the :invalid and :valid styles applied to your form controls.'))
        . $x->p($x->htmlchar('Custom feedback styles apply custom colors, borders, focus styles, and background icons to better communicate feedback. Background icons for <select>s are only available with .form-select, and not .form-control.'));
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->for('validationCustom01')->class('form-label')->label('First name')
        . $x->type('text')->class('form-control')->id('validationCustom01')->value('Mark')->required()->input()
        . $x->valid('feedback')->adiv('Looks good!');
      $p = $x->col('md-4')->adiv($c);

      $c = $x->for('validationCustom02')->class('form-label')->label('Last name')
        . $x->type('text')->class('form-control')->id('validationCustom02')->value('Otto')->required()->input()
        . $x->valid('feedback')->adiv('Looks good!');
      $p .= $x->col('md-4')->adiv($c);

      $c = $x->class('input-group-text')->id('inputGroupPrepend')->span('@')
        . $x->type('text')->class('form-control')->id('validationCustomUsername')->aria('describedby', 'inputGroupPrepend')->required()->input()
        . $x->invalid('feedback')->adiv('Please choose a username.');
      $c = $x->class('input-group')->has('validation')->adiv($c);
      $c = $x->for('validationCustomUsername')->class('form-label')->label('Username') . $c;
      $p .= $x->col('md-4')->adiv($c);

      $c = $x->for('validationCustom03')->class('form-label')->label('City')
        . $x->type('text')->class('form-control')->id('validationCustom03')->required()->input()
        . $x->invalid('feedback')->adiv('Please provide a valid city.');
      $p .= $x->col('md-6')->adiv($c);

      html::make()->disabled();
      $x->selected()->attribute('value')->option('Choose...');
      $x->option('...');
      $c = $x->for('validationCustom04')->class('form-label')->label('State')
        . $x->class('form-select')->id('validationCustom04')->required()->select()
        . $x->invalid('feedback')->adiv('Please select a valid state.');
      $p .= $x->col('md-3')->adiv($c);

      $c = $x->for('validationCustom05')->class('form-label')->label('Zip')
        . $x->type('text')->class('form-control')->id('validationCustom05')->required()->input()
        . $x->invalid('feedback')->adiv('Please provide a valid zip.');
      $p .= $x->col('md-3')->adiv($c);

      $c = $x->class('form-check-input')->type('checkbox')->id('invalidCheck')->required()->input()
        . $x->class('form-check-label')->for('invalidCheck')->label('Agree to terms and conditions')
        . $x->invalid('feedback')->adiv('You must agree before submitting.');
      $c = $x->class('form-check')->adiv($c);
      $p .= $x->col(12)->adiv($c);

      $c = $x->cbtn()->cbtn('primary')->type('submit')->button('Submit form');
      $p .= $x->col(12)->adiv($c);

      $p = $x->class('row')->g(3)->needs('validation')->novalidate()->form($p);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationCustom01'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'First name'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationCustom01'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Mark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('valid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Looks good!'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationCustom02'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Last name'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationCustom02'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Otto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('valid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Looks good!'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationCustomUsername'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupPrepend'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'@'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationCustomUsername'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'inputGroupPrepend'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Please choose a username.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('has(')
        . $x->text('warning')->span("'validation'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationCustom03'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'City'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationCustom03'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Please provide a valid city.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-6'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationCustom04'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'State'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("' '")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Choose...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationCustom04'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Please provide a valid zip.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('select')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'invalidCheck'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("' '")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'invalidCheck'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'invalidCheck'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Agree to terms and conditions'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'You must agree before submitting.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Submit form'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('needs(')
        . $x->text('warning')->span("'validation'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('novalidate()')
        . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form class="row g-3 needs-validation" novalidate>' . PHP_EOL
        . ' <div class="col-md-4">' . PHP_EOL
        . '   <label for="validationCustom01" class="form-label">First name</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="validationCustom01" value="Mark" required>' . PHP_EOL
        . '   <div class="valid-feedback">' . PHP_EOL
        . '     Looks good!' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-4">' . PHP_EOL
        . '   <label for="validationCustom02" class="form-label">Last name</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="validationCustom02" value="Otto" required>' . PHP_EOL
        . '   <div class="valid-feedback">' . PHP_EOL
        . '     Looks good!' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-4">' . PHP_EOL
        . '   <label for="validationCustomUsername" class="form-label">Username</label>' . PHP_EOL
        . '   <div class="input-group has-validation">' . PHP_EOL
        . '     <span class="input-group-text" id="inputGroupPrepend">@</span>' . PHP_EOL
        . '     <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>' . PHP_EOL
        . '     <div class="invalid-feedback">' . PHP_EOL
        . '       Please choose a username.' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-6">' . PHP_EOL
        . '   <label for="validationCustom03" class="form-label">City</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="validationCustom03" required>' . PHP_EOL
        . '   <div class="invalid-feedback">' . PHP_EOL
        . '     Please provide a valid city.' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-3">' . PHP_EOL
        . '   <label for="validationCustom04" class="form-label">State</label>' . PHP_EOL
        . '   <select class="form-select" id="validationCustom04" required>' . PHP_EOL
        . '     <option selected disabled value="">Choose...</option>' . PHP_EOL
        . '     <option>...</option>' . PHP_EOL
        . '   </select>' . PHP_EOL
        . '   <div class="invalid-feedback">' . PHP_EOL
        . '     Please select a valid state.' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-3">' . PHP_EOL
        . '   <label for="validationCustom05" class="form-label">Zip</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="validationCustom05" required>' . PHP_EOL
        . '   <div class="invalid-feedback">' . PHP_EOL
        . '     Please provide a valid zip.' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <div class="form-check">' . PHP_EOL
        . '     <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>' . PHP_EOL
        . '     <label class="form-check-label" for="invalidCheck">' . PHP_EOL
        . '       Agree to terms and conditions' . PHP_EOL
        . '     </label>' . PHP_EOL
        . '     <div class="invalid-feedback">' . PHP_EOL
        . '       You must agree before submitting.' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <button class="btn btn-primary" type="submit">Submit form</button>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Custom Styles', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $xx . '->' . $x->text('info')->span('savejs(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '// Example starter JavaScript for disabling form submissions if there are invalid fields' . PHP_EOL
        . '(function () {' . PHP_EOL
        . "'use strict'" . PHP_EOL
        . PHP_EOL
        . '// Fetch all the forms we want to apply custom Bootstrap validation styles to' . PHP_EOL
        . "var forms = document.querySelectorAll('.needs-validation')" . PHP_EOL
        . PHP_EOL
        . '// Loop over them and prevent submission' . PHP_EOL
        . 'Array.prototype.slice.call(forms)' . PHP_EOL
        . ' .forEach(function (form) {' . PHP_EOL
        . "   form.addEventListener('submit', function (event) {" . PHP_EOL
        . '     if (!form.checkValidity()) {' . PHP_EOL
        . '       event.preventDefault()' . PHP_EOL
        . '       event.stopPropagation()' . PHP_EOL
        . '     }' . PHP_EOL
        . PHP_EOL
        . "     form.classList.add('was-validated')" . PHP_EOL
        . '   }, false)' . PHP_EOL
        . ' })' . PHP_EOL
        . '})()' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Javascript', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('browserdefaults')->h4('Browser defaults')
        . $x->p('Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly different style of feedback.')
        . $x->p('While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->for('validationDefault01')->class('form-label')->label('First name')
        . $x->type('text')->class('form-control')->id('validationDefault01')->value('Mark')->required()->input();
      $p = $x->col('md-4')->adiv($c);

      $c = $x->for('validationDefault02')->class('form-label')->label('Last name')
        . $x->type('text')->class('form-control')->id('validationDefault02')->value('Otto')->required()->input();
      $p .= $x->col('md-4')->adiv($c);

      $c = $x->class('input-group-text')->id('inputGroupPrepend2')->span('@')
        . $x->type('text')->class('form-control')->id('validationDefaultUsername')->aria('describedby', 'inputGroupPrepend2')->required()->input();
      $c = $x->class('input-group')->adiv($c);
      $c = $x->for('validationDefaultUsername')->class('form-label')->label('Username') . $c;
      $p .= $x->col('md-4')->adiv($c);

      $c = $x->for('validationDefault03')->class('form-label')->label('City')
        . $x->type('text')->class('form-control')->id('validationDefault03')->required()->input();
      $p .= $x->col('md-6')->adiv($c);

      html::make()->disabled();
      $x->selected()->value(' ')->option('Choose...');
      $x->option('...');
      $c = $x->for('validationDefault04')->class('form-label')->label('State')
        . $x->class('form-select')->id('validationDefault04')->required()->input();
      $p .= $x->col('md-3')->adiv($c);

      $c = $x->for('validationDefault05')->class('form-label')->label('Zip')
        . $x->type('text')->class('form-control')->id('validationDefault05')->required()->input();
      $p .= $x->col('md-3')->adiv($c);

      $c = $x->class('form-check-input')->type('checkbox')->value(' ')->id('invalidCheck2')->required()->input()
        . $x->class('form-check-label')->for('invalidCheck2')->label('Agree to terms and conditions');
      $c = $x->class('form-check')->adiv($c);
      $p .= $x->col(12)->adiv($c);

      $c = $x->cbtn()->cbtn('primary')->type('submit')->button('Submit form');
      $p .= $x->col(12)->adiv($c);

      $p = $x->class('row')->g(3)->form($p);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationDefault01'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'First name'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationDefault01'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Mark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationDefault02'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Last name'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationDefault02'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Otto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationDefaultUsername'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupPrepend2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span('@')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationDefaultUsername'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'inputGroupPrepend2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationDefault03'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'City'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationDefault03'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-6'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationDefault04'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'State'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("' '")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Choose...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationDefault04'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('select')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationDefault05'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Zip'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationDefault05'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("' '")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'invlaidCheck2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'invalidCheck2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Agree to terms and conditions'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Submit form'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form class="row g-3">' . PHP_EOL
        . ' <div class="col-md-4">' . PHP_EOL
        . '   <label for="validationDefault01" class="form-label">First name</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="validationDefault01" value="Mark" required>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-4">' . PHP_EOL
        . '   <label for="validationDefault02" class="form-label">Last name</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="validationDefault02" value="Otto" required>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-4">' . PHP_EOL
        . '   <label for="validationDefaultUsername" class="form-label">Username</label>' . PHP_EOL
        . '   <div class="input-group">' . PHP_EOL
        . '     <span class="input-group-text" id="inputGroupPrepend2">@</span>' . PHP_EOL
        . '     <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-6">' . PHP_EOL
        . '   <label for="validationDefault03" class="form-label">City</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="validationDefault03" required>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-3">' . PHP_EOL
        . '   <label for="validationDefault04" class="form-label">State</label>' . PHP_EOL
        . '   <select class="form-select" id="validationDefault04" required>' . PHP_EOL
        . '     <option selected disabled value="">Choose...</option>' . PHP_EOL
        . '     <option>...</option>' . PHP_EOL
        . '   </select>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-3">' . PHP_EOL
        . '   <label for="validationDefault05" class="form-label">Zip</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="validationDefault05" required>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <div class="form-check">' . PHP_EOL
        . '     <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>' . PHP_EOL
        . '     <label class="form-check-label" for="invalidCheck2">' . PHP_EOL
        . '       Agree to terms and conditions' . PHP_EOL
        . '     </label>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <button class="btn btn-primary" type="submit">Submit form</button>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Browser Defaults', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('serverside')->h4('Server Side')
        . $x->p('We recommend using client-side validation, but in case you require server-side validation, you can indicate invalid and valid form fields with .is-invalid and .is-valid. Note that .invalid-feedback is also supported with these classes.')
        . $x->p('For invalid fields, ensure that the invalid feedback/error message is associated with the relevant form field using aria-describedby (noting that this attribute allows more than one id to be referenced, in case the field already points to additional form text).')
        . $x->p('To fix issues with border radii, input groups require an additional .has-validation class.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->for('validationServer01')->class('form-label')->label('First name')
        . $x->type('text')->class('form-control')->is('valid')->id('validationServer01')->value('Mark')->required()->input()
        . $x->valid('feedback')->adiv('Looks good!');
      $p = $x->col('md-4')->adiv($c);

      $c = $x->for('validationServer02')->class('form-label')->label('Last name')
        . $x->type('text')->class('form-control')->is('valid')->id('validationServer02')->value('Otto')->required()->input()
        . $x->valid('feedback')->adiv('Looks good!');
      $p .= $x->col('md-4')->adiv($c);

      $c = $x->class('input-group-text')->id('inputGroupPrepend3')->span('@')
        . $x->type('text')->class('form-control')->is('invalid')->id('validationServerUsername')->aria('describedby', 'inputGroupPrepend3 validationServerUsernameFeedback')->required()->input()
        . $x->id('validationServerUsernameFeedback')->invalid('feedback')->adiv('Please choose a username.');
      $c = $x->class('input-group')->has('validation')->adiv($c);
      $c = $x->for('validationServerUsername')->class('form-label')->label('Username') . $c;
      $p .= $x->col('md-4')->adiv($c);

      $c = $x->for('validationServer03')->class('form-label')->label('City')
        . $x->type('text')->class('form-control')->is('invalid')->id('validationServer03')->aria('describedby', 'validationServer03Feedback')->required()->input()
        . $x->id('validationServer03Feedback')->invalid('feedback')->adiv('Please provide a valid city.');
      $p .= $x->col('md-6')->adiv($c);

      html::make()->disabled();
      $x->selected()->value(' ')->option('Choose...');
      $x->option('...');
      $c = $x->for('validationServer04')->class('form-label')->label('State')
        . $x->class('form-select')->is('invalid')->id('validationServer04')->aria('describedby', 'validationServer04Feedback')->required()->select()
        . $x->id('validationServer04Feedback')->invalid('feedback')->adiv('Please select a valid state.');
      $p .= $x->col('md-3')->adiv($c);

      $c = $x->for('validationServer05')->class('form-label')->label('Zip')
        . $x->type('text')->class('form-control')->is('invalid')->id('validationServer05')->aria('describedby', 'validationServer05Feedback')->required()->input()
        . $x->id('validationServer05Feedback')->invalid('feedback')->adiv('Please provide a valid zip.');
      $p .= $x->col('md-3')->adiv($c);

      $c = $x->class('form-check-input')->is('invalid')->type('checkbox')->value(' ')->id('invalidCheck3')->aria('describedby', 'invalidCheck3Feedback')->required()->input()
        . $x->class('form-check-label')->for('invalidCheck3')->label('Agree to terms and conditions')
        . $x->id('invalidCheck3Feedback')->invalid('feedback')->adiv('You must agree before submitting.');
      $c = $x->class('form-check')->adiv($c);
      $p .= $x->col(12)->adiv($c);

      $c = $x->cbtn()->cbtn('primary')->type('submit')->button('Submit form');
      $p .= $x->col(12)->adiv($c);

      $p = $x->class('row')->g(3)->form($p);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationServer01'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'First name'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('is(')
        . $x->text('warning')->span("'valid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationServer01'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Mark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('valid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Looks good!'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationServer02'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Last name'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('is(')
        . $x->text('warning')->span("'valid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationServer02'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Otto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('valid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Looks good!'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationServerUsername'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'inputGroupPrepend3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'@'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('is(')
        . $x->text('warning')->span("'invalid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationServerUsername'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'inputGroupPrepend3 validationServerUsernameFeedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationServerUsernameFeedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Please choose a username.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('has(')
        . $x->text('warning')->span("'validation'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationServer03'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'City'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('is(')
        . $x->text('warning')->span("'invalid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationServer03'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'validationServer03Feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationServer03Feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Please provide a valid city.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-6'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationServer04'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'State'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("' '")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Choose...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('is(')
        . $x->text('warning')->span("'invalid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationServer04'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'validationServer04Feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationServer04Feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Please select a valid state.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('select')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationServer05'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Zip'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('is(')
        . $x->text('warning')->span("'invalid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationServer05'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'validationServer05Feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationServer05Feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Please provide a valid zip.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('zip')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('is(')
        . $x->text('warning')->span("'invalid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("' '")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'invalidCheck3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', 'invalidCheck3Feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'invalidCheck3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Agree to terms and conditions'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'invalidCheck3Feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'You must agree before submitting.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Submit form'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form class="row g-3">' . PHP_EOL
        . ' <div class="col-md-4">' . PHP_EOL
        . '   <label for="validationServer01" class="form-label">First name</label>' . PHP_EOL
        . '   <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>' . PHP_EOL
        . '   <div class="valid-feedback">' . PHP_EOL
        . '     Looks good!' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-4">' . PHP_EOL
        . '   <label for="validationServer02" class="form-label">Last name</label>' . PHP_EOL
        . '   <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>' . PHP_EOL
        . '   <div class="valid-feedback">' . PHP_EOL
        . '     Looks good!' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-4">' . PHP_EOL
        . '   <label for="validationServerUsername" class="form-label">Username</label>' . PHP_EOL
        . '   <div class="input-group has-validation">' . PHP_EOL
        . '     <span class="input-group-text" id="inputGroupPrepend3">@</span>' . PHP_EOL
        . '     <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>' . PHP_EOL
        . '     <div id="validationServerUsernameFeedback" class="invalid-feedback">' . PHP_EOL
        . '       Please choose a username.' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-6">' . PHP_EOL
        . '   <label for="validationServer03" class="form-label">City</label>' . PHP_EOL
        . '   <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>' . PHP_EOL
        . '   <div id="validationServer03Feedback" class="invalid-feedback">' . PHP_EOL
        . '     Please provide a valid city.' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-3">' . PHP_EOL
        . '   <label for="validationServer04" class="form-label">State</label>' . PHP_EOL
        . '   <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>' . PHP_EOL
        . '     <option selected disabled value="">Choose...</option>' . PHP_EOL
        . '     <option>...</option>' . PHP_EOL
        . '   </select>' . PHP_EOL
        . '   <div id="validationServer04Feedback" class="invalid-feedback">' . PHP_EOL
        . '     Please select a valid state.' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-3">' . PHP_EOL
        . '   <label for="validationServer05" class="form-label">Zip</label>' . PHP_EOL
        . '   <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>' . PHP_EOL
        . '   <div id="validationServer05Feedback" class="invalid-feedback">' . PHP_EOL
        . '     Please provide a valid zip.' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <div class="form-check">' . PHP_EOL
        . '     <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>' . PHP_EOL
        . '     <label class="form-check-label" for="invalidCheck3">' . PHP_EOL
        . '       Agree to terms and conditions' . PHP_EOL
        . '     </label>' . PHP_EOL
        . '     <div id="invalidCheck3Feedback" class="invalid-feedback">' . PHP_EOL
        . '       You must agree before submitting.' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <button class="btn btn-primary" type="submit">Submit form</button>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Server Side', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('supported')->h4('Supported Elements')
        . $x->p('Validation styles are available for the following form controls and components:');
      $x->text('center')->div($p);
      $x->row();

      $x->li($x->htmlchar('<input>s and <textarea>s with .form-control (including up to one .form-control in input groups)'));
      $x->li($x->htmlchar('<select>s with .form-select'));
      $x->li('.form-checks');
      $x->div($x->ul());
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->for('validationTextarea')->class('form-label')->label('Textarea')
        . $x->class('form-control')->is('invalid')->id('validationTextarea')->aplaceholder('Required example textarea')->required()->textarea()
        . $x->invalid('feedback')->adiv('Please enter a message in the textarea.');
      $p = $x->mb(3)->adiv($c);

      $c = $x->type('checkbox')->class('form-check-input')->id('validationFormCheck1')->required()->input()
        . $x->class('form-check-label')->for('validationFormCheck1')->label('Check this checkbox')
        . $x->invalid('feedback')->adiv('Example invalid feedback text');
      $p .= $x->class('form-check')->mb(3)->adiv($c);

      $c = $x->type('radio')->class('form-check-input')->id('validationFormCheck2')->name('radio-stacked')->required()->input()
        . $x->class('form-check-label')->for('validationFormCheck2')->label('Toggle this radio');
      $p .= $x->class('form-check')->adiv($c);

      $c = $x->type('radio')->class('form-check-input')->id('validationFormCheck3')->name('radio-stacked')->required()->input()
        . $x->class('form-check-label')->for('validationFormCheck3')->label('Or toggle this other radio')
        . $x->invalid('feedback')->adiv('More example invalid feedback text');
      $p .= $x->class('form-check')->mb(3)->adiv($c);

      $x->attribute('value')->option('Open this select menu');
      $x->value(1)->option('One');
      $x->value(2)->option('Two');
      $x->value(3)->option('Three');
      $c = $x->class('form-select')->required()->aria('label', 'select example')->select()
        . $x->invalid('feedback')->adiv('Example invalid form file feedback');
      $p .= $x->mb(3)->adiv($c);

      $c = $x->type('file')->class('form-control')->aria('label', 'file example')->required()->input()
        . $x->invalid('feedback')->adiv('Example invalid form file feedback');
      $p .= $x->mb(3)->adiv($c);

      html::make()->disabled();
      $c = $x->cbtn()->cbtn('primary')->type('submit')->button('Submit form');
      $p .= $x->mb(3)->adiv($c);

      $p = $x->was('validated')->form($p);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationTextarea'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Textarea'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('textarea') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('is(')
        . $x->text('warning')->span("'invalid'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationTextarea'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aplaceholder(')
        . $x->text('warning')->span("'Required example textarea'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('textarea()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Please enter a message in the textarea.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('textarea')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'checkbox'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationFormCheck1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationFormCheck1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Check this checkbox'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Example invalid feedback text'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationFormCheck2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'radio-stacked'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationFormCheck2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Toggle this radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'radio'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-input'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationFormCheck3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('name(')
        . $x->text('warning')->span("'radio-stacked'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationFormCheck3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Or toggle this orther radio'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'More example invalid feedback text'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-check'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('attribute(')
        . $x->text('warning')->span("'value'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Open this select menu'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'1'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'One'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'2'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Two'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Three'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'select example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Example invalid select feedback'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('select')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'file'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'label', 'file example'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'feedback'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Example invlaid form file feedback'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Submit form'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('mb(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('was(')
        . $x->text('warning')->span("'validated'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form class="was-validated">' . PHP_EOL
        . ' <div class="mb-3">' . PHP_EOL
        . '   <label for="validationTextarea" class="form-label">Textarea</label>' . PHP_EOL
        . '   <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>' . PHP_EOL
        . '   <div class="invalid-feedback">' . PHP_EOL
        . '     Please enter a message in the textarea.' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . PHP_EOL
        . ' <div class="form-check mb-3">' . PHP_EOL
        . '   <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>' . PHP_EOL
        . '   <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>' . PHP_EOL
        . '   <div class="invalid-feedback">Example invalid feedback text</div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . PHP_EOL
        . ' <div class="form-check">' . PHP_EOL
        . '   <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>' . PHP_EOL
        . '   <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="form-check mb-3">' . PHP_EOL
        . '   <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>' . PHP_EOL
        . '   <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>' . PHP_EOL
        . '   <div class="invalid-feedback">More example invalid feedback text</div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . PHP_EOL
        . ' <div class="mb-3">' . PHP_EOL
        . '   <select class="form-select" required aria-label="select example">' . PHP_EOL
        . '     <option value="">Open this select menu</option>' . PHP_EOL
        . '     <option value="1">One</option>' . PHP_EOL
        . '     <option value="2">Two</option>' . PHP_EOL
        . '     <option value="3">Three</option>' . PHP_EOL
        . '   </select>' . PHP_EOL
        . '   <div class="invalid-feedback">Example invalid select feedback</div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . PHP_EOL
        . ' <div class="mb-3">' . PHP_EOL
        . '   <input type="file" class="form-control" aria-label="file example" required>' . PHP_EOL
        . '   <div class="invalid-feedback">Example invalid form file feedback</div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . PHP_EOL
        . ' <div class="mb-3">' . PHP_EOL
        . '   <button class="btn btn-primary" type="submit" disabled>Submit form</button>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Supported Elements', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $p = $x->id('tooltips')->h4('Tooltips')
        . $x->p('If your form layout allows it, you can swap the .{valid|invalid}-feedback classes for .{valid|invalid}-tooltip classes to display validation feedback in a styled tooltip. Be sure to have a parent with position: relative on it for tooltip positioning. In the example below, our column classes have this already, but your project may require an alternative setup.');
      $x->text('center')->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $c = $x->for('validationTooltip01')->class('form-label')->label('First name')
        . $x->type('text')->class('form-control')->id('validationTooltip01')->value('Mark')->required()->input()
        . $x->valid('tooltip')->adiv('Looks good!');
      $p = $x->col('md-4')->position('relative')->adiv($c);

      $c = $x->for('validationTooltip02')->class('form-label')->label('Last name')
        . $x->type('text')->class('form-control')->id('validationTooltip02')->value('Otto')->required()->input()
        . $x->valid('tooltip')->adiv('Looks good!');
      $p .= $x->col('md-4')->position('relative')->adiv($c);

      $c = $x->class('input-group-text')->id('validationTooltipUsernamePrepend')->span('@')
        . $x->type('text')->class('form-control')->id('validationTooltipUsername')->aria('describedby', 'validationTooltipUsernamePrepend')->required()->input()
        . $x->invalid('tooltip')->adiv('Please choose a unique and valid username.');
      $c = $x->class('input-group')->has('validation')->adiv($c);
      $c = $x->for('validationTooltipUsername')->class('form-label')->label('Username') . $c;
      $p .= $x->col('md-4')->position('relative')->adiv($c);

      $c = $x->for('validationTooltip03')->class('form-label')->label('City')
        . $x->type('text')->class('form-control')->id('validationTooltip03')->required()->input()
        . $x->invalid('tooltip')->adiv('Please provide a valid city.');
      $p .= $x->col('md-6')->position('relative')->adiv($c);

      $c = $x->for('validationTooltip04')->class('form-label')->label('State');
      html::make()->disabled();
      $x->selected()->attribute('value')->option('Choose...');
      $x->option('...');
      $c .= $x->class('form-select')->id('validationTooltip04')->required()->select()
        . $x->invalid('tooltip')->adiv('Please select a valid state.');
      $p .= $x->col('md-3')->position('relative')->adiv($c);

      $c = $x->for('validationTooltip05')->class('form-label')->label('Zip')
        . $x->type('text')->class('form-control')->id('validationTooltip05')->required()->input()
        . $x->invalid('tooltip')->adiv('Please provide a valid zip.');
      $p .= $x->col('md-3')->position('relative')->adiv($c);

      $c = $x->cbtn()->cbtn('primary')->type('submit')->button('Submit form');
      $p .= $x->col('md-3')->position('relative')->adiv($c);

      $p = $x->class('row')->g(3)->needs('validation')->novalidate()->form($p);

      $x->border()->pad(3)->div($p);
      $x->row();

      $x->div($br);
      $x->row();

      $p = $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationTooltip01'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'First name'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationTooltip01'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Mark'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('valid(')
        . $x->text('warning')->span("'tooltip'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("''Looks good!")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' = '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationTooltip02'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Last name'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationTooltip02'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('value(')
        . $x->text('warning')->span("'Otto'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('valid(')
        . $x->text('warning')->span("'tooltip'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("''Looks good!")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationTooltipUsername'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Username'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('span') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group-text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationTooltipUsernamePrepend'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('span(')
        . $x->text('warning')->span("'@'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationTooltipUsernamePrepend'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('aria(')
        . $x->text('warning')->span("'describedby', validationTooltipUsernamePrepend")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'tooltip'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Please choose a unique and valid username.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'input-group'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('has(')
        . $x->text('warning')->span("'validation'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('span')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-4'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationTooltip03'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'City'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationTooltip03'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'tooltip'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Please provide a valid city.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-6'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationTooltip04'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'State'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $x->text('warning')->span('html') . '::'
        . $x->text('info')->span('make()')
        . '->' . $x->text('info')->span('disabled()') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('selected()')
        . '->' . $x->text('info')->span('attribute(')
        . $x->text('warning')->span("'value'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'Choose...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('option(')
        . $x->text('warning')->span("'...'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('select') . ' = '
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-select'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationTooltip04'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('select()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'tooltip'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Please select a valid state.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('select')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('label') . ' = '
        . $xx . '->' . $x->text('info')->span('for(')
        . $x->text('warning')->span("'validationTooltip05'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-label'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('label(')
        . $x->text('warning')->span("'Zip'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('input') . ' = '
        . $xx . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'text'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'form-control'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('id(')
        . $x->text('warning')->span("'validationTooltip05'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('required()')
        . '->' . $x->text('info')->span('input()') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('div') . ' = '
        . $xx . '->' . $x->text('info')->span('invalid(')
        . $x->text('warning')->span("'tooltip'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $x->text('warning')->span("'Please provide a valid zip.'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'md-3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('position(')
        . $x->text('warning')->span("'relative'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('label')
        . ' . '
        . $dollar . $x->text('danger')->span('input')
        . ' . '
        . $dollar . $x->text('danger')->span('div')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $dollar . $x->text('danger')->span('button') . ' = '
        . $xx . '->' . $x->text('info')->span('cbtn()')
        . '->' . $x->text('info')->span('cbtn(')
        . $x->text('warning')->span("'primary'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('type(')
        . $x->text('warning')->span("'submit'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('button(')
        . $x->text('warning')->span("'Submit form'")
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . $dollar . $x->text('danger')->span('divs') . ' .= '
        . $xx . '->' . $x->text('info')->span('col(')
        . $x->text('warning')->span("'12'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('adiv(')
        . $dollar . $x->text('danger')->span('button')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL
        . $xx . '->' . $x->text('info')->span('class(')
        . $x->text('warning')->span("'row'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('g(')
        . $x->text('warning')->span("'3'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('needs(')
        . $x->text('warning')->span("'validation'")
        . $x->text('info')->span(')')
        . '->' . $x->text('info')->span('novalidate()')
        . '->' . $x->text('info')->span('form(')
        . $dollar . $x->text('danger')->span('divs')
        . $x->text('info')->span(')') . $colon
        . PHP_EOL
        . PHP_EOL;
      $p .= $x->htmlchar(
        '<form class="row g-3 needs-validation" novalidate>' . PHP_EOL
        . ' <div class="col-md-4 position-relative">' . PHP_EOL
        . '   <label for="validationTooltip01" class="form-label">First name</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>' . PHP_EOL
        . '   <div class="valid-tooltip">' . PHP_EOL
        . '     Looks good!' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-4 position-relative">' . PHP_EOL
        . '   <label for="validationTooltip02" class="form-label">Last name</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>' . PHP_EOL
        . '   <div class="valid-tooltip">'
        . '     Looks good!' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-4 position-relative">' . PHP_EOL
        . '   <label for="validationTooltipUsername" class="form-label">Username</label>' . PHP_EOL
        . '   <div class="input-group has-validation">' . PHP_EOL
        . '     <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>' . PHP_EOL
        . '     <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>' . PHP_EOL
        . '     <div class="invalid-tooltip">' . PHP_EOL
        . '       Please choose a unique and valid username.' . PHP_EOL
        . '     </div>' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-6 position-relative">' . PHP_EOL
        . '   <label for="validationTooltip03" class="form-label">City</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="validationTooltip03" required>' . PHP_EOL
        . '   <div class="invalid-tooltip">' . PHP_EOL
        . '     Please provide a valid city.' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-3 position-relative">' . PHP_EOL
        . '   <label for="validationTooltip04" class="form-label">State</label>' . PHP_EOL
        . '   <select class="form-select" id="validationTooltip04" required>' . PHP_EOL
        . '     <option selected disabled value="">Choose...</option>' . PHP_EOL
        . '     <option>...</option>' . PHP_EOL
        . '   </select>' . PHP_EOL
        . '   <div class="invalid-tooltip">' . PHP_EOL
        . '     Please select a valid state.' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-md-3 position-relative">' . PHP_EOL
        . '   <label for="validationTooltip05" class="form-label">Zip</label>' . PHP_EOL
        . '   <input type="text" class="form-control" id="validationTooltip05" required>' . PHP_EOL
        . '   <div class="invalid-tooltip">' . PHP_EOL
        . '     Please provide a valid zip.' . PHP_EOL
        . '   </div>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . ' <div class="col-12">' . PHP_EOL
        . '   <button class="btn btn-primary" type="submit">Submit form</button>' . PHP_EOL
        . ' </div>' . PHP_EOL
        . '</form>' . PHP_EOL
      );
      $p = $x->pre($p);
      $p = $x->code($p);
      $p = $x->aboutHtmlCard(
        'Tooltips', null, $p
      );
      $x->col()->div();
      $x->col(10)->div($p);
      $x->col()->div();
      $x->row();

      $x->div($br);
      $x->row();

      $content = $x->text('center')->h1('Validation');
      $content .= $x->text('center')->lead('Provide valuable, actionable feedback to your users with HTML5 form validation, via browser default behaviors or custom styles and JavaScript.');
      $content .= $br;
      $content .= $x->container();

    } else {

      $content = $x->aboutError();

    }

    return bs5::make()->aboutView($content);

  }


}
