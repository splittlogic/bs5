<?php


/*
|--------------------------------------------------------------------------
| elements - Trait to create bootstrap 5 elements
|--------------------------------------------------------------------------
|
| Required Traits:
|   setget
|   settings
|
| accordion()       - Create accordion component from saved aitem(s)
| adiv()            - Create div element without saving
| aitems()          - Save aitem
| alert()           - Create alert element
| alerthead()       - Create alert heading element
| alertlink()       - Create alert link element
| badge()           - Create badge element
| bgbtn()           - Create btn button element and save btn
| bgbtna()          - Create btn anchor element and save btna
| bgroup()          - Create btn group element from given content or saved btn or btna
| bitem()           - Create breadcrumb item & save bitem(s)
| blockquote()      - Create blockquote element
| breadcrumb()      - Create breadcrumb element from saved bitems
| btn()             - Create btn button element
| btna()            - Create a btn anchor element
| card()            - Create card element from given content or saved card
| cardbody()        - Create card body element and save to cardbody
| cardfooter()      - Create card footer element and save to cardfooter
| cardheader()      - Create card header element and save to cardheader
| cardimgbottom()   - Create card img bottom element and save to cardimgbottom
| cardimgoverlay()  - Create card img overlay element and save to cardoverlay
| cardimgtop()      - Create card img top element and save to card
| cardlink()        - Create card link element
| cardtext()        - Create card text element and save cardtext
| cardsubtitle()    - Create card subtitle element and save cardsubtitle
| cardtitle()       - Create card title element and save cardtitle
| carousel()        - Create carousel from given content or saved citems
| citem()           - Create carousel item and save citems
| container()       - Create container div from given content or saved row(s)
| ddivider()        - Create dropdown divider element and save to ditems
| dheader()         - Create dropdown header element and save to ditems
| div()             - Create div element and save div
| ditem()           - Create dropdown item from given content or saved dlink & save dtiems
| dlink()           - Create dropdown link of dropdown item and save dlink
| dropdown()        - Create dropdown element from saved ditems or dlinks
| dtext()           - Create dropdown text of dropdown item and save dlink
| icon()            - Create bootstrap icon element
| img()             - Create img element and allow fluid & thumbnail setting
| lead()            - Create lead paragraph element
| litem()           - Create list group item
| litema()          - Create list group anchor item
| litemb()          - Create list group button item
| liteml()          - Create list group label item
| livealert()       - Create live alert element
| modal()           - Create modal element from given content or saved modal variables
| modalbody()       - Create modal body and save variable
| modalbutton()     - Create modal launch button
| modalcontent()    - Create modal content element from given content or saved modal variables
| modaldialog()     - Create modal dialog element from given content or saved modal variables
| modalfooter()     - Create modal footer and save variable
| modalheader()     - Create modal header element from given content or saved modal variables
| modaltitle()      - Create modal title and save variable
| nav()             - Create nav element from given content or save navlink(s) and navitem(s)
| navbar()          - Create navbar element from given content or save variables
| navitem()         - Create nav-item element from given content or saved navlink(s) & save navitem(s)
| navlink()         - Create nav-link element & save navlink(s)
| nbbrand()         - Create navbar-brand element and save navbarbrand
| nbitem()          - Create navbar item element
| nblist()          - Create navbar list element
| nblink()          - Create navbar link element
| nbmenu()          - Create navbar menu element
| nbtext()          - Create navbar text element and save variable
| offcanvas()       - Create offcanvas element from given content or saved offcanvas variables
| offcanvasbody()   - Create offcanvas body element from given content and save variable
| offcanvasbutton() - Create offcanvas launch button
| offcanvasheader() - Create offcanvas header element from given content or saved variable and save variable
| offcanvastitle()  - Create offcanvas title element from given content and save variable
| pagination()      - Create pagination element from content or saved variables
| pitem()           - Create pagination item element and save pitem
| plink()           - Create pagination link element and save plink
| progressbar()     - Create progress bar element
| pul()             - Create pagination ul element and save pul
| row()             - Create row div from given content or saved div(s) & save row(s)
| scrollspy()       - Create scrollspy element from given content or saved sitem(s)
| sid()             - Return last set id of scrollspy item element & reset sid
| sitem()           - Create scrollspy item element & save sitem
| spinner()         - Create spinner element
| subnav()          - Create sub nav element from given content or save subnavlink(s) and subnavitem(s)
| subnavitem()      - Create sub nav-item element from given content or save subnavlink(s) & save subnavitem(s)
| subnavlink()      - Create sub nav-link element & save subnavlink(s)
| tab()             - Save tab element to be called by tabs()
| tabs()            - Create tabs from saved tabs
| table()           - Create table element from given content or saved content
| td()              - Create table cell element & save for tr call
| tfoot()           - Create table footer row container element & save for table call
| tgroup()          - Create btn group element from given content or saved btn or btna and save tgroup for toolbar
| th()              - Create table header cell element & save for tr call
| thead()           - Create table header row container element & save for table call
| toast()           - Create toast element from given content or saved variables
| toastbody()       - Create toast body element and save
| toastbutton()     - Create toast launch button
| toastcontainer()  - Create toast container element
| toastheader()     - Create toast header element & save toast header
| toastsmall()      - Create toast small title and save
| toasttitle()      - Create toast title and save
| tr()              - Create table row element & save for thead, tbody, or table call
*/


namespace splittlogic\bs5\Traits;

use splittlogic\html\html;
use Illuminate\Support\Str;


trait elements
{


  // Create accordian component from saved aitem(s)
  public function accordion()
  {

    // Set return
    $return = null;

    // Get aitems
    $items = $this->getSave('aitem');

    // Check for items
    if (is_array($items))
    {

      // Check for always open
      $alwaysopen = false;
      if ($this->getSetting('alwaysopen') == true)
      {

        $alwaysopen = true;

      }

      // Save settings
      $this->saveSet('accordion');

      // Set accordion id
      $accordionID = $this->setID();

      // Cycle through items
      foreach ($items as $item)
      {

        // Set show, expanded, and collapsed
        $show = null;
        $expanded = 'false';
        $collapsed = ' collapsed';

        // Set Heading id
        $headingID = $this->setID();

        // Set Body id
        $bodyID = $this->setID();

        // Check if show is set
        if (!is_null($item['show']))
        {

          $show = ' show';
          $expanded = 'true';
          $collapsed = null;

        }

        // Create item heading
        $heading = $this->class('accordion-button' . $collapsed)
          ->type('button')
          ->data('bs-toggle', 'collapse')
          ->data('bs-target', '#' . $bodyID)
          ->aria('expanded', $expanded)
          ->aria('controls', $bodyID)
          ->button($item['heading']);
        $heading = $this->class('accordion-header')
          ->id($headingID)
          ->h2($heading);

        // Create item body
        $body = $this->class('accordion-body')
          ->adiv($item['body']);
        $this->id($bodyID)
          ->class('accordion-collapse collapse' . $show)
          ->aria('labelledby', $headingID);

        // Check for always open
        if ($alwaysopen == false)
        {

          $this->data('bs-parent', '#' . $accordionID);

        }

        $body = $this->adiv($body);

        // Add to return
        $return .= $this->class('accordion-item')
          ->adiv($heading . $body);

      }

      // Reset aitems
      $this->reset('aitem');

      // Restore settings
      $this->restore('accordion');

      // Check for flush
      $accordionFlush = null;
      if ($this->getSetting('flush') == true)
      {

        $accordionFlush = ' accordion-flush';

      }

      // Wrap accordion items in accordion
      $return = $this->class('accordion' . $accordionFlush)
        ->id($accordionID)
        ->adiv($return);

    }

    //Return
    return $return;

  }


  // Create div element without saving
  public function adiv($content = null)
  {

    // Create element
    return html::make()->div($content);

  }


  // Save aitem
  public function aitem($heading = null, $body = null, $show = null)
  {

    // Check for show
    if (is_null($show))
    {

      if ($this->getSetting('show') == true)
      {

        $show = 'true';

      }

    }

    // Save accordion item values
    $this->save('aitem', ['heading' => $heading, 'body' => $body, 'show' => $show]);

  }


  // Create alert element
  public function alert($message = null, $color = null)
  {

    // Check if color is set
    if (is_null($color))
    {

      // Check for color
      if ($this->getSetting('primary') == true)
      {

        $color = 'primary';

      } elseif ($this->getSetting('secondary') == true) {

        $color = 'secondary';

      } elseif ($this->getSetting('success') == true) {

        $color = 'success';

      } elseif ($this->getSetting('danger') == true) {

        $color = 'danger';

      } elseif ($this->getSetting('warning') == true) {

        $color = 'warning';

      } elseif ($this->getSetting('info') == true) {

        $color = 'info';

      } elseif ($this->getSetting('light') == true) {

        $color = 'light';

      } elseif ($this->getSetting('dark') == true) {

        $color = 'dark';

      }

    }

    // Check for dismissible
    if ($this->getSetting('dismissible') == true)
    {

      $this->saveSet('alert');

      $btn = $this->type('button')->cbtn('close')->data('bs-dismiss', 'alert')->aria('label', 'Close')->button();

      $this->restore('alert');

      $this->class('alert-dismissible');

    // Dismissible is not set
    } else {

      $btn = null;

    }

    // Build element
    $this->class('alert');

    if (!is_null($color))
    {

      $this->class('alert-' . $color);

    }

    // Check for fade
    if ($this->getSetting('fade') == true)
    {

      $this->class('fade');

    }

    // Check for show
    if ($this->getSetting('show') == true)
    {

      $this->class('show');

    }

    $this->role('alert');

    return $this->adiv($message . $btn);

  }


  // Create alert heading element
  public function alerthead($content = null)
  {

    // Set alert heading class
    $this->class('alert-heading');

    // Return element
    return $this->h4($content);

  }


  // Create alert link element
  public function alertlink($content = null, $href = null)
  {

    // Set alert link class
    $this->class('alert-link');

    // Return element
    return $this->a($content, $href);

  }


  // Create badge element
  public function badge($content = null, $color = null)
  {

    // Set badge class
    $this->class('badge');

    // Check for color
    if (is_null($color))
    {

      // Check for primary
      if ($this->getSetting('primary') == true)
      {

        $this->bg('primary');

      } elseif ($this->getSetting('secondary') == true) {

        $this->bg('secondary');

      } elseif ($this->getSetting('success') == true) {

        $this->bg('success');

      } elseif ($this->getSetting('danger') == true) {

        $this->bg('danger');

      } elseif ($this->getSetting('warning') == true) {

        $this->bg('warning');

      } elseif ($this->getSetting('info') == true) {

        $this->bg('info');

      } elseif ($this->getSetting('light') == true) {

        $this->bg('light');

      } elseif ($this->getSetting('dark') == true) {

        $this->bg('dark');

      }

    // Color is set
    } else {

      $this->bg($color);

    }

    // Create element
    return $this->span($content);

  }


  // Create btn button element and save btn
  public function bgbtn($content = null)
  {

    // Create element
    $btn = $this->btn($content);

    // Save element
    $this->save('btn', $btn);

    // Return element
    return $btn;

  }


  // Create btn anchor element and save btna
  public function bgbtna($content = null, $href = null)
  {

    // Create element
    $btn = $this->btna($content, $href);

    // Save element
    $this->save('btna', $btn);

    // Return element
    return $btn;

  }


  // Create btn group element from given content or saved btn or btna
  public function bgroup($label = null, $content = null)
  {

    // Check if content is set
    if (is_null($content))
    {

      // Check for saved btn(s)
      if (!is_null($this->getSave('btn')))
      {

        // Set btn(s)
        $content = $this->getSave('btn');
        $this->reset('btn');

      } else {

        // Check for saved btna(s)
        if (!is_null($this->getSave('btna')))
        {

          // Set btna(s)
          $content = $this->getSave('btna');
          $this->reset('btna');

        }

      }

    }

    // Check if label is set
    if (!is_null($label))
    {

      $this->aria('label', $label);

    }

    // Check vertical
    if ($this->getSetting('vertical') == true)
    {

      $vertical = '-vertical';

    } else {

      $vertical = null;

    }

    // Set class
    $this->class('btn-group' . $vertical);

    // Check for size
    if ($this->getSetting('lg') == true)
    {

      $this->cbtn('group-lg');

    } elseif ($this->getSetting('sm') == true) {

      $this->cbtn('group-sm');

    }

    // Check for button to set role
    $content = $this->checkEOL($content);
    if (Str::contains($content, '<button') == true)
    {

      // Set role
      $this->role('group');

    }

    return $this->adiv($this->getSetting('prehtml') . $content . $this->getSetting('posthtml'));

  }


