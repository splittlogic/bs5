<?php


/*
|--------------------------------------------------------------------------
| about - Trait to display how-to of bootstrap 5 package
|--------------------------------------------------------------------------
|
| Required Traits:
|   setget
|
|
*/


namespace splittlogic\bs5\Traits;


trait about
{


  // Returned preformatted about code in a div
  public function aboutCode($code, $title = null)
  {

    // Build return
    $return = null;

    $return = $this->code($code);
    $return = $this->col()
      ->class('card')
      ->class('d-flex')
      ->align('items-center')
      ->justify('content-center')
      ->class('m-1')
      ->div($return);

    return $return;

  }


  // Return about page error
  public function aboutError()
  {

    $error = 'The page requested does not exist.  Please use menu links to navigate this guide.';
    $error = $this->class('alert alert-danger text-center')->adiv($error);
    $link = $this->a('Splittlogic/bs5', route('splittlogic.bs5'));
    $error .= $this->text('center')->h1($link);

    return $error;

  }


  // About HTML Card
  public function aboutHtmlCard($header = null, $title = null, $content = null, $headerBG = null, $headerText = null)
  {

    // Check for title BG
    if (!is_null($headerBG))
    {

      $this->class('bg-' . $headerBG);

    }

    if (!is_null($headerText))
    {

      $this->class('text-' . $headerText);

    }

    $header = $this->class('card-header')
      ->adiv($header);

    $title = $this->class('card-title')
      ->h5($title);

    $body = $this->class('card-body')
      ->class('bg-dark')
      ->adiv($title . $content);

    return $this->class('card')
      ->adiv($header . $body);

  }


  // Return about page settings
  public function aboutView($content = null)
  {

    // Set meta data
    $this->charset('utf-8')->meta();
    $this->name('viewport')->acontent('width=device-width, initial-scale=1')->meta();

    // Set css
    $this->css(asset('vendor/splittlogic/css/bootstrap.min.css'));
    $this->css(asset('vendor/splittlogic/css/bootstrap-icons-1.5.0/bootstrap-icons.css'));

    // Set js
    $this->js(asset('vendor/splittlogic/js/bootstrap.bundle.min.js'));

    // Create style
    $this->style('
      #main {
        width: 100%;
        min-height: 100vh;
        flex-direction: column;
        padding-top: 15px;
        padding-bottom: 15px;
      }

      #menu-sticky {
        position: sticky;
        top: 0;
        left: 0;
        display: flex;
        height: 100vh;
        width: 265px;
      }

