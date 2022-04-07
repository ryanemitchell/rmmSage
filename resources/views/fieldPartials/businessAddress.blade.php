@hasoptions('field_business_information_witsage_primary_location')
@options('field_business_information_witsage_primary_location')
<address class="business-address primary">
	@hassub('business_link')
	<a href="@sub('business_link')" target="_blank">
	@endsub

		@hassub('business_address')
		<span class="business_address">@sub('business_address')</span>
		@endsub

		@hassub('business_address_line_2')
		<span class="business_address_line_2">@sub('business_address_line_2')</span>
		@endsub

		@hassub('business_city')
		<span class="business_city">@sub('business_city'),</span>
		@endsub

		@hassub('business_state')
		<span class="business_state">@sub('business_state')</span>
		@endsub

		@hassub('business_zip_code')
		<span class="business_zip_code">@sub('business_zip_code')</span>
		@endsub


	@hassub('business_link')
	</a>
	@endsub

@endoptions
</address>
@endhasoptions



<pre>

<?php $field = get_field('field_business_information_witsage_primary_location', 'option');

print_r ($field);

?>
</pre>






{{--	    <address class="business-address">--}}

{{--		    <?php if( get_field('witsage_address_link', 'option') ): ?>--}}
{{--<a href="<?php the_field ('witsage_address_link', 'option') ?>" class="witsage_business_address_link" target="_blank">--}}
{{--	<?php endif; ?>--}}

{{--	<?php if( get_field('witsage_business_address','option') ): ?>--}}
{{--	<span class="witsage_business_address"><?php the_field('witsage_business_address', 'option'); ?></span>--}}
{{--	<?php endif; ?>--}}

{{--	<?php if( get_field('witsage_business_address_line_2','option') ): ?>--}}
{{--	<span class="witsage_business_address_line_2"><?php the_field('witsage_business_address_line_2', 'option'); ?></span>--}}
{{--	<?php endif; ?>--}}
{{--	<?php if( get_field('witsage_business_city','option') ): ?>--}}
{{--	<span class="witsage_business_city"><?php the_field('witsage_business_city', 'option'); ?>,</span>--}}
{{--	<?php endif; ?>--}}

{{--	<?php if( get_field('witsage_business_state','option') ): ?>--}}
{{--	<span class="witsage_business_state"><?php the_field('witsage_business_state', 'option'); ?></span>--}}
{{--	<?php endif; ?>--}}

{{--	<?php if( get_field('witsage_business_zip_code','option') ): ?>--}}
{{--	<span class="witsage_business_zip_code"><?php the_field('witsage_business_zip_code', 'option'); ?></span>--}}
{{--	<?php endif; ?>--}}

{{--	<?php if( get_field('witsage_address_link', 'option') ): ?>--}}
{{--</a>--}}
{{--<?php endif; ?>--}}
{{--</address>--}}