  // Create breadcrumb item & save bitem(s)
  public function bitem($content = null, $href = null, $active = null)
  {

    // Check if href is set
    if (!is_null($href))
    {

      // Create href link
      $content = $this->a($content, $href);

    }

    // Set breadcrumb class
    $this->class('breadcrumb-item');

    // Check for active
    if (is_null($active))
    {

      // Check for active setting
      if ($this->getSetting('active') == true)
      {

        $this->class('active');
        $this->aria('current', 'page');

      }

    // Active is set
    } else {

      $this->class('active');
      $this->aria('current', 'page');

    }

    // Create element
    $bitem = $this->tag('li', $content);

    // Save bitem
    $this->save('bitems', $bitem);

    return $bitem;

  }


  // Create blockquote element
  public function blockquote($quote = null, $footer = null, $cite = null, $citeTitle = null)
  {

    // Save settings
    $this->saveSet('blockquote');

    // Check for footer and / or cite
    if ($footer || $cite || $citeTitle)
    {

      if ($cite || $citeTitle)
      {

        // Check for cite title
        if (is_null($citeTitle))
        {

          $citeTitle = $cite;

        }

        // Set cite title
        $this->atitle($citeTitle);

        // Build cite
        $cite = html::make()->cite($cite);

      }

      // Build footer
      $this->class('blockquote-footer');
      $footer = html::make()->footer($footer . ' ' . $cite);

    }

    // Put quote in a paragraph
    $quote = html::make()->p($quote);

    // Restore settings
    $this->restore('blockquote');

    // Set class
    $this->class('blockquote');

    // Create element
    return html::make()->blockquote($quote . $footer);

  }


  // Create breadcrumb element from saved bitems
  public function breadcrumb($divider = null)
  {

    // Set ol class
    $this->class('breadcrumb');

    // Create ol element
    $ol = $this->tag('ol', $this->getSave('bitems'));

    // Set aria
    $this->aria('label', 'breadcrumb');

    // Check for divider
    if (!is_null($divider))
    {

      // Check for proper quote
      if(strpos($divider, "'") !== false)
      {

        $this->astyle('--bs-breadcrumb-divider: ' . $divider . ';');

      } else {

        $this->astyle("--bs-breadcrumb-divider: '" . $divider . "';");

      }

    }

    // Create nav element
    $nav = $this->tag('nav', $ol);

    // Reset bitem
    $this->reset('bitems');

    return $nav;

  }


  // Create btn button element
  public function btn($content = null)
  {

    // Set class
    $this->cbtn();

    // Check for colors
    $colors = $this->setColors('btn');

    // Check color is set
    if ($colors !== true)
    {

      // Check if outline is set
      if (is_null($this->getSetting('outline')))
      {

         $outline = null;

      // Outline is set
      } else {

        $outline = 'outline-';

      }

      $this->cbtn($outline . 'primary');

    }

    // Check for active
    if ($this->getSetting('active') == true)
    {

      $this->class('active');

    }

    // Check for disabled
    if ($this->getSetting('disabled') == true)
    {

      $this->class('disabled');
      html::make()->disabled();

    }

    // Check for lg
    if ($this->getSetting('lg') == true)
    {

      $this->cbtn('lg');

    }

    // Check for sm
    if ($this->getSetting('sm') == true)
    {

      $this->cbtn('sm');

    }

    // Check for btna
    if ($this->getSetting('btna') == true)
    {

      // Check for disabled
      if ($this->getSetting('disabled') == true)
      {

        $this->tabindex(-1);
        $this->aria('disabled', 'true');

      }

      // Check if toggle is set
      if ($this->getSetting('toggle') == true)
      {

        $this->data('bs-toggle', 'button');

        // Check if active
        if ($this->getSetting('active') == true)
        {

          $this->aria('pressed', 'true');

        }

      }

      // Create element
      $button = $this->a($content);

    // btna is not set
    } else {

      // Check if toggle is set
      if ($this->getSetting('toggle') == true)
      {

        $this->data('bs-toggle', 'button');
        $this->autocomplete('off');

        // Check if active
        if ($this->getSetting('active') == true)
        {

          $this->aria('pressed', 'true');

        }

      }

      // Set type
      $this->type('button');

      // Create element
      $button = $this->button($content);

    }

    // Return element
    return $button;

  }


  // Create a btn anchor element
  public function btna($content = null, $href = null)
  {

    // Set btn anchor setting
    $this->setting('btna');

    // Set href
    $this->href($href);

    // Set role
    $this->role('button');

    // Create element
    $return = $this->btn($content);

    // Return element
    return $return;

  }


  // Create card element from given content or saved card
  public function card($content = null)
  {

    // Check for content
    if (is_null($content))
    {

      $content = $this->checkEOL($this->getSave('cardheader'))
        . $this->checkEOL($this->getSave('cardimgtop'))
        . $this->checkEOL($this->getSave('cardoverlay'))
        . $this->checkEOL($this->getSave('cardbody'))
        . $this->checkEOL($this->getSave('cardimgbottom'))
        . $this->checkEOL($this->getSave('cardfooter'));

      // Reset values
      $this->reset('cardheader');
      $this->reset('cardimgtop');
      $this->reset('cardoverlay');
      $this->reset('cardbody');
      $this->reset('cardimgbottom');
      $this->reset('cardfooter');

    }

    // Set class
    $this->class('card');

    // Check for colors
    if ($this->getSetting('primary') == true)
    {

      $this->bg('primary');
      $this->text('white');

    } elseif ($this->getSetting('secondary') == true) {

      $this->bg('secondary');
      $this->text('white');

    } elseif ($this->getSetting('success') == true) {

      $this->bg('success');
      $this->text('white');

    } elseif ($this->getSetting('danger') == true) {

      $this->bg('danger');
      $this->text('white');

    } elseif ($this->getSetting('warning') == true) {

      $this->bg('warning');

    } elseif ($this->getSetting('info') == true) {

      $this->bg('info');

    } elseif ($this->getSetting('light') == true) {

      $this->bg('light');

    } elseif ($this->getSetting('dark') == true) {

      $this->bg('dark');
      $this->text('white');

    }

    // Create element
    $card = $this->adiv($this->getSetting('prehtml') . $content . $this->getSetting('posthtml'));

    // Return element
    return $card;

  }


  // Create card body element and save to cardbody
  public function cardbody($title = null, $subtitle = null, $text = null, $extra = null)
  {

    // Save settings
    $this->saveSet('cardbody');

    // Set title
    $this->cardtitle($title);

    // Set subtitle
    $this->cardsubtitle($subtitle);

    // Set text
    $this->cardtext($text);

    // Restore settings
    $this->restore('cardbody');

    // Set class
    if (is_null($this->getSave('cardoverlay')))
    {

      $this->class('card-body');

    } else {

      $this->class('card-img-overlay');

    }


    // Create content
    $content = $this->checkEOL($this->getSave('cardtitle'))
      . $this->checkEOL($this->getSave('cardsubtitle'))
      . $this->checkEOL($this->getSave('cardtext'))
      . $this->checkEOL($extra);

    // Create card body element
    $body = $this->adiv($this->getSetting('prehtml') . $content . $this->getSetting('posthtml'));

    // Reset values
    $this->reset('cardtitle');
    $this->reset('cardsubtitle');
    $this->reset('cardtext');

    // Save card body
    $this->save('cardbody', $body);

    // Return element
    return $body;

  }


  // Create card footer element and save to cardfooter
  public function cardfooter($content = null)
  {

    // Set class
    $this->class('card-footer');

    // Create element
    $footer = $this->adiv($content);

    // Save element
    $this->save('cardfooter', $footer);

    // Return element
    return $footer;

  }


  // Create card group element
  public function cardgroup($cards = null)
  {

    // Declare return
    $return = null;

    // Check for cards
    if (!is_null($cards))
    {

      // Set class
      $this->class('card-group');

      // Create element
      $return = $this->adiv($cards);

    }

    return $return;

  }


  // Create card header element and save to cardheader
  public function cardheader($content = null, $h = null)
  {

    // Set class
    $this->class('card-header');

    // Create element
    if (is_null($h))
    {

      $header = $this->adiv($content);

    } else {

      // Check if h is a number
      if (is_numeric($h))
      {

        // Check that the number is in the range of 1 to 6
        if ($h > 0 && $h < 7)
        {

          $h = 'h' . $h;
          $header = $this->$h($content);

        // h is not in range
        } else {

          $header = $this->adiv($content);

        }

      // h is not a number
      } else {

        $header = $this->adiv($content);

      }

    }

    // Save element
    $this->save('cardheader', $header);

    // Return element
    return $header;

  }


  // Create card img bottom element and save to cardimgbottom
  public function cardimgbottom($src = null, $alt = null, $height = null, $width = null, $srcset = null, $sizes = null)
  {

    // Set class
    $this->class('card-img-bottom');

    // Create element
    $img = $this->img($src, $alt, $height, $width, $srcset, $sizes);

    // Save to card
    $this->save('cardimgbottom', $img);

    // Return element
    return $img;

  }


  // Create card img overlay element and save to cardoverlay
  public function cardimgoverlay($src = null, $alt = null, $height = null, $width = null, $srcset = null, $sizes = null)
  {

    // Set class
    $this->class('card-img');

    // Create element
    $img = $this->img($src, $alt, $height, $width, $srcset, $sizes);

    // Save to card
    $this->save('cardoverlay', $img);

    // Return element
    return $img;

  }


  // Create card img top element and save to cardimgtop
  public function cardimgtop($src = null, $alt = null, $height = null, $width = null, $srcset = null, $sizes = null)
  {

    // Set class
    $this->class('card-img-top');

    // Create element
    $img = $this->img($src, $alt, $height, $width, $srcset, $sizes);

    // Save to card
    $this->save('cardimgtop', $img);

    // Return element
    return $img;

  }


  // Create card link element
  public function cardlink($content = null, $href = null)
  {

    // Set class
    $this->class('card-link');

    // Return element
    return $this->a($content, $href);

  }


  // Create card subtitle element and save cardsubtitle
  public function cardsubtitle($title = null)
  {

    // Set return
    $return = null;

    // Check for title
    if (!is_null($title))
    {

      // Set class
      $this->class('card-subtitle');

      // Create element
      $return = $this->h6($title);

      // Save element
      $this->save('cardsubtitle', $return);

    }

    return $return;

  }


  // Create card text element and save cardtext
  public function cardtext($text = null)
  {

    // Set return
    $return = null;

    // Check for text
    if (!is_null($text))
    {

      // Set class
      $this->class('card-text');

      // Create element
      $return = $this->p($text);

      // Save element
      $this->save('cardtext', $return);

    }

    return $return;

  }


  // Create card title element and save cardtitle
  public function cardtitle($title = null)
  {

    // Set return
    $return = null;

    // Check for title
    if (!is_null($title))
    {

      // Set class
      $this->class('card-title');

      // Create element
      $return = $this->h5($title);

      // Save element
      $this->save('cardtitle', $return);

    }

    return $return;

  }


