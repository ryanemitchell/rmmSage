<?php

function rmm_call_now() {
	ob_start();
	echo \Roots\view( 'fieldPartials.callNow' );

	return ob_get_clean();
}

add_shortcode( 'callNow', 'rmm_call_now' );

