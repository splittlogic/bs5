<?php


/*
|--------------------------------------------------------------------------
| settings - Trait to set options / settings
|--------------------------------------------------------------------------
|
| Required Traits:
|   setget
|
| active()        - Save active setting
| align()         - Set align-* class
| alwaysopen()    - Save always open setting
| animated()      - Save animated setting
| aplaceholder()  - Set placeholder attribute
| aria()          - Set given aria-* attribute
| autoclose()     - Save autoclose setting
| autohide()      - Save autohide setting
| bg()            - Set given bg-* class
| bi()            - Set bi or bi-* class
| border()        - Set border or border-* class
| bordered()      - Save bordered setting
| bottom()        - Set bottom-* class
| captiontop()    - Set caption-top class
| cbtn()          - Set btn or btn-* class
| center()        - Save center setting
| clearfix()      - Set clearfix class
| clink()         - Set link-* class
| col()           - Set col or col-* class
| colink()        - Save color link setting
| collapse()      - Set collapse class
| control()       - Save control setting
| d()             - Set d-* class
| danger()        - Save danger setting
| dark()          - Save dark setting
| data()          - Set data-* attribute
| delay()         - Save delay setting
| disabled()      - Save disabled setting
| dismiss()       - Save dismiss setting
| dismissible()   - Save dismissible setting
| display()       - Set display class
| dprint()        - Set d-print-* class
| dropleft()      - Save dropleft setting
| dropright()     - Save dropright setting
| dropup()        - Save dropup setting
| dummy()         - Save dummy setting
| end()           - Set end-* class
| expand()        - Save expand setting
| fade()          - Save fade setting
| fill()          - Save fill setting
| fixed()         - Set fixed-* class
| flex()          - Set flex-* class
| float()         - Set float-* class
| fluid()         - Save fluid setting
| flush()         - Save flush setting
| font()          - Set font-* class
| fs()            - Set fs-* class
| fst()           - Set fst-* class
| fullscreen()    - Save fullscreen setting
| fw()            - Set fw-* class
| g()             - Set g-* class
| gap()           - Set gap-* class
| getID()         - Get current automatic element ID
| getSetting()    - Get requested setting
| gradient()      - Set bg-gradient class
| grow()          - Save grow setting
| gx()            - Set gx-* class
| gy()            - Set gy-* class
| h()             - Set h-100 or h-* class
| has()           - Set has-* class
| hide()          - Save hide setting
| horizontal()    - Save horizontal setting
| hover()         - Save hover setting
| indeterminate() - Set indeterminate javascript
| indicators()    - Save indicators setting
| info()          - Save info setting
| interval()      - Save interval setting
| invalid()       - Set invalid-* class
| invisible()     - Set invisible class
| is()            - Set is-* class
| justify()       - Set justify or justify-* class
| lh()            - Set lh-* class
| light()         - Save light setting
| listonly()      - Save listonly setting
| live()          - Save live setting
| lg()            - Set lg setting
| m()             - Set m-auto or m-* class
| mb()            - Set mb-auto or mb-* class
| md()            - Set md setting
| me()            - Set me-auto or me-* class
| menucolor()     - Save menu color setting
| menuend()       - Save menu end setting
| menuoffset()    - Save menu offset setting
| menureference() - Save menu reference setting
| menustart()     - Save menu start setting
| minvh()         - Set min-vh-* class
| minvw()         - Set min-vw-* class
| ms()            - Set ms-auto or ms-* class
| mt()            - Set mt-auto or mt-* class
| mw()            - Set mw-auto or mw-* class
| mx()            - Set mx-auto or mx-* class
| my()            - Set my-auto or my-* class
| needs()         - Set needs-* class
| nobackdrop()    - Save nobackdrop setting
| nobtngroup()    - Save nobtngroup setting
| noclose()       - Save noclose setting
| nocolor()       - Save nocolor setting
| nocollapse()    - Save nocollapse setting
| notouch()       - Save notouch setting
| numbered()      - Save numbered setting
| obottom()       - Save obottom setting for offcanvas
| offset()        - offset-* class
| order()         - Set order-* class
| oright()        - Save oright setting for offcanvas
| ostart()        - Save ostart setting for offcanvas
| otop()          - Save otop setting for offcanvas
| overflow()      - Set overflow-* class
| outline()       - Save outline setting
| pad()           - Set p-auto or p-* (padding) class
| pb()            - Set pb-auto or pb-* class
| pe()            - Set pe-auto or pe-* class
| pills()         - Save pills setting
| placeholder()   - Set placeholder or placeholder-* class
| position()      - Set position-* class
| posthtml()      - Set post html setting
| prehtml()       - Save pre html setting
| primary()       - Save primary setting
| progress()      - Set progress or progress-* class
| ps()            - Set ps-auto or ps-* class
| pt()            - Set pt-auto or pt-* class
| px()            - Set px-auto or px-* class
| py()            - Set py-auto or py-* class
| responsive()    - Set responsive setting
| right()         - Save right setting 
| role()          - Set role attribute
| rounded()       - Set rounded or rounded-* class
| scroll()        - Save scroll setting
| setting()       - Set given setting
| secondary()     - Save secondary setting
| setColors()     - Set colors
| setID()         - Set auto element id
| setSize()       - Set size
| setting()       - Save a setting
| shadow()        - Set shadow or shadow-* class
| show()          - Save show setting
| sm()            - Set sm setting
| split()         - Save split setting
| start()         - Set start-* class
| static()        - Save static setting
| sticky()        - Set sticky-* class
| striped()       - Save striped setting
| success()       - Save success setting
| thumbnail()     - Save thumbnail setting
| toggle()        - Save toggle setting
| translate()     - Set translate-* class
| tooltip()       - Add tooltip element to element calling it
| top()           - Set top-* class
| userselect()    - Set user-select-* class
| valid()         - Set valid-* class
| valuemax()      - Save valuemax setting
| valuemin()      - Save valuemin setting
| valuenow()      - Save valuenow setting
| vertical()      - Save vertical setting
| vh()            - Set vh-* class
| visible()       - Set visible class
| visually()      - Set visually-* class
| vw()            - Set vw-* class
| w()             - Set w-100 or w-* class
| warning()       - Save warning setting
| was()           - Set was-* class
| xl()            - Set xl setting
| xs()            - Set xs setting
| xxl()           - Set xxl setting
*/


