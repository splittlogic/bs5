<?php


/*
|--------------------------------------------------------------------------
| helpers - Trait for helper bootstrap 5 functions
|--------------------------------------------------------------------------
|
| Required Traits:
|   setget
|
| activeCheck()       - Check if current url is active and call setting
| arrayToNav()        - Create nav element from given array
| attributeArray()    - Set an array of attributes for next created element
| classArray()        - Set an array of classes for next created element
*/


namespace splittlogic\bs5\Traits;


trait helpers
{


  // Check if current url is active and call setting
  public function activeCheck($href = null)
  {

    // Check if href is set
    if ($href)
    {

      // Check if href matches current full url
      if ($href == url()->full())
      {

        $this->class('active');
        $this->active();

      }

    }

  }


  // Create nav element from given array
  public function arrayToNav($menu = null)
  {

    // Declare return
    $return = null;

    // Check for menu
    if ($menu)
    {

      // Save settings
      $this->saveSet('arrayToNav');

      // Check if menu is an array
      if (is_array($menu))
      {

        // Declare menu settings
        $linkClass = null;
        $linkAttribute = null;
        $itemClass = null;
        $itemAttribute = null;
        $id = null;
        $subnavClass = null;
        if (isset($menu['menu-settings']))
        {

          // Link classes
          if (isset($menu['menu-settings']['link-class']))
          {

            $linkClass = $menu['menu-settings']['link-class'];

          }

          // Link attributes
          if (isset($menu['menu-settings']['link-attribute']))
          {

            $linkAttribute = $menu['menu-settings']['link-attribute'];

          }

          // Item classes
          if (isset($menu['menu-settings']['item-class']))
          {

            $itemClass = $menu['menu-settings']['item-class'];

          }

          // Item attributes
          if (isset($menu['menu-settings']['item-attribute']))
          {

            $itemAttribute = $menu['menu-settings']['item-attribute'];

          }

          // Nav ID
          if (isset($menu['menu-settings']['id']))
          {

            $id = $menu['menu-settings']['id'];

          }

          // Sub Nav class
          if (isset($menu['menu-settings']['subnav-class']))
          {

            $subnavClass = $menu['menu-settings']['subnav-class'];

          }

        }

        // Cycle through array
        foreach($menu as $key => $m)
        {

          // Check for subs
          if (isset($m['subs']))
          {

            // Declare active
            $active = null;

            // Declare button class
            $buttonClass = null;

            // Declare $subButtonClass
            $subButtonClass = null;

            // Declare temp sub
            $tempSub = null;

            // Verify subs is an array
            if (is_array($m['subs']))
            {

              // Cycle through subs
              foreach ($m['subs'] as $skey => $sub)
              {

                // Check for href
                if (isset($sub['href']))
                {

                  // Check if current url is active
                  $this->activeCheck($sub['href']);

                  // Check if active is set
                  if ($this->getSetting('active') == true)
                  {

                    $active = true;

                  }

                  // Check for classes
                  if (isset($sub['class']))
                  {

                    $this->classArray($sub['class']);

                  }

                  // Check for attributes
                  if (isset($sub['attribute']))
                  {

                    $this->attributeArray($sub['attribute']);

                  }

                  // Menu Settings Classes & Attributes
                  $this->classArray($linkClass);
                  $this->attributeArray($linkAttribute);

                  // Build sub nav link & item
                  $this->subnavlink($skey, $sub['href']);

                  // Menu Settings Classes & Attributes
                  $this->classArray($itemClass);
                  $this->attributeArray($itemAttribute);
                  $this->subnavitem();

                }

              }

              // Check if a sub link is active
              if ($active == true)
              {

                $this->class('show');

                $buttonClass = 'opened';

              }

              // Check for classes
              if (isset($m['class']))
              {

                $subButtonClass = array_merge($linkClass, $m['class']);

              }

              // Check for button class
              if (!is_null($buttonClass))
              {

                $subButtonClass[] = $buttonClass;
              }

              // Build subnav
              $tempSub = $this->subnav($key, $subnavClass, $subButtonClass);

              // Reset active
              $active = null;
              $buttonClass = null;

            }

            // Check for classes
            if (isset($m['class']))
            {

              $this->classArray($m['class']);

            }

            // Check for attributes
            if (isset($m['attribute']))
            {

              $this->attributeArray($m['attribute']);

            }

            // Menu Settings Classes & Attributes
            $this->classArray($linkClass);
            $this->attributeArray($linkAttribute);

            // Build nav link & item
            $this->navlink($tempSub);

            // Menu Settings Classes & Attributes
            $this->classArray($itemClass);
            $this->attributeArray($itemAttribute);
            $this->navitem();

          // Subs is not set
          } else {

            // Check for href
            if (isset($m['href']))
            {

              // Check if current url is active
              $this->activeCheck($m['href']);

              // Check for classes
              if (isset($m['class']))
              {

                $this->classArray($m['class']);

              }

              // Check for attributes
              if (isset($m['attribute']))
              {

                $this->attributeArray($m['attribute']);

              }

              // Menu Settings Classes & Attributes
              $this->classArray($linkClass);
              $this->attributeArray($linkAttribute);

              // Build nav link & item
              $this->navlink($key, $m['href']);

              // Menu Settings Classes & Attributes
              $this->classArray($itemClass);
              $this->attributeArray($itemAttribute);
              $this->navitem();

            }

          }

        }

        // Restore settings
        $this->restore('arrayToNav');

        // Set ID
        $this->id($id);

        // Build menu
        $return = $this->nav();

      }

    }

    // Return
    return $return;

  }


  // Set an array of attributes for next created element
  public function attributeArray($attributes = null)
  {

    // Check if attributes is an array
    if (is_array($attributes))
    {

      // Cycle through attributes
      foreach ($attributes as $key => $att)
      {

        // Check if key is numeric
        if (is_numeric($key))
        {

          $this->attribute($att);

        // Key is not numeric
        } else {

          $this->attribute([$key => $att]);

        }

      }

    // attributes is not an array
    } else {

      // Check if attributes is empty
      if (!is_null($attributes))
      {

        $this->attribute($attributes);

      }

    }

  }


  // Set an array of classes for next created element
  public function classArray($classes = null)
  {

    // Check if classes is an array
    if (is_array($classes))
    {

      // Cycle through classes
      foreach ($classes as $class)
      {

        $this->class($class);

      }

    // classes is not an array
    } else {

      // Check if classes is empty
      if (!is_null($classes))
      {

        $this->class($classes);

      }

    }

  }


}
