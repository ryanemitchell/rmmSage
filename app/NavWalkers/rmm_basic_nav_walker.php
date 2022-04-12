<?php

//https://awhitepixel.com/blog/wordpress-menu-walkers-tutorial/
//https://www.ibenic.com/how-to-create-wordpress-custom-menu-walker-nav-menu-class/

class rmm_basic_nav_walker extends Walker_Nav_Menu
{
	function start_lvl( &$output, $depth = 0, $args = array() )
    {
        $output .= '<ul>';
    }

    // Displays end of a level. E.g '</ul>'
    // @see Walker::end_lvl()
    function end_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '</ul>';
    }
    // Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $output .= '<li class="w-full bg-blue-100 hover:bg-blue-500 cursor-pointer py-5 px-10 transition-all duration-1000"><a href="' . esc_attr($item->url).'">'. esc_attr($item->title).'</a>';
    }
    // Displays end of an element. E.g '</li>'
    // @see Walker::end_el()
    function end_el(&$output, $item, $depth = 0, $args = [])
    {
        $output .= '</li>';
    }
}
