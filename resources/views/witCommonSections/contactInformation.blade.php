<div class="flex flex-col justify-between h-full contactInformation"> <!-- Start of .contactInformation -->
	@hasoption('field_business_information_business_name')
	<div class="businessName"> <!-- Start of .businessName -->
		<h2>@option('field_business_information_business_name')</h2>
	</div> <!-- End of .businessName -->
	@endoption

	@hasoptions('field_business_information_witsage_primary_location')
	@options('field_business_information_witsage_primary_location')

	@hassub('primary_phone')
	<a href="tel:@sub('primary_phone')" class="phoneNumber primary_phone">
		@endsub

		@hassub('primary_phone_display')
		<span class="business_address">@sub('primary_phone_display')</span>
		@endsub

		@hassub('primary_phone')
	</a>
	@endsub

	@endoptions
	@endhasoptions

	<div class="contactCTA"> <!-- Start of .contactCTA -->
		<button>Schedule Now</button>
	</div> <!-- End of .contactCTA -->

	@include('fieldPartials.businessAddress')

{{--Map and Directions--}}
	@hasoptions('field_business_information_witsage_primary_location')
	@options('field_business_information_witsage_primary_location')
	<div class="business-address primary">
		@hassub('business_link')
		<a href="@sub('business_link')" target="_blank">
			@endsub
			Map & Directions
		@hassub('business_link')
		</a>
		@endsub

		@endoptions
	</div>
	@endhasoptions

{{--Social Icons--}}
	@include('fieldPartials.socialIcons')

</div> <!-- End of .contactInformation -->
