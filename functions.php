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


//add_filter(
//    'acf/load_value/name=flexible_content_test',
//    'acf_auto_intro_block',
//    20,
//    3
//);
//function acf_auto_intro_block($value, $post_id, $field)
//{
//    if ($value === "") {
//        $value = array(
//            [
//                'acf_fc_layout' => 'wysiwyg'
//            ],
//            [
//                'acf_fc_layout' => 'wysiwyg'
//            ],
//        );
//    }
//
//    return $value;
//}







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


include_once('app/lib/acf-options-pages.php');
include_once('app/blog/blog-pagination.php');
include_once('app/blog/blog-functions.php');
include_once('app/NavWalkers/mobile_slide_menu.php');
include_once('app/NavWalkers/mobile_dropdown_menu.php');
include_once('app/lib/site-optimizations.php');
include_once('app/lib/rmmFunctions.php');
include_once('app/lib/disable-editor.php');
include_once('app/lib/witSection.php');
include_once('app/lib/default-flexible-content-layouts.php');
