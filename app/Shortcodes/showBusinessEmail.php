<?php

function rmm_show_business_email() {
	ob_start();
	echo \Roots\view( 'fieldPartials.businessEmail' )->render();

	return ob_get_clean();
}

add_shortcode( 'show_business_email', 'rmm_show_business_email' );
add_shortcode( 'show_email', 'rmm_show_business_email' );
