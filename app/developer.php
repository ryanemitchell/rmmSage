<?php

/**
 * Developer Functions
 */

namespace App;

use function Roots\bundle;

/**
 * Add Debug class to body
 *
 * @return void
 */




add_filter('acf/init', function () {
	if (get_field('rmm_visual_debug', 'option')) :
		add_filter('body_class', function ($classes) {
			return array_merge($classes, array( 'rmmVisualDebug' ));
		});
	endif;

});
