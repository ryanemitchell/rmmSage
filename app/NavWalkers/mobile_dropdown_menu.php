<?php

//https://awhitepixel.com/blog/wordpress-menu-walkers-tutorial/
//https://www.ibenic.com/how-to-create-wordpress-custom-menu-walker-nav-menu-class/

class RMM_Mobile_Menu_Walker extends Walker_Nav_Menu
{
// start_lvl
// HTML for the start of a new level. This is usually just the closing </ul>.
//    function start_lvl(&$output, $depth = 0, $args = null)
//    {
//
//    }

// end_lvl
//HTML for the end of a level. This is usually just the closing </ul>.
//    function end_lvl(&$output, $depth = 0, $args = null)
//    {
//    }

//  start_el
//Responsible for outputting each element’s HTML.
//It should output the starting <li> and the <a> tag with the link title inside.

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
//	    if ( $depth === 0 ) {
//			    array_push( $item->classes, "level-0");
//	    }

	    switch ($depth) {
		    case 0:
			    array_push( $item->classes, "level-0");
				break;
		    case 1:
			    array_push( $item->classes, "level-1");
			    break;
		    case 2:
			    array_push( $item->classes, "level-2");
			    break;
		    case 3:
			    array_push( $item->classes, "level-3");
			    break;
	    }

		$output .= "<li class='" .  implode(" ", $item->classes) . "'>";

	    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));

//		@todo make parent a div with link and toggle

        if ($item->url && $item->url != '#') {
	        if (!empty($children)) {
		        $output .= "<div class=\"hasToggle\">";
	        }

            $output .= '<a href="' . $item->url . '">';

        } else {
            $output .= '<span>';
        }

        $output .= $item->title;

        if ($item->url && $item->url != '#') {
            $output .= '</a>';

	        if (!empty($children)) {
		        $output .= "<span class=\"controlToggle\"></span></div>";
	        }

        } else {
            $output .= '</span>';
        }






    }

//end_el
//Responsible for outputting the closing of an element.
// Usually it would just output the </li> tag
//    function end_el(&$output, $item, $depth = 0, $args = null)
//    {
//    }


//  display_element
// inherited function from the general Walker class, and is the function responsible for traversing.
// This is the function that calls all the above functions in turn.

//  function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) { }
}
