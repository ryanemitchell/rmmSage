<?php

/**
 * Filename: globalsIntoHead.php
 * Description:
 * Author: ryan
 */

add_action('wp_head', function() {

echo	\Roots\view('globals.globals')->render();

});
