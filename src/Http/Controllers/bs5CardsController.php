<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5CardsController extends Controller
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

    $p = $x->id('about')->h4('About')
      . $x->p('A ' . $x->strong('card') . ' is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options. If you’re familiar with Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar functionality to those components is available as modifier classes for cards.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('example')->h4('Example')
      . $x->p('Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization. Built with flexbox, they offer easy alignment and mix well with other Bootstrap components. They have no margin by default, so use spacing utilities as needed.')
      . $x->p('Below is an example of a basic card with mixed content and a fixed width. Cards have no fixed width to start, so they’ll naturally fill the full width of its parent element. This is easily customized with our various sizing options.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $img = '<svg class="card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" style="font-size: 1.125rem; text-anchor: middle;"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>';
    $extra = $x->btna('Go somewhere', '#');

    $x->cardtitle('Card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->posthtml($extra);
    $x->cardbody();

    $x->prehtml($img);
    $p = $x->astyle('width: 18rem;')->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('src') . ' = '
      . "'...'" . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('alt') . ' = '
      . "'...'" . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $dollar . $x->text('danger')->span('src')
      . ' . '
      . $dollar . $x->text('danger')->span('alt')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('button') . ' = '
      . $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Go somewhere', '#'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $dollar . $x->text('danger')->span('button')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card" style="width: 18rem;">' . PHP_EOL
      . ' <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . '   <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Card Example', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('content')->h4('Content Types')
      . $x->p('Cards support a wide variety of content, including images, text, list groups, links, and more. Below are examples of what’s supported.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('body')->h4('Body')
      . $x->p('The building block of a card is the .card-body. Use it whenever you need a padded section within a card.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardtext('This is some text within a card body.');
    $x->cardbody();
    $p = $x->card();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This is some text within a card body.'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span("content") . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   This is some text within a card body.' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Card Body', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('titles-text-links')->h4('Titles, text, and links')
      . $x->p($x->htmlchar('Card titles are used by adding .card-title to a <h*> tag. In the same way, links are added and placed next to each other by adding .card-link to an <a> tag.'))
      . $x->p($x->htmlchar('Subtitles are used by adding a .card-subtitle to a <h*> tag. If the .card-title and the .card-subtitle items are placed in a .card-body item, the card title and subtitle are aligned nicely.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardtitle('Card title');
    $x->mb(2)->text('muted')->cardsubtitle('Card subtitle');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $links = $x->cardlink('Card link', '#') . $x->cardlink('Another link', '#');
    $x->posthtml($links);
    $x->cardbody();
    $p = $x->astyle('width: 18rem;')->card();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('cardsubtitle(')
      . $x->text('warning')->span("'Card subtitle'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example text to build on the card title and make up the bulk of the card's content.'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('links') . ' = '
      . $xx . '->' . $x->text('info')->span('cardlink(')
      . $x->text('warning')->span("'Card link', '#'") . $cp
      . ' . '
      . $xx . '->' . $x->text('info')->span('cardlink(')
      . $x->text('warning')->span("'Another link', '#'") . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $dollar . $x->text('danger')->span('links') . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card" style="width: 18rem;">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '   <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . '   <a href="#" class="card-link">Card link</a>' . PHP_EOL
      . '   <a href="#" class="card-link">Another link</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Titles, text, and links', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('images')->h4('Images')
      . $x->p('.card-img-top places an image to the top of the card. With .card-text, text can be added to the card. Text within .card-text can also be styled with the standard HTML tags.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $img = '<svg class="card-img-top" width="100%" height="180" style="font-size: 1.125rem; text-anchor: middle;" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>';
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $x->prehtml($img);
    $p = $x->astyle('width: 18rem;')->card();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('src') . " = '...'" . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('alt') . " = '...'" . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $dollar . $x->text('danger')->span('src')
      . ' . '
      . $dollar . $x->text('danger')->span('alt')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example text to build on the card title and make up the bulk of the card's content.'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card" style="width: 18rem;">' . PHP_EOL
      . ' <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Images', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('listgroups')->h4('List Groups')
      . $x->p('Create lists of content in a card with a flush list group.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->litem('An item');
    $x->litem('A second item');
    $x->litem('A third item');
    $p = $x->flush()->lgroup();
    $p = $x->astyle('width: 18rem;')->card($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'An item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A second item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A third item'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('list') . ' = '
      . $xx . '->' . $x->text('info')->span('flush()')
      . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card(')
      . $dollar . $x->text('danger')->span('list')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card" style="width: 18rem;">' . PHP_EOL
      . ' <ul class="list-group list-group-flush">' . PHP_EOL
      . '   <li class="list-group-item">An item</li>' . PHP_EOL
      . '   <li class="list-group-item">A second item</li>' . PHP_EOL
      . '   <li class="list-group-item">A third item</li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'List Groups', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->litem('An item');
    $x->litem('A second item');
    $x->litem('A third item');
    $c = $x->flush()->lgroup();
    $x->cardheader('Featured');
    $x->posthtml($c);
    $p = $x->astyle('width: 18rem;')->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'An item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A second item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A third item'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('list') . ' = '
      . $xx . '->' . $x->text('info')->span('flush()')
      . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Featured'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $dollar . $x->text('danger')->span('list')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card" style="width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">' . PHP_EOL
      . '   Featured' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <ul class="list-group list-group-flush">' . PHP_EOL
      . '   <li class="list-group-item">An item</li>' . PHP_EOL
      . '   <li class="list-group-item">A second item</li>' . PHP_EOL
      . '   <li class="list-group-item">A third item</li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'List Header', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardfooter('Card footer');
    $x->prehtml($c);
    $p = $x->astyle('width: 18rem;')->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'An item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A second item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A third item'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('list') . ' = '
      . $xx . '->' . $x->text('info')->span('flush()')
      . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardfooter(')
      . $x->text('warning')->span("'Card footer'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('prehtml(')
      . $dollar . $x->text('danger')->span('list')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card" style="width: 18rem;">' . PHP_EOL
      . ' <ul class="list-group list-group-flush">' . PHP_EOL
      . '   <li class="list-group-item">An item</li>' . PHP_EOL
      . '   <li class="list-group-item">A second item</li>' . PHP_EOL
      . '   <li class="list-group-item">A third item</li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . ' <div class="card-footer">' . PHP_EOL
      . '   Card footer' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'List Footer', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('kitchensink')->h4('Kitchen Sink')
      . $x->p('Mix and match multiple content types to create the card you need, or throw everything in there. Shown below are image styles, blocks, text styles, and a list group—all wrapped in a fixed-width card.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $img = '<svg class="card-img-top" width="100%" style="font-size: 1.125rem; text-anchor: middle;" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>';
    $links = $x->cardlink('Card link', '#') . $x->cardlink('Another link', '#');
    $links = $x->class('card-body')->adiv($links);
    $x->cardtitle('Card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $x->prehtml($img);
    $x->posthtml($c . $links);
    $p = $x->astyle('width: 18rem;')->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example text to build on the card title and make up the bulk of the card's content.'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'An item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A second item'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('litem(')
      . $x->text('warning')->span("'A third item'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('list') . ' = '
      . $xx . '->' . $x->text('info')->span('flush()')
      . '->' . $x->text('info')->span('lgroup()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('links') . ' = '
      . $xx . '->' . $x->text('info')->span('cardlink(')
      . $x->text('warning')->span("'Card link', '#'") . $cp
      . PHP_EOL
      . ' . ' . $xx . '->' . $x->text('info')->span('cardlink(')
      . $x->text('warning')->span("'Another link', '#'") . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('links') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'card-body'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('links')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $dollar . $x->text('danger')->span('list')
      . ' . '
      . $dollar . $x->text('danger')->span('links')
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card" style="width: 18rem;">' . PHP_EOL
      . ' <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <ul class="list-group list-group-flush">' . PHP_EOL
      . '   <li class="list-group-item">An item</li>' . PHP_EOL
      . '   <li class="list-group-item">A second item</li>' . PHP_EOL
      . '   <li class="list-group-item">A third item</li>' . PHP_EOL
      . ' </ul>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <a href="#" class="card-link">Card link</a>' . PHP_EOL
      . '   <a href="#" class="card-link">Another link</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Kitchen Sink', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('headerandfooter')->h4('Header and Footer')
      . $x->p('Add an optional header and/or footer within a card.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardheader('Featured');
    $x->cardtitle('Special title treatment');
    $x->cardtext('With supporting text below as a natural lead-in to additional content.');
    $x->posthtml($x->btna('Go somewhere', '#'));
    $x->cardbody();
    $p = $x->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Featured'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'With supporting text below as a natural lead-in to additional content.'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Go somewhere', '#'")
      . $cp . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card">' . PHP_EOL
      . ' <div class="card-header">' . PHP_EOL
      . '   Featured' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Special title treatment</h5>' . PHP_EOL
      . '   <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '   <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Header and Footer - 1', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p($x->htmlchar('Card headers can be styled by adding .card-header to <h*> elements.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardheader('Featured', 5);
    $x->cardtitle('Special title treatment');
    $x->cardtext('With supporting text below as a natural lead-in to additional content.');
    $x->posthtml($x->btna('Go somewhere'));
    $x->cardbody();
    $p = $x->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Featured', '5'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Go somewhere', '#'")
      . $cp . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card">' . PHP_EOL
      . ' <h5 class="card-header">Featured</h5>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Special title treatment</h5>' . PHP_EOL
      . '   <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '   <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Header and Footer - 2', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardheader('Quote');
    $c = $x->mb('0')->blockquote('A well-known quote, contained in a blockquote element.', 'Someone famous in', 'Source Title', 'Source Title');
    $x->posthtml($c);
    $x->cardbody();
    $p = $x->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Quote'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('quote') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'0'")
      . $cp . '->' . $x->text('info')->span('blockquote(')
      . $x->text('warning')->span("'A well-known quote, contained in a blockquote element.', 'Someone famous in', 'Source Title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $dollar . $x->text('danger')->span('quote')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Header and Footer - 3', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardheader('Featured');
    $x->cardtitle('Special title treatment');
    $x->cardtext('With supporting text below as a natural lead-in to additional content.');
    $x->posthtml($x->btna('Go somewhere', '#'));
    $x->cardbody();
    $x->text('muted')->cardfooter('2 days ago');
    $p = $x->text('center')->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Featured'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'With supporting text below as a natural lead-in to additional content.'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Go somewhere', '#'")
      . $cp . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('footer(')
      . $x->text('warning')->span("'2 days ago'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card text-center">' . PHP_EOL
      . ' <div class="card-header">' . PHP_EOL
      . '   Featured' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Special title treatment</h5>' . PHP_EOL
      . '   <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '   <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="card-footer text-muted">' . PHP_EOL
      . '   2 days ago' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Header and Footer - 4', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('sizing')->h4('Sizing')
      . $x->p('Cards assume no specific width to start, so they’ll be 100% wide unless otherwise stated. You can change this as needed with custom CSS, grid classes, grid Sass mixins, or utilities.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('grid')->h4('Using grid markup')
      . $x->p('Using the grid, wrap cards in columns and rows as needed.');
    $x->text('center')->div($p);
    $x->row();

    $x->cardtitle('Special title treatment');
    $x->cardtext('With supporting text below as a natural lead-in to additional content.');
    $x->posthtml($x->btna('Go somewhere', '#'));
    $x->cardbody();
    $c = $x->card();

    $c = $x->col('sm-6')->adiv($c);
    $p = $x->class('row')->adiv($c . $c);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'With supporting text below as a natural lead-in to additional content.'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Go somewhere', '#'")
      . $cp . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('card') . ' = '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'sm-6'")
      . $cp . '->' . $x->text('info')->span('div(')
      . $dollar . $x->text('danger')->span('card')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('col(')
      . $x->text('warning')->span("'sm-6'")
      . $cp . '->' . $x->text('info')->span('div(')
      . $dollar . $x->text('danger')->span('card')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('row()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('container()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="row">' . PHP_EOL
      . ' <div class="col-sm-6">' . PHP_EOL
      . '   <div class="card">' . PHP_EOL
      . '     <div class="card-body">' . PHP_EOL
      . '       <h5 class="card-title">Special title treatment</h5>' . PHP_EOL
      . '       <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '       <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="col-sm-6">' . PHP_EOL
      . '   <div class="card">' . PHP_EOL
      . '     <div class="card-body">' . PHP_EOL
      . '       <h5 class="card-title">Special title treatment</h5>' . PHP_EOL
      . '       <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '       <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Grid Markup', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('utilities')->h4('Using Utilities')
      . $x->p('Use our handful of available sizing utilities to quickly set a card’s width.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardtitle('Card title');
    $x->cardtext('With supporting text below as a natural lead-in to additional content.');
    $x->posthtml($x->btna('Button', '#'));
    $x->cardbody();
    $p = $x->w(75)->card();

    $x->cardtitle('Card title');
    $x->cardtext('With supporting text below as a natural lead-in to additional content.');
    $x->posthtml($x->btna('Button', '#'));
    $x->cardbody();
    $p .= $x->w(50)->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'With supporting text below as a natural lead-in to additional content.'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Button', '#'")
      . $cp . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('w(')
      . $x->text('warning')->span("'75'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'With supporting text below as a natural lead-in to additional content.'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Button', '#'")
      . $cp . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('w(')
      . $x->text('warning')->span("'50'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card w-75">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '   <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '   <a href="#" class="btn btn-primary">Button</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="card w-50">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '   <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '   <a href="#" class="btn btn-primary">Button</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Using Utilities', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('css')->h4('Using Custom CSS')
      . $x->p('Use custom CSS in your stylesheets or as inline styles to set a width.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardtitle('Special title treatment');
    $x->cardtext('With supporting text below as a natural lead-in to additional content.');
    $x->posthtml($x->btna('Go somewhere', '#'));
    $x->cardbody();
    $p = $x->astyle('width: 18rem;')->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Go somewhere', '#'")
      . $cp . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card" style="width: 18rem;">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Special title treatment</h5>' . PHP_EOL
      . '   <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '   <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Using Custom CSS', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('textalignment')->h4('Text Alignment')
      . $x->p('You can quickly change the text alignment of any card—in its entirety or specific parts—with our text align classes.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardtitle('Special title treatment');
    $x->cardtext('With supporting text below as a natural lead-in to additional content.');
    $x->posthtml($x->btna('Go somewhere', '#'));
    $x->cardbody();
    $p = $x->astyle('width: 18rem;')->card();

    $x->cardtitle('Special title treatment');
    $x->cardtext('With supporting text below as a natural lead-in to additional content.');
    $x->posthtml($x->btna('Go somewhere', '#'));
    $x->cardbody();
    $p .= $x->text('center')->astyle('width: 18rem;')->card();

    $x->cardtitle('Special title treatment');
    $x->cardtext('With supporting text below as a natural lead-in to additional content.');
    $x->posthtml($x->btna('Go somewhere', '#'));
    $x->cardbody();
    $p .= $x->text('end')->astyle('width: 18rem;')->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Go somewhere', '#'")
      . $cp . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Go somewhere', '#'")
      . $cp . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'center'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Special title treatment'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('posthtml(')
      . $xx . '->' . $x->text('info')->span('btna(')
      . $x->text('warning')->span("'Go somewhere', '#'")
      . $cp . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'end'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card" style="width: 18rem;">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Special title treatment</h5>' . PHP_EOL
      . '   <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '   <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="card text-center" style="width: 18rem;">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Special title treatment</h5>' . PHP_EOL
      . '   <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '   <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . PHP_EOL
      . '<div class="card text-end" style="width: 18rem;">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Special title treatment</h5>' . PHP_EOL
      . '   <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '   <a href="#" class="btn btn-primary">Go somewhere</a>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Text Alignment', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('images')->h4('Images')
      . $x->p('Cards include a few options for working with images. Choose from appending “image caps” at either end of a card, overlaying images with card content, or simply embedding the image in a card.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('imagecaps')->h4('Image Caps')
      . $x->p('Similar to headers and footers, cards can include top and bottom “image caps”—images at the top or bottom of a card.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $img = '<svg class="card-img-top" style="font-size: 1.125rem; text-anchor: middle;" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>';
    $x->cardtitle('Card title');
    $x->cardtext('This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.');
    $c = $x->text('muted')->small('Last updated 3 mins ago');
    $x->cardtext($c);
    $x->cardbody();
    $x->prehtml($img);
    $p = $x->mb(3)->card();

    $x->cardtitle('Card title');
    $x->cardtext('This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.');
    $c = $x->text('muted')->small('Last updated 3 mins ago');
    $x->cardtext($c);
    $x->cardbody();
    $x->posthtml($img);
    $p .= $x->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This is a wider card...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span('Last updated...') . $cp
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardimgbottom(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This is a wider card...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span('Last updated...') . $cp
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card mb-3">' . PHP_EOL
      . ' <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '   <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>' . PHP_EOL
      . '   <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card">' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '   <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>' . PHP_EOL
      . '   <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <img src="..." class="card-img-bottom" alt="...">' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Image Caps', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('overlays')->h4('Image Overlays')
      . $x->p('Turn an image into a card background and overlay your card’s text. Depending on the image, you may or may not need additional styles or utilities.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $img = '<svg class="card-img" style="font-size: 3.5rem; text-anchor: middle;" width="100%" height="270" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Card image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Card image</text></svg>';
    $x->save('cardoverlay', ' ');
    $x->cardtitle('Card title');
    $x->cardtext('This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.');
    $x->cardtext('Last updated 3 mins ago');
    $x->cardbody();
    $x->prehtml($img);
    $p = $x->bg('dark')->text('white')->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardimgoverlay(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This is a wider...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Last updated...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'dark'")
      . $cp . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'white'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card bg-dark text-white">' . PHP_EOL
      . ' <img src="..." class="card-img" alt="...">' . PHP_EOL
      . ' <div class="card-img-overlay">' . PHP_EOL
      . '   <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '   <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>' . PHP_EOL
      . '   <p class="card-text">Last updated 3 mins ago</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Image Overlay', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('styles')->h4('Card Styles')
      . $x->p('Cards include various options for customizing their backgrounds, borders, and color.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardheader('Header');
    $x->cardtitle('Primary card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $p = $x->text('white')->bg('primary')->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Secondary card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $p .= $x->text('white')->bg('secondary')->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Success card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $p .= $x->text('white')->bg('success')->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Danger card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $p .= $x->danger()->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Warning card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $p .= $x->warning()->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Info card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $p .= $x->info()->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Light card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $p .= $x->light()->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Dark card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $p .= $x->dark()->mb(3)->astyle('max-width: 18rem;')->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Priamry card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('primary()')
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Secondary card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('secondary()')
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Success card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Danger card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Warning card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Info card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('info()')
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Light card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('light()')
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Dark card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('dark()')
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Primary card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Secondary card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card text-white bg-success mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Success card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Danger card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Warning card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card text-dark bg-info mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Info card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Light card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Dark card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Background and Color', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->h4('Conveying meaning to assistive technologies')
      . $x->p('Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the .visually-hidden class.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('border')->h4('Border')
      . $x->p('Use border utilities to change just the border-color of a card. Note that you can put .text-{color} classes on the parent .card or a subset of the card’s contents as shown below.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardheader('Header');
    $x->cardtitle('Primary card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->text('primary')->cardbody();
    $p = $x->border('primary')->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Secondary card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->text('secondary')->cardbody();
    $p .= $x->border('secondary')->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Success card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->text('success')->cardbody();
    $p .= $x->border('success')->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Danger card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->text('danger')->cardbody();
    $p .= $x->border('danger')->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Warning card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $p .= $x->border('warning')->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Info card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $p .= $x->border('info')->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Light card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $p .= $x->border('light')->mb(3)->astyle('max-width: 18rem;')->card();

    $x->cardheader('Header');
    $x->cardtitle('Dark card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->cardbody();
    $p .= $x->border('dark')->mb(3)->astyle('max-width: 18rem;')->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Priamry card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'primary'")
      . $cp . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'primary'") . $cp
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Secondary card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'secondary'") . $cp
      . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'secondary'")
      . $cp . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Success card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'success'") . $cp
      . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'success'") . $cp
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Danger card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'danger'") . $cp
      . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'danger'") . $cp
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Warning card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'warning'") . $cp
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Info card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'info'") . $cp
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Light card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'light'") . $cp
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Dark card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' .= '
      . $xx . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'dark'") . $cp
      . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card border-primary mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body text-primary">' . PHP_EOL
      . '   <h5 class="card-title">Primary card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card border-secondary mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body text-secondary">' . PHP_EOL
      . '   <h5 class="card-title">Secondary card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card border-success mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body text-success">' . PHP_EOL
      . '   <h5 class="card-title">Success card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card border-danger mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body text-danger">' . PHP_EOL
      . '   <h5 class="card-title">Danger card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card border-warning mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Warning card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card border-info mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Info card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card border-light mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body">' . PHP_EOL
      . '   <h5 class="card-title">Light card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="card border-dark mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header">Header</div>' . PHP_EOL
      . ' <div class="card-body text-dark">' . PHP_EOL
      . '   <h5 class="card-title">Dark card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Border', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('mixins')->h4('Mixings Utilities')
      . $x->p('You can also change the borders on the card header and footer as needed, and even remove their background-color with .bg-transparent.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->border('success')->bg('transparent')->cardheader('Header');
    $x->cardtitle('Success card title');
    $x->cardtext("Some quick example text to build on the card title and make up the bulk of the card's content.");
    $x->text('success')->cardbody();
    $x->border('success')->bg('transparent')->cardfooter('Footer');
    $p = $x->border('success')->mb(3)->astyle('max-width: 18rem;')->card();

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'transparent'")
      . $cp . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'success'")
      . $cp . '->' . $x->text('info')->span('cardheader(')
      . $x->text('warning')->span("'Header'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Success card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'Some quick example...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'success'")
      . $cp . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'transparent'")
      . $cp . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'success'")
      . $cp . '->' . $x->text('info')->span('cardfooter(')
      . $x->text('warning')->span("'Footer'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'success'")
      . $cp . '->' . $x->text('info')->span('mb(')
      . $x->text('warning')->span("'3'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'max-width: 18rem;'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card border-success mb-3" style="max-width: 18rem;">' . PHP_EOL
      . ' <div class="card-header bg-transparent border-success">Header</div>' . PHP_EOL
      . ' <div class="card-body text-success">' . PHP_EOL
      . '   <h5 class="card-title">Success card title</h5>' . PHP_EOL
      . '   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card' . "'" . 's content.</p>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="card-footer bg-transparent border-success">Footer</div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Mixin Utilities', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('layout')->h4('Card Layout')
      . $x->p('In addition to styling the content within cards, Bootstrap includes a few options for laying out series of cards. For the time being, ' . $x->strong('these layout options are not yet responsive.'));
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('groups')->h4('Card Groups')
      . $x->p('Use card groups to render cards as a single, attached element with equal width and height columns. Card groups start off stacked and use display: flex; to become attached with uniform dimensions starting at the sm breakpoint.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $img = '<svg class="card-img-top" style="font-size: 1.125rem; text-anchor: middle;" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>';
    $sm = $x->text('muted')->small('Last updated 3 mins ago');

    $x->cardtitle('Card title');
    $x->cardtext('This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.');
    $x->cardtext($sm);
    $x->cardbody();
    $x->prehtml($img);
    $p = $x->card();

    $x->cardtitle('Card title');
    $x->cardtext('This card has supporting text below as a natural lead-in to additional content.');
    $x->cardtext($sm);
    $x->cardbody();
    $x->prehtml($img);
    $p .= $x->card();

    $x->cardtitle('Card title');
    $x->cardtext('This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.');
    $x->cardtext($sm);
    $x->cardbody();
    $x->prehtml($img);
    $p .= $x->card();

    $p = $x->cardgroup($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This is a wider...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('small') . ' = '
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span("'Last updated 3 mins ago'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $dollar . $x->text('danger')->span('small')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('cards') . ' = '
      . $xx . '->' . $x->text('info')->span('cards()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This card has...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('small') . ' = '
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span("'Last updated 3 mins ago'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $dollar . $x->text('danger')->span('small')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('cards') . ' .= '
      . $xx . '->' . $x->text('info')->span('cards()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This is a wider card...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('small') . ' = '
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span("'Last updated 3 mins ago'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $dollar . $x->text('danger')->span('small')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('cards') . ' .= '
      . $xx . '->' . $x->text('info')->span('cards()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('cardgroup(')
      . $dollar . $x->text('danger')->span('cards')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card-group">' . PHP_EOL
      . ' <div class="card">' . PHP_EOL
      . '   <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . '   <div class="card-body">' . PHP_EOL
      . '     <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>' . PHP_EOL
      . '     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="card">' . PHP_EOL
      . '   <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . '   <div class="card-body">' . PHP_EOL
      . '     <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '     <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="card">' . PHP_EOL
      . '   <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . '   <div class="card-body">' . PHP_EOL
      . '     <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>' . PHP_EOL
      . '     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Card Groups', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('When using card groups with footers, their content will automatically line up.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $img = '<svg class="card-img-top" style="font-size: 1.125rem; text-anchor: middle;" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>';
    $sm = $x->text('muted')->small('Last updated 3 mins ago');

    $x->cardtitle('Card title');
    $x->cardtext('This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.');
    $x->cardbody();
    $x->cardfooter($sm);
    $x->prehtml($img);
    $p = $x->card();

    $x->cardtitle('Card title');
    $x->cardtext('This card has supporting text below as a natural lead-in to additional content.');
    $x->cardbody();
    $x->cardfooter($sm);
    $x->prehtml($img);
    $p .= $x->card();

    $x->cardtitle('Card title');
    $x->cardtext('This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.');
    $x->cardbody();
    $x->cardfooter($sm);
    $x->prehtml($img);
    $p .= $x->card();

    $p = $x->cardgroup($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This is a wider...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('small') . ' = '
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span("'Last updated 3 mins ago'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardfooter(')
      . $dollar . $x->text('danger')->span('small')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('cards') . ' = '
      . $xx . '->' . $x->text('info')->span('cards()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This card has...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('small') . ' = '
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span("'Last updated 3 mins ago'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardfooter(')
      . $dollar . $x->text('danger')->span('small')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('cards') . ' .= '
      . $xx . '->' . $x->text('info')->span('cards()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This is a wider card...'")
      . $cp . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('small') . ' = '
      . $xx . '->' . $x->text('info')->span('text(')
      . $x->text('warning')->span("'muted'")
      . $cp . '->' . $x->text('info')->span('small(')
      . $x->text('warning')->span("'Last updated 3 mins ago'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardfooter(')
      . $dollar . $x->text('danger')->span('small')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('cards') . ' .= '
      . $xx . '->' . $x->text('info')->span('cards()') . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('cardgroup(')
      . $dollar . $x->text('danger')->span('cards')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="card-group">' . PHP_EOL
      . ' <div class="card">' . PHP_EOL
      . '   <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . '   <div class="card-body">' . PHP_EOL
      . '     <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="card-footer">' . PHP_EOL
      . '     <small class="text-muted">Last updated 3 mins ago</small>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="card">' . PHP_EOL
      . '   <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . '   <div class="card-body">' . PHP_EOL
      . '     <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '     <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="card-footer">' . PHP_EOL
      . '     <small class="text-muted">Last updated 3 mins ago</small>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="card">' . PHP_EOL
      . '   <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . '   <div class="card-body">' . PHP_EOL
      . '     <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . '   <div class="card-footer">' . PHP_EOL
      . '     <small class="text-muted">Last updated 3 mins ago</small>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Card Groups With Footers', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('grid')->h4('Grid Cards')
      . $x->p('Use the Bootstrap grid system and its .row-cols classes to control how many grid columns (wrapped around your cards) you show per row. For example, here’s .row-cols-1 laying out the cards on one column, and .row-cols-md-2 splitting four cards to equal width across multiple rows, from the medium breakpoint up.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $x->cardtitle('Card title');
    $x->cardtext('This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.');
    $x->cardbody();
    $x->prehtml($img);
    $c = $x->card();
    $p = $x->col()->adiv($c);

    $x->cardtitle('Card title');
    $x->cardtext('This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.');
    $x->cardbody();
    $x->prehtml($img);
    $c = $x->card();
    $p .= $x->col()->adiv($c);

    $x->cardtitle('Card title');
    $x->cardtext('This is a longer card with supporting text below as a natural lead-in to additional content.');
    $x->cardbody();
    $x->prehtml($img);
    $c = $x->card();
    $p .= $x->col()->adiv($c);

    $x->cardtitle('Card title');
    $x->cardtext('This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.');
    $x->cardbody();
    $x->prehtml($img);
    $c = $x->card();
    $p .= $x->col()->adiv($c);

    $p = $x->class('row row-cols-1 row-cols-md-2 g-4')->adiv($p);

    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This is a longer card...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('card') . ' = '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('col()')
      . '->' . $x->text('info')->span('div(')
      . $dollar . $x->text('danger')->span('card')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This is a longer card...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('card') . ' = '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('col()')
      . '->' . $x->text('info')->span('div(')
      . $dollar . $x->text('danger')->span('card')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This is a longer card...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('card') . ' = '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('col()')
      . '->' . $x->text('info')->span('div(')
      . $dollar . $x->text('danger')->span('card')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardimgtop(')
      . $x->text('warning')->span("'...', '...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtitle(')
      . $x->text('warning')->span("'Card title'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardtext(')
      . $x->text('warning')->span("'This is a longer card...'")
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('cardbody()') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('card') . ' = '
      . $xx . '->' . $x->text('info')->span('card()') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('col()')
      . '->' . $x->text('info')->span('div(')
      . $dollar . $x->text('danger')->span('card')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'row-cols-1'")
      . $cp . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'row-cols-md-2'")
      . $cp . '->' . $x->text('info')->span('g(')
      . $x->text('warning')->span("'4'")
      . $cp . '->' . $x->text('info')->span('row()') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="row row-cols-1 row-cols-md-2 g-4">' . PHP_EOL
      . ' <div class="col">' . PHP_EOL
      . '   <div class="card">' . PHP_EOL
      . '     <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . '     <div class="card-body">' . PHP_EOL
      . '       <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '       <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="col">' . PHP_EOL
      . '   <div class="card">' . PHP_EOL
      . '     <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . '     <div class="card-body">' . PHP_EOL
      . '       <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '       <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="col">' . PHP_EOL
      . '   <div class="card">' . PHP_EOL
      . '     <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . '     <div class="card-body">' . PHP_EOL
      . '       <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '       <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . ' <div class="col">' . PHP_EOL
      . '   <div class="card">' . PHP_EOL
      . '     <img src="..." class="card-img-top" alt="...">' . PHP_EOL
      . '     <div class="card-body">' . PHP_EOL
      . '       <h5 class="card-title">Card title</h5>' . PHP_EOL
      . '       <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>' . PHP_EOL
      . '     </div>' . PHP_EOL
      . '   </div>' . PHP_EOL
      . ' </div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Grid Cards', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Cards');
    $content .= $x->text('center')->lead('Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