      #menu-wrapper {
        background-color: #222e3c;
        height: 100%;
        display: block;
        min-width: 265px;
        max-width: 265px;
        max-height: 100%;
        overflow: hidden scroll;
      }

      #menu-wrapper::-webkit-scrollbar-track
      {
      	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      	border-radius: 6px;
      	background-color: #F5F5F5;
      }

      #menu-wrapper::-webkit-scrollbar
      {
      	width: 6px;
      	background-color: #F5F5F5;
      }

      #menu-wrapper::-webkit-scrollbar-thumb
      {
      	border-radius: 10px;
      	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
      	background-color: #518be1;
      }

      #sidebar {
        min-width: 265px;
        max-width: 265px;
      }

      #sidebar-nav a:link {
        color: #e9ecef;
        display: block;
        padding: 8px;
        padding-left: 20px;
        width: 100%;
        text-decoration: none;
      }

      #sidebar-nav a:hover {
        color: #518be1;
      }

      #sidebar-nav .sub-nav-link.active {
        color: #518be1;
      }

      #sidebar-nav .top-nav-link.active, #sidebar-nav .opened {
        color: #e9ecef;
        border-left: 4px solid #3b7ddd;
        background: linear-gradient(90deg, rgba(59,125,221,.1), rgba(59,125,221,.0875) 50%, transparent);
      }

      #sidebar-nav button {
        color: #e9ecef;
      }

      #sidebar-nav ul .sub-nav-link {
        padding-left: 40px;
      }

      #wrapper {
        align-items: stretch;
        display: flex;
        width: 100%;
      }
    ');

    // Create menu
    $menu = $this
      ->flex('column')
      ->arrayToNav(
        $this->menuElemArray()
      );

    // Create sidebar
    $sidebar = $this
      ->id('menu-wrapper')
      ->adiv($menu . '<br>');
    $sidebar = $this
      ->id('menu-sticky')
      ->adiv($sidebar);
    $sidebar = $this
      ->id('sidebar')
      ->adiv($sidebar);

    // Put content in a container
    $content = $this
      ->col()
      ->adiv($content);
    $content = $this
      ->class('row')
      ->adiv($content);
    $content = $this
      ->class('container')
      ->adiv($content);

    // Create main
    $main = $this
      ->id('main')
      ->adiv($content);

    // Create wrapper
    $content = $this
      ->id('wrapper')
      ->adiv($sidebar . $main);

    return view('bs5::blank',['content' => $content]);

  }


  // Return Element Menu Array
  public function menuElemArray()
  {

    $data = [
      'menu-settings' => [
        'id' => 'sidebar-nav',
        'subnav-class' => [
          'list-unstyled'
        ]
      ],

      'Getting Started' => [
        'subs' => [
          'Splittlogic/html' => [
            'href' => route('splittlogic.bs5.start', 'html')
          ],
          'Changed Element Functions' => [
            'href' => '#'
          ],
          'Grid' => [
            'href' => route('splittlogic.bs5.start', 'grid')
          ],
          'Columns' => [
            'href' => route('splittlogic.bs5.start', 'columns')
          ],
          'Gutters' => [
            'href' => route('splittlogic.bs5.start', 'gutters')
          ],
          'Background' => [
            'href' => route('splittlogic.bs5.start', 'background')
          ],
          'Borders' => [
            'href' => route('splittlogic.bs5.start', 'borders')
          ],
          'Colors' => [
            'href' => route('splittlogic.bs5.start', 'colors')
          ],
          'Display' => [
            'href' => route('splittlogic.bs5.start', 'display')
          ],
          'Float' => [
            'href' => route('splittlogic.bs5.start', 'float')
          ],
          'Interactions' => [
            'href' => route('splittlogic.bs5.start', 'interactions')
          ],
          'Overflow' => [
            'href' => route('splittlogic.bs5.start', 'overflow')
          ],
          'Position' => [
            'href' => route('splittlogic.bs5.start', 'position')
          ],
          'Shadow' => [
            'href' => route('splittlogic.bs5.start', 'shadow')
          ],
          'Sizing' => [
            'href' => route('splittlogic.bs5.start', 'sizing')
          ],
          'Spacing' => [
            'href' => route('splittlogic.bs5.start', 'spacing')
          ],
          'Text' => [
            'href' => route('splittlogic.bs5.start', 'text')
          ],
          'Vertical Alignment' => [
            'href' => route('splittlogic.bs5.start', 'vertical')
          ],
          'Visibility' => [
            'href' => route('splittlogic.bs5.start', 'visibility')
          ]
        ]
      ],

      'Contents' => [
        'subs' => [
          'Typography' => [
            'href' => route('splittlogic.bs5.contents', 'typography')
          ],
          'Images' => [
            'href' => route('splittlogic.bs5.contents', 'images')
          ],
          'Tables' => [
            'href' => route('splittlogic.bs5.contents', 'tables')
          ],
          'Icons' => [
            'href' => route('splittlogic.bs5.contents', 'icons')
          ]
        ]
      ],

      'Forms' => [
        'subs' => [
          'Overview' => [
            'href' => route('splittlogic.bs5.forms', 'overview')
          ],
          'Form control' => [
            'href' => route('splittlogic.bs5.forms', 'control')
          ],
          'Select' => [
            'href' => route('splittlogic.bs5.forms', 'select')
          ],
          'Checks & radios' => [
            'href' => route('splittlogic.bs5.forms', 'checksandradios')
          ],
          'Range' => [
            'href' => route('splittlogic.bs5.forms', 'range')
          ],
          'Input group' => [
            'href' => route('splittlogic.bs5.forms', 'input')
          ],
          'Floating Labels' => [
            'href' => route('splittlogic.bs5.forms', 'floating')
          ],
          'Layout' => [
            'href' => route('splittlogic.bs5.forms', 'layout')
          ],
          'Validation' => [
            'href' => route('splittlogic.bs5.forms', 'validation')
          ]
        ]
      ],

      'Components' => [
        'subs' => [
          'Accordion' => [
            'href' => route('splittlogic.bs5.components.accordion')
          ],
          'Alerts' => [
            'href' => route('splittlogic.bs5.components.alerts')
          ],
          'Badge' => [
            'href' => route('splittlogic.bs5.components.badges')
          ],
          'Breadcrumb' => [
            'href' => route('splittlogic.bs5.components.breadcrumbs')
          ],
          'Buttons' => [
            'href' => route('splittlogic.bs5.components.buttons')
          ],
          'Button group' => [
            'href' => route('splittlogic.bs5.components.buttongroup')
          ],
          'Cards' => [
            'href' => route('splittlogic.bs5.components.cards')
          ],
          'Carousel' => [
            'href' => route('splittlogic.bs5.components.carousel')
          ],
          'Collapse' => [
            'href' => route('splittlogic.bs5.components.collapse')
          ],
          'Dropdowns' => [
            'href' => route('splittlogic.bs5.components.dropdowns')
          ],
          'List group' => [
            'href' => route('splittlogic.bs5.components.listgroup')
          ],
          'Modal' => [
            'href' => route('splittlogic.bs5.components.modal')
          ],
          'Navs & Tabs' => [
            'href' => route('splittlogic.bs5.components.navsandtabs')
          ],
          'Navs' => [
            'href' => route('splittlogic.bs5.components', 'navs')
          ],
          'Navbar' => [
            'href' => route('splittlogic.bs5.components', 'navbar')
          ],
          'Offcanvas' => [
            'href' => route('splittlogic.bs5.components', 'offcanvas')
          ],
          'Pagination' => [
            'href' => route('splittlogic.bs5.components.pagination')
          ],
          'Placeholders' => [
            'href' => route('splittlogic.bs5.components.placeholders')
          ],
          'Popover' => [
            'href' => route('splittlogic.bs5.components.popovers')
          ],
          'Progress' => [
            'href' => route('splittlogic.bs5.components.progress')
          ],
          'Scrollspy' => [
            'href' => route('splittlogic.bs5.components.scrollspy')
          ],
          'Spinners' => [
            'href' => route('splittlogic.bs5.components.spinners')
          ],
          'Toasts' => [
            'href' => route('splittlogic.bs5.components.toast')
          ],
          'Tooltips' => [
            'href' => route('splittlogic.bs5.components.tooltips')
          ]
        ]
      ],

      'Helpers' => [
        'subs' => [
          'arrayToNav' => [
            'href' => route('splittlogic.bs5.helpers', 'arraytonav')
          ]
        ]
      ]

    ];

    return $data;

  }


}
