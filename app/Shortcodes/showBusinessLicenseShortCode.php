<?php

function rmm_show_business_license() {
	ob_start();
	echo \Roots\view( 'fieldPartials.businessLicense' )->render();

	return ob_get_clean();
}

add_shortcode( 'show_business_license', 'rmm_show_business_license' );
