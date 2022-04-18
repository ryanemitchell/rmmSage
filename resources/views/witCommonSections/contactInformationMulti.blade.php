<div class="flex flex-col justify-between h-full contactInformation"> <!-- Start of .contactInformation -->
	@hasoption('field_business_information_business_name')
	<div class="businessName"> <!-- Start of .businessName -->
		<h2>@option('field_business_information_business_name')</h2>
	</div> <!-- End of .businessName -->
	@endoption

	@hasoptions('field_business_information_witsage_primary_location')
	@options('field_business_information_witsage_primary_location')

	@hassub('primary_phone')
	<a href="tel:@sub('primary_phone')" class="phoneNumber primary_phone icon-before-phone">
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


	<div class="grid gap-8 lg:grid-cols-2 multipleLocationsWrapper">


{{--		PRIMARY LOCATION--}}
		<div class="col1">

			{{--Location Name--}}
			@hasoptions('field_business_information_witsage_primary_location')
			@options('field_business_information_witsage_primary_location')

				@hassub('location_name')
			<div class="font-bold locationName">
				@sub('location_name')
		</div>
					@endsub
			@endoptions
			@endhasoptions

			@include('fieldPartials.businessAddress')

			{{--Map and Directions--}}
			@hasoptions('field_business_information_witsage_primary_location')
			@options('field_business_information_witsage_primary_location')
			<div class="business-link primary">
				@hassub('business_link')
				<a href="@sub('business_link')" target="_blank" class="font-bold hover:decoration-solid">
					@endsub
					Map & Directions
					@hassub('business_link')
				</a>
				@endsub

				@endoptions
			</div>
			@endhasoptions
		</div>


{{--		Secondary Location--}}
		<div class="col2">

			{{--Location Name--}}
			@hasoptions('field_business_information_witsage_secondary_location')
			@options('field_business_information_witsage_secondary_location')

			@hassub('location_name')
			<div class="font-bold locationName">
			@sub('location_name')
			</div>
			@endsub
			@endoptions
			@endhasoptions


			@include('fieldPartials.businessSecondaryAddress')

			{{--Map and Directions--}}
			@hasoptions('field_business_information_witsage_secondary_location')
			@options('field_business_information_witsage_secondary_location')
			<div class="business-link secondary">
				@hassub('business_link')
				<a href="@sub('business_link')" target="_blank" class="font-bold hover:decoration-solid">
					@endsub
					Map & Directions
					@hassub('business_link')
				</a>
				@endsub

				@endoptions
			</div>
			@endhasoptions
		</div>


	</div>


{{--Social Icons--}}
	@include('fieldPartials.socialIcons')


	@hasoption('field_business_information_license_id')
	<div class="license"> <!-- Start of .license -->
	    <span class="font-bold">License: </span><span class="licenseNumber">@option('field_business_information_license_id')</span>
	</div> <!-- End of .license -->

	@endoption

</div> <!-- End of .contactInformation -->
