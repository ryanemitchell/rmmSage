<?php

/**
 * Filename: insert-header-body-footer-scripts.php
 * Description:
 * Author:  Ryan E. Mitchell
 */

//  Additional Header Code




add_filter('acf/init', function () {
	if (get_field('additional_header_code_active', 'option')) :

		function rmm_insertScript_head()
		{
			the_field('additional_header_code', 'option');

		}

		add_action('wp_head', 'rmm_insertScript_head', 999);
	endif;

//  Additional Body Code
	if (get_field('after_opening_body_code_active', 'option')) :
		function rmm_insertScript_body()
		{
			the_field('after_opening_body_code', 'option');
		}

		add_action('wp_body_open', 'rmm_insertScript_body', 999);
	endif;

//  Additional footer Code
	if (get_field('additional_footer_code_active', 'option')) :
		function rmm_insertScript_footer()
		{
			the_field('additional_footer_code', 'option');
		}

		add_action('wp_footer', 'rmm_insertScript_footer', 999);
	endif;


});
