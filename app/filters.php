<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s" class="text-xs font-bold continued">%s</a>', get_permalink(), __('Continued', 'sage'));
});



