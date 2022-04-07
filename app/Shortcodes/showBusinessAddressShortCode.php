<?php

function rmm_show_business_address() {
	ob_start();
	echo \Roots\view( 'fieldPartials.businessAddress' )->render();

	return ob_get_clean();
}

add_shortcode( 'show_business_address', 'rmm_show_business_address' );
