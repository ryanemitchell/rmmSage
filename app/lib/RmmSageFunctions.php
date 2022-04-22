<?php

/**
 * Filename: RmmSageFunctions.php
 * Description:
 * Author: ryan
 */

namespace app\lib;

class RmmSageFunctions
{
    public static function class()
    {
    }

    /**
     * Get the current posts ancestors from current post ID,
     * WP core method is a bit glitchy, so I'm using this more reliable method.
     *
     * @return array
     */
    public function getAncestors(): array
    {
        $id = get_the_ID();
        return  get_post_ancestors($id);
    }


//  public function rmmGetFields($contentGroup, $pathAndField, $postID = '')
//  {
//      if (! empty(get_field('SectionCenteredContent_group')['display_from'])) {
//          return get_field('SectionCenteredContent_group')['display_from'];
//      } else {
//          return [];
//      }
//  }

    /**
     * Get the current posts ancestors from current post ID,
     * WP core method is a bit glitchy, so I'm using this more reliable method.
     *
     * @return array
     */


    public function rmmGetFields($fieldKey, $postID = '')
    {
        $fieldValue = '';
        if (! empty(get_field($fieldKey, $postID))) :
            $fieldValue = get_field($fieldKey, $postID);
        endif;

        return $fieldValue;
    }

    public function rmmGetFieldsRecursive($fieldKey, $ancestors, $postID = '')
    {
        $fieldValue = '';
//    If available get the field value from the current post
        if (! empty(get_field($fieldKey, $postID))) :
            $fieldValue = get_field($fieldKey, $postID);
        else :
            foreach ($ancestors as $ancestor) :
//  Get the field values from the closest ancestor then break out.
                if (get_field($fieldKey, $ancestor)) :
                    $fieldValue = get_field($fieldKey, $ancestor);
                    break;
                endif;
            endforeach;
        endif;

        return $fieldValue;
    }


    public function rmmGetFieldsDisplayFrom($fieldKey, $displayFrom, $ancestors, $postID = '')
    {

        //       Check where to get the fields from.  This post, the closest parent or null
        switch ($displayFrom) :
            case "on":
                $fieldValue = (new RmmSageFunctions() )->rmmGetFields($fieldKey, $postID);
                break;
            case "parent":
                $fieldValue = (new RmmSageFunctions() )->rmmGetFieldsRecursive($fieldKey, $ancestors);
                break;
            case "off":
                $fieldValue = [];
                break;
            default:
                $fieldValue = [];
        endswitch;

        return $fieldValue;
    }



	public function rmmSetDisplayToggle($fieldKey, $postID = ''): string {
		if ((new RmmSageFunctions() )->rmmGetFields($fieldKey,$postID )):
			$mobileDisplay = 'block';
		else :
			$mobileDisplay = 'hidden';
		endif;

		return $mobileDisplay;

	}


}