  // Create carousel from given content or saved citems
  public function carousel($content = null, $itemCount = null)
  {

    // Set id
    $id = $this->setID();

    // Set control
    if ($this->getSetting('control') == true)
    {

      $control = 'yes';

    } else {

      $control = null;

    }

    // Set indicators
    if ($this->getSetting('indicators') == true)
    {

      $indicators = 'yes';

    } else {

      $indicators = null;

    }

    // Check if content is set
    if (is_null($content))
    {

      $content = $this->getSave('citem');

      // Get item count
      if (is_array($this->getSave('citem')))
      {

        $itemCount = count($this->getSave('citem'));

      }

      $this->reset('citem');

    }

    // Save settings
    $this->saveSet('carousel');

    // Create inner carousel
    $this->class('carousel-inner');
    $carousel = $this->adiv($content);

    // Check for control
    if ($control == 'yes')
    {

      // Create controls
      $span = $this->class('carousel-control-prev-icon')
        ->aria('hidden', 'true')
        ->span()
        . $this->visually('hidden')
        ->span('Previous');
      $buttons = $this->class('carousel-control-prev')
        ->type('button')
        ->data('bs-target', '#' . $id)
        ->data('bs-slide', 'prev')
        ->button($span);

      $span = $this->class('carousel-control-next-icon')
        ->aria('hidden', 'true')
        ->span()
        . $this->visually('hidden')
        ->span('Next');
      $buttons .= $this->class('carousel-control-next')
        ->type('button')
        ->data('bs-target', '#' . $id)
        ->data('bs-slide', 'next')
        ->button($span);

      // Add controls
      $carousel .= $buttons;

    }

    // Check for indicators
    if ($indicators == 'yes')
    {

      // Check that item count is set
      if (is_numeric($itemCount))
      {

        // Declare buttons
        $buttons = null;

        for ($i = 0; $i < $itemCount; $i++)
        {

          // Check for first slide
          if ($i == 0)
          {

            $this->class('active');
            $this->aria('current', 'true');

          }

          $buttons .= $this->type('button')
            ->data('bs-target', '#' . $id)
            ->data('bs-slide-to', $i)
            ->aria('label', 'Slide ' . $i)
            ->button();

        }

        $buttons = $this->class('carousel-indicators')->adiv($buttons);

        // Add indicators
        $carousel = $buttons . $carousel;

      }

    }

    // Restore settings
    $this->restore('carousel');

    // Set class
    $this->class('carousel slide');

    // Check for fade
    if ($this->getSetting('fade') == true)
    {

      $this->class('carousel-fade');

    }

    // Check for notouch
    if ($this->getSetting('notouch') == true)
    {

      $this->data('bs-touch', 'false');
      $this->data('bs-interval', 'false');

    }

    // Check for dark
    if ($this->getSetting('dark') == true)
    {

      $this->class('carousel-dark');

    }

    // Set attributes
    $this->id($id);
    $this->data('bs-ride', 'carousel');

    // Create element
    return $this->adiv($carousel);

  }


  // Create carousel item and save citems
  public function citem($src = null, $alt = null, $height = null, $width = null, $srcset = null, $sizes = null)
  {

    // Check for dummy
    if ($this->getSetting('dummy') == true)
    {

      $img = '<svg class="d-block w-100" style="font-size: 3.5rem; text-anchor: middle;" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: ' . $src . '" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">' . $src . '</text></svg>';

    // Dummy not set
    } else {

      // Save settings
      $this->saveSet('citem');

      // Set classes
      $this->d('block');
      $this->w('100');

      // Create img
      $img = $this->img($src, $alt, $height, $width, $srcset, $sizes);

      // Restore settings
      $this->restore('citem');

    }

    // Set class
    $this->class('carousel-item');

    // Check for active
    if ($this->getSetting('active') == true)
    {

      $this->class('active');

    }

    // Add citemcaption if it exists
    $img .= $this->checkEOL($this->getSave('citemcaption'));
    $this->reset('citemcaption');

    // Check for interval
    if (is_numeric($this->getSetting('interval')))
    {

      $this->data('bs-interval', $this->getSetting('interval'));

    }

    // Create element
    $div = $this->adiv($img);

    // Save element
    $this->save('citem', $div);

    // Return element
    return $div;

  }


  // Create carousel item caption and save citemcaption
  public function citemcaption($title = null, $text = null)
  {

    // Declare caption
    $caption = null;

    // Save settings
    $this->saveSet('citemcaption');

    // Check if title is set
    if (!is_null($title))
    {

      $caption .= $this->h5($title);

    }

    // Check if text is set
    if (!is_null($text))
    {

      $caption .= $this->p($text);

    }

    // Check caption
    if (!is_null($caption))
    {

      // Restore settings
      $this->restore('citemcaption');

      // Create caption
      $caption = $this->class('carousel-caption')->d('none')->d('md-block')->adiv($caption);

      // Save caption
      $this->save('citemcaption', $caption);

    }

    return $caption;

  }


  // Create container div from given content or saved row(s)
  public function container($content = null)
  {

    // Check if content is set
    if (is_null($content))
    {

      $content = $this->getSave('row');

    }

    // Reset row(s)
    $this->reset('row');

    // Set class
    // Check if fluid is set
    if ($this->getSetting('fluid') == true)
    {

      $this->class('container-fluid');

    // Fluid is not set
    } else {

      $this->class('container');

    }

    // Create element
    return html::make()->div($content);

  }


  // Create div element and save div(s)
  public function div($content = null)
  {

    // Create element
    $div = html::make()->div($content);

    // Save element
    $this->save('div', $div);

    // Return element
    return $div;

  }


  // Create dropdown divider element and save to ditems
  public function ddivider()
  {

    // Create hr
    $hr = $this->class('dropdown-divider')->hr();

    // Create element
    $hr = $this->tag('li', $hr);

    // Save ditems
    $this->save('ditems', $hr);

    return $hr;

  }


  // Create dropdown header element and save to ditems
  public function dheader($header = null)
  {

    // Create h6
    $h6 = $this->class('dropdown-header')->h6($header);

    // Create element
    $h6 = $this->tag('li', $h6);

    // Save ditems
    $this->save('ditems', $h6);

    return $h6;

  }


  // Create dropdown item from given content or saved dlink & save dtiems
  public function ditem($content = null, $href = null)
  {

    // Check if content is set
    if (!is_null($content))
    {

      // Check for active
      if ($this->getSetting('active') == true)
      {

        $active = 'yes';

      } else {

        $active = null;

      }

      // Check for disabled
      if ($this->getSetting('disabled') == true)
      {

        $disabled = 'yes';

      } else {

        $disabled = null;

      }

      // Save settings
      $this->saveSet('ditem');

      // Check if dropdown-item is already set
      if (str_contains($content, 'dropdown-item'))
      {

        // Set dlink to content
        $dlink = $content;

      } else {

        // Check for active
        if ($active == 'yes')
        {

          $this->active();

        }

        // Check for disabled
        if ($disabled == 'yes')
        {

          $this->disabled();

        }

        // Create dlink
        $this->dlink($content, $href);

        // Get saved dlink
        $dlink = $this->getSave('dlink');

      }

      // Restore settings
      $this->restore('ditem');

    } else {

      // Get saved dlink
      $dlink = $this->getSave('dlink');

    }

    // Reset dlink
    $this->reset('dlink');

    // Create ditem
    $ditem = $this->tag('li', $dlink);

    // Save ditem
    $this->save('ditems', $ditem);

    return $ditem;

  }


  // Create dropdown link of dropdown item and save dlink
  public function dlink($content = null, $href = null)
  {

    // Set class
    $this->class('dropdown-item');

    // Check for active
    if ($this->getSetting('active') == true)
    {

      $this->class('active');

    }

    // Check for disabled
    if ($this->getSetting('disabled') == true)
    {

      $this->class('disabled');
      $this->tabindex('-1');
      $this->aria('disabled', 'true');

    }

    // Create anchor link
    $dlink = $this->a($content, $href);

    // Save dlink
    $this->save('dlink', $dlink);

    return $dlink;

  }


  // Create dropdown element from saved ditems or dlinks
  public function dropdown($buttonText = null, $buttonClasses = null)
  {

    // Declare color
    $color = null;

    // Check for color
    if ($this->getSetting('primary') == true)
    {

      $color = 'primary';

    } elseif ($this->getSetting('secondary') == true) {

      $color = 'secondary';

    } elseif ($this->getSetting('success') == true) {

      $color = 'success';

    } elseif ($this->getSetting('danger') == true) {

      $color = 'danger';

    } elseif ($this->getSetting('warning') == true) {

      $color = 'warning';

    } elseif ($this->getSetting('info') == true) {

      $color = 'info';

    } elseif ($this->getSetting('light') == true) {

      $color = 'light';

    } elseif ($this->getSetting('dark') == true) {

      $color = 'dark';

    }

    // Verify color
    if (is_null($color))
    {

      $color = 'primary';

    }

    // Check for outline
    if ($this->getSetting('outline') == true)
    {

      $color = 'outline-' . $color;

    }

    // Declare size
    $size = null;

    // Check for sizes
    if ($this->getSetting('sm') == true)
    {

      $size = ' btn-sm';

    } elseif ($this->getSetting('lg') == true) {

      $size = ' btn-lg';

    }

    // Check for split
    if ($this->getSetting('split') == true)
    {

      $split = 'yes';

      // Check for nobtngroup
      if ($this->getSetting('nobtngroup') == true)
      {

        $class = null;

      // Good to set btn-group
      } else {

        $class = 'btn-group';

      }

    } else {

      $split = null;
      $class = 'dropdown';

    }

    // Check for menu color
    if (is_null($this->getSetting('menucolor')))
    {

      $menucolor = null;

    } else {

      $menucolor = ' dropdown-menu-' . $this->getSetting('menucolor');

    }

    // Check for menu end
    if (is_null($this->getSetting('menuend')))
    {

      $menuend = null;

    // menu end is not null
    } else {

      if ($this->getSetting('menuend') == 'true')
      {

        $menuend = ' dropdown-menu-end';

      // menu end is not set to true
      } else {

        $menuend = ' dropdown-menu-' . $this->getSetting('menuend') . '-end';

      }

    }

    // Check for menu start
    if (is_null($this->getSetting('menustart')))
    {

      $menustart = null;

    // menu end is not null
    } else {

      if ($this->getSetting('menustart') == 'true')
      {

        $menustart = ' dropdown-menu-start';

      // menu end is not set to true
      } else {

        $menustart = ' dropdown-menu-' . $this->getSetting('menustart') . '-start';

      }

    }

    // Check for menu offset
    if (is_null($this->getSetting('menuoffset')))
    {

      $menuoffset = null;

    // Menu offset is set
    } else {

      $menuoffset = $this->getSetting('menuoffset');

    }

    // Set menu reference
    $reference = $this->getSetting('menureference');

    // Set autoclose
    $autoclose = $this->getSetting('autoclose');

    // Save settings
    $this->saveSet('dropdown');

    // Set id
    $id = $this->setID();

    // Process button classes
    if (!is_null($buttonClasses))
    {

      // Check for an array
      if (is_array($buttonClasses))
      {

        foreach ($buttonClasses as $class)
        {

          $this->class($class);

        }

      // Not an array
      } else {

        $this->class($buttonClasses);

      }

    }

    // Check for menu offset
    if (!is_null($menuoffset))
    {

      $this->data('bs-offset', $menuoffset);

    }

    // Check for split setting
    if (is_null($split))
    {

      // Check for autoclose
      if (!is_null($autoclose))
      {

        $this->data('bs-auto-close', $autoclose);

      }

      // Create button
      $button = $this->cbtn()->cbtn($color)->class('dropdown-toggle' . $size)
        ->type('button')->id($id)->data('bs-toggle', 'dropdown')
        ->aria('expanded', 'false')->button($buttonText);

    // split is set
    } else {

      // Create buttons
      $button = $this->type('button')->cbtn()->cbtn($color)->class($size)->button($buttonText);
      $span = $this->visually('hidden')->span('Toggle Dropdown');

      // Check for menu reference
      if (!is_null($reference))
      {

        $this->data('bs-reference', $reference);

      }

      $button .= $this->type('button')->cbtn()->cbtn($color)->class('dropdown-toggle' . $size)
        ->class('dropdown-toggle-split')->data('bs-toggle', 'dropdown')
        ->aria('expanded', 'false')->button($span);

    }

    // Check for ditems
    $ditems = $this->getSave('ditems');

    // Reset ditems
    $this->reset('ditems');

    // Check if ditems is set
    if (is_null($ditems))
    {

      // Check for dlink
      $dlinks = $this->getSave('dlink');

      // Reset dlink
      $this->reset('dlink');

      if (!is_null($dlinks))
      {

        // Check if dlinks is an array
        if (is_array($dlinks))
        {

          foreach ($dlinks as $dlink)
          {

            if (!is_null($dlink))
            {

              $this->ditem($dlink);

            }

          }

        // dlinks is not an array
        } else {

          $this->ditem($dlinks);

        }

      }

      // Get new created ditems
      $ditems = $this->getSave('ditems');

      // Reset ditems
      $this->reset('ditems');

    }

    // Create ul element
    $ul = $this->class('dropdown-menu' . $menucolor . $menuend . $menustart)->aria('labelledby', $id)->tag('ul', $ditems);

    // Restore settings
    $this->restore('dropdown');

    // Check for direction
    if ($this->getSetting('dropup') == true)
    {

      $direction = ' dropup';

    } elseif ($this->getSetting('dropright') == true) {

      $direction = ' dropend';

    } elseif ($this->getSetting('dropleft') == true) {

      $direction = ' dropstart';

    } else {

      $direction = null;

    }

    // Check for listonly
    if ($this->getSetting('listonly') == true)
    {

      // Build Return
      $return = $this->class('dropdown-menu' . $menucolor . $menuend . $menustart)->astyle('position: static; display: block;')->tag('ul', $ditems);
      $return = $this->getSetting('prehtml') . $return . $this->getSetting('posthtml');

      // Return ul
      return $return;

    // Listonly is not set
    } else {

      // Return dropdown
      return $this->class($class . $direction)->adiv($this->getSetting('prehtml') . $button . $ul . $this->getSetting('posthtml'));

    }

  }


