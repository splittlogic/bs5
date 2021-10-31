<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\bs5\bs5;

class bs5BadgesController extends Controller
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
      . $x->p('Badges scale to match the size of the immediate parent element by using relative font sizing and em units. As of v5, badges no longer have focus or hover styles for links.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('headings')->h4('Headings');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->badge('New', 'secondary');
    $p = $x->h1('Example heading ' . $c)
      . $x->h2('Example heading ' . $c)
      . $x->h3('Example heading ' . $c)
      . $x->h4('Example heading ' . $c)
      . $x->h5('Example heading ' . $c)
      . $x->h6('Example heading ' . $c);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('badge') . ' = '
      . $xx . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'New', 'secondary'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('h1(')
      . $x->text('warning')->span("'Example heading '")
      . ' . '
      . $dollar . $x->text('danger')->span('badge')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('h2(')
      . $x->text('warning')->span("'Example heading '")
      . ' . '
      . $dollar . $x->text('danger')->span('badge')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('h3(')
      . $x->text('warning')->span("'Example heading '")
      . ' . '
      . $dollar . $x->text('danger')->span('badge')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('h4(')
      . $x->text('warning')->span("'Example heading '")
      . ' . '
      . $dollar . $x->text('danger')->span('badge')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('h5(')
      . $x->text('warning')->span("'Example heading '")
      . ' . '
      . $dollar . $x->text('danger')->span('badge')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('h6(')
      . $x->text('warning')->span("'Example heading '")
      . ' . '
      . $dollar . $x->text('danger')->span('badge')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<h1>Example heading <span class="badge bg-secondary">New</span></h1>' . PHP_EOL
      . '<h2>Example heading <span class="badge bg-secondary">New</span></h2>' . PHP_EOL
      . '<h3>Example heading <span class="badge bg-secondary">New</span></h3>' . PHP_EOL
      . '<h4>Example heading <span class="badge bg-secondary">New</span></h4>' . PHP_EOL
      . '<h5>Example heading <span class="badge bg-secondary">New</span></h5>' . PHP_EOL
      . '<h6>Example heading <span class="badge bg-secondary">New</span></h6>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Headings', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('buttons')->h4('Buttons')
      . $x->p('Badges can be used as part of links or buttons to provide a counter.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $c = $x->badge(4, 'secondary');
    $p = $x->type('button')->cbtn()->cbtn('primary')->button('Notifications ' . $c);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('Note that depending on how they are used, badges may be confusing for users of screen readers and similar assistive technologies. While the styling of badges provides a visual cue as to their purpose, these users will simply be presented with the content of the badge. Depending on the specific situation, these badges may seem like random additional words or numbers at the end of a sentence, link, or button.')
      . $x->p('Unless the context is clear (as with the “Notifications” example, where it is understood that the “4” is the number of notifications), consider including additional context with a visually hidden piece of additional text.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('positioned')->h4('Positioned')
      . $x->p('Use utilities to modify a .badge and position it in the corner of a link or button.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->visually('hidden')->span('unread messages');
    $p = $x->position('absolute')->top(0)->start(100)->translate('middle')->rounded('pill')->badge('99+' . $p, 'danger');
    $p = $x->type('button')->cbtn()->cbtn('primary')->position('relative')->button('Inbox' . $p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('hidden') . ' = '
      . $xx . '->' . $x->text('info')->span('visually(')
      . $x->text('warning')->span("'hidden'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('span(')
      . $x->text('warning')->span("'unread messages'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('badge') . ' = '
      . $xx . '->' . $x->text('info')->span('position(')
      . $x->text('warning')->span("'absolute'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('top(')
      . $x->text('warning')->span('0')
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('start(')
      . $x->text('warning')->span('100')
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('translage(')
      . $x->text('warning')->span("'middle'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'99+'")
      . ' . '
      . $dollar . $x->text('danger')->span('hidden')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'button'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'primary'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('position(')
      . $x->text('warning')->span("'relative'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('button(')
      . $x->text('warning')->span("'Inbox'")
      . ' . '
      . $dollar . $x->text('danger')->span('badge')
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-primary position-relative">' . PHP_EOL
      . ' Inbox' . PHP_EOL
      . ' <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">' . PHP_EOL
      . '   99+' . PHP_EOL
      . '   <span class="visually-hidden">unread messages</span>' . PHP_EOL
      . ' </span>' . PHP_EOL
      . '</button>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Positioned', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->p('You can also replace the .badge class with a few more utilities without a count for a more generic indicator.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->visually('hidden')->span('New alerts');
    $p = $x->position('absolute')->top(0)->start(100)->translate('middle')->pad(2)->border()->border('light')->rounded('circle')->bg('danger')->span($p);
    $p = $x->type('button')->cbtn()->cbtn('primary')->position('relative')->button('Profile' . $p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('span') . ' = '
      . $xx . '->' . $x->text('info')->span('visually(')
      . $x->text('warning')->span("'hidden'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('span(')
      . $x->text('warning')->span("'hidden'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('span') . ' = '
      . $xx . '->' . $x->text('info')->span('position(')
      . $x->text('warning')->span("'absolute'")
      . $x->text('info')->span(')')
      . '->' . $x->text('info')->span('top(')
      . $x->text('warning')->span("'0'")
      . $cp . '->' . $x->text('info')->span('start(')
      . $x->text('warning')->span("'100'")
      . $cp . '->' . $x->text('info')->span('translate(')
      . $x->text('warning')->span("'middle'")
      . $cp . '->' . $x->text('info')->span('pad(')
      . $x->text('warning')->span("'2'")
      . $cp . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'danger'")
      . $cp . '->' . $x->text('info')->span('border()')
      . '->' . $x->text('info')->span('border(')
      . $x->text('warning')->span("'light'")
      . $cp . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'circle'")
      . $cp . '->' . $x->text('info')->span('span(')
      . $dollar . $x->text('danger')->span('span')
      . $cp . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('type(')
      . $x->text('warning')->span("'button'")
      . $cp . '->' . $x->text('info')->span('cbtn()')
      . '->' . $x->text('info')->span('cbtn(')
      . $x->text('warning')->span("'primary'")
      . $cp . '->' . $x->text('info')->span('position(')
      . $x->text('warning')->span("'relative'")
      . $cp . '->' . $x->text('info')->span('button(')
      . $x->text('warning')->span("'Profile'")
      . ' . ' . $dollar . $x->text('danger')->span('span')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<button type="button" class="btn btn-primary position-relative">' . PHP_EOL
      . ' Profile' . PHP_EOL
      . ' <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">' . PHP_EOL
      . '   <span class="visually-hidden">New alerts</span>' . PHP_EOL
      . ' </span>' . PHP_EOL
      . '</button>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      '2nd Positioned', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('background')->h4('Background Colors')
      . $x->p('Use our background utility classes to quickly change the appearance of a badge. Please note that when using Bootstrap’s default .bg-light, you’ll likely need a text color utility like .text-dark for proper styling. This is because background utilities do not set anything but background-color.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->mx(2)->badge('Primary', 'primary')
      . $x->mx(2)->badge('Secondary', 'secondary')
      . $x->mx(2)->badge('Success', 'success')
      . $x->mx(2)->badge('Danger', 'danger')
      . $x->mx(2)->text('dark')->badge('Warning', 'warning')
      . $x->mx(2)->text('dark')->badge('Info', 'info')
      . $x->mx(2)->text('dark')->badge('Light', 'light')
      . $x->mx(2)->badge('Dark', 'dark');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Primary', 'primary'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Secondary', 'secondary'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Success', 'success'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Danger', 'danger'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Warning', 'warning'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Info', 'info'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Light', 'light'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Dark', 'dark'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<span class="badge bg-primary">Primary</span>' . PHP_EOL
      . '<span class="badge bg-secondary">Secondary</span>' . PHP_EOL
      . '<span class="badge bg-success">Success</span>' . PHP_EOL
      . '<span class="badge bg-danger">Danger</span>' . PHP_EOL
      . '<span class="badge bg-warning text-dark">Warning</span>' . PHP_EOL
      . '<span class="badge bg-info text-dark">Info</span>' . PHP_EOL
      . '<span class="badge bg-light text-dark">Light</span>' . PHP_EOL
      . '<span class="badge bg-dark">Dark</span>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Background Colors', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('conveying')->h4('Conveying meaning to assistive technologies')
      . $x->p('Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the .visually-hidden class.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('pill')->h4('Pill badges')
      . $x->p('Use the .rounded-pill utility class to make badges more rounded with a larger border-radius.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->mx(2)->rounded('pill')->badge('Primary', 'primary')
      . $x->mx(2)->rounded('pill')->badge('Secondary', 'secondary')
      . $x->mx(2)->rounded('pill')->badge('Success', 'success')
      . $x->mx(2)->rounded('pill')->badge('Danger', 'danger')
      . $x->mx(2)->rounded('pill')->text('dark')->badge('Warning', 'warning')
      . $x->mx(2)->rounded('pill')->text('dark')->badge('Info', 'info')
      . $x->mx(2)->rounded('pill')->text('dark')->badge('Light', 'light')
      . $x->mx(2)->rounded('pill')->badge('Dark', 'dark');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $xx . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $cp
      . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Primary', 'primary'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $cp
      . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Secondary', 'secondary'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $cp
      . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Success', 'success'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $cp
      . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Danger', 'danger'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $cp
      . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Warning', 'warning'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $cp
      . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Info', 'info'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $cp
      . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Light', 'light'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . $xx . '->' . $x->text('info')->span('rounded(')
      . $x->text('warning')->span("'pill'")
      . $cp
      . '->' . $x->text('info')->span('badge(')
      . $x->text('warning')->span("'Dark', 'dark'")
      . $x->text('info')->span(')') . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<span class="badge bg-primary">Primary</span>' . PHP_EOL
      . '<span class="badge rounded-pill bg-secondary">Secondary</span>' . PHP_EOL
      . '<span class="badge rounded-pill bg-success">Success</span>' . PHP_EOL
      . '<span class="badge rounded-pill bg-danger">Danger</span>' . PHP_EOL
      . '<span class="badge rounded-pill bg-warning text-dark">Warning</span>' . PHP_EOL
      . '<span class="badge rounded-pill bg-info text-dark">Info</span>' . PHP_EOL
      . '<span class="badge rounded-pill bg-light text-dark">Light</span>' . PHP_EOL
      . '<span class="badge rounded-pill bg-dark">Dark</span>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Background Colors', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Badges');
    $content .= $x->text('center')->lead('Documentation and examples for badges, our small count and labeling component.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
