<?php


/*
|--------------------------------------------------------------------------
| SaveAndRestore - Trait to save bootstrap 5 settings
|--------------------------------------------------------------------------
|
| Required Traits:
|   setget
|
|
*/


namespace splittlogic\bs5\Traits;


trait saveandrestore
{


  // Restore Saved
  public function restore($name = null)
  {

    // Get save values
    $attributes = $this->getSave($name . '-Attributes');
    $classes = $this->getSave($name . '-Classes');
    $settings = $this->getSave($name . '-Settings');

    // Verify attributes is an array
    if (is_array($attributes))
    {

      // Cycle through attributes
      foreach ($attributes as $att)
      {

        // Check that att is an array
        if (is_array($att))
        {

          // Cycle through att
          foreach ($att as $a)
          {

            $this->set('attributes', $a, 'add');

          }

        // Att is not an array
        } else {

          $this->set('attributes', $att, 'add');

        }

      }

    }

    // Verify classes is an array
    if (is_array($classes))
    {

      // Cycle through classes
      foreach ($classes as $class)
      {

        // Check that class is an array
        if (is_array($class))
        {

          // Cycle through class
          foreach ($class as $c)
          {

            $this->set('classes', $c, 'add');

          }

        // Class is not an array
        } else {

          $this->set('classes', $class, 'add');

        }

      }

    }

    // Verify settings is an array
    if (is_array($settings))
    {

      // Cycle through settings
      foreach($settings as $set)
      {

        // Check that set is an array
        if (is_array($set))
        {

          // Cycle through set
          foreach ($set as $s)
          {

            $this->set('settings', $s, 'add');

          }

        // Set is not an array
        } else {

          $this->set('settings', $set, 'add');

        }

      }

    }

    // Reset saves
    $this->reset($name . '-Attributes');
    $this->reset($name . '-Classes');
    $this->reset($name . '-Settings');

  }


  // Restore given attributes, classes, and settings
  public function restoreSet($attributes = null, $classes = null, $settings = null)
  {

    // Verify attributes is an array
    if (is_array($attributes))
    {

      // Cycle through attributes
      foreach ($attributes as $att)
      {

        // Check that att is an array
        if (is_array($att))
        {

          // Cycle through att
          foreach ($att as $a)
          {

            $this->set('attributes', $a, 'add');

          }

        // Att is not an array
        } else {

          $this->set('attributes', $att, 'add');

        }

      }

    }

    // Verify classes is an array
    if (is_array($classes))
    {

      // Cycle through classes
      foreach ($classes as $class)
      {

        // Check that class is an array
        if (is_array($class))
        {

          // Cycle through class
          foreach ($class as $c)
          {

            $this->set('classes', $c, 'add');

          }

        // Class is not an array
        } else {

          $this->set('classes', $class, 'add');

        }

      }

    }

    // Verify settings is an array
    if (is_array($settings))
    {

      // Cycle through settings
      foreach($settings as $set)
      {

        // Check that set is an array
        if (is_array($set))
        {

          // Cycle through set
          foreach ($set as $s)
          {

            $this->set('settings', $s, 'add');

          }

        // Set is not an array
        } else {

          $this->set('settings', $set, 'add');

        }

      }

    }
    
  }


  // Save settings for a given element & reset values
  public function saveSet($name = null)
  {

    // Save attributes and classes
    $attributes = $this->get('attributes');
    $classes = $this->get('classes');
    $settings = $this->get('settings');

    $this->save($name . '-Attributes', $attributes);
    $this->save($name . '-Classes', $classes);
    $this->save($name . '-Settings', $settings);

    // Reset attributes and classes
    $this->reset();

    return [
      'attributes' => $attributes,
      'classes' => $classes,
      'settings' => $settings
    ];

  }




}
