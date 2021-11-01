<?php

namespace splittlogic\bs5\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use splittlogic\bs5\bs5;
use splittlogic\html\html;

class bs5ProgressController extends Controller
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
      . $x->p($x->htmlchar('Progress components are built with two HTML elements, some CSS to set the width, and a few attributes. We don’t use the HTML5 <progress> element, ensuring you can stack progress bars, animate them, and place text labels over them.'));
    $x->text('center')->div($p);
    $x->row();

    $x->li('We use the .progress as a wrapper to indicate the max value of the progress bar.');
    $x->li('We use the inner .progress-bar to indicate the progress so far.');
    $x->li('The .progress-bar requires an inline style, utility class, or custom CSS to set their width.');
    $x->li('The .progress-bar also requires some role and aria attributes to make it accessible.');
    $p = $x->ul();
    $x->div($p);
    $x->row();

    $p = $x->p('Put that all together, and you have the following examples.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->progressbar()
      . $x->mt('1')->valuenow(25)->progressbar()
      . $x->mt('1')->valuenow(50)->progressbar()
      . $x->mt('1')->valuenow(75)->progressbar()
      . $x->mt('1')->valuenow(100)->progressbar();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = '// valuenow(), valuemin(), & valuemax() can be used to set custom values.  The default values if not called are:' . PHP_EOL
      . 'now = 0' . PHP_EOL
      . 'min = 0' . PHP_EOL
      . 'max = 100' . PHP_EOL
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'25'")
      . $cp . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'50'")
      . $cp . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'75'")
      . $cp . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'100'")
      . $cp . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Progressbar', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('labels')->h4('Labels')
      . $x->p('Add labels to your progress bars by placing text within the .progress-bar.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->valuenow(25)->progressbar('25%');
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'25'")
      . $cp . '->' . $x->text('info')->span('progressbar(')
      . $x->text('warning')->span("'25%'")
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Labels', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('height')->h4('Height')
      . $x->p('We only set a height value on the .progress, so if you change that value the inner .progress-bar will automatically resize accordingly.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->astyle('height: 1px;')->valuenow(25)->progressbar()
      . $br
      . $x->astyle('height: 20px;')->valuenow(25)->progressbar();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'height: 1px;'")
      . $cp . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'25'")
      . $cp . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'height: 20px;'")
      . $cp . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'25'")
      . $cp . '->' . $x->text('info')->span('progressbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="progress" style="height: 1px;">' . PHP_EOL
      . ' <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="progress" style="height: 20px;">' . PHP_EOL
      . ' <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Height', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('backgrounds')->h4('Backgrounds')
      . $x->p('Use background utility classes to change the appearance of individual progress bars.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->success()->valuenow(25)->progressbar()
      . $br
      . $x->info()->valuenow(50)->progressbar()
      . $br
      . $x->warning()->valuenow(75)->progressbar()
      . $br
      . $x->danger()->valuenow(100)->progressbar();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'25'")
      . $cp . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('info()')
      . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'50'")
      . $cp . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'75'")
      . $cp . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'100'")
      . $cp . '->' . $x->text('info')->span('progressbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Backgrounds', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('multiple')->h4('Multiple Bars')
      . $x->p('Include multiple progress bars in a progress component if you need.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->class('progress-bar')->role('progressbar')->astyle('width: 15%;')->aria('valuenow', '15')->aria('valuemin', '0')->aria('valuemax', '100')->adiv()
      . $x->class('progress-bar')->bg('success')->role('progressbar')->astyle('width: 30%;')->aria('valuenow', '30')->aria('valuemin', '0')->aria('valuemax', '100')->adiv()
      . $x->class('progress-bar')->bg('info')->role('progressbar')->astyle('width: 20%;')->aria('valuenow', '20')->aria('valuemin', '0')->aria('valuemax', '100')->adiv();
    $p = $x->class('progress')->adiv($p);
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('bars') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'progress-bar'")
      . $cp . '->' . $x->text('info')->span('role(')
      . $x->text('warning')->span("'progressbar'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 15%;'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'valuenow', '15'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'valuemin', '0'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'valuemax', '100'")
      . $cp . '->' . $x->text('info')->span('adiv()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'progress-bar'")
      . $cp . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'success'")
      . $cp . '->' . $x->text('info')->span('role(')
      . $x->text('warning')->span("'progressbar'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 30%;'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'valuenow', '30'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'valuemin', '0'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'valuemax', '100'")
      . $cp . '->' . $x->text('info')->span('adiv()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'progress-bar'")
      . $cp . '->' . $x->text('info')->span('bg(')
      . $x->text('warning')->span("'info'")
      . $cp . '->' . $x->text('info')->span('role(')
      . $x->text('warning')->span("'progressbar'")
      . $cp . '->' . $x->text('info')->span('astyle(')
      . $x->text('warning')->span("'width: 20%;'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'valuenow', '20'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'valuemin', '0'")
      . $cp . '->' . $x->text('info')->span('aria(')
      . $x->text('warning')->span("'valuemax', '100'")
      . $cp . '->' . $x->text('info')->span('adiv()')
      . $colon
      . PHP_EOL
      . $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('class(')
      . $x->text('warning')->span("'progress'")
      . $cp . '->' . $x->text('info')->span('adiv(')
      . $dollar . $x->text('danger')->span('bars')
      . $cp . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . ' <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . ' <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Multiple Bars', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('striped')->h4('Striped')
      . $x->p('Add .progress-bar-striped to any .progress-bar to apply a stripe via CSS gradient over the progress bar’s background color.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->valuenow(10)->striped()->progressbar()
      . $br
      . $x->valuenow(25)->success()->striped()->progressbar()
      . $br
      . $x->valuenow(50)->info()->striped()->progressbar()
      . $br
      . $x->valuenow(75)->warning()->striped()->progressbar()
      . $br
      . $x->valuenow(100)->danger()->striped()->progressbar();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'10'")
      . $cp . '->' . $x->text('info')->span('striped()')
      . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'25'")
      . $cp . '->' . $x->text('info')->span('success()')
      . '->' . $x->text('info')->span('striped()')
      . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'50'")
      . $cp . '->' . $x->text('info')->span('info()')
      . '->' . $x->text('info')->span('striped()')
      . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'75'")
      . $cp . '->' . $x->text('info')->span('warning()')
      . '->' . $x->text('info')->span('striped()')
      . '->' . $x->text('info')->span('progressbar()')
      . PHP_EOL
      . ' . '
      . $xx . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'100'")
      . $cp . '->' . $x->text('info')->span('danger()')
      . '->' . $x->text('info')->span('striped()')
      . '->' . $x->text('info')->span('progressbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
      . '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Striped', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->id('animated')->h4('Animated Stripes')
      . $x->p('The striped gradient can also be animated. Add .progress-bar-animated to .progress-bar to animate the stripes right to left via CSS3 animations.');
    $x->text('center')->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $x->valuenow(75)->striped()->animated()->progressbar();
    $x->border()->pad(3)->div($p);
    $x->row();

    $x->div($br);
    $x->row();

    $p = $dollar . $x->text('danger')->span('content') . ' = '
      . $xx . '->' . $x->text('info')->span('valuenow(')
      . $x->text('warning')->span("'75'")
      . $cp . '->' . $x->text('info')->span('striped()')
      . '->' . $x->text('info')->span('animated()')
      . '->' . $x->text('info')->span('progressbar()')
      . $colon
      . PHP_EOL
      . PHP_EOL;
    $p .= $x->htmlchar(
      '<div class="progress">' . PHP_EOL
      . ' <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>' . PHP_EOL
      . '</div>' . PHP_EOL
    );
    $p = $x->pre($p);
    $p = $x->code($p);
    $p = $x->aboutHtmlCard(
      'Animated Stripes', null, $p
    );
    $x->col()->div();
    $x->col(10)->div($p);
    $x->col()->div();
    $x->row();

    $x->div($br);
    $x->row();

    $content = $x->text('center')->h1('Progress');
    $content .= $x->text('center')->lead('Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.');
    $content .= $br;
    $content .= $x->container();

    return bs5::make()->aboutView($content);

  }


}
