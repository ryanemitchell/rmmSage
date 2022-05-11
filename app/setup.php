<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;


/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the login screen assets
 *
 * @return void
 */

add_action('login_enqueue_scripts', function () {
    bundle('login')->enqueue();
}, 100);



/**
 * Register the admin screen assets
 *
 * @return void
 */

add_action('admin_enqueue_scripts', function () {
    bundle('admin')->enqueue();
}, 101);



/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls'
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_desktop_navigation' => __('Primary Desktop Navigation', 'sage'),
        'primary_mobile_navigation' => __('Primary Mobile Navigation', 'sage'),
        'not_found_navigation' => __('Not Found Navigation', 'sage')
    ]);

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style'
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary'
    ] + $config);
});

/**
 * Add Classes to Body
 *
 * @return void
 */

add_filter( 'body_class', function( $classes ) {
	return array_merge( $classes, array( 'scroll-smooth' ) );
} );


add_image_size( 'split-content-image', 422, 281 );
add_image_size( 'shared-about-image', 555, 309 );
add_image_size( 'shared-sidebarHeader-image', 420, 166, true );

// Include Shortcodes
foreach (glob(get_template_directory() . "/app/shortcodes/*.php") as $file) {
    include_once $file;
}


if (file_exists(get_template_directory() . '/app/blog/blog-pagination.php')) {
    require_once(get_template_directory() . '/app/blog/blog-pagination.php');
}

if (file_exists(get_template_directory() . '/app/blog/blog-functions.php')) {
    require_once(get_template_directory() . '/app/blog/blog-functions.php');
}

if (file_exists(get_template_directory() . '/app/NavWalkers/mobile_slide_menu.php')) {
    require_once(get_template_directory() . '/app/NavWalkers/mobile_slide_menu.php');
}

if (file_exists(get_template_directory() . '/app/NavWalkers/mobile_dropdown_menu.php')) {
    require_once(get_template_directory() . '/app/NavWalkers/mobile_dropdown_menu.php');
}

if (file_exists(get_template_directory() . '/app/NavWalkers/rmm_basic_nav_walker.php')) {
    require_once(get_template_directory() . '/app/NavWalkers/rmm_basic_nav_walker.php');
}

if (file_exists(get_template_directory() . '/app/lib/site-optimizations.php')) {
    require_once(get_template_directory() . '/app/lib/site-optimizations.php');
}

if (file_exists(get_template_directory() . '/app/lib/rmmFunctions.php')) {
    require_once(get_template_directory() . '/app/lib/rmmFunctions.php');
}

if (file_exists(get_template_directory() . '/app/lib/menu-functions.php')) {
	require_once(get_template_directory() . '/app/lib/menu-functions.php');
}

if (file_exists(get_template_directory() . '/app/lib/disable-editor.php')) {
    require_once(get_template_directory() . '/app/lib/disable-editor.php');
}

if (file_exists(get_template_directory() . '/app/lib/disable-commenting.php')) {
	require_once(get_template_directory() . '/app/lib/disable-commenting.php');
}

if (file_exists(get_template_directory() . '/app/lib/witSection.php')) {
    require_once(get_template_directory() . '/app/lib/witSection.php');
}

if (file_exists(get_template_directory() . '/app/lib/default-flexible-content-layouts.php')) {
    require_once(get_template_directory() . '/app/lib/default-flexible-content-layouts.php');
}

if (file_exists(get_template_directory() . '/app/lib/insert-header-body-footer-scripts.php')) {
    require_once(get_template_directory() . '/app/lib/insert-header-body-footer-scripts.php');
}

if (file_exists(get_template_directory() . '/app/lib/globalsIntoHead.php')) {
	require_once(get_template_directory() . '/app/lib/globalsIntoHead.php');
}




if (file_exists(get_template_directory() . '/app/lib/RmmSageFunctions.php')) {
	require_once(get_template_directory() . '/app/lib/RmmSageFunctions.php');
}

if (file_exists(get_template_directory() . '/app/lib/RmmOffersFunctions.php')) {
	require_once(get_template_directory() . '/app/lib/RmmOffersFunctions.php');
}


/* ===========================  Hide ACF  ========================== */

//add_filter('acf/settings/show_admin', '__return_false');
