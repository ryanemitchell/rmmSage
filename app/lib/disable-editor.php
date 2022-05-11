<?php

/**
 * Disable Editor
 *
 * @package      ClientName
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

/* ==========================================================================
   Disable by title, template, id or post type.  Look through the different functions.

@todo: combine functions and clean up arrays to make this file more readable.
   ========================================================================== */


// Disable Gutenberg on the back end.
//add_filter( 'use_block_editor_for_post', '__return_false' );
//
//// Disable Gutenberg for widgets.
//add_filter( 'use_widgets_blog_editor', '__return_false' );
//
//add_action( 'wp_enqueue_scripts', function() {
//	// Remove CSS on the front end.
//	wp_dequeue_style( 'wp-block-library' );
//
//	// Remove Gutenberg theme.
//	wp_dequeue_style( 'wp-block-library-theme' );
//
//	// Remove inline global CSS on the front end.
//	wp_dequeue_style( 'global-styles' );
//}, 20 );



function get_page_id_by_title($title)
{
	$page = get_page_by_title($title);
	return $page->ID;
}


//get_page_id_by_title('how are you');
//https://www.billerickson.net/disabling-gutenberg-certain-templates/

/**
 * Templates and Page IDs without editor
 *
 */
function ea_disable_editor($id = false)
{

    $excluded_templates = array(
        'template-development-flexible-content.blade.php',
		'page-maintenance-plan.blade.php',
	    'template-service-page.blade.php',
	    'template-city-page.blade.php',
		'*'.'.blade.php',
        'page.blade.php',
	    'page-offers.blade.php',
	    'template-city-page.blade.php'
    );

    $excluded_ids = array(
//		'36', //contact
//	    '40', //scheduleService
//	    '74', //careers
//	    '55', //DEV
         get_option( 'page_on_front' ),
	    get_page_id_by_title('careers'),
	    is_404(),
    );

    if (empty($id)) {
        return false;
    }

    $id = intval($id);
    $template = get_page_template_slug($id);

    return in_array($id, $excluded_ids) || in_array($template, $excluded_templates);
}

/**
 * Disable Gutenberg by template
 *
 */
function ea_disable_gutenberg($can_edit, $post_type)
{

    if (! ( is_admin() && !empty($_GET['post']) )) {
        return $can_edit;
    }

    if (ea_disable_editor($_GET['post'])) {
        $can_edit = false;
    }

    return $can_edit;
}
add_filter('gutenberg_can_edit_post_type', 'ea_disable_gutenberg', 10, 2);
add_filter('use_block_editor_for_post_type', 'ea_disable_gutenberg', 10, 2);

/**
 * Disable Classic Editor by template
 *
 */
function ea_disable_classic_editor()
{

    $screen = get_current_screen();
    if ('page' !== $screen->id || ! isset($_GET['post'])) {
        return;
    }

    if (ea_disable_editor($_GET['post'])) {
        remove_post_type_support('page', 'editor','coupons');
    }
}
add_action('admin_head', 'ea_disable_classic_editor');



/* ==========================================================================
   Disable for specific post types
   ========================================================================== */

function rmm_disable_gutenberg( $current_status, $post_type ) {

	// Disabled post types
	$disabled_post_types = array( 'offers', 'movie' );

	// Change $can_edit to false for any post types in the disabled post types array
	if ( in_array( $post_type, $disabled_post_types, true ) ) {
		$current_status = false;
	}

	return $current_status;
}
add_filter( 'use_block_editor_for_post_type', 'rmm_disable_gutenberg', 10, 2 );
