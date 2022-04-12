<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/


if (! file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

try {
    \Roots\bootloader();
} catch (Throwable $e) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url'  => 'https://docs.roots.io/acorn/2.x/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect([ 'setup', 'filters' ])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
            /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');

/* ===========================  Support for acf-local-json-manager   ========================== */

add_filter('aljm_save_json', function ($folders) {
    $folders['rmmSage'] = dirname(__FILE__) . '/acf-json';

    return $folders;
});



// The “login_headerurl” filter is used to filter the URL of the logo on the WordPress login page.
// By default, this logo links to the WordPress site.
add_filter('login_headerurl','crunchify_login_link');
function crunchify_login_link() {

	// Change Logo link if you want user to redirect to other link.
	return home_url();
}


/**
 * Remove the WordPress version
 */
add_filter('the_generator', '__return_false');

/**
 * Disable HTML in WordPress comments
 */

add_filter( 'pre_comment_content', 'esc_html' );


/**
 * Disable WordPress Login Hints
 */
function no_wordpress_errors(){
	return 'Please try the right user/pass combination';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

/**
 * Remove Query Strings from resources
 */
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );


/**
 * Remove RSD Links
 */

remove_action( 'wp_head', 'rsd_link' ) ;

/**
 * Remove Shortlink
 */
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

/**
 * Disable Embeds
 */
function disable_embed(){
	wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'disable_embed' );

/**
 * Disable XML-RPC
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Remove WLManifest Link
 */
remove_action( 'wp_head', 'wlwmanifest_link' ) ;

/**
 * Remove JQuery Migrate
 */

//function deregister_qjuery() {
//	if ( !is_admin() ) {
//		wp_deregister_script('jquery');
//	}
//}
//add_action('wp_enqueue_scripts', 'deregister_qjuery');


/**
 * Remove WLManifest Link
 */
function disable_pingback( &$links ) {
	foreach ( $links as $l => $link )
		if ( 0 === strpos( $link, get_option( 'home' ) ) )
			unset($links[$l]);
}
add_action( 'pre_ping', 'disable_pingback' );

/**
 * Disable Heartbeat
 */
add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
	wp_deregister_script('heartbeat');
}
/**
 * Disable Dashicons on Front-end
 */

function wpdocs_dequeue_dashicon() {
	if (current_user_can( 'update_core' )) {
		return;
	}
	wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );



function hide_block_editor(){

	// globals
	global $typenow;

	// Restrict
	$restricted = array('acf-field-group', 'attachment');

	if(in_array($typenow, $restricted))
		return;

	$post_type = $typenow;
	$post_id = 0;

	if(isset( $_GET['post'])){

		$post_id = (int) $_GET['post'];

	}elseif(isset($_POST['post_ID'])){

		$post_id = (int) $_POST['post_ID'];

	}

	$field_groups = acf_get_field_groups(array(
		'post_id'   => $post_id,
		'post_type' => $post_type
	));

	$hide_block_editor = false;

	foreach($field_groups as $field_group){

		$hide_on_screen = acf_get_array($field_group['hide_on_screen']);

		if(!in_array('block_editor', $hide_on_screen))
			continue;

		$hide_block_editor = true;
		break;

	}

	if($hide_block_editor){

		add_filter('use_block_editor_for_post_type', '__return_false');

	}

}


add_action('load-post.php',  'hide_block_editor');
add_action('load-post-new.php', 'hide_block_editor');

