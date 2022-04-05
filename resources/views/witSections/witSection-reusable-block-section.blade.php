<?php if( get_sub_field('reusable_block') ): ?>
<?php

	$gblock = get_post( get_sub_field('reusable_block') );
	echo apply_filters( 'the_content', $gblock->post_content );


	//the_sub_field('reusable_block'); ?>
<?php endif; ?>
