@hasoptions('field_social_media_social_links')

<div class="social-icons">
	@options('field_social_media_social_links')

	<a href="@sub('site_URL')" target="_blank" class="social-icon-link" title="@sub('site_name')">
		<div class="social-icon social-icon-@sub('site_name')">
			@sub('site_name')
		</div>

	</a>

	@style
	.social-icon-@sub('site_name') {
	background-image: url("@sub('default_icon')");
	}

	@hassub('hover_icon')
	.social-icon-@sub('site_name'):hover {
	background-image: url("@sub('hover_icon')");
	}
	@endsub


	@endstyle

	@endoptions


</div>


@endhasoptions


<pre>

<?php $field = get_field( 'field_social_media_social_links', 'option' );

	print_r( $field );

	?>
</pre>
