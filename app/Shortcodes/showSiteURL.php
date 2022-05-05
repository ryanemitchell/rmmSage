<?php

/**
 * Filename: show_site_url.php
 * Description:
 * Author:  Ryan E. Mitchell
 */

add_shortcode( 'show_site_url', function( $atts = null, $content = null ) {
	return site_url();
} );
