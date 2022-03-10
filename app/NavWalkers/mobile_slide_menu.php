<?php

/**
 * Filename: mobile_slide_menu.php
 * Description:
 * Author:  Ryan E. Mitchell
 */


//Reference: https://code.tutsplus.com/tutorials/understanding-the-walker-class--wp-25401
//https://wordpress.stackexchange.com/a/78078
//https://stackoverflow.com/questions/11974517/wordpress-walker-nav-menu-select-children-elements-in-menu-based-on-page-id

class AWP_Menu_Walker extends Walker_Nav_Menu
{

    private $curItem;
    function start_lvl(&$output, $depth = 0, $args = array())
    {

        // Custom back to menu root text
        if (empty($args->root_text)) {
            $root_text = "Main Menu";
        } else {
            $root_text = esc_attr($args->root_text);
        }



        $indent = str_repeat("\t", $depth);
        if ($depth == 0) {
//            var_dump($this->curItem);
//            echo ($this->curItem->ID);
            $postName = ($this->curItem->post_name);
            $postTitle = ($this->curItem->post_title);
//          echo '<pre>';
//          print_r($this->curItem);
//          echo '</pre>';



            $output .= "\n$indent<div id=\"$postName\" class=\"submenu\">\n";
            $output .= '<div class="submenu-header">';
            $output .= '<a href="#" data-submenu-close="' . $postName . '">';
            $output .= $root_text; // Custom back to menu root text
            $output .= '</a>';
            $output .= '</div>';
//            $output .= '<label>' . $postTitle . '</label>';
            $output .= '<ul>';
        } else {
            $output .= "\n$indent<ul class=\"sub-menussss\">\n";
        }
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        if ($depth == 0) {
            $output .= "$indent</div>\n";
        } else {
//            $output .= "$indent</ul>\n\n";
        }
    }



    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $this->curItem = $item;
//       Debugging

//        echo ('<pre>');
//        print_r($this);
//        echo ('</pre>');

//      echo ('<pre>');
//      print_r($args);
//      echo ('</pre>');





// Custom back to menu root text
        if (empty($args->root_text)) {
            $root_text = "Main Menu";
        } else {
            $root_text = esc_attr($args->root_text);
        }

        if ($depth >= 1) {
//          echo ('<pre>');
//                      print_r($item);
//          echo ('</pre>');
            $postName = ($this->curItem->post_name);
            $postTitle = ($this->curItem->post_title);
            $indent = str_repeat("\t", $depth);
	        $output .= "<li class='" .  implode(" ", $item->classes) . "'>";
            $output .= '<a href="' . $item->url . '">';
            $output .= $item->title; // Custom back to menu root text
            $output .= '</a>';
        } else {
            if (!$args->walker->has_children) {
                $output .= "<li class='" .  implode(" ", $item->classes) . "'>";
//
                $output .= '<a href="' . $item->url . '" ">';
                $output .= $item->title;
                $output .= '</a>';
            } elseif ($args->walker->has_children) {
                $output .= "<li class='has-submenu" .  implode(" ", $item->classes) . "'>";
//
                $output .= '<a href="' . $item->url . '" data-submenu="' . $item->post_name . '">';
                $output .= $item->title;
//                $output .= '<span class="submenuIndicator"></span>';
                $output .= '</a>';
//
////          Submenu
//            $output .= '<div id="' . $item->post_name . '" class="submenu">';
//            $output .= '<div class="submenu-header">';
//            $output .= '<a href="' . $item->url . '" data-submenu-close="' . $item->post_name . '">';
//            $output .= $root_text; // Custom back to menu root text
//            $output .= '</a>';
//            $output .= '</div>';
//
//            $output .= '<label>' . $item->post_title . '</label>';
//
//
//
//
//
//
//            $output .= '</div>';
            }
        }






//        $output .= $item->title;

        if ($item->url && $item->url != '#') {
            $output .= '</a>';
        } else {
//            $output .= '</span>';
        }

//        if ($depth >= 2) {
//            $output =  '';
//        } else {
//            $output .= "<ul class='bacon'>";
//        }
    }


    function end_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        if ($depth == 0) {
//          $output .= '</div>';
        }
    }
}