namespace splittlogic\bs5\Traits;

use splittlogic\html\html;


trait settings
{


  // Set active class & setting
  public function active()
  {

    $this->setting('active');

    return $this;

  }


  // Set align class
  public function align($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('align-' . $value);

    }

    return $this;

  }


  // Save always open setting
  public function alwaysopen()
  {

    $this->setting('alwaysopen');

    return $this;

  }


  // Save animated setting
  public function animated()
  {

    $this->setting('animated');

    return $this;

  }


  // Set placeholder attribute
  public function aplaceholder($value = null)
  {

    // Check for value
    if (!is_null($value))
    {

      html::make()->placeholder($value);

    }

    return $this;

  }


  // Set given aria-* attribute
  public function aria($name = null, $value = null)
  {

    // Check that name & value are set
    if (!is_null($name) && !is_null($value))
    {

      $this->attribute(['aria-' . $name => $value]);

    }

    return $this;

  }


  // Save autoclose setting
  public function autoclose($setting = null)
  {

    // Check if setting is set
    if (!is_null($setting))
    {

      $this->setting('autoclose', $setting);

    }

    return $this;

  }


  // Save autohide setting
  public function autohide($value = null)
  {

    // Check for value
    if (!is_null($value))
    {

      $this->setting('autohide', $value);

    }

    return $this;

  }


  // Set given bg-* class
  public function bg($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('bg-' . $name);

    }

    return $this;

  }


  // Set bi or bi-* class
  public function bi($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('bi-' . $value);

    // Value is not set
    } else {

      $this->class('bi');

    }

    return $this;

  }


  // Set border or border-* class
  public function border($name = null)
  {

    // Check if border is set
    if ($this->getSetting('border') !== true)
    {

      $this->setting('border');

    }

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('border-' . $name);

    } else {

      $this->class('border');

    }

    return $this;

  }


  // Save bordered setting
  public function bordered()
  {

    $this->setting('bordered');

    return $this;

  }


  // Save borderless setting
  public function borderless()
  {

    $this->setting('borderless');

    return $this;

  }


  // Set bottom-* class
  public function bottom($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('bottom-' . $value);

    }

    return $this;

  }


  // Set caption-top class
  public function captiontop()
  {

    $this->class('caption-top');

    return $this;

  }


  // Set btn or btn-* class
  public function cbtn($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('btn-' . $name);

    // Name is not set
    } else {

      $this->class('btn');

    }

    return $this;

  }


  // Save center setting
  public function center()
  {

    $this->setting('center');

    return $this;

  }


  // Set clearfix class
  public function clearfix()
  {

    $this->class('clearfix');

    return $this;

  }


  // Set link-* class
  public function clink($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('link-' . $value);

    }

    return $this;

  }


  // Set col or col-* class
  public function col($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('col-' . $name);

    // Name is not set
    } else {

      $this->class('col');

    }

    return $this;

  }


  // Save color link setting
  public function colink()
  {

    $this->setting('colink');

    return $this;

  }


  // Set collapse class
  public function collapse($value = null)
  {

    $this->class('collapse');

    // Check value
    if (!is_null($value))
    {

      // Check for multi
      if ($value == 'multi')
      {

        $this->class('multi-collapse');

      } else {

        $this->class('collapse-' . $value);

      }

    }

    return $this;

  }


  // Save control setting
  public function control()
  {

    $this->setting('control');

    return $this;

  }


  // Set d-* class
  public function d($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('d-' . $name);

    }

    return $this;

  }


  // Save danger setting
  public function danger()
  {

    $this->setting('danger');

    return $this;

  }


  // Set dark setting
  public function dark()
  {

    $this->setting('dark');

    return $this;

  }


  // Set data-* attribute
  public function data($attribute = null, $value = null)
  {

    // Check for attribute & value
    if (!is_null($attribute) && !is_null($value))
    {

      $this->attribute(['data-' . $attribute => $value]);

    }

    return $this;

  }


  // Save delay setting
  public function delay($value = null)
  {

    // Check for value
    if (!is_null($value))
    {

      $this->setting('delay', $value);

    }

    return $return;

  }


  // Set disabled setting
  public function disabled()
  {

    $this->setting('disabled');

    return $this;

  }


  // Save dismiss setting
  public function dismiss()
  {

    $this->setting('dismiss');

    return $this;

  }


  // Set dismissible setting
  public function dismissible()
  {

    $this->setting('dismissible');

    return $this;

  }


  // Set display class
  public function display($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('display-' . $value);

    }

    return $this;

  }


  // Set d-print-* class
  public function dprint($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->d('print-' . $value);

    }

    return $this;

  }


  // Save dropleft setting
  public function dropleft()
  {

    // Set dropleft
    $this->setting('dropleft');

    return $this;

  }


  // Save dropright setting
  public function dropright()
  {

    // Set dropright
    $this->setting('dropright');

    return $this;

  }


  // Save dropup setting
  public function dropup()
  {

    // Set dropup
    $this->setting('dropup');

    return $this;

  }


  // Save dummy setting
  public function dummy()
  {

    // Set dummy
    $this->setting('dummy');

    return $this;

  }


  // Set end-* class
  public function end($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('end-' . $value);

    }

    return $this;

  }


  // Save expand setting
  public function expand($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->setting('expand', $value);

    }

    return $this;

  }


  // Save fade setting
  public function fade()
  {

    $this->setting('fade');

    return $this;

  }


  // Save fill setting
  public function fill($fill = null)
  {

    $this->setting('fill');

    return $this;

  }


  // Set fixed-* class
  public function fixed($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('fixed-' . $name);

    }

    return $this;

  }


  // Set flex-* class
  public function flex($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('flex-' . $name);

    }

    return $this;

  }


  // Set float-* class
  public function float($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('float-' . $name);

    }

    return $this;

  }


  // Save fluid setting
  public function fluid()
  {

    $this->setting('fluid');

    return $this;

  }


  // Savd flush setting
  public function flush()
  {

    $this->setting('flush');

    return $this;

  }


  // Set font-* class
  public function font($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('font-' . $value);

    }

    return $this;

  }


  // Set fs-* class
  public function fs($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('fs-' . $value);

    }

    return $this;

  }


  // Set fst-* class
  public function fst($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('fst-' . $value);

    }

    return $this;

  }


  // Save fullscreen setting
  public function fullscreen()
  {

    $this->setting('fullscreen');

    return $this;

  }


  // Set fw-* class
  public function fw($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('fw-' . $value);

    }

    return $this;

  }


  // Set g-* class
  public function g($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('g-' . $value);

    }

    return $this;

  }


  // Set gap-* class
  public function gap($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('gap-' . $name);

    }

    return $this;

  }


  // Get current automatic element ID
  public function getID()
  {

    // Declare return
    $return = null;

    // Check if id is set
    if (is_null($this->get('id')))
    {

      // Check if auto ID is set
      if (isset(html::$splittlogic['save']['autoID']))
      {

        $return = 'bootstrapElement' . html::$splittlogic['save']['autoID'];

      }

    } else {

      $return = $this->get('id');

    }

    return $return;

  }


  // Get requested Setting
  public function getSetting($name = null)
  {

    // Check name is set
    if (!is_null($name))
    {

      // Get settings
      $settings = $this->get('settings');

      // Check that settings is an array
      if (is_array($settings))
      {

        // Cycle through settings
        foreach ($settings as $setting)
        {

          // Check if setting is set
          if (isset($setting[$name]))
          {

            return $setting[$name];

          }

        }

        return null;

      // Settings is not an array
      } else {

        return null;

      }

    // Name is not set
    } else {

      return null;

    }

  }


  // Set bg-gradient class
  public function gradient()
  {

    $this->class('bg-gradient');

    return $this;

  }


  // Save grow setting
  public function grow()
  {

    $this->setting('grow');

    return $this;

  }


  // Set gx-* class
  public function gx($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('gx-' . $name);

    }

    return $this;

  }


  // Set gy-* class
  public function gy($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('gy-' . $name);

    }

    return $this;

  }


  // Set h-100 or h-* class
  public function h($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('h-' . $name);

    // Name is not set
    } else {

      $this->class('h-100');

    }

    return $this;

  }


  // Set has-* class
  public function has($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('has-' . $value);

    }

    return $this;

  }


  // Save hide setting
  public function hide()
  {

    $this->setting('hide');

    return $this;

  }


  // Save horizontal setting
  public function horizontal()
  {

    $this->setting('horizontal');

    return $this;

  }


  // Save hover setting
  public function hover()
  {

    $this->setting('hover');

    return $this;

  }


  // Set indeterminate javascript
  public function indeterminate($id = null)
  {

    // Check if id is set
    if (is_null($id))
    {

      // Check if getid is set
      if (!is_null($this->getID()))
      {

        $this->savejs('document.getElementById("' . $this->getID() . '").indeterminate = true;');

      }

    } else {

      $this->savejs('document.getElementById("' . $id . '").indeterminate = true;');

    }

    return $this;

  }


  // Save indicators setting
  public function indicators($setting = null)
  {

    $this->setting('indicators', $setting);

    return $this;

  }


  // Set info setting
  public function info()
  {

    $this->setting('info');

    return $this;

  }


  // Save interval setting
  public function interval($int = null)
  {

    // Check if int is set
    if (is_null($int))
    {

      $this->setting('interval');

    } else {

      $this->setting('interval', $int);

    }

    return $this;

  }


  // Set invalid-* class
  public function invalid($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('invalid-' . $value);

    }

    return $this;

  }


  // Set invisible class
  public function invisible()
  {

    $this->class('invisible');

    return $this;

  }


  // Set is-* class
  public function is($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('is-' . $value);

    }

    return $this;

  }


  // Save justified setting
  public function justified()
  {

    $this->setting('justified');

    return $this;

  }


  // Set justify or justify-* class
  public function justify($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('justify-' . $name);

    } else {

      $this->class('justify');

    }

    return $this;

  }


  // Save lg setting
  public function lg()
  {

    $this->setting('lg');

    return $this;

  }


  // Set lh-* class
  public function lh($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('lh-' . $value);

    }

    return $this;

  }


  // Save light setting
  public function light()
  {

    $this->setting('light');

    return $this;

  }


  // Save listonly setting
  public function listonly()
  {

    // Set listonly setting
    $this->setting('listonly');

    return $this;

  }


  // Save live setting
  public function live($value = null)
  {

    // Check for value
    if (is_null($value))
    {

      $this->setting('live', true);

    } else {

      $this->setting('live', $value);

    }

    return $this;

  }


  // Set m-auto or m-* class
  public function m($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('m-' . $value);

    // Value is not set
    } else {

      $this->class('m-auto');

    }

    return $this;

  }


  // Set mb-auto or mb-* class
  public function mb($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('mb-' . $value);

    // Value is not set
    } else {

      $this->class('mb-auto');

    }

    return $this;

  }


  // Set md setting
  public function md()
  {

    $this->setting('md');

    return $this;

  }


  // Set me-auto or me-* class
  public function me($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('me-' . $value);

    // Value is not set
    } else {

      $this->class('me-auto');

    }

    return $this;

  }


  // Save menu color setting
  public function menucolor($color = null)
  {

    // Check for color
    if (!is_null($color))
    {

      $this->setting('menucolor', $color);

    }

    return $this;

  }


  // Save menu end setting
  public function menuend($size = null)
  {

    // Check for size
    if (!is_null($size))
    {

      $this->setting('menuend', $size);

    // Size not set
    } else {

      $this->setting('menuend');

    }

    return $this;

  }


  // Save menu offset setting
  public function menuoffset($setting = null)
  {

    // Check for setting
    if (!is_null($setting))
    {

      $this->setting('menuoffset', $setting);

    }

    return $this;

  }


  // Save menu reference setting
  public function menureference($setting = null)
  {

    // Check for setting
    if (!is_null($setting))
    {

      $this->setting('menureference', $setting);

    }

    return $this;

  }


  // Save menu start setting
  public function menustart($size = null)
  {

    // Check for size
    if (!is_null($size))
    {

      $this->setting('menustart', $size);

    // Size not set
    } else {

      $this->setting('menustart');

    }

    return $this;

  }


  // Set mh-auto or mh-* class
  public function mh($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('mh-' . $value);

    // Value is not set
    } else {

      $this->class('mh-auto');

    }

    return $this;

  }


  // Set min-vh-* class
  public function minvh($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('min-vh-' . $value);

    }

    return $this;

  }


  // Set min-vw-* class
  public function minvw($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('min-vw-' . $value);

    }

    return $this;

  }


  // Set ms-auto or ms-* class
  public function ms($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('ms-' . $value);

    // Value is not set
    } else {

      $this->class('ms-auto');

    }

    return $this;

  }


  // Set mt-auto or mt-* class
  public function mt($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('mt-' . $value);

    // Value is not set
    } else {

      $this->class('mt-auto');

    }

    return $this;

  }


  // Set mw-auto or mw-* class
  public function mw($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('mw-' . $value);

    // Value is not set
    } else {

      $this->class('mw-auto');

    }

    return $this;

  }


  // Set mx-auto or mx-* class
  public function mx($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('mx-' . $name);

    } else {

      $this->class('mx-auto');

    }

    return $this;

  }


  // Set my-auto or my-* class
  public function my($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('my-' . $value);

    // Value is not set
    } else {

      $this->class('my-auto');

    }

    return $this;

  }


  // Set needs-* class
  public function needs($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('needs-' . $value);

    }

    return $this;

  }


  // Save nobackdrop setting
  public function nobackdrop()
  {

    $this->setting('nobackdrop');

    return $this;

  }


  // Save nobtngroup setting
  public function nobtngroup()
  {

    $this->setting('nobtngroup');

    return $this;

  }


  // Save noclose setting
  public function noclose()
  {

    $this->setting('noclose');

    return $this;

  }


  // Save nocolor setting
  public function nocolor()
  {

    $this->setting('nocolor');

    return $this;

  }


  // Save nocollapse setting
  public function nocollapse()
  {

    $this->setting('nocollapse');

    return $this;

  }


  // Save notouch setting
  public function notouch()
  {

    $this->setting('notouch');

    return $this;

  }


  // Save numbered setting
  public function numbered()
  {

    $this->setting('numbered');

    return $this;

  }


  // Save obottom setting for offcanvas
  public function obottom()
  {

    $this->setting('obottom');

    return $this;

  }


  // Set offset-* class
  public function offset($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('offset-' . $value);

    }

    return $this;

  }


  // Set order-* class
  public function order($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('order-' . $value);

    }

    return $this;

  }


  // Save oright setting for offcanvas
  public function oright()
  {

    $this->setting('oright');

    return $this;

  }


  // Save ostart setting for offcanvas
  public function ostart()
  {

    $this->setting('ostart');

    return $this;

  }


  // Save otop setting for offcanvas
  public function otop()
  {

    $this->setting('otop');

    return $this;

  }


  // Set overflow-* class
  public function overflow($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('overflow-' . $value);

    }

    return $this;

  }


  // Save outline setting
  public function outline()
  {

    $this->setting('outline');

    return $this;

  }


  // Set p-auto or p-* (padding) class
  public function pad($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('p-' . $value);

    } else {

      $this->class('p-auto');

    }

    return $this;

  }


  // Set pb-auto or pb-* class
  public function pb($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('pb-' . $name);

    } else {

      $this->class('pb-auto');

    }

    return $this;

  }


  // Set pe-auto or pe-* class
  public function pe($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('pe-' . $name);

    } else {

      $this->class('pe-auto');

    }

    return $this;

  }


  // Set pills setting
  public function pills()
  {

    $this->setting('pills');

    return $this;

  }


  // Set placeholder or placeholder-* class
  public function placeholder($value = null)
  {

    // Check for value
    if (is_null($value))
    {

      $this->class('placeholder');

    // Value is set
    } else {

      $this->class('placeholder-' . $value);

    }

    return $this;

  }


  // Add popover element to element calling it
  public function popover($content = null, $title = null, $placement = null)
  {

    // Check content
    if (!is_null($content))
    {

      // Set popover
      $this->data('bs-toggle', 'popover');

      // Set content
      $this->data('bs-content', $content);

      // Check for title
      if (is_null($title))
      {

        $this->data('bs-container', 'body');

      } else {

        $this->atitle($title);

      }

      // Check for placement
      if (!is_null($placement))
      {

        $this->data('bs-placement', $placement);

      }

      // Check for dismiss
      if ($this->getSetting('dismiss') == true)
      {

        $this->tabindex('0');
        $this->data('bs-trigger', 'focus');

        // Check for previous js set
        if (is_null($this->getSave('popoverdismiss')))
        {

          $js = "var popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {" . PHP_EOL
            . " trigger: 'focus'" . PHP_EOL
            . "})" . PHP_EOL;

          $this->savejs($js);

          $this->save('popoverdismiss', 'set');

        }

      }

      // Check for disabled
      if ($this->getSetting('disabled') == true)
      {

        $this->tabindex('0');
        $this->data('bs-trigger', 'hover focus');

      }

      // Check for previous js set
      if (is_null($this->getSave('popoverjs')))
      {

        $js = "var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=" . '"popover"' . "]'))" . PHP_EOL
          . 'var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {' . PHP_EOL
          . ' return new bootstrap.Popover(popoverTriggerEl)' . PHP_EOL
          . '})' . PHP_EOL;

        $this->savejs($js);

        $this->save('popoverjs', 'set');

      }

    }

    return $this;

  }


  // Set position-* class
  public function position($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('position-' . $value);

    }

    return $this;

  }


  // Save post html setting
  public function posthtml($html = null)
  {

    // Check if html is set
    if (!is_null($html))
    {

      $this->setting('posthtml', $html);

    }

    return $this;

  }


  // Save pre html setting
  public function prehtml($html = null)
  {

    // Check if html is set
    if (!is_null($html))
    {

      $this->setting('prehtml', $html);

    }

    return $this;

  }


  // Save primary setting
  public function primary()
  {

    $this->setting('primary');

    return $this;

  }


  // Set progress or progress-* class
  public function progress($value = null, $dummy1 = null, $dummy2 = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('progress-' . $value);

    // Value is not set
    } else {

      $this->class('progress');

    }

    return $this;

  }


  // Set ps-auto or ps-* class
  public function ps($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('ps-' . $name);

    } else {

      $this->class('ps-auto');

    }

    return $this;

  }


  // Set pt-auto or pt-* class
  public function pt($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('pt-' . $name);

    } else {

      $this->class('pt-auto');

    }

    return $this;

  }


  // Set px-auto or px-* class
  public function px($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('px-' . $name);

    } else {

      $this->class('px-auto');

    }

    return $this;

  }


  // Set py-auto or py-* class
  public function py($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('py-' . $name);

    } else {

      $this->class('py-auto');

    }

    return $this;

  }


  // Save responsive setting
  public function responsive()
  {

    $this->setting('responsive');

    return $this;

  }


  // Save right setting
  public function right()
  {

    $this->setting('right');

    return $this;

  }


  // Set role attribute
  public function role($value = null)
  {

    // Check value is set
    if (!is_null($value))
    {

      $this->attribute(['role' => $value]);

    }

    return $this;

  }


  // Set rounded or rounded-* class
  public function rounded($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('rounded-' . $value);

    // Value not set
    } else {

      $this->class('rounded');

    }

    return $this;

  }


  // Save secondary setting
  public function secondary()
  {

    $this->setting('secondary');

    return $this;

  }


  // Set colors
  public function setColors($element = null)
  {

    // Set return
    $return = false;

    // Check if element is set
    if (!is_null($element))
    {

      // Check for outline
      if ($this->getSetting('outline') == true)
      {

        $outline = '-outline';

      // outline is not set
      } else {

        $outline = null;

      }

      // Check for primary
      if ($this->getSetting('primary') == true)
      {

        $this->class($element . $outline . '-primary');
        $return = true;

      }

      // Check for secondary
      if ($this->getSetting('secondary') == true)
      {

        $this->class($element . $outline . '-secondary');
        $return = true;

      }

      // Check for success
      if ($this->getSetting('success') == true)
      {

        $this->class($element . $outline . '-success');
        $return = true;

      }

      // Check for danger
      if ($this->getSetting('danger') == true)
      {

        $this->class($element . $outline . '-danger');
        $return = true;

      }

      // Check for warning
      if ($this->getSetting('warning') == true)
      {

        $this->class($element . $outline . '-warning');
        $return = true;

      }

      // Check for info
      if ($this->getSetting('info') == true)
      {

        $this->class($element . $outline . '-info');
        $return = true;

      }

      // Check for light
      if ($this->getSetting('light') == true)
      {

        $this->class($element . $outline . '-light');
        $return = true;

      }

      // Check for dark
      if ($this->getSetting('dark') == true)
      {

        $this->class($element . $outline . '-dark');
        $return = true;

      }

      // Check for color link
      if ($this->getSetting('colink') == true)
      {

        $this->class($element . '-link');
        $return = true;

      }

    }

    return $return;

  }


  // Set auto element id
  public function setID()
  {

    // Check if ID is already set
    if (!isset(html::$splittlogic['save']['autoID']))
    {

      html::$splittlogic['save']['autoID'] = 1;

    // auto ID is set
    } else {

      html::$splittlogic['save']['autoID']++;

    }

    return $this->getID();

  }


  // Set size
  public function setSize($element = null)
  {

    // Set return
    $return = false;

    // Check if element is set
    if (!is_null($element))
    {

      // Check for sm
      if ($this->getSetting('sm') == true)
      {

        $this->class($element . '-sm');
        $return = true;

      }

      // Check for md
      if ($this->getSetting('md') == true)
      {

        $this->class($element . '-md');
        $return = true;

      }

      // Check for lg
      if ($this->getSetting('lg') == true)
      {

        $this->class($element . '-lg');
        $return = true;

      }

      // Check for xl
      if ($this->getSetting('xl') == true)
      {

        $this->class($element . '-xl');
        $return = true;

      }

      // Check for xxl
      if ($this->getSetting('xxl') == true)
      {

        $this->class($element . '-xxl');
        $return = true;

      }

    }

    return $return;

  }


  // Save scroll setting
  public function scroll($value = null)
  {

    // Check if value is set
    if (is_null($value))
    {

      $this->setting('scroll');

    } else {

      $this->setting('scroll', $value);

    }

    return $this;

  }


  // Save a setting
  public function setting($name = null, $value = null)
  {

    // Check name is set
    if (!is_null($name))
    {

      // Check if value is set
      if (is_null($value))
      {

        $value = true;

      }

      // Add setting to settings variable
      $this->set('settings', [$name => $value], 'add');

    }

    return $this;

  }


  // Set shadow or shadow-* class
  public function shadow($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('shadow-' . $value);

    // Value is not set
    } else {

      $this->class('shadow');

    }

    return $this;

  }


  // Save show setting
  public function show()
  {

    $this->setting('show');

    return $this;

  }


  // Set sm setting
  public function sm()
  {

    $this->setting('sm');

    return $this;

  }


  // Save split setting
  public function split()
  {

    $this->setting('split');

    return $this;

  }


  // Set start-* class
  public function start($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('start-' . $value);

    }

    return $this;

  }


  // Save static setting
  public function static()
  {

    $this->setting('static');

    return $this;

  }


  // Set sticky-* class
  public function sticky($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('sticky-' . $name);

    }

    return $this;

  }


  // Save striped setting
  public function striped()
  {

    $this->setting('striped');

    return $this;

  }


  // Save success setting
  public function success()
  {

    $this->setting('success');

    return $this;

  }


  // Save test setting
  public function test()
  {

    $this->setting('test');

    return $this;

  }


  // Set given text-* class
  public function text($name = null)
  {

    // Check name is set
    if (!is_null($name))
    {

      $this->class('text-' . $name);

    }

    return $this;

  }


  // Save thumbnail setting
  public function thumbnail()
  {

    $this->setting('thumbnail');

    return $this;

  }


  // Save toggle setting
  public function toggle()
  {

    $this->setting('toggle');

    return $this;

  }


  // Set translate-* class
  public function translate($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('translate-' . $value);

    }

    return $this;

  }


  // Add tooltip element to element calling it
  public function tooltip($content = null, $placement = null, $withhtml = null)
  {

    // Check if content is set
    if (!is_null($content))
    {

      $this->data('bs-toggle', 'tooltip');

      // Check for html
      if (!is_null($withhtml))
      {

        $this->data('bs-html', 'true');

      }

      $this->atitle($content);

      // Check for placement
      if (!is_null($placement))
      {

        $this->data('bs-placement', $placement);

      }

      // Check for previous js set
      if (is_null($this->getSave('tooltipjs')))
      {

        $js = "var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=" . '"tooltip"' . "]'))" . PHP_EOL
          . "var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {" . PHP_EOL
          . " return new bootstrap.Tooltip(tooltipTriggerEl)" . PHP_EOL
          . "})" . PHP_EOL;

        $this->savejs($js);

        $this->save('tooltipjs', 'set');

      }

    }

    return $this;

  }


  // Set top-* class
  public function top($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('top-' . $value);

    }

    return $this;

  }


  // Set user-select-* class
  public function userselect($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('user-select-' . $value);

    }

    return $this;

  }


  // Set valid-* class
  public function valid($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('valid-' . $value);

    }

    return $this;

  }


  // Save valuemax setting
  public function valuemax($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->setting('valuemax', $value);

    }

    return $this;

  }


  // Save valuemin setting
  public function valuemin($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->setting('valuemin', $value);

    }

    return $this;

  }


  // Save valuenow setting
  public function valuenow($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->setting('valuenow', $value);

    }

    return $this;

  }


  // Save vertical setting
  public function vertical()
  {

    $this->setting('vertical');

    return $this;

  }


  // Set vh-* class
  public function vh($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('vh-' . $value);

    }

    return $this;

  }


  // Set visible class
  public function visible()
  {

    $this->class('visible');

    return $this;

  }


  // Set visually-* class
  public function visually($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('visually-' . $value);

    }

    return $this;

  }


  // Set vw-* class
  public function vw($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('vw-' . $value);

    }

    return $this;

  }


  // Set w-100 or w-* class
  public function w($name = null)
  {

    // Check if name is set
    if (!is_null($name))
    {

      $this->class('w-' . $name);

    // Name is not set
    } else {

      $this->class('w-100');

    }

    return $this;

  }


  // Save warning setting
  public function warning()
  {

    $this->setting('warning');

    return $this;

  }


  // Set was-* class
  public function was($value = null)
  {

    // Check if value is set
    if (!is_null($value))
    {

      $this->class('was-' . $value);

    }

    return $this;

  }


  // Set xl setting
  public function xl()
  {

    $this->setting('xl');

    return $this;

  }


  // Set xs setting
  public function xs()
  {

    $this->setting('xs');

    return $this;

  }


  // Set xxl setting
  public function xxl()
  {

    $this->setting('xxl');

    return $this;

  }


}