  // Save dropdown tab element to be called by tabs()
  public function dtab($name = null, $div = null, $class = null, $attribute = null)
  {

    // Save settings
    $this->saveSet('dtab');

    // Create dropdown
    $dropdown = $this->listonly()->dropdown();

    // Replace block setting
    $dropdown = Str::replace(' style="position: static; display: block;"', '', $dropdown);

    // Restore settings
    $this->restore('dtab');

    // Set href
    $this->href('#');

    // Save tab
    $this->tab($name, $div, $class, $attribute, $dropdown);

  }


  // Create dropdown text of dropdown item and save dlink
  public function dtext($content = null)
  {

    // Set class
    $this->class('dropdown-item-text');

    // Create span element
    $dlink = $this->span($content);

    // Save dlink
    $this->save('dlink', $dlink);

    return $dlink;

  }


  // Create bootstrap icon element
  public function icon($icon = null, $size = null)
  {

    // Set class
    $this->class('bi-' . $icon);

    // Check for size
    if (!is_null($size))
    {

      $this->astyle('font-size: ' . $size . 'px;');

    }

    // Return element
    return html::make()->i();

  }


  // Create img element and allow fluid & thumbnail setting
  public function img($src = null, $alt = null, $height = null, $width = null, $srcset = null, $sizes = null)
  {

    // Check if fluid is set
    if ($this->getSetting('fluid') == true)
    {

      $this->class('img-fluid');

    }

    // Check if thumbnail is set
    if ($this->getSetting('thumbnail') == true)
    {

      $this->class('img-thumbnail');

    }

    // Create element
    return html::make()->img($src, $alt, $height, $width, $srcset, $sizes);

  }


  // Create lead paragraph element
  public function lead($content = null)
  {

    // Set class
    $this->class('lead');

    // Create element
    return html::make()->p($content);

  }


  // Create list group element
  public function lgroup($content = null)
  {

    // Check for content
    if (is_null($content))
    {

      $content = $this->getSave('litem');
      $this->reset('litem');

    }

    // Set class
    $this->class('list-group');

    // Check for flush
    if ($this->getSetting('flush') == true)
    {

      $this->class('list-group-flush');

    }

    // Check for numbered
    if ($this->getSetting('numbered') == true)
    {

      $this->class('list-group-numbered');
      $listtag = 'ol';

    } else {

      $listtag = 'ul';

    }

    // Check for horizontal
    if ($this->getSetting('horizontal') == true)
    {

      // Check for size
      if ($this->getSetting('sm') == true)
      {

        $size = '-sm';

      } elseif ($this->getSetting('md') == true) {

        $size = '-md';

      } elseif ($this->getSetting('lg') == true) {

        $size = '-lg';

      } elseif ($this->getSetting('xl') == true) {

        $size = '-xl';

      } elseif ($this->getSetting('xxl') == true) {

        $size = '-xxl';

      } else {

        $size = null;

      }

      $this->class('list-group-horizontal' . $size);

    }

    // Create element
    $content = $this->checkEOL($content);
    if (Str::contains($content, 'list-group-item-action') == true)
    {

      return $this->adiv($content);

    } else {

      return $this->tag($listtag, $content);

    }

  }


  // Create list group item
  public function litem($content = null, $href = null, $type = null)
  {

    // Set class
    $this->class('list-group-item');
    if (!is_null($type))
    {

      $this->class('list-group-item-action');

    }
    $this->setColors('list-group-item');

    // Check for href
    if (!is_null($href))
    {

      $this->href($href);

    }

    // Check for active
    if ($this->getSetting('active') == true)
    {

      $this->class('active');
      $this->aria('current', 'true');

    }

    // Check for disabled
    if ($this->getSetting('disabled') == true)
    {

      $this->class('disabled');
      $this->aria('disabled', 'true');

      if (!is_null($type))
      {

        $this->tabindex(-1);

      }

      if ($type == 'b')
      {

        html::make()->disabled();

      }

    }

    // Create element
    if ($type == 'a')
    {

      $li = $this->a($content);

    } elseif ($type == 'b') {

      $this->type('button');
      $li = $this->button($content);

    } elseif ($type == 'l') {

      $li = $this->label($content);

    } else {

      $li = $this->tag('li', $content);

    }

    // Save list group item
    $this->save('litem', $li);

    // Return element
    return $li;

  }


  // Create list group anchor item
  public function litema($content = null, $href = null)
  {

    return $this->litem($content, $href, 'a');

  }


  // Create list group button item
  public function litemb($content = null)
  {

    return $this->litem($content, null, 'b');

  }


  // Create list group label item
  public function liteml($content = null)
  {

    return $this->litem($content, null, 'l');

  }


  // Create live alert element
  public function livealert($buttonText = null, $alertText = null, $buttonColor = null, $alertColor = null)
  {

    // Check for button color
    if (is_null($buttonColor))
    {

      $buttonColor = 'primary';

    }

    // Check for alert color
    if (is_null($alertColor))
    {

      $alertColor = 'primary';

    }

    // Create ids
    $buttonID = $this->setID();
    $alertID = $this->setID();
    $jsFunction = $this->setID();

    // Declare return
    $return = null;

    // Create button
    $return = $this->type('button')->cbtn()->cbtn($buttonColor)->id($buttonID)->button($buttonText);

    // Create alert
    $alert = $this->type('button')->cbtn('close')->data('bs-dismiss', 'alert')->aria('label', 'Close')->button();
    $return = $this->id($alertID)->adiv() . $return;

    // Create javascript
    $js = 'var ' . $alertID . " = document.getElementById('" . $alertID . "')" . PHP_EOL
      . 'var ' . $buttonID . " = document.getElementById('" . $buttonID . "')" . PHP_EOL
      . 'function ' . $jsFunction . '(message, type) {' . PHP_EOL
      . " var wrapper = document.createElement('div')" . PHP_EOL
      . " wrapper.innerHTML = '<div class=" . '"alert alert-' . "' + type + ' alert-dismissible" . '" role="alert">' . "' + message + '<button type=" . '"button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>' . "'" . PHP_EOL
      . $alertID . '.append(wrapper)' . PHP_EOL
      . '}' . PHP_EOL
      . 'if (' . $buttonID . ') {' . PHP_EOL
      . ' ' . $buttonID . ".addEventListener('click', function () {" . PHP_EOL
      . '   ' . $jsFunction . "('" . $this->htmlchar($alertText) . "', '" . $alertColor . "')" . PHP_EOL
      . ' })' . PHP_EOL
      . '}' . PHP_EOL;

    $this->savejs($js);

    return $return;

  }


  // Create modal element from given content or saved modal variables
  public function modal($content = null, $id = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (is_null($content))
    {

      // Declare noclose
      $noclose = $this->getSetting('noclose');

      // Declare scroll
      $scroll = $this->getSetting('scroll');

      // Declare center
      $center = $this->getSetting('center');

      // Declare size
      if ($this->getSetting('xxl') == true)
      {

        $size = 'xxl';

      } elseif ($this->getSetting('xl') == true) {

        $size = 'xl';

      } elseif ($this->getSetting('lg') == true) {

        $size = 'lg';

      } elseif ($this->getSetting('md') == true) {

        $size = 'md';

      } elseif ($this->getSetting('sm') == true) {

        $size = 'sm';

      } else {

        $size = null;

      }

      // Declare fullscreen
      $fullscreen = $this->getSetting('fullscreen');

      // Save settings
      $this->saveSet('modal');

      // Check if modal dialog is set
      if (is_null($this->getSave('modaldialog')))
      {

        // Check for scroll
        if ($scroll == true)
        {

          $this->scroll();

        }

        // Check for center
        if ($center == true)
        {

          $this->center();

        }

        // Check for size
        if (!is_null($size))
        {

          if ($size == 'xxl')
          {

            $this->xxl();

          } elseif ($size == 'xl') {

            $this->xl();

          } elseif ($size == 'lg') {

            $this->lg();

          } elseif ($size == 'md') {

            $this->md();

          } elseif ($size == 'sm') {

            $this->sm();

          }

        }

        // Check for fullscreen
        if ($fullscreen == true)
        {

          $this->fullscreen();

        }

        // Check for noclose
        if ($noclose == true)
        {

          $this->noclose();

        }

        // Run modal dialog
        $this->modaldialog();

      }

      // Set content
      $content = $this->checkEOL($this->getSave('modaldialog'));

      // Reset modaldialog
      $this->reset('modaldialog');

      // Restore settings
      $this->restore('modal');

    }

    // Check if content is set again
    if (!is_null($content) || !is_null($this->getSetting('prehtml')) || !is_null($this->getSetting('posthtml')))
    {

      // Set class
      $this->class('modal');

      // Check for fade
      if ($this->getSetting('fade') == true)
      {

        $this->class('fade');

      }

      // Set id
      if (is_null($id))
      {

        $id = $this->setID();

      }

      $this->id($id);


      // Set tabindex
      $this->tabindex('-1');

      // Check for title id
      if (!is_null($this->getSave('modaltitleid')))
      {

        // Check for array
        if (is_array($this->getSave('modaltitleid')))
        {

          $modaltitleid = null;

          foreach ($this->getSave('modaltitleid') as $tid)
          {

            $modaltitleid .= $tid;

          }

        } else {

          $modaltitleid = $this->getSave('modaltitleid');

        }

        $this->aria('labelledby', $modaltitleid);
        $this->reset('modaltitleid');

      }

      // Set hidden
      $this->aria('hidden', 'true');

      // Check for static
      if ($this->getSetting('static') == true)
      {

        $this->data('bs-backdrop', 'static');
        $this->data('bs-keyboard', 'false');

      }

      // Create element
      $return = $this->adiv($this->getSetting('prehtml') . $content . $this->getSetting('posthtml'));

    }

    return $return;

  }


  // Create modal body and save variable
  public function modalbody($body = null)
  {

    // Declare return
    $return = null;

    // Check title is set
    if (!is_null($body))
    {

      // Create element
      $return = $this->class('modal-body')->adiv($this->getSetting('prehtml') . $body . $this->getSetting('posthtml'));

    }

    // Save element
    $this->save('modalbody', $return);

    return $return;

  }


  // Create modal launch button
  public function modalbutton($content = null, $id = null)
  {

    // Check for id
    if (is_null($id))
    {

      $id = $this->getID();

    }

    // Set attributes
    $this->data('bs-toggle', 'modal');
    $this->data('bs-target', '#' . $id);

    // Create element
    return $this->btn($content);

  }


