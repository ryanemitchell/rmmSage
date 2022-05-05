<?php

function rmm_call_nowOnDark() {
	ob_start();
	echo \Roots\view( 'fieldPartials.callNowOnDark' )->render();

	return ob_get_clean();
}

add_shortcode( 'callNowOnDark', 'rmm_call_nowOnDark' );

