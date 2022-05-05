<?php

function rmm_show_business_phone_number() {
	ob_start();
	echo \Roots\view( 'fieldPartials.businessPhoneNumber' )->render();

	return ob_get_clean();
}

add_shortcode( 'show_business_phone_number', 'rmm_show_business_phone_number' );
add_shortcode( 'show_phone_number', 'rmm_show_business_phone_number' );