  // Create modal content element from given content or saved modal variables
  public function modalcontent($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (is_null($content))
    {

      // Declare noclose
      $noclose = $this->getSetting('noclose');

      // Save settings
      $this->saveSet('modalcontent');

      // Check if modal header is set
      if (is_null($this->getSave('modalheader')))
      {

        // Check for noclose
        if ($noclose == true)
        {

          $this->noclose();

        }

        // Run modal header
        $this->modalheader();

      }

      // Set content
      $content = $this->checkEOL($this->getSave('modalheader'));

      // Check if modal body is set
      if (is_null($this->getSave('modalbody')))
      {

        // Run modal body
        $this->modalbody();

      }

      // Set content
      $content .= $this->checkEOL($this->getSave('modalbody'));

      // Check if modal footer is set
      if (is_null($this->getSave('modalfooter')))
      {

        // Run modal footer
        $this->modalfooter();

      }

      // Set content
      $content .= $this->checkEOL($this->getSave('modalfooter'));

      // Reset saved variables
      $this->reset('modalheader');
      $this->reset('modalbody');
      $this->reset('modalfooter');

      // Restore settings
      $this->restore('modalcontent');

    }

    // Check if content is set again
    if (!is_null($content) || !is_null($this->getSetting('prehtml')) || !is_null($this->getSetting('posthtml')))
    {

      // Set class
      $this->class('modal-content');

      // Create element
      $return = $this->adiv($this->getSetting('prehtml') . $content . $this->getSetting('posthtml'));

      // Save element
      $this->save('modalcontent', $return);

    }

    return $return;

  }


  // Create modal dialog element from given content or saved modal variables
  public function modaldialog($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (is_null($content))
    {

      // Declare noclose
      $noclose = $this->getSetting('noclose');

      // Save settings
      $this->saveSet('modaldialog');

      // Check if modal content is set
      if (is_null($this->getSave('modalcontent')))
      {

        // Check for noclose
        if ($noclose == true)
        {

          $this->noclose();

        }

        // Run modal content
        $this->modalcontent();

      }

      // Set content
      $content = $this->checkEOL($this->getSave('modalcontent'));

      // Reset modaldialog
      $this->reset('modalcontent');

      // Restore settings
      $this->restore('modaldialog');

    }

    // Check if content is set again
    if (!is_null($content) || !is_null($this->getSetting('prehtml')) || !is_null($this->getSetting('posthtml')))
    {

      // Set class
      $this->class('modal-dialog');

      // Check for scroll
      if ($this->getSetting('scroll') == true)
      {

        $this->class('modal-dialog-scrollable');

      }

      // Check for center
      if ($this->getSetting('center') == true)
      {

        $this->class('modal-dialog-centered');

      }

      // Check for fullscreen
      if ($this->getSetting('fullscreen') == true)
      {

        // Check for size
        if ($this->getSetting('xxl') == true)
        {

          $this->class('modal-fullscreen-xxl-down');

        } elseif ($this->getSetting('xl') == true) {

          $this->class('modal-fullscreen-xl-down');

        } elseif ($this->getSetting('lg') == true) {

          $this->class('modal-fullscreen-lg-down');

        } elseif ($this->getSetting('md') == true) {

          $this->class('modal-fullscreen-md-down');

        } elseif ($this->getSetting('sm') == true) {

          $this->class('modal-fullscreen-sm-down');

        } else {

          $this->class('modal-fullscreen');

        }

      // Fullscreen is not set
      } else {

        // Check for size
        if ($this->getSetting('xl') == true)
        {

          $this->class('modal-xl');

        } elseif ($this->getSetting('lg') == true) {

          $this->class('modal-lg');

        } elseif ($this->getSetting('sm') == true) {

          $this->class('modal-sm');

        }

      }

      // Create element
      $return = $this->adiv($this->getSetting('prehtml') . $content . $this->getSetting('posthtml'));

      // Save element
      $this->save('modaldialog', $return);

    }

    return $return;

  }


  // Create modal footer and save variable
  public function modalfooter($footer = null)
  {

    // Declare return
    $return = null;

    // Check title is set
    if (!is_null($footer))
    {

      // Create element
      $return = $this->class('modal-footer')->adiv($this->getSetting('prehtml') . $footer . $this->getSetting('posthtml'));

    }

    // Save element
    $this->save('modalfooter', $return);

    return $return;

  }


  // Create modal header element from given content or saved modal variables
  public function modalheader($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (is_null($content))
    {

      // Set content
      $content = $this->checkEOL($this->getSave('modaltitle'));

      // Reset modaldialog
      $this->reset('modaltitle');

    }

    // Check if content is set again
    if (!is_null($content) || !is_null($this->getSetting('prehtml')) || !is_null($this->getSetting('posthtml')))
    {

      // Check for noclose
      if ($this->getSetting('noclose') !== true)
      {

        // Save settings
        $this->saveSet('modalheader');

        // Create close button
        $content .= $this->type('button')->class('btn-close')->data('bs-dismiss', 'modal')->aria('label', 'Close')->button();

        // Restore settings
        $this->restore('modalheader');

      }

      // Set class
      $this->class('modal-header');

      // Create element
      $return = $this->adiv($this->getSetting('prehtml') . $content . $this->getSetting('posthtml'));

      // Save element
      $this->save('modalheader', $return);

    }

    return $return;

  }


  // Create modal title and save variable
  public function modaltitle($title = null)
  {

    // Declare return
    $return = null;

    // Declare id
    $id = null;

    // Check title is set
    if (!is_null($title))
    {

      // Set id
      $id = $this->setID();

      // Create element
      $return = $this->class('modal-title')->id($id)->h5($this->getSetting('prehtml') . $title . $this->getSetting('posthtml'));

    }

    // Save element
    $this->save('modaltitle', $return);
    $this->save('modaltitleid', $id);

    return $return;

  }


  // Create nav element from given content or save navlink(s) and navitem(s)
  public function nav($content = null, $sub = null)
  {

    // Save settings
    $this->saveSet('nav');

    // Check if content is set
    if (is_null($content))
    {

      // Check for sub
      if ($sub)
      {

        // Check for subnavlinks
        if (!is_null($this->getSave('subnavlink')))
        {

          $this->navitem(null, null, null, null, true);

        }

        $content = $this->getSave('subnavitem');

        // Reset navitem(s)
        $this->reset('subnavitem');

      // Not a sub
      } else {

        // Check for navlink(s)
        if (!is_null($this->getSave('navlink')))
        {

          $this->navitem();

        }

        $content = $this->getSave('navitem');

        // Reset navitem(s)
        $this->reset('navitem');

      }

    }

    // Restore settings
    $this->restore('nav');

    // Check for sub
    if (is_null($sub))
    {

      // Set class
      $this->class('nav');

    }

    // Check for pills setting
    if ($this->getSetting('pills') == true)
    {

      $this->class('nav-pills');

    }

    // Check for fill setting
    if ($this->getSetting('fill') == true)
    {

      $this->class('nav-fill');

    }

    // Check for justified setting
    if ($this->getSetting('justified') == true)
    {

      $this->class('nav-justified');

    }

    // Check for vertical setting
    if ($this->getSetting('vertical') == true)
    {

      $this->class('flex-column');

    }

    // Create element
    return html::make()->ul($content);

  }


  // Create navbar element from given content or save variables
  public function navbar($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (is_null($content))
    {

      // Check if navbar brand hide is set
      if ($this->getSaveString('navbarbrandhide') == '')
      {

        // Check for right setting
        if ($this->getSaveString('navbarbrandright') == '')
        {

          // Navbar Brand
          $content .= $this->checkEOL($this->getSave('navbarbrand'));

        }

      }

      // Check for toggler
      if ($this->getSetting('toggle') == true)
      {

        // Check for id
        if (is_null($this->getSaveString('navbarid')) || $this->getSaveString('navbarid') == "")
        {

          $id = $this->setID();
          $this->save('navbarid', $id);

        } else {

          $id = $this->getSaveString('navbarid');

        }

        // Save settings
        $this->saveSet('navbar');

        // Create span
        $this->class('navbar-toggler-icon');
        $span = $this->span();

        // Set class
        $this->class('navbar-toggler');

        // Set attributes
        $this->type('button');
        $this->data('bs-toggle', 'collapse');
        $this->data('bs-target', '#' . $id);
        $this->aria('controls', 'navbarSupportedContent');
        $this->aria('expanded', 'false');
        $this->aria('label', 'Toggle navigation');

        // Create element
        $content .= $this->checkEOL($this->button($span));

        // Restore settings
        $this->restore('navbar');

        // Check if navbar brand hide is set
        if ($this->getSaveString('navbarbrandhide') == '')
        {

          // Check for right setting
          if ($this->getSaveString('navbarbrandright') == true)
          {

            // Navbar Brand
            $content .= $this->checkEOL($this->getSave('navbarbrand'));

          }

        }

      }

      // Check for navbar menu
      if (is_null($this->getSave('navbarmenu')))
      {

        // Set no collapse
        $nocollapse = $this->getSetting('nocollapse');

        // Set scroll
        $scroll = $this->getSetting('scroll');

        // Save settings
        $this->saveSet('navbar');

        // Check no collapse
        if ($nocollapse == true)
        {

          $this->nocollapse();

        }

        // Check scroll
        if (!is_null($scroll))
        {

          $this->scroll($scroll);

        }

        $this->nbmenu();

        // Restore settings
        $this->restore('navbar');

      }

      $content .= $this->checkEOL($this->getSave('navbarmenu'));

      // Check for content
      if (!is_null($content))
      {

        // Save settings
        $this->saveSet('navbar');

        // Wrap in container
        $content = $this->class('container-fluid')->adiv($content);

        // Restore settings
        $this->restore('navbar');

      }

    }

    // Check for content again
    if (!is_null($content))
    {

      // Set class
      $this->class('navbar');

      // Check for expand
      if (!is_null($this->getSetting('expand')))
      {

        $this->class('navbar-expand-' . $this->getSetting('expand'));

      }

      // Check for color
      if ($this->getSetting('primary') == true)
      {

        $this->class('navbar-dark');
        $this->bg('primary');

      } elseif ($this->getSetting('secondary') == true) {

        $this->class('navbar-dark');
        $this->bg('secondary');

      } elseif ($this->getSetting('success') == true) {

        $this->class('navbar-dark');
        $this->bg('success');

      } elseif ($this->getSetting('danger') == true) {

        $this->class('navbar-dark');
        $this->bg('danger');

      } elseif ($this->getSetting('warning') == true) {

        $this->class('navbar-light');
        $this->bg('warning');

      } elseif ($this->getSetting('info') == true) {

        $this->class('navbar-light');
        $this->bg('info');

      } elseif ($this->getSetting('light') == true) {

        $this->class('navbar-light');
        $this->bg('light');

      } elseif ($this->getSetting('dark') == true) {

        $this->class('navbar-dark');
        $this->bg('dark');

      } elseif ($this->getSetting('nocolor') == true) {

      } else {

        $this->class('navbar-light');
        $this->bg('light');

      }

      // Create element
      $return = $this->tag('nav', $content);

    }

    // Clear variables
    $this->reset('navbarid');
    $this->reset('navbarbrand');
    $this->reset('navbarmenu');
    $this->reset('navbartext');
    $this->reset('navbarbrandhide');
    $this->reset('navbarbrandright');

    return $return;

  }


  // Create nav-item element from given content or saved navlink(s) & save navitem(s)
  public function navitem($content = null, $href = null, $active = null, $disabled = null, $sub = null)
  {

    // Check for active
    if ($this->getSetting('active') == true)
    {

      $active = true;

    }

    // Check for disabled
    if ($this->getSetting('disabled') == true)
    {

      $disabled = true;

    }

    // Save settings
    $this->saveSet('navitem');

    // Check for content
    if ($content)
    {

      // Check for any settings passed
      if ($href || $active || $disabled)
      {

        $this->navlink($content, $href, $active, $disabled, $sub);

        if ($sub)
        {

          $content = $this->getSave('subnavlink');

        // Not a sub
        } else {

          $content = $this->getSave('navlink');

        }

      }

    // Content is not set
    } else {

      if ($sub)
      {

        $content = $this->getSave('subnavlink');

      // Not a sub
      } else {

        $content = $this->getSave('navlink');

      }

    }

    if ($sub)
    {

      // Reset subnavlink
      $this->reset('subnavlink');

    // Not a sub
    } else {

      // Reset navlink
      $this->reset('navlink');

    }

    // Restore settings
    $this->restore('navitem');

    // Check if content is an array
    if (is_array($content))
    {

      // Declare li return
      $li = null;

      // Cycle through content
      foreach($content as $c)
      {

        $this->class('nav-item');

        if ($sub)
        {

          $this->class('sub-nav-item');

        } else {

          $this->class('top-nav-item');

        }

        $link = html::make()->li($c);

        if ($sub)
        {

          // Save navitem(s)
          $this->save('subnavitem', $link);

        // Not a sub
        } else {

          // Save navitem(s)
          $this->save('navitem', $link);

        }

        $li .= $link;

      }

    // Content is not an array
    } else {

      // Set class
      $this->class('nav-item');

      if ($sub)
      {

        $this->class('sub-nav-item');

      } else {

        $this->class('top-nav-item');

      }

      // Create element
      $li = html::make()->li($content);

      if ($sub)
      {

        // Save navitem(s)
        $this->save('subnavitem', $li);

      // Not a sub
      } else {

        // Save navitem(s)
        $this->save('navitem', $li);

      }

    }

    // Return element
    return $li;

  }


