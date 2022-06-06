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
foreach (glob(get_template_directory() . "/app/Shortcodes/*.php") as $file) {
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

if (file_exists(get_template_directory() . '/app/lib/mediaLibraryShowFileSize.php')) {
	require_once(get_template_directory() . '/app/lib/mediaLibraryShowFileSize.php');
}




/* ===========================  Hide ACF  ========================== */

//add_filter('acf/settings/show_admin', '__return_false');

add_filter('acf/init', function () {
	acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'site-settings',
		'position'      => 1,
		'capability'	=> 'edit_posts',
		'icon_url'      => "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='18'%3E%3Cpath d='M15.273 5.504C14.23 5.355 13.19 5.355 12 5.355h-1.19c-.744 0-1.339 0-2.083.15L12 0l3.273 5.504z' fill='%2300D3D8'/%3E%3Cpath d='m12 0-1.19 5.355c-.744 0-1.339 0-2.083.15L12 0z' fill='%23004752'/%3E%3Cpath d='M13.785 5.207c-1.636-.15-3.421 0-5.058.148C2.331 5.95.694 8.628 7.388 9.818c0-.149-.148-.297-.148-.446 0-.595.446-1.19 1.041-1.041 0-.447.149-.893.298-1.34a48.056 48.056 0 0 1 6.545 0c.149.447.297.893.297 1.34.596-.15 1.042.297 1.042 1.04 0 .15 0 .298-.149.447 2.826-.446 4.612-1.19 4.612-2.231 0-1.34-4.314-2.232-7.14-2.38z' fill='%2300D3D8'/%3E%3Cpath d='M16.612 9.223c0 .149 0 .298-.15.446-.148.744-.594 1.34-.892 1.34-.595-.447-1.041-1.34-1.636-1.488-1.041-.447-1.934.743-1.934.743s-.893-1.19-1.934-.743c-.149 0-.446.148-.595.446-.297.297-.595.744-1.041 1.041-.298 0-.744-.595-1.042-1.19 0-.149-.148-.297-.148-.446 0-.595.446-1.041.892-1.041h.149c0-.447.149-.893.298-1.34 1.19-.297 2.23-.297 3.421-.297 1.19 0 2.231 0 3.273.149.148.297.148.446.148.744 0 .149.15.446.15.744h.148c.595-.15.893.297.893.892z' fill='%23FFD0B8'/%3E%3Cpath d='M12 10.71c-.298 0-.446-.148-.446-.446v-1.04c0-.298.148-.447.446-.447.298 0 .446.149.446.446v1.041c0 .298-.148.447-.446.447z' fill='%23E2B39F'/%3E%3Cpath d='M14.975 13.388c-.297 2.976-4.016 4.463-4.016 4.612.595-.595.743-1.934-.595-2.826-.893-.447-1.19-1.488-1.34-2.232v-.446h.447c1.19 0 1.934-1.339 2.38-1.934.149-.149.149-.298.149-.298s0 .15.149.298c.297.595 1.19 1.934 2.38 1.934h.446v.892z' fill='%23E6E6E6'/%3E%3Cpath d='M12 6.694c-1.19 0-2.231 0-3.273.149-.148.446-.297.893-.297 1.339H8.28c-.446 0-.893.446-.893 1.041 0 .149 0 .298.15.446-2.678-.297-4.464-1.04-4.464-2.082 0-1.042 2.38-1.934 5.653-2.232C9.77 5.207 10.81 5.207 12 5.207h1.785S11.554 5.355 12 6.694z' fill='%23004752'/%3E%3Cpath d='M14.975 12.942h-.446C12.893 13.091 12 10.86 12 10.86s-.149-.447 0-.596c.298.596 1.339 2.232 2.529 2.232h.446v.446z' fill='%23CCC'/%3E%3Cpath d='M12 10.86s-.893 2.23-2.529 2.23h-.446v-.445h.446c1.19 0 1.636-1.785 2.529-2.232.149 0 0 .447 0 .447z' fill='%23CCC'/%3E%3Cpath d='M15.57 7.587c-1.785-.298-6.694-.595-6.099 2.231-.297.446-.595.893-1.041 1.19-.298 0-.744-.595-1.042-1.19 0-.149-.148-.297-.148-.446 0-.595.446-1.041.892-1.041h.149c0-.447.149-.893.298-1.34 1.19-.297 2.23-.297 3.421-.297 1.19 0 2.231 0 3.273.149.148.297.148.446.297.744z' fill='%23E2B39F'/%3E%3Cpath d='M11.256 8.33H9.77c0-.148.148-.297.297-.446 0 0 .298-.148.446-.148.15 0 .298 0 .447.148.148.15.148.298.297.447zm2.975 0h-1.487c0-.148.149-.297.297-.446.15 0 .298-.148.447-.148.148 0 .297 0 .446.148.149.15.297.298.297.447z' fill='%235B6670'/%3E%3Cpath d='M14.975 12.496h-.446c-1.636 0-2.529-2.232-2.529-2.232s.893-1.19 1.934-.892c.595.297 1.041 1.19 1.636 1.636.298.298.744.595 1.488.595-.149 0-.893.744-2.083.893zM12 10.264s-.893 2.232-2.529 2.232h-.446c-1.19-.149-1.934-.893-1.934-.893.595 0 1.041-.297 1.488-.595.446-.446.892-1.339 1.487-1.636 1.041-.298 1.934.892 1.934.892z' fill='%23E6E6E6'/%3E%3Cpath d='M10.959 18c.595-.595.743-1.934-.595-2.826-.893-.447-1.19-1.488-1.34-2.232v-.149l.15-.148 1.19.148s-.15 1.042.595 1.786c.892.743 1.19 2.23 0 3.421z' fill='%23CCC'/%3E%3C/svg%3E",
		'redirect'		=> false
	));

});

