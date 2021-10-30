<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5ModalController extends Controller
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
      . $x->p('Before getting started with Bootstrap’s modal component, be sure to read the following as our menu options have recently changed.');
    $x->text('center')->div($p);
    $x->row();

    $x->li($x->htmlchar('Modals are built with HTML, CSS, and JavaScript. They’re positioned over everything else in the document and remove scroll from the <body> so that modal content scrolls instead.'));
    $x->li('Clicking on the modal “backdrop” will automatically close the modal.');
    $x->li('Bootstrap only supports one modal window at a time. Nested modals aren’t supported as we believe them to be poor user experiences.');
    $x->li('Modals use position: fixed, which can sometimes be a bit particular about its rendering. Whenever possible, place your modal HTML in a top-level position to avoid potential interference from other elements. You’ll likely run into issues when nesting a .modal within another fixed element.');
    $x->li('Once again, due to position: fixed, there are some caveats with using modals on mobile devices. See our browser support docs for details.');
    $x->li('Due to how HTML5 defines its semantics, the autofocus HTML attribute has no effect in Bootstrap modals. To achieve the same effect, use some custom JavaScript:');
    $p = $x->ul();
    $x->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->htmlchar(
      "var myModal = document.getElementById('myModal')" . PHP_EOL
      . "var myInput = document.getElementById('myInput')" . PHP_EOL
      . PHP_EOL
      . "myModal.addEventListener('shown.bs.modal', function () {" . PHP_EOL
      . ' myInput.focus()' . PHP_EOL
      . '})' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Autofocus JavaScript', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('The animation effect of this component is dependent on the prefers-reduced-motion media query. See the reduced motion section of our accessibility documentation.')
      . $x->p('Keep reading for demos and usage guidelines.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('examples')->h4('Examples')
      . $x->id('modalcomponents')->h4('Modal Components')
      . $x->p('Below is a static modal example (meaning its position and display have been overridden). Included are the modal header, modal body (required for padding), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->modaltitle('Modal title');
    $x->modalheader();

    $x->modalbody('Modal body goes here.');

    $p = $x->data('bs-dismiss', 'modal')->secondary()->btn('Close')
      . $x->btn('Save Changes');
    $x->modalfooter($p);

    $x->modalcontent();

    $x->modaldialog();

    $p = $x->astyle('position: static; display: block;')->modal();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('modaltitle(')
      . $x->text('warning')->span("'Modal title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalheader()') . $colon
      . ' <-- modalheader does NOT need to be called, unless you want to add'
      . PHP_EOL
      . ' custom classes and / or attributes to the "modal-header" div'
      . PHP_EOL
      . ' Whatever is set by modaltitle() will be wrapped in the header'
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalbody(')
      . $x->text('warning')->span("'Modal body goes here.'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-dismiss', 'modal'")
      . $cp . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Close'") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Save Changes'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('footer(')
      . $dollar . $x->text('danger')->span('buttons')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalcontent()') . $colon
      . ' <-- modalcontent does NOT need to be called, unless you want to add'
      . PHP_EOL
      . ' custom classes and / or attributes to the "modal-content" div'
      . PHP_EOL
      . ' Whatever is set by modaltitle() / modalheader(), modalbody(), and modalfooter()'
      . PHP_EOL
      . ' will be wrapped in the content div'
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modaldialog()') . $colon
      . ' <-- modalcontent does NOT need to be called, unless you want to add'
      . PHP_EOL
      . ' custom classes and / or attributes to the "modal-dialog" div'
      . PHP_EOL
      . ' Whatever is set by modaltitle() / modalheader(), modalbody(), modalfooter(),'
      . PHP_EOL
      . ' and modalcontent() will be wrapped in the dialog div'
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="modal" tabindex="-1">' . PHP_EOL
      . ' <div class="modal-dialog">' . PHP_EOL
      . '   <div class="modal-content">' . PHP_EOL
      . '     <div class="modal-header">' . PHP_EOL
      . '       <h5 class="modal-title">Modal title</h5>' . PHP_EOL
      . '       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '     <div class="modal-body">' . PHP_EOL
      . '       <p>Modal body text goes here.</p>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '     <div class="modal-footer">' . PHP_EOL
      . '       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>' . PHP_EOL
      . '       <button type="button" class="btn btn-primary">Save changes</button>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Modal', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('livedemo')->h4('Live Demo')
      . $x->p('Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top of the page.');
    $x->text('center')->div($p);
    $x->row();

    $x->modaltitle('Modal title');
    $x->modalbody("Woohoo, you're reading this text in a modal!");
    $p = $x->secondary()->data('bs-dismiss', 'modal')->btn('Close')
      . $x->btn('Save changes');
    $x->modalfooter($p);
    $p = $x->fade()->modal();
    $p .= $x->modalbutton('Launch demo modal');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('modaltitle(')
      . $x->text('warning')->span("'Modal title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalbody(')
      . $x->text('warning')->span('"Woohoo, you' . "'" . 're reading this text in a modal!"')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-dismiss', 'modal'")
      . $cp . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Close'") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Save changes'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalfooter(')
      . $dollar . $x->text('danger')->span('buttons')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('fade()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('modalbutton(')
      . $x->text('warning')->span("'Launch demo modal'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- Button trigger modal -->' . PHP_EOL
      . '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">' . PHP_EOL
      . ' Launch demo modal' . PHP_EOL
      . '</button>' . PHP_EOL
      . PHP_EOL
      . '<!-- Modal -->' . PHP_EOL
      . '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">' . PHP_EOL
      . ' <div class="modal-dialog">' . PHP_EOL
      . '   <div class="modal-content">' . PHP_EOL
      . '     <div class="modal-header">' . PHP_EOL
      . '       <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>' . PHP_EOL
      . '       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '     <div class="modal-body">' . PHP_EOL
      . '       ...' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '     <div class="modal-footer">' . PHP_EOL
      . '       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>' . PHP_EOL
      . '       <button type="button" class="btn btn-primary">Save changes</button>' . PHP_EOL
      . '     </div>' . PHP_EOL
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

    $p = $x->id('static')->h4('Static Backdrop')
      . $x->p('When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->modaltitle('Modal title');
    $x->modalbody("I will not close if you click outside me. Don't even try to press escape key.");
    $p = $x->secondary()->data('bs-dismiss', 'modal')->btn('Close')
      . $x->btn('Understood');
    $x->modalfooter($p);
    $p = $x->fade()->static()->modal();
    $p .= $x->modalbutton('Launch static backdrop modal');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('modaltitle(')
      . $x->text('warning')->span("'Modal title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalbody(')
      . $x->text('warning')->span("'I will not...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-dismiss', 'modal'")
      . $cp . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Close'") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Understood'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalfooter(')
      . $dollar . $x->text('danger')->span("'buttons'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('fade()')
      . '->' . $x->text('info')->span('static()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('modalbutton(')
      . $x->text('warning')->span("'Launch static backdrop modal'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- Button trigger modal -->' . PHP_EOL
      . '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">' . PHP_EOL
      . ' Launch static backdrop modal' . PHP_EOL
      . '</button>' . PHP_EOL
      . PHP_EOL
      . '<!-- Modal -->' . PHP_EOL
      . '<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">' . PHP_EOL
      . ' <div class="modal-dialog">' . PHP_EOL
      . '   <div class="modal-content">' . PHP_EOL
      . '     <div class="modal-header">' . PHP_EOL
      . '       <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>' . PHP_EOL
      . '       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '     <div class="modal-body">' . PHP_EOL
      . '       ...' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '     <div class="modal-footer">' . PHP_EOL
      . '       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>' . PHP_EOL
      . '       <button type="button" class="btn btn-primary">Understood</button>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Static Backdrop', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('scrolling')->h4('Scrolling Long Content')
      . $x->p('When modals become too long for the user’s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->modaltitle('Modal title');
    $x->astyle('min-height: 1500px;')->modalbody('This is some placeholder content to show the scrolling behavior for modals. Instead of repeating the text the modal, we use an inline style set a minimum height, thereby extending the length of the overall modal and demonstrating the overflow scrolling. When content becomes longer than the height of the viewport, scrolling will move the modal as needed.');
    $p = $x->fade()->modal();
    $p .= $x->modalbutton('Launch demo modal');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('You can also create a scrollable modal that allows scroll the modal body by adding .modal-dialog-scrollable to .modal-dialog.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->modaltitle('Modal title');
    $brr = $br;
    for ($i = 0; $i < 40; $i++)
    {
      $brr .= $br;
    }
    $x->modalbody('This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the prefedined max-height of modal, content will be cropped and scrollable within the modal.' . $brr . 'This content should appear at the bottom after you scroll.');
    $p = $x->secondary()->data('bs-dismiss', 'modal')->btn('Close')
      . $x->btn('Save changes');
    $x->modalfooter($p);
    $p = $x->scroll()->fade()->modal();
    $p .= $x->modalbutton('Launch demo modal');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = "If the modaldialog() function isn't called, the scroll() can be called with the modal() function"
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('scroll()')
      . '->' . $x->text('info')->span('modaldialog()') . $colon
      . PHP_EOL
      . 'or'
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('scroll()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- Scrollable modal -->' . PHP_EOL
      . '<div class="modal-dialog modal-dialog-scrollable">' . PHP_EOL
      . ' ...' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Scroll', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('centered')->h4('Vertically Centered')
      . $x->p('Add .modal-dialog-centered to .modal-dialog to vertically center the modal.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->modaltitle('Modal title');
    $x->modalbody('This a vertically centered modal.');
    $p = $x->secondary()->data('bs-dismiss', 'modal')->btn('Close')
      . $x->btn('Save changes');
    $x->modalfooter($p);
    $p = $x->fade()->center()->modal();
    $p .= $x->modalbutton('Vertically centered modal');

    $x->modaltitle('Modal title');
    $x->modalbody("This is some placeholder content to show a vertically centered modal. We've added some extra copy here to show how vertically centering the modal works when combined with scrollable modals. We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the prefedined max-height of modal, content will be cropped and scrollable within the modal." . $brr . 'Just like that.');
    $c = $x->secondary()->data('bs-dismiss', 'modal')->btn('Close')
      . $x->btn('Save changes');
    $x->modalfooter($c);
    $p .= $x->fade()->center()->scroll()->modal();
    $p .= $x->mx(2)->modalbutton('Vertically centered scrollable modal');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = "If the modaldialog() function isn't called, the center() can be called with the modal() function"
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('center()')
      . '->' . $x->text('info')->span('modaldialog()') . $colon
      . PHP_EOL
      . 'or'
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('center()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- Vertically centered modal -->' . PHP_EOL
      . '<div class="modal-dialog modal-dialog-centered">' . PHP_EOL
      . ' ...' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<!-- Vertically centered scrollable modal -->' . PHP_EOL
      . '<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">' . PHP_EOL
      . ' ...' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Vertically Centered', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('tooltips')->h4('Tooltips and Popovers')
      . $x->p('Tooltips and popovers can be placed within modals as needed. When modals are closed, any tooltips and popovers within are also automatically dismissed.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->modaltitle('Modal title');
    $c = $x->popover('Popover body content is set in this attribute.', 'Popover title')->secondary()->btn('button');
    $p = $x->h5('Popover in modal')
      . 'This ' . $c . ' triggers a popover on click.';
    $c = $x->tooltip('Tooltip')->href('#')->a('This link') . ' and '
      . $x->tooltip('Tooltip')->href('#')->a('that link')
      . ' have tooltips on hover.';
    $p .= $x->hr()
      . $x->h5('Tooltips in a modal')
      . $x->p($c);
    $x->modalbody($p);
    $c = $x->secondary()->data('bs-dismiss', 'modal')->btn('Close')
      . $x->btn('Save changes');
    $x->modalfooter($c);
    $p = $x->fade()->center()->scroll()->modal();
    $p .= $x->mx(2)->modalbutton('Launch demo modal');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('modaltitle(')
      . $x->text('warning')->span("'Modal title'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('popover') . ' = '
      . $xx . '->' . $x->text('info')->span('popover(')
      . $x->text('warning')->span("'Popover body content is set in this attribute.', 'Popover title'")
      . $cp . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Button'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('popover') . ' = '
      . $xx . '->' . $x->text('info')->span('h5(')
      . $x->text('warning')->span("'Popover in modal'") . $cp
      . ' . '
      . "'This '" . ' . ' . $dollar . $x->text('danger')->span('popover')
      . ' . ' . "' triggers a popover on click.'" . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('tooltip') . ' = '
      . $xx . '->' . $x->text('info')->span('tooltip(')
      . $x->text('warning')->span("'Tooltip'")
      . $cp . '->' . $x->text('info')->span('a(')
      . $x->text('warning')->span("'This link', '#'")
      . $cp . ' . ' . "' and '"
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('tooltip(')
      . $x->text('warning')->span("'Tooltip'")
      . $cp . '->' . $x->text('info')->span('a(')
      . $x->text('warning')->span("'that link', '#'")
      . $cp . ' . '
      . "' have tooltips on hover.'" . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('tooltip') . ' = '
      . $xx . '->' . $x->text('info')->span('hr()') . ' . '
      . $xx . '->' . $x->text('info')->span('h5(')
      . $x->text('warning')->span("'Tooltips in a modal'")
      . $cp . ' . '
      . $xx . '->' . $x->text('info')->span('p(')
      . $dollar . $x->text('danger')->span('tooltip') . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalbody(')
      . $dollar . $x->text('danger')->span('popover')
      . ' . '
      . $dollar . $x->text('danger')->span('tooltip') . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-dismiss', 'modal'")
      . $cp . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Close'") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Save changes'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalfooter(')
      . $dollar . $x->text('danger')->span("'buttons'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('fade()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('modalbutton(')
      . $x->text('warning')->span("'Launch demo modal'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="modal-body">' . PHP_EOL
      . ' <h5>Popover in a modal</h5>' . PHP_EOL
      . ' <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-bs-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>' . PHP_EOL
      . ' <hr>' . PHP_EOL
      . ' <h5>Tooltips in a modal</h5>' . PHP_EOL
      . ' <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Tooltips and Popovers', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('grid')->h4('Using the Grid')
      . $x->p('Utilize the Bootstrap grid system within a modal by nesting .container-fluid within the .modal-body. Then, use the normal grid system classes as you would anywhere else.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->modaltitle('Grids in modals');

    $p = $x->col('md-4')->border()->bg('light')->pad(2)->adiv('.col-md-4')
      . $x->col('md-4')->ms('auto')->border()->bg('light')->pad(2)->adiv('.col-md-4 .ms-auto');
    $p = $x->class('row')->adiv($p);

    $c = $x->col('md-3')->ms('auto')->border()->bg('light')->pad(2)->adiv('.col-md-3 .ms-auto')
      . $x->col('md-2')->ms('auto')->border()->bg('light')->pad(2)->adiv('.col-md-2 .ms-auto');
    $p .= $x->class('row')->mt(2)->adiv($c);

    $c = $x->col('md-6')->ms('auto')->border()->bg('light')->pad(2)->adiv('.col-md-6 .ms-auto');
    $p .= $x->class('row')->mt(2)->adiv($c);

    $c = $x->col('8')->col('sm-6')->border()->bg('light')->pad(2)->adiv('Level 2: .col-8 .col-sm-6')
      . $x->col('4')->col('sm-6')->border()->bg('light')->pad(2)->adiv('Level 2: .col-4 .col-sm-6');
    $c= $x->class('row')->mt(2)->adiv($c);
    $c = $x->col('sm-9')->border()->bg('light')->pad(2)->adiv('Level 1: .col-sm-9' . $c);
    $p .= $x->class('row')->mt(2)->adiv($c);
    $p = $x->class('container-fluid')->adiv($p);
    $x->modalbody($p);

    $c = $x->secondary()->data('bs-dismiss', 'modal')->btn('Close')
      . $x->btn('Save changes');
    $x->modalfooter($c);

    $p = $x->fade()->modal()
      . $x->modalbutton('Launch demo modal');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('cols') . ' = '
      . $xx . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'md-4'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'.col-md-4'") . $cp
      . ' . '
      . $xx . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'md-4'")
      . $cp . '->' . $x->text('info')->span('ms(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'.col-md-4 .ms-auto'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('rows') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'row'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('cols')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('cols') . ' = '
      . $xx . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'md-3'")
      . $cp . '->' . $x->text('info')->span('ms(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'.col-md-3 .ms-auto'") . $cp
      . ' . '
      . $xx . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'md-2'")
      . $cp . '->' . $x->text('info')->span('ms(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'.col-md-2 .ms-auto'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('rows') . ' .= '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'row'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('cols')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('cols') . ' = '
      . $xx . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'md-6'")
      . $cp . '->' . $x->text('info')->span('ms(')
      . $x->text('warning')->span("'auto'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'.col-md-6 .ms-auto'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('rows') . ' .= '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'row'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('cols')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('cols') . ' = '
      . $xx . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'8'")
      . $cp . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'sm-6'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'Level 2: .col-8 .col-sm-6'") . $cp
      . ' . '
      . $xx . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'4'")
      . $cp . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'sm-6'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'Level 2: .col-4 .col-sm-6'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('cols') . ' = '
      . $xx . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'sm-9'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $x->text('warning')->span("'Level 1: .col-sm-9'")
      . ' . ' . $dollar . $x->text('danger')->span('cols')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('rows') . ' .= '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'row'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('cols')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('container') . ' = '
      . $xx . $x->text('info')->span('class(')
      . $x->text('warning')->span("'container-fluid'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('rows')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modaltitle(')
      . $x->text('warning')->span("'Grids in modals'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalbody(')
      . $dollar . $x->text('danger')->span('container')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-dismiss', 'modal'")
      . $cp . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Close'") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Save changes'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalfooter(')
      . $dollar . $x->text('danger')->span("'buttons'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('fade()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('modalbutton(')
      . $x->text('warning')->span("'Launch demo modal'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="modal-body">' . PHP_EOL
      . ' <div class="container-fluid">' . PHP_EOL
      . '   <div class="row">' . PHP_EOL
      . '     <div class="col-md-4">.col-md-4</div>' . PHP_EOL
      . '     <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="row">' . PHP_EOL
      . '     <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>' . PHP_EOL
      . '     <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="row">' . PHP_EOL
      . '     <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="row">' . PHP_EOL
      . '     <div class="col-sm-9">' . PHP_EOL
      . '       Level 1: .col-sm-9' . PHP_EOL
      . '       <div class="row">' . PHP_EOL
      . '         <div class="col-8 col-sm-6">' . PHP_EOL
      . '           Level 2: .col-8 .col-sm-6' . PHP_EOL
      . '         </div>' . PHP_EOL
      . '         <div class="col-4 col-sm-6">' . PHP_EOL
      . '           Level 2: .col-4 .col-sm-6' . PHP_EOL
      . '         </div>' . PHP_EOL
      . '       </div>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Using the Grid', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('varying')->h4('Varying Modal Content')
      . $x->p('Have a bunch of buttons that all trigger the same modal with slightly different contents? Use event.relatedTarget and HTML data-bs-* attributes to vary the contents of the modal depending on which button was clicked.')
      . $x->p('Below is a live demo followed by example HTML and JavaScript. For more information, read the modal events docs for details on relatedTarget.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->modaltitle('New message');

    $c = $x->for('recipient-name')->col('form-label')->label('Recipient:')
      . $x->type('text')->class('form-control')->id('recipient-name')->input();
    $p = $x->mb(3)->adiv($c);

    $c = $x->for('message-text')->col('form-label')->label('Message:')
      . $x->class('form-control')->id('message-text')->textarea();
    $p .= $x->mb(3)->adiv($c);
    $p = $x->form($p);

    $x->modalbody($p);

    $c = $x->secondary()->data('bs-dismiss', 'modal')->btn('Close')
      . $x->btn('Save changes');
    $x->modalfooter($c);
    $p = $x->fade()->modal();

    $p .= $x->data('bs-whatever', '@mdo')->modalbutton('Open modal for @mdo')
      . $x->mx(2)->data('bs-whatever', '@fat')->modalbutton('Open modal for @fat')
      . $x->data('bs-whatever', '@getbootstrap')->modalbutton('Open modal for @getbootstrap');

    $x->savejs(
      'var exampleModal = document.getElementById(' . "'" . $x->getID() . "'" . ')' . PHP_EOL
      . "exampleModal.addEventListener('show.bs.modal', function (event) {" . PHP_EOL
      . " var button = event.relatedTarget" . PHP_EOL
      . " var recipient = button.getAttribute('data-bs-whatever')" . PHP_EOL
      . " var modalTitle = exampleModal.querySelector('.modal-title')" . PHP_EOL
      . " var modalBodyInput = exampleModal.querySelector('.modal-body input')" . PHP_EOL
      . " modalTitle.textContent = 'New message to ' + recipient" . PHP_EOL
      . " modalBodyInput.value = recipient" . PHP_EOL
      . "})"
    );

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('modaltitle(')
      . $x->text('warning')->span("'New message'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div1') . ' = '
      . $xx . '->' . $x->text('info')->span('for(')
      . $x->text('warning')->span("'recipient-name'")
      . $cp . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'form-label'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Recipient:'")
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'text'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'recipient-name'")
      . $cp . '->' . $x->text('info')->span('input()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div1') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('div1')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div2') . ' = '
      . $xx . '->' . $x->text('info')->span('for(')
      . $x->text('warning')->span("'message-text'")
      . $cp . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'form-label'")
      . $cp . '->' . $x->text('info')->span('label(')
      . $x->text('warning')->span("'Message:'")
      . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'form-control'")
      . $cp . '->' . $x->text('info')->span('id(')
      . $x->text('warning')->span("'message-text'")
      . $cp . '->' . $x->text('info')->span('textarea()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('div2') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('div2')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('form') . ' = '
      . $xx . '->' . $x->text('info')->span('form(')
      . $dollar . $x->text('danger')->span('div1')
      . ' . '
      . $dollar . $x->text('danger')->span('div2')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalbody(')
      . $dollar . $x->text('danger')->span('form')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('buttons') . ' = '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-dismiss', 'modal'")
      . $cp . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Close'") . $cp
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('btn(')
      . $x->text('warning')->span("'Save changes'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalfooter(')
      . $dollar . $x->text('danger')->span("'buttons'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('fade()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-whatever', '@mdo'")
      . $cp . '->' . $x->text('info')->span('modalbutton(')
      . $x->text('warning')->span("'Open modal for @mdo'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-whatever', '@fat'")
      . $cp . '->' . $x->text('info')->span('modalbutton(')
      . $x->text('warning')->span("'Open modal for @fat'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-whatever', '@getbootstrap'")
      . $cp . '->' . $x->text('info')->span('modalbutton(')
      . $x->text('warning')->span("'Open modal for @getbootstrap'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('savejs(')
      . PHP_EOL
      . ' "' . 'var exampleModal = document.getElementById(' . "'" . '" . '
      . $xx . '->' . $x->text('info')->span('getID()') . ' . ' . "')" . '"'
      . PHP_EOL
      . ' . "' . 'exampleModal.addEventListener(' . "'" . 'show.bs.modal' . "'" . ', function (event) {"'
      . PHP_EOL
      . ' .   "var button = event.relatedTarget"' . PHP_EOL
      . ' .   "var recipient = button.getAttribute(' . "'" . 'data-bs-whatever' . "'" . ')"' . PHP_EOL
      . ' .   "var modalTitle = exampleModal.querySelector(' . "'" . '.modal-title' . "'" . ')"' . PHP_EOL
      . ' .   "var modalBodyInput = exampleModal.querySelector(' . "'" . '.modal-body input' . "'" . ')"' . PHP_EOL
      . ' .   "modalTitle.textContent = ' . "'" . 'New message to' . "'" . ' + recipient"' . PHP_EOL
      . ' .   "modalBodyInput.value = recipient"' . PHP_EOL
      . ' . "})"' . PHP_EOL
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>' . PHP_EOL
      . '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>' . PHP_EOL
      . '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>' . PHP_EOL
      . PHP_EOL
      . '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">' . PHP_EOL
      . ' <div class="modal-dialog">' . PHP_EOL
      . '   <div class="modal-content">' . PHP_EOL
      . '     <div class="modal-header">' . PHP_EOL
      . '       <h5 class="modal-title" id="exampleModalLabel">New message</h5>' . PHP_EOL
      . '       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '     <div class="modal-body">' . PHP_EOL
      . '       <form>' . PHP_EOL
      . '         <div class="mb-3">' . PHP_EOL
      . '           <label for="recipient-name" class="col-form-label">Recipient:</label>' . PHP_EOL
      . '           <input type="text" class="form-control" id="recipient-name">' . PHP_EOL
      . '         </div>' . PHP_EOL
      . '         <div class="mb-3">' . PHP_EOL
      . '           <label for="message-text" class="col-form-label">Message:</label>' . PHP_EOL
      . '           <textarea class="form-control" id="message-text"></textarea>' . PHP_EOL
      . '         </div>' . PHP_EOL
      . '       </form>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '     <div class="modal-footer">' . PHP_EOL
      . '       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>' . PHP_EOL
      . '       <button type="button" class="btn btn-primary">Send message</button>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . PHP_EOL
      . '***  JavaScript Template for the above HTML ***' . PHP_EOL
      . PHP_EOL
      . "var exampleModal = document.getElementById('exampleModal')" . PHP_EOL
      . "exampleModal.addEventListener('show.bs.modal', function (event) {" . PHP_EOL
      . " // Button that triggered the modal" . PHP_EOL
      . " var button = event.relatedTarget" . PHP_EOL
      . " // Extract info from data-bs-* attributes" . PHP_EOL
      . " var recipient = button.getAttribute('data-bs-whatever')" . PHP_EOL
      . " // If necessary, you could initiate an AJAX request here" . PHP_EOL
      . " // and then do the updating in a callback." . PHP_EOL
      . " //" . PHP_EOL
      . " // Update the modal's content." . PHP_EOL
      . " var modalTitle = exampleModal.querySelector('.modal-title')" . PHP_EOL
      . " var modalBodyInput = exampleModal.querySelector('.modal-body input')" . PHP_EOL
      . PHP_EOL
      . " modalTitle.textContent = 'New message to ' + recipient" . PHP_EOL
      . " modalBodyInput.value = recipient" . PHP_EOL
      . "})" . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Varying Modal Content', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('toggle')->h4('Toggle Between Modals')
      . $x->p('Toggle between multiple modals with some clever placement of the data-bs-target and data-bs-toggle attributes. For example, you could toggle a password reset modal from within an already open sign in modal. ' . $x->strong('Please note multiple modals cannot be open at the same time') . '—this method simply toggles between two separate modals.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->modaltitle('Modal 1');
    $x->modalbody('Show a second modal and hide this one with the button below.');
    $c = $x->data('bs-dismiss', 'modal')->modalbutton('Open second modal', 'ToggleModal2');
    $x->modalfooter($c);
    $p = $x->fade()->center()->modal(null,'ToggleModal1')
      . $x->modalbutton('Open first modal', 'ToggleModal1');

    $x->modaltitle('Modal 2');
    $x->modalbody('Hide this modal and show the first with the button below.');
    $c = $x->data('bs-dismiss', 'modal')->modalbutton('Back to first', 'ToggleModal1');
    $x->modalfooter($c);
    $p .= $x->fade()->center()->modal(null,'ToggleModal2');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('modaltitle(')
      . $x->text('warning')->span("'Modal 1'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalbody(')
      . $x->text('warning')->span("'Show a second modal and hide this one with the button below.'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-dismiss', 'modal'")
      . $cp . '->' . $x->text('info')->span('modalbutton(')
      . $x->text('warning')->span("'Open second modal', 'ToggleModal2'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalfooter(')
      . $dollar . $x->text('danger')->span('button')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('fade()')
      . '->' . $x->text('info')->span('center()')
      . '->' . $x->text('info')->span('modal(')
      . $x->text('warning')->span("null, 'ToggleModal1'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('modalbutton(')
      . $x->text('warning')->span("'Open first modal', 'ToggleModal1'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modaltitle(')
      . $x->text('warning')->span("'Modal 2'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalbody(')
      . $x->text('warning')->span("'Hide this modal and show the first with the button below.'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('data(')
      . $x->text('warning')->span("'bs-dismiss', 'modal'")
      . $cp . '->' . $x->text('info')->span('modalbutton(')
      . $x->text('warning')->span("'Back to first', 'ToggleModal1'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modalfooter(')
      . $dollar . $x->text('danger')->span('button')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('fade()')
      . '->' . $x->text('info')->span('center()')
      . '->' . $x->text('info')->span('modal(')
      . $x->text('warning')->span("null, 'ToggleModal2'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">' . PHP_EOL
      . ' <div class="modal-dialog modal-dialog-centered">' . PHP_EOL
      . '   <div class="modal-content">' . PHP_EOL
      . '     <div class="modal-header">' . PHP_EOL
      . '       <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>' . PHP_EOL
      . '       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '     <div class="modal-body">' . PHP_EOL
      . '       Show a second modal and hide this one with the button below.' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '     <div class="modal-footer">' . PHP_EOL
      . '       <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">' . PHP_EOL
      . ' <div class="modal-dialog modal-dialog-centered">' . PHP_EOL
      . '   <div class="modal-content">' . PHP_EOL
      . '     <div class="modal-header">' . PHP_EOL
      . '       <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>' . PHP_EOL
      . '       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '     <div class="modal-body">' . PHP_EOL
      . '       Hide this modal and show the first with the button below.' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '     <div class="modal-footer">' . PHP_EOL
      . '       <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Toggle Between Modals', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('animation')->h4('Change Animation')
      . $x->p('The $modal-fade-transform variable determines the transform state of .modal-dialog before the modal fade-in animation, the $modal-show-transform variable determines the transform of .modal-dialog at the end of the modal fade-in animation.')
      . $x->p('If you want for example a zoom-in animation, you can set $modal-fade-transform: scale(.8).');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('removeanimation')->h4('Remove Animation')
      . $x->p('For modals that simply appear rather than fade in to view, remove the .fade class from your modal markup.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = 'Call the modal without using the fade() option:' . PHP_EOL
      . $xx . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="modal" tabindex="-1" aria-labelledby="..." aria-hidden="true">' . PHP_EOL
      . ' ...' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Remove Animation', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('dynamic')->h4('Dynamic Heights')
      . $x->p('If the height of a modal changes while it is open, you should call myModal.handleUpdate() to readjust the modal’s position in case a scrollbar appears.');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->id('accessibility')->h4('Accessibility')
      . $x->p('Be sure to add aria-labelledby="...", referencing the modal title, to .modal. Additionally, you may give a description of your modal dialog with aria-describedby on .modal. Note that you don’t need to add role="dialog" since we already add it via JavaScript.');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->id('embedding')->h4('Embedding YouTube Videos')
      . $x->p('Embedding YouTube videos in modals requires additional JavaScript not in Bootstrap to automatically stop playback and more. See this helpful Stack Overflow post for more information.');
    $x->text('center')->div($p);
    $x->row();

    $p = $x->id('sizes')->h4('Optional Sizes')
      . $x->p('Modals have three optional sizes, available via modifier classes to be placed on a .modal-dialog. These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.');
    $x->text('center')->div($p);
    $x->row();

    $x->th('Size');
    $x->th('Class');
    $x->th('Modal max-width');
    $x->tr();
    $x->thead();
    $x->td('Small');
    $x->td('.modal-sm');
    $x->td('300px');
    $x->tr();
    $x->td('Default');
    $x->text('mute')->td('None');
    $x->td('500px');
    $x->tr();
    $x->td('Large');
    $x->td('.modal-lg');
    $x->td('800px');
    $x->tr();
    $x->td('Extra large');
    $x->td('.modal-xl');
    $x->td('1140px');
    $x->tr();
    $p = $x->table();

    $x->div($p);
    $x->row();

    $p = $x->p('Our default modal without modifier class constitutes the “medium” size modal.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->modaltitle('Extra large modal');
    $x->modalbody('...');
    $p = $x->xl()->modal()
      . $x->modalbutton('Extra large modal');

    $x->modaltitle('Large modal');
    $x->modalbody('...');
    $p .= $x->lg()->modal()
      . $x->mx(2)->modalbutton('Large modal');

    $x->modaltitle('Small modal');
    $x->modalbody('...');
    $p .= $x->sm()->modal()
      . $x->modalbutton('Small modal');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = "If the modaldialog() function isn't called, sizes can be called with the modal() function" . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('xl()')
      . '->' . $x->text('info')->span('modaldialog()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('modaldialog()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('modaldialog()') . $colon
      . PHP_EOL
      . PHP_EOL
      . 'or'
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('xl()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('lg()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="modal-dialog modal-xl">...</div>' . PHP_EOL
      . '<div class="modal-dialog modal-lg">...</div>' . PHP_EOL
      . '<div class="modal-dialog modal-sm">...</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Optional Sizes', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('fullscreen')->h4('Fullscreen Modal')
      . $x->p('Another override is the option to pop up a modal that covers the user viewport, available via modifier classes that are placed on a .modal-dialog.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->th('Class');
    $x->th('Availability');
    $x->tr();
    $x->thead();
    $x->td('.modal-fullscreen');
    $x->td('Always');
    $x->tr();
    $x->td('.modal-fullscreen-sm-down');
    $x->td('Below 576px');
    $x->tr();
    $x->td('.modal-fullscreen-md-down');
    $x->td('Below 768px');
    $x->tr();
    $x->td('.modal-fullscreen-lg-down');
    $x->td('Below 992px');
    $x->tr();
    $x->td('.modal-fullscreen-xl-down');
    $x->td('Below 1200px');
    $x->tr();
    $x->td('.modal-fullscreen-xxl-down');
    $x->td('Below 1400px');
    $p = $x->table();

    $x->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->modaltitle('Full screen modal');
    $x->modalbody('...');
    $p = $x->fullscreen()->modal();
    $c = $x->modalbutton('Full screen');

    $x->modaltitle('Full screen below sm');
    $x->modalbody('...');
    $p .= $x->fullscreen()->sm()->modal();
    $c .= $x->mx(2)->modalbutton('Full screen below sm');

    $x->modaltitle('Full screen below md');
    $x->modalbody('...');
    $p .= $x->fullscreen()->md()->modal();
    $c .= $x->modalbutton('Full screen below md');

    $x->modaltitle('Full screen below lg');
    $x->modalbody('...');
    $p .= $x->fullscreen()->lg()->modal();
    $c .= $x->mx(2)->modalbutton('Full screen below lg');

    $x->modaltitle('Full screen below xl');
    $x->modalbody('...');
    $p .= $x->fullscreen()->xl()->modal();
    $c .= $x->modalbutton('Full screen below xl');

    $x->modaltitle('Full screen below xxl');
    $x->modalbody('...');
    $p .= $x->fullscreen()->xxl()->modal();
    $c .= $x->mx(2)->modalbutton('Full screen below xxl');

    $x->border()->pad(3)->div($p . $c);
    $x->row();

    $x->div($br);
    $x->row();

    $p = "If the modaldialog() function isn't called, fullscreen() can be called with the modal() function" . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('fullscreen()')
      . '->' . $x->text('info')->span('modaldialog()') . $colon
      . PHP_EOL
      . 'or'
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('fullscreen()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . PHP_EOL
      . 'Sizes can be called as well' . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('fullscreen()')
      . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('modaldialog()') . $colon
      . PHP_EOL
      . 'or'
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('fullscreen()')
      . '->' . $x->text('info')->span('sm()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<!-- Full screen modal -->' . PHP_EOL
      . '<div class="modal-dialog modal-fullscreen-sm-down">' . PHP_EOL
      . ' ...' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Fullscreen', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('noclose')->h4("Remove 'X' Dismiss")
      . 'If the noclose() function is called along with static() there will be no ability to close the modal without adding a custom dismiss button.';
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->modaltitle("Modal without 'X' dismiss");
    $x->modalbody('...');
    $p = $x->noclose()->modal()
      . $x->modalbutton('Modal without dismiss');

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = "If the modalheader() function isn't called, noclose() can be called with the modal() function" . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('noclose()')
      . '->' . $x->text('info')->span('modalheader()') . $colon
      . PHP_EOL
      . 'or'
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('noclose()')
      . '->' . $x->text('info')->span('modal()') . $colon
      . PHP_EOL;
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Remove Dismiss', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Modal');
    $content .= $x->text('center')->lead('Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