  // Create nav-link element & save navlink(s)
  public function navlink($content = null, $href = null, $active = null, $disabled = null, $sub = null)
  {

    // Check active
    if ($active)
    {

      $this->class('active');
      $this->active();

    }

    // Check disabled
    if ($disabled)
    {

      $this->disabled();

    }

    // Check if active was previously set
    if ($this->getSetting('active') == true)
    {

      $this->aria('current', 'page');

    }

    // Check if disabled was previously set
    if ($this->getSetting('disabled') == true)
    {

      $this->class('disabled');
      $this->aria('disabled', 'true');

    }

    // Check for href
    if ($href)
    {

      // Set class
      $this->class('nav-link');

      if ($sub)
      {

        $this->class('sub-nav-link');

      } else {

        $this->class('top-nav-link');

      }

      // Create element
      $link = html::make()->a($content, $href);

    // href not set
    } else {

      $link = $content;

    }

    // Check for sub
    if ($sub)
    {

      // Save link
      $this->save('subnavlink', $link);

    // Not a sub navlink
    } else {

      // Save link
      $this->save('navlink', $link);

    }

    // Return element
    return $link;

  }


  // Create navbar-brand element and save navbarbrand
  public function nbbrand($content = null, $href = null)
  {

    // Declare return
    $return = null;

    // Set navbar brand hide
    $this->save('navbarbrandhide', $this->getSetting('hide'));

    // Set navbar brand right
    $this->save('navbarbrandright', $this->getSetting('right'));

    // Check for content
    if (!is_null($content))
    {

      // Set class
      $this->class('navbar-brand');

      // Check for href
      if (is_null($href))
      {

        // Create element
        $return = $this->span($content);

      // href is not null
      } else {

        // Create element
        $return = $this->a($content, $href);

      }

    }

    // Save element
    $this->save('navbarbrand', $return);

    return $return;

  }


  // Create navbar dropdown element
  public function nbdropdown($linkName = null)
  {

    // Declare return
    $return = null;

    // Set id
    $id = $this->setID();

    // Create link toggle
    $return .= $this->class('nav-link')
      ->class('dropdown-toggle')
      ->id($id)
      ->role('button')
      ->data('bs-toggle', 'dropdown')
      ->aria('expanded', 'false')
      ->a($linkName,'#');

    // Get dropdown list
    $dropdown = $this->listonly()
      ->aria('labelledby',$id)
      ->dropdown();

    // Replace block setting
    $dropdown = Str::replace(' style="position: static; display: block;"', '', $dropdown);

    // Add dropdown to return
    $return .= $dropdown;

    // Save element
    $this->save('nblinks', $return);

    return $return;

  }


  // Create navbar form element
  public function nbform($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (!is_null($content))
    {

      $return = $this->form($content);

      // Save element
      $this->save('nbform', $return);

    }

    return $return;

  }


  // Create navbar item element
  public function nbitem($content = null, $href = null)
  {

    // Declare return
    $return = null;

    // Set active
    $active = $this->getSetting('active');

    // Set disabled
    $disabled = $this->getSetting('disabled');

    // Check for content
    if (!is_null($content))
    {

      // Save setting
      $this->saveSet('nbitem');

      // Check for active
      if ($active == true)
      {

        $this->active();

      }

      // Check for disabled
      if ($disabled == true)
      {

        $this->disabled();

      }

      // Create element
      $this->nblink($content, $href);

      // Restore setting
      $this->restore('nbitem');

    }

    // Check for nblinks
    if (!is_null($this->getSave('nblinks')))
    {

      // Check nblinks is an array
      if (is_array($this->getSave('nblinks')))
      {

        // Cycle through links
        foreach ($this->getSave('nblinks') as $nblinks)
        {

          // Check if nblinks is an array
          if (is_array($nblinks))
          {

            // Cycle through links
            foreach ($nblinks as $nblink)
            {

              // Set class
              $this->class('nav-item');

              // Check for dropdown-toggle
              if (Str::contains($nblink, 'nav-link dropdown-toggle') == true)
              {

                $this->class('dropdown');

              }

              // Create element
              $return .= $this->tag('li', $nblink);

            }

          // nblinks is NOT an array
          } else {

            // Set class
            $this->class('nav-item');

            // Check for dropdown-toggle
            if (Str::contains($nblinks, 'nav-link dropdown-toggle') == true)
            {

              $this->class('dropdown');

            }

            // Create element
            $return .= $this->tag('li', $nblinks);

          }

        }

      }

    }

    // Reset nblinks
    $this->reset('nblinks');

    // Save element
    $this->save('nbitems', $return);

    return $return;

  }


  // Create navbar list element
  public function nblist($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (is_null($content))
    {

      // Check for nb items
      if (is_null($this->getSave('nbitems')))
      {

        // Save settings
        $this->getSetting('nblist');

        // Call nbitem
        $this->nbitem();

        // Restore settings
        $this->restore('nblist');

      }

      $content = $this->checkEOL($this->getSave('nbitems'));

      // Reset nbitems
      $this->reset('nbitems');

    }

    // Check for content again
    if (!is_null($content) && $content !== "")
    {

      // Set class
      $this->class('navbar-nav');

      // Check for scroll
      if (!is_null($this->getSetting('scroll')))
      {

        // Set class
        $this->class('navbar-nav-scroll');

        // Set style
        $this->astyle('--bs-scroll-height: ' . $this->getSetting('scroll') . ';');

      }

      // Create element
      $return = $this->tag('ul', $content);

    }

    // Save element
    $this->save('nblist', $return);

    return $return;

  }


  // Create navbar link element
  public function nblink($content = null, $href = null)
  {

    // Declare return
    $return = null;

    // Check for content or href
    if (!is_null($content) || !is_null($href))
    {

      // Check for active settings
      if ($this->getSetting('active') == true)
      {

        $this->class('active');
        $this->aria('current', 'page');

      }

      // Check for disabled setting
      if ($this->getSetting('disabled') == true)
      {

        $this->class('disabled');

      }

      // Set class
      $this->class('nav-link');

      // Create element
      $return = $this->a($content, $href);

      // Save element
      $this->save('nblinks', $return);

    }

    return $return;

  }


  // Create navbar menu element
  public function nbmenu($content = null)
  {

    // Declare return
    $return = null;

    // Set scroll
    $scroll = $this->getSetting('scroll');

    // Check for content
    if (is_null($content))
    {

      // Check for nblist
      if (is_null($this->getSave('nblist')))
      {

        // Save settings
        $this->saveSet('nblist');

        // Check for scroll
        if (!is_null($scroll))
        {

          $this->scroll($scroll);

        }

        // Call nblist
        $this->nblist();

        // Restore settings
        $this->restore('nblist');

      }

      // Check for navbar brand hide
      if ($this->getSaveString('navbarbrandhide') == true)
      {

        // Navbar Brand
        $content .= $this->checkEOL($this->getSave('navbarbrand'));

      }

      $content .= $this->checkEOL($this->getSave('nblist'));

      $content .= $this->checkEOL($this->getSave('navbartext'));

      $content .= $this->checkEOL($this->getSave('nbform'));

      // Clear nblist & nbform
      $this->reset('nblist');
      $this->reset('navbartext');
      $this->reset('nbform');

    }

    // Check for content again
    if (!is_null($content) && $content !== "")
    {

      if ($this->getSetting('nocollapse') == true)
      {

        $return = $content;

      } else {

        // Set classes
        $this->class('collapse');
        $this->class('navbar-collapse');

        // Check for id
        if (is_null($this->getSaveString('navbarid')) || $this->getSaveString('navbarid') == "")
        {

          $id = $this->setID();
          $this->save('navbarid', $id);

        } else {

          $id = $this->getSaveString('navbarid');

        }

        // Create element
        $return = $this->id($id)->adiv($content);

      }

    }

    // Save element
    $this->save('navbarmenu', $return);

    return $return;

  }


  // Create navbar text element and save variable
  public function nbtext($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (!is_null($content))
    {

      // Set class
      $this->class('navbar-text');

      // Create element
      $return = $this->span($content);

      // Save element
      $this->save('navbartext', $return);

    }

    return $return;

  }


  // Create offcanvas element from given content or saved offcanvas variables
  public function offcanvas($content = null, $id = null)
  {

    if (is_null($id))
    {

      $id = $this->getSave('offcanvasid', true);

    }

    // Check for content
    if (is_null($content))
    {

      // Check for id
      if (is_null($id))
      {

        // Save settings
        $this->saveSet('offcanvas');

        $this->offcanvasheader();
        $id = $this->getSave('offcanvasid', true);

        // Restore settings
        $this->restore('offcanvas');

      }

      $content = $this->getSave('offcanvasheader', true)
        . $this->getSave('offcanvasbody', true);

      // Reset variables
      $this->reset('offcanvasheader');
      $this->reset('offcanvasbody');

    }

    // Check for id
    if (is_null($id))
    {

      // Save settings
      $this->saveSet('offcanvas');

      $this->offcanvasheader();
      $id = $this->getSave('offcanvasid', true);

      // Restore settings
      $this->restore('offcanvas');

    }

    // Set id
    $this->id($id);
    $this->reset('offcanvasid');

    // Set class
    $this->class('offcanvas');

    // Check for placement
    if ($this->getSetting('oright') == true)
    {

      $this->class('offcanvas-end');

    } elseif ($this->getSetting('obottom') == true) {

      $this->class('offcanvas-bottom');

    } elseif ($this->getSetting('otop') == true) {

      $this->class('offcanvas-top');

    } elseif ($this->getSetting('ostart') == true) {

      $this->class('offcanvas-start');

    }

    // Set attributes
    $this->tabindex(-1);
    $this->aria('labelledby', $this->getSave('offcanvastitleid', true));
    $this->reset('offcanvastitleid');

    // Check for scroll
    if ($this->getSetting('scroll') == true)
    {

      $this->data('bs-scroll', 'true');

    }

    // Check for no backdrop
    if ($this->getSetting('nobackdrop') == true)
    {

      $this->data('bs-backdrop', 'false');

    }

    // Create element
    return $this->adiv($this->getSetting('prehtml') . $content . $this->getSetting('posthtml'));

  }


  // Create offcanvas body element from given content and save variable
  public function offcanvasbody($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (!is_null($content))
    {

      $return = $this->class('offcanvas-body')->adiv($this->getSetting('prehtml') . $content . $this->getSetting('posthtml'));

    }

    // Save element
    $this->save('offcanvasbody', $return);

    return $return;

  }


  // Create offcanvas launch button
  public function offcanvasbutton($content = null, $id = null)
  {

    // Check for id
    if (is_null($id))
    {

      $id = $this->getID();

    }

    // Set attributes
    $this->data('bs-toggle', 'offcanvas');
    $this->data('bs-target', '#' . $id);

    // Create element
    return $this->btn($content);

  }


  // Create offcanvas header element from given content or saved variable and save variable
  public function offcanvasheader($content = null, $id = null)
  {

    // Declare return
    $return = null;

    // Check id
    if (is_null($id))
    {

      $id = $this->setID();

    }

    // Check for content
    if (is_null($content))
    {

      // Set title
      $content = $this->checkEOL($this->getSave('offcanvastitle'));

      // Reset title
      $this->reset('offcanvastitle');

    }

    // Save settings
    $this->saveSet('offcanvasheader');

    // Create dismiss button
    $content .= $this->type('button')->cbtn('close')->text('reset')->data('bs-dismiss', 'offcanvas')->aria('label', 'Close')->button();

    // Restore settings
    $this->restore('offcanvasheader');

    // Create header
    $return = $this->class('offcanvas-header')->adiv($this->getSetting('prehtml') . $content . $this->getSetting('posthtml'));

    // Save element
    $this->save('offcanvasheader', $return);
    $this->save('offcanvasid', $id);

    return $return;

  }


