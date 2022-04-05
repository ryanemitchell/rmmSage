<?php

/**
 * Filename: acf-options-pages.php
 * Description:
 * Author:  Ryan E. Mitchell
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'WitSage Settings',
		'menu_title'	=> 'WitSage Settings',
		'menu_slug' 	=> 'wit-site-settings',
		'capability'	=> 'edit_posts',
		'icon_url'      => plugin_dir_url( __FILE__ ). "/icons/sage_character_head.svg",
		'position'      => 2,
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Buttons',
		'menu_title'	=> 'Buttons',
		'parent_slug'	=> 'wit-site-settings',
	));


	acf_add_options_page(array(
		'page_title' 	=> 'Wit Sections',
		'menu_title'	=> 'Wit Sections',
		'menu_slug' 	=> 'wit-sections',
		'capability'	=> 'edit_posts',
		'icon_url'      => get_template_directory_uri(). "/app/lib/icons/wit-digital-star.png",
		'position'      => 3,
		'redirect'		=> true
	));


}