add_filter('acf/init', function () {
	acf_add_options_page(array(
		'page_title' 	=> 'Wit Sections',
		'menu_title'	=> 'Wit Sections',
		'menu_slug' 	=> 'wit-sections',
		'position'      => 1,
		'capability'	=> 'edit_posts',
		'icon_url'      => "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='18'%3E%3Cpath d='M15.273 5.504C14.23 5.355 13.19 5.355 12 5.355h-1.19c-.744 0-1.339 0-2.083.15L12 0l3.273 5.504z' fill='%2300D3D8'/%3E%3Cpath d='m12 0-1.19 5.355c-.744 0-1.339 0-2.083.15L12 0z' fill='%23004752'/%3E%3Cpath d='M13.785 5.207c-1.636-.15-3.421 0-5.058.148C2.331 5.95.694 8.628 7.388 9.818c0-.149-.148-.297-.148-.446 0-.595.446-1.19 1.041-1.041 0-.447.149-.893.298-1.34a48.056 48.056 0 0 1 6.545 0c.149.447.297.893.297 1.34.596-.15 1.042.297 1.042 1.04 0 .15 0 .298-.149.447 2.826-.446 4.612-1.19 4.612-2.231 0-1.34-4.314-2.232-7.14-2.38z' fill='%2300D3D8'/%3E%3Cpath d='M16.612 9.223c0 .149 0 .298-.15.446-.148.744-.594 1.34-.892 1.34-.595-.447-1.041-1.34-1.636-1.488-1.041-.447-1.934.743-1.934.743s-.893-1.19-1.934-.743c-.149 0-.446.148-.595.446-.297.297-.595.744-1.041 1.041-.298 0-.744-.595-1.042-1.19 0-.149-.148-.297-.148-.446 0-.595.446-1.041.892-1.041h.149c0-.447.149-.893.298-1.34 1.19-.297 2.23-.297 3.421-.297 1.19 0 2.231 0 3.273.149.148.297.148.446.148.744 0 .149.15.446.15.744h.148c.595-.15.893.297.893.892z' fill='%23FFD0B8'/%3E%3Cpath d='M12 10.71c-.298 0-.446-.148-.446-.446v-1.04c0-.298.148-.447.446-.447.298 0 .446.149.446.446v1.041c0 .298-.148.447-.446.447z' fill='%23E2B39F'/%3E%3Cpath d='M14.975 13.388c-.297 2.976-4.016 4.463-4.016 4.612.595-.595.743-1.934-.595-2.826-.893-.447-1.19-1.488-1.34-2.232v-.446h.447c1.19 0 1.934-1.339 2.38-1.934.149-.149.149-.298.149-.298s0 .15.149.298c.297.595 1.19 1.934 2.38 1.934h.446v.892z' fill='%23E6E6E6'/%3E%3Cpath d='M12 6.694c-1.19 0-2.231 0-3.273.149-.148.446-.297.893-.297 1.339H8.28c-.446 0-.893.446-.893 1.041 0 .149 0 .298.15.446-2.678-.297-4.464-1.04-4.464-2.082 0-1.042 2.38-1.934 5.653-2.232C9.77 5.207 10.81 5.207 12 5.207h1.785S11.554 5.355 12 6.694z' fill='%23004752'/%3E%3Cpath d='M14.975 12.942h-.446C12.893 13.091 12 10.86 12 10.86s-.149-.447 0-.596c.298.596 1.339 2.232 2.529 2.232h.446v.446z' fill='%23CCC'/%3E%3Cpath d='M12 10.86s-.893 2.23-2.529 2.23h-.446v-.445h.446c1.19 0 1.636-1.785 2.529-2.232.149 0 0 .447 0 .447z' fill='%23CCC'/%3E%3Cpath d='M15.57 7.587c-1.785-.298-6.694-.595-6.099 2.231-.297.446-.595.893-1.041 1.19-.298 0-.744-.595-1.042-1.19 0-.149-.148-.297-.148-.446 0-.595.446-1.041.892-1.041h.149c0-.447.149-.893.298-1.34 1.19-.297 2.23-.297 3.421-.297 1.19 0 2.231 0 3.273.149.148.297.148.446.297.744z' fill='%23E2B39F'/%3E%3Cpath d='M11.256 8.33H9.77c0-.148.148-.297.297-.446 0 0 .298-.148.446-.148.15 0 .298 0 .447.148.148.15.148.298.297.447zm2.975 0h-1.487c0-.148.149-.297.297-.446.15 0 .298-.148.447-.148.148 0 .297 0 .446.148.149.15.297.298.297.447z' fill='%235B6670'/%3E%3Cpath d='M14.975 12.496h-.446c-1.636 0-2.529-2.232-2.529-2.232s.893-1.19 1.934-.892c.595.297 1.041 1.19 1.636 1.636.298.298.744.595 1.488.595-.149 0-.893.744-2.083.893zM12 10.264s-.893 2.232-2.529 2.232h-.446c-1.19-.149-1.934-.893-1.934-.893.595 0 1.041-.297 1.488-.595.446-.446.892-1.339 1.487-1.636 1.041-.298 1.934.892 1.934.892z' fill='%23E6E6E6'/%3E%3Cpath d='M10.959 18c.595-.595.743-1.934-.595-2.826-.893-.447-1.19-1.488-1.34-2.232v-.149l.15-.148 1.19.148s-.15 1.042.595 1.786c.892.743 1.19 2.23 0 3.421z' fill='%23CCC'/%3E%3C/svg%3E",
		'redirect'		=> false
	));

});