  // Create offcanvas title element from given content and save variable
  public function offcanvastitle($title = null)
  {

    // Declare return
    $return = null;

    // Set id
    $id = $this->setID();

    // Check for title
    if (!is_null($title))
    {

      // Create title
      $return = $this->class('offcanvas-title')->id($id)->h5($this->getSetting('prehtml') . $title . $this->getSetting('posthtml'));

    }

    // Save element
    $this->save('offcanvastitle', $return);
    $this->save('offcanvastitleid', $id);

    return $return;

  }


  // Create pagination element from content or saved variables
  public function pagination($label = null, $content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (is_null($content))
    {

      // Check for pagination ul
      if (is_null($this->getSave('pul')))
      {

        // Set sizes
        $lg = $this->getSetting('lg');
        $sm = $this->getSetting('sm');

        // Save settings
        $this->saveSet('pagination');

        // Check lg
        if ($lg == true)
        {

          $this->lg();

        }

        // Check sm
        if ($sm == true)
        {

          $this->sm();

        }

        // Call pul
        $pul = $this->pul();

        // Restore settings
        $this->restore('pagination');

      }

      // Set content
      $content = $this->checkEOL($this->getSave('pul'));

    }

    // Check for content again
    if (!is_null($content))
    {

      // Check for label
      if (!is_null($label))
      {

        $this->aria('label', $label);

      }

      // Create element
      $return = $this->tag('nav', $content);

    }

    // Reset pul
    $this->reset('pul');

    return $return;

  }


  // Create pagination item element and save pitem
  public function pitem($content = null, $href = null)
  {

    // Declare return
    $return = null;

    // Check for plink
    if (is_null($this->getSave('plink')))
    {

      // Save settings
      $this->saveSet('pitem');

      $plink = $this->plink($content, $href);

      // Restore settings
      $this->restore('pitem');

    }

    // Set class
    $this->class('page-item');

    // Check for active
    if ($this->getSetting('active') == true)
    {

      $this->class('active');
      $this->aria('current', 'page');

    }

    // Check for disabled
    if ($this->getSetting('disabled') == true)
    {

      $this->class('disabled');

    }

    // Check for plink array
    if (is_array($this->getSave('plink')))
    {

      foreach ($this->getSave('plink') as $plink)
      {

        $return .= $this->tag('li', $plink);

      }

    } else {

      // Create element
      $return = $this->tag('li', $this->checkEOL($this->getSave('plink')));

    }

    // Reset plink
    $this->reset('plink');

    // Save element
    $this->save('pitem', $return);

    return $return;

  }


  // Create pagination link element and save plink
  public function plink($content = null, $href = null)
  {

    // Check if href is set
    if (!is_null($href))
    {

      $this->href($href);

    }

    // Set class
    $this->class('page-link');

    // Create element
    $return = $this->a($content);

    // Save element
    $this->save('plink', $return);

    return $return;

  }


  // Create progress bar element
  public function progressbar($content = null)
  {

    // Set values
    $now = $this->getSetting('valuenow');
    $min = $this->getSetting('valuemin');
    $max = $this->getSetting('valuemax');

    // Set colors
    $primary = $this->getSetting('primary');
    $secondary = $this->getSetting('secondary');
    $success = $this->getSetting('success');
    $danger = $this->getSetting('danger');
    $warning = $this->getSetting('warning');
    $info = $this->getSetting('info');
    $light = $this->getSetting('light');
    $dark = $this->getSetting('dark');

    // Set striped
    $striped = $this->getSetting('striped');

    // Set animated
    $animated = $this->getSetting('animated');

    // Save settings
    $this->saveSet('progressbar');

    // Set class
    $this->class('progress-bar');

    // Set role
    $this->role('progressbar');

    // Set valuenow
    if (is_null($now))
    {

      $this->aria('valuenow', '0');

    } else {

      $this->aria('valuenow', $now);

      if ($now > 0)
      {

        $this->astyle('width: ' . $now . '%;');

      }

    }

    // Set valuemin
    if (is_null($min))
    {

      $this->aria('valuemin', '0');

    } else {

      $this->aria('valuemin', $min);

    }

    // Set valuemax
    if (is_null($max))
    {

      $this->aria('valuemax', '100');

    } else {

      $this->aria('valuemax', $max);

    }

    // Check for colors
    if ($primary == true)
    {

      $this->bg('primary');

    } elseif ($secondary == true) {

      $this->bg('secondary');

    } elseif ($success == true) {

      $this->bg('success');

    } elseif ($danger == true) {

      $this->bg('danger');

    } elseif ($warning == true) {

      $this->bg('warning');

    } elseif ($info == true) {

      $this->bg('info');

    } elseif ($light == true) {

      $this->bg('light');

    } elseif ($dark == true) {

      $this->bg('dark');

    }

    // Check for striped
    if ($striped == true)
    {

      $this->class('progress-bar-striped');

    }

    // Check for animated
    if ($animated == true)
    {

      $this->class('progress-bar-animated');

    }

    // Create inner element
    $return = $this->adiv($content);

    // Restore settings
    $this->restore('progressbar');

    // Set class
    $this->class('progress');

    // Create element
    return $this->adiv($return);

  }


  // Create pagination ul element and save pul
  public function pul($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (is_null($content))
    {

      // Check for pitem
      if (is_null($this->getSave('pitem')))
      {

        // Check if plink is set
        if (!is_null($this->getSave('plink')))
        {

          // Save settings
          $this->saveSet('pul');

          // Call pitem
          $pitem = $this->pitem();

          // Restore settings
          $this->restore('pul');

        }

      }

      // Set content
      $content = $this->checkEOL($this->getSave('pitem'));

    }

    // Check for content again
    if (!is_null($content))
    {

      // Set class
      $this->class('pagination');

      // Check for lg
      if ($this->getSetting('lg') == true)
      {

        $this->class('pagination-lg');

      }

      // Check for sm
      if ($this->getSetting('sm') == true)
      {

        $this->class('pagination-sm');

      }

      // Create element
      $return = $this->tag('ul', $content);

    }

    // Reset plink & pitem
    $this->reset('plink');
    $this->reset('pitem');

    // Save element
    $this->save('pul', $return);

    return $return;

  }


  // Create row div from given content or saved div(s) & save row(s)
  public function row($content = null)
  {

    // Check if content is set
    if (is_null($content))
    {

      $content = $this->getSave('div');

    }

    // Reset div(s)
    $this->reset('div');

    // Set class
    $this->class('row');

    // Create element
    $row = html::make()->div($content);

    // Save element
    $this->save('row', $row);

    // Return element
    return $row;

  }


  // Create scrollspy element from given content or saved sitem(s)
  public function scrollspy($id = null, $content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (is_null($content))
    {

      // Check if sitem is set
      if (!is_null($this->getSave('sitem')) && $this->getSaveString('sitem') !== "")
      {

        $content = $this->getSaveString('sitem');

        $this->reset('sitem');

      }

    }

    // Check content again
    if (!is_null($content))
    {

      // Set attributes
      $this->data('bs-spy', 'scroll');
      $this->data('bs-target', '#' . $id);
      $this->data('bs-offset', '0');
      $this->tabindex('0');

      // Create element
      $return = $this->adiv($content);

    }

    return $return;

  }


  // Create scrollspy item element & save sitem
  public function sitem($heading = null, $content = null, $id = null)
  {

    // Declare return
    $return = null;

    // Check for heading & content
    if (!is_null($heading) || !is_null($content))
    {

      // Check for id
      if (is_null($id))
      {

        $id = $this->setID();

        // Save the id
        $this->save('sid', $id);

      }

      // Set heading
      $return .= $this->id($id)->h4($heading);

      // Set content
      $return .= $content;

      // Save item
      $this->save('sitem', $return);

    }

    return $return;

  }


  // Return last set id of scrollspy item element & reset sid
  public function sid()
  {

    // Declare return
    $return = null;

    // Get id
    $return = $this->getSaveString('sid');

    // Reset id
    $this->reset('sid');

    // Return id
    return $return;

  }


  // Create spinner element
  public function spinner($span = null)
  {

    // Set class
    if ($this->getSetting('grow') == true)
    {

      $this->class('spinner-grow');

      // Check for sm
      if ($this->getSetting('sm') == true)
      {

        $this->class('spinner-grow-sm');

      }

    } else {

      $this->class('spinner-border');

      // Check for sm
      if ($this->getSetting('sm') == true)
      {

        $this->class('spinner-border-sm');

      }

    }


    // Set Colors
    $this->setColors('text');

    // Set role
    $this->role('status');

    // Create element
    if (is_null($span))
    {

      $return = $this->adiv();

    } else {

      $return = $this->span();

    }

    return $return;

  }


  // Create sub nav element from given content or save subnavlink(s) and subnavitem(s)
  public function subnav($title = null, $navClass = null, $topLinkClass = null)
  {

    // Save settings
    $this->saveSet('subnav');

    // Create nav
    $this->classArray($navClass);
    $nav = $this->nav(null, true);

    // Set id
    $this->setID();

    // Set class
    $this->classArray($topLinkClass);

    // Set data
    $this->cdata('bs-toggle', 'collapse');
    $this->cdata('bs-target', '#' . $this->getID());

    // Set aria
    $this->aria('expanded', 'false');

    // Set return
    $return = null;

    // Set class
    $this->class('nav-link');
    $this->class('top-nav-link');

    // Create Top Link
    $return .= html::make()->a($title, '#');

    // Restore settings
    $this->restore('subnav');

    // Set class
    $this->class('collapse');

    // Set id
    $this->id($this->getID());

    // Create div
    $return .= html::make()->div($nav);

    return $return;

  }


  // Create sub nav-item element from given content or save subnavlink(s) & save subnavitem(s)
  public function subnavitem($content = null, $href = null, $active = null, $disabled = null)
  {

    return $this->navitem($content, $href, $active, $disabled, true);

  }


  // Create sub nav-link element & save subnavlink(s)
  public function subnavlink($content = null, $href = null, $active = null, $disabled = null)
  {

    return $this->navlink($content, $href, $active, $disabled, true);

  }


  // Save tab element to be called by tabs()
  public function tab($name = null, $div = null, $class = null, $attribute = null, $dropdown = null)
  {

    // Declare tab
    $tab = array();

    $tab['name'] = $name;
    $tab['div'] = $div;
    $tab['nameClass'] = $class;
    $tab['nameAtt'] = $attribute;
    $tab['divClass'] = $this->get('classes');
    $tab['divAtt'] = $this->get('attributes');
    $tab['active'] = $this->getSetting('active');
    $tab['disabled'] = $this->getSetting('disabled');
    $tab['dropdown'] = $dropdown;

    // Save tab
    $this->save('tabs', $tab);

    // Reset variables
    $this->reset();

  }


