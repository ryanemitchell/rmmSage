<?php

function rmm_show_business_name() {
	ob_start();
	echo \Roots\view( 'fieldPartials.businessName' )->render();

	return ob_get_clean();
}

add_shortcode( 'show_business_name', 'rmm_show_business_name' );
