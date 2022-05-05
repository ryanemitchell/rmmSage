<?php

/**
 * Filename: rmmFunctions.php
 * Description:
 * Author: ryan
 */

/**
 * rmmGetField('field_name', 'default_value', 0)
 *
 * $field name = name of the ACF field
 * $default = value if not found
 * bool = is from ACF option page
 * @return  $rmField
 *
 * @php $pageTitle = rmmGetField('page_title', get_the_title(), 0); @endphp
 */

function rmmGetField($fieldName, $default = null, $options = false)
{
    if ($options == true) {
        $options = 'option';
    } else {
        $options = '';
    }

    if (get_field($fieldName, $options)) {
        $rmmField = get_field($fieldName, $options);
    } else {
        $rmmField = $default;
    }

    return $rmmField;
}


function add_additional_class($classes, $item, $args){
	if(isset($args->add_li_class)){
		$classes[] = $args->add_li_class;
	}
	return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class', 1, 3);


/* ==========================================================================
   Add PreviousPage link to 404 menu
   ========================================================================== */


function new_nav_menu_items($items, $args) {
	if( $args->theme_location == 'not_found_navigation' ){
		$homelink = '<li id="back-link" class="py-5 px-10 w-full font-bold duration-500 cursor-pointer menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-64 transition-[background] font-display" data-tw-selected="1651068561221"><a href="http://sb-expert-air.local/" data-tw-selected="1651068559346" class="">Back to Previous Page</a></li>';
		$items = $homelink . $items;
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items', 10, 2 );



/* ==========================================================================
   Custom Folder for uploads
	Reference: https://www.kvcodes.com/2014/03/how-to-change-upload-folder-url-for-every-uploads-in-wordpress/
   ========================================================================== */
//function kv_custom_image_dir( $pathdata ) {
//	$subdir = '/uploads_img'.$pathdata['subdir'];
//	$pathdata['path'] = str_replace($pathdata['subdir'], $subdir, $pathdata['path']);
//	$pathdata['url'] = str_replace($pathdata['subdir'], $subdir, $pathdata['url']);
//	$pathdata['subdir'] = str_replace($pathdata['subdir'], $subdir, $pathdata['subdir']);
//	return $pathdata;
//}
//add_filter( 'upload_dir', 'kv_custom_image_dir' );