  // Create tabs from saved tabs
  public function tabs()
  {

    // Check for fade
    if ($this->getSetting('fade') == true)
    {

      $fade = 'fade';

    } else {

      $fade = null;

    }

    // Save settings
    $this->saveSet('tabs');

    // Declare variables
    $lis = null;
    $divs = null;
    $count = 1;
    $return = null;

    // Get tabs
    $tabs = $this->getSave('tabs');

    // Check tabs
    if (!is_null($tabs))
    {

      // Check for array
      if (is_array($tabs))
      {

        // Cycle through tabs
        foreach($tabs as $tab)
        {

          // Check for name
          if (is_null($tab['name']))
          {

            $tab['name'] = 'Tab - ' . $count;

          }

          // Set class
          $this->class('nav-link');

          // Check for active
          if ($tab['active'] == true)
          {

            $this->class('active');
            $page = true;

          } else {

            $page = null;

          }

          // Check for disabled
          if ($tab['disabled'] == true)
          {

            $this->class('disabled');

          }

          // Check name class
          if (!is_null($tab['nameClass']))
          {

            // Check if an array
            if (is_array($tab['nameClass']))
            {

              foreach ($tab['nameClass'] as $class)
              {

                $this->class($class);

              }

            } else {

              $this->class($tab['nameClass']);

            }

          }

          // Check name attributes
          if (!is_null($tab['nameAtt']))
          {

            // Check if an array
            if (is_array($tab['nameAtt']))
            {

              foreach ($tab['nameAtt'] as $att)
              {

                $this->attribute($att);

              }

            } else {

              $this->attribute($tab['nameAtt']);

            }

          }

          // Check for href
          $href = null;
          if (is_array($tab['divAtt']))
          {

            foreach ($tab['divAtt'] as $attribute)
            {

              // Get key and value of attribute
              foreach ($attribute as $att => $value)
              {

                if ($att == 'href')
                {

                  $href = $value;

                }

              }

            }

          }

          // Create button
          if (is_null($href))
          {

            // Set unique ID
            $id = $this->setID();
            $this->id($id . '-tab');

            // Set attributes
            $this->data('bs-toggle', 'tab');
            $this->data('bs-target', '#' . $id);
            $this->type('button');
            $this->role('tab');
            $this->aria('controls', $id);
            $this->aria('selected', 'true');

            $button = $this->button($tab['name']);
            $this->role('presentation');

          } else {

            // Check for current page
            if (!is_null($page))
            {

              $this->aria('current', 'page');

            }

            // Check for dropdown
            if (!is_null($tab['dropdown']))
            {

              $this->class('dropdown-toggle');
              $this->data('bs-toggle', 'dropdown');
              $this->role('button');
              $this->aria('expanded', 'false');

            }

            $button = $this->a($tab['name'], $href);

            // Check for dropdown
            if (!is_null($tab['dropdown']))
            {

              $button .= $tab['dropdown'];

              $this->class('dropdown');

            }

          }

          // Set class and attribute for list item
          $this->class('nav-item');

          // Create list item
          $lis .= $this->tag('li', $button);

          // Check if div is set
          if (!is_null($tab['div']))
          {

            // Set div class
            $this->class('tab-pane');
            $this->class($fade);

            // Check if active
            if ($tab['active'] == true)
            {

              $this->class('show active');

            }

            // Set id
            $this->id($id);

            // Set attributes
            $this->role('tabpanel');
            $this->aria('labelledby', $id . '-tab');

            // Check div class
            if (!is_null($tab['divClass']))
            {

              // Check if an array
              if (is_array($tab['divClass']))
              {

                foreach ($tab['divClass'] as $class)
                {

                  $this->class($class);

                }

              } else {

                $this->class($tab['divClass']);

              }

            }

            // Check div attributes
            if (!is_null($tab['divAtt']))
            {

              // Check if an array
              if (is_array($tab['divAtt']))
              {

                foreach ($tab['divAtt'] as $att)
                {

                  $this->attribute($att);

                }

              } else {

                $this->attribute($tab['divAtt']);

              }

            }

            // Create div element
            $divs .= $this->adiv($tab['div']);

          }

          // Increase count
          $count++;

        }

      }

    }

    // Reset tabs
    $this->reset('tabs');

    // Restore settings
    $this->restore('tabs');

    // Set new id
    $id = $this->setID();

    // Check for list items
    if (!is_null($lis))
    {

      // Set class
      $this->class('nav nav-tabs');

      // Set attributes
      $this->id($id . 'Tabs');
      $this->role('tablist');

      $return .= $this->tag('ul', $lis);

    }

    // Check for divs
    if (!is_null($divs))
    {

      // Set class
      $this->class('tab-content');

      // Set attribute
      $this->id($id . 'Content');

      $return .= $this->adiv($divs);

    }

    // Return element
    return $return;

  }


  // Create table element from given content or saved content
  public function table($content = null)
  {

    // Set table class
    $this->class('table');

    // Check for colors to set
    $this->setColors('table');

    // Check for size to set
    $this->setSize('table');

    // Check for striped
    if ($this->getSetting('striped') == true)
    {

      $this->class('table-striped');

    }

    // Check for hover
    if ($this->getSetting('hover') == true)
    {

      $this->class('table-hover');

    }

    // Check for active
    if ($this->getSetting('active') == true)
    {

      $this->class('table-active');

    }

    // Check for bordered
    if ($this->getSetting('bordered') == true)
    {

      $this->class('table-bordered');

    }

    // Check for borderless
    if ($this->getSetting('borderless') == true)
    {

      $this->class('table-borderless');

    }

    // Return table element
    return html::make()->table($content);

  }


  // Create table cell element & save for tr call
  public function td($content = null, $colspan = null, $rowspan = null)
  {

    // Check for colors to set
    $this->setColors('table');

    // Check for active
    if ($this->getSetting('active') == true)
    {

      $this->class('table-active');

    }

    return html::make()->td($content, $colspan, $rowspan);

  }


  // Create table footer row container element & save for table call
  public function tfoot($content = null)
  {

    // Check for colors to set
    $this->setColors('table');

    return html::make()->tfoot($content);

  }


  // Create btn group element from given content or saved btn or btna and save tgroup for toolbar
  public function tgroup($label = null, $content = null)
  {

    // Create btn group element
    $bgroup = $this->bgroup($label, $content);

    // Save btn group
    $this->save('tgroup', $bgroup);

    // Return element
    return $bgroup;

  }


  // Create table header cell element & save for tr call
  public function th($content = null, $colspan = null, $rowspan = null)
  {

    // Check for colors to set
    $this->setColors('table');

    // Check for active
    if ($this->getSetting('active') == true)
    {

      $this->class('table-active');

    }

    return html::make()->th($content, $colspan, $rowspan);

  }


  // Create table header row container element & save for table call
  public function thead($content = null)
  {

    // Check for colors to set
    $this->setColors('table');

    return html::make()->thead($content);

  }


  // Create toast element from given content or saved variables
  public function toast($content = null, $id = null)
  {

    // Declare return
    $return = null;

    // Check content
    if (is_null($content))
    {

      // Check toast header
      if (is_null($this->getSave('toastheader')))
      {

        // Set no close
        $noclose = $this->getSetting('noclose');

        // Save settings
        $this->saveSet('toast');

        // Restore no close setting
        if ($noclose == true)
        {

          $this->noclose();

        }

        $this->toastheader();

        // Restore settings
        $this->restore('toast');

      }

      // Set toast header
      $content = $this->checkEOL($this->getSave('toastheader'));

      // Reset header
      $this->reset('toastheader');

    }

    // Set toast body
    $content .= $this->checkEOL($this->getSave('toastbody'));

    // Reset body
    $this->reset('toastbody');

    // Check content again
    if (!is_null($content))
    {

      // Set class
      $this->class('toast');

      // Check for fade
      if ($this->getSetting('fade') == true)
      {

        $this->class('fade');

      }

      // Check for show
      if ($this->getSetting('show') == true)
      {

        $this->class('show');

      }

      // Check for colors
      if ($this->getSetting('primary') == true)
      {

        $this->bg('primary');
        $this->text('white');

      } elseif ($this->getSetting('secondary') == true) {

        $this->bg('secondary');
        $this->text('white');

      } elseif ($this->getSetting('success') == true) {

        $this->bg('success');
        $this->text('white');

      } elseif ($this->getSetting('danger') == true) {

        $this->bg('danger');
        $this->text('white');

      } elseif ($this->getSetting('warning') == true) {

        $this->bg('warning');

      } elseif ($this->getSetting('info') == true) {

        $this->bg('info');

      } elseif ($this->getSetting('light') == true) {

        $this->bg('light');

      } elseif ($this->getSetting('dark') == true) {

        $this->bg('dark');
        $this->text('white');

      }

      // Check for live
      if (is_null($this->getSetting('live')))
      {

        $this->role('alert');
        $this->aria('live', 'assertlive');

      } else {

        $this->aria('live', $this->getSetting('live'));

      }

      // Set attributes
      $this->aria('atomic', 'true');

      // Check for id
      if (is_null($id))
      {

        $id = $this->setID();

      }

      $this->id($id);

      // Check for delay
      if (!is_null($this->getSetting('delay')))
      {

        $this->data('bs-delay', $this->getSetting('delay'));

      }

      // Check for autohide
      if (!is_null($this->getSetting('autohide')))
      {

        $this->data('bs-autohide', $this->getSetting('autohide'));

      }

      $content = $this->getSetting('prehtml') . $content . $this->getSetting('posthtml');

      // Create element
      $return = $this->adiv($content);

    }

    return $return;

  }


  // Create toast body element and save
  public function toastbody($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (!is_null($content))
    {

      // Set class
      $this->class('toast-body');

      // Create element
      $return = $this->adiv($content);

      // Save element
      $this->save('toastbody', $return);

    }

    return $return;

  }


  // Create toast launch button
  public function toastbutton($content = null, $id = null)
  {

    // Check for id of toast
    if (is_null($id))
    {

      $id = $this->getID();

    }

    // Create button id
    $buttonid = $this->setID();
    $this->id($buttonid);

    // Create javascript
    $js = 'var ' . $buttonid . " = document.getElementById('" . $buttonid . "')" . PHP_EOL
      . 'var ' . $id . " = document.getElementById('" . $id . "')" . PHP_EOL
      . 'if (' . $buttonid . ') {' . PHP_EOL
      . ' ' . $buttonid . ".addEventListener('click', function() {" . PHP_EOL
      . '   var toast = new bootstrap.Toast(' . $id . ')' . PHP_EOL
      . '   toast.show()' . PHP_EOL
      . ' })' . PHP_EOL
      . '}' . PHP_EOL;
    $this->savejs($js);

    // Create element
    return $this->btn($content);

  }


  // Create toast container element
  public function toastcontainer($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (!is_null($content))
    {

      // Set class
      $this->class('toast-container');

      // Create element
      $return = $this->adiv($content);

    }

    return $return;

  }


  // Create toast header element & save toast header
  public function toastheader($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (is_null($content))
    {

      // Check for title
      $content = $this->checkEOL($this->getSave('toasttitle'));

      // Check for small
      $content .= $this->checkEOL($this->getSave('toastsmall'));

      // Reset values
      $this->reset('toasttitle');
      $this->reset('toastsmall');

    }

    // Check for content again
    if (!is_null($content) && $content !== "")
    {

      // Declare button
      $button = null;

      // Check for noclose
      if (is_null($this->getSetting('noclose')))
      {

        // Save settings
        $this->saveSet('toastheader');

        // Create close button
        $button = $this->type('button')
          ->class('btn-close')
          ->data('bs-dismiss', 'toast')
          ->aria('label', 'Close')
          ->button();

        // Restore settings
        $this->restore('toastheader');

      }

      // Set class
      $this->class('toast-header');

      // Create element
      $return = $this->adiv($this->getSetting('prehtml') . $content . $this->getSetting('posthtml') . $button);

      // Save element
      $this->save('toastheader', $return);
    }

    return $return;

  }


  // Create toast small title and save
  public function toastsmall($content = null)
  {

    // Declare return
    $return = null;

    // Check for content
    if (!is_null($content))
    {

      // Create element
      $return = $this->small($content);

      // Save element
      $this->save('toastsmall', $return);

    }

    return $return;

  }


  // Create toast title and save
  public function toasttitle($title = null)
  {

    // Declare return
    $return = null;

    // Check for title
    if (!is_null($title))
    {

      // Create element
      $return = $this->me('auto')->strong($title);

      // Save title
      $this->save('toasttitle', $return);

    }

    return $return;

  }


  // Create toolbar element from saved tgroup or given content
  public function toolbar($label = null, $content = null)
  {

    // Check if content is set
    if (is_null($content))
    {

      // Get saved tgroups
      $content = $this->getSave('tgroup');
      $this->reset('tgroup');

    }

    // Check if label is set
    if (!is_null($label))
    {

      $this->aria('label', $label);

    }

    // set class
    $this->cbtn('toolbar');

    // Set role
    $this->role('toolbar');

    // Format content
    $content = $this->checkEOL($content);

    // Return element
    return $this->adiv($this->getSetting('prehtml') . $content . $this->getSetting('posthtml'));

  }


  // Create table row element & save for thead, tbody, or table call
  public function tr($content = null)
  {

    // Check for colors to set
    $this->setColors('table');

    // Check for active
    if ($this->getSetting('active') == true)
    {

      $this->class('table-active');

    }

    return html::make()->tr($content);

  }


}
