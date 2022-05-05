<div class="flex flex-col justify-start items-center h-full lg:items-start contactInformation"> <!-- Start of .contactInformation -->
	@hasoption('field_business_information_business_name')
	<div class="mb-4 lg:mb-6 businessName"> <!-- Start of .businessName -->
		<h2 class="">@option('field_business_information_business_name')</h2>
	</div> <!-- End of .businessName -->
	@endoption

	@hasoptions('field_business_information_witsage_primary_location')
	@options('field_business_information_witsage_primary_location')

	@hassub('primary_phone')
	<div class="mb-2 lg:mb-2">
	<a href="tel:@sub('primary_phone')" class="self-start px-8 mb-6 text-xl font-bold lg:px-0 lg:mb-6 phoneNumber primary_phone icon-before-phone">

		@endsub

		@hassub('primary_phone_display')
		@sub('primary_phone_display')
		@endsub

		@hassub('primary_phone')
	</a>
	</div>
	@endsub

	<div class="mb-4 lg:mb-4">
		<a href="/schedule-now" class="btn">Book Now</a>
	</div>

	@endoptions
	@endhasoptions

	<div class="grid mb-6 lg:grid-cols-1 lg:gap-8 lg:mb-8 multipleLocationsWrapper">


{{--		PRIMARY LOCATION--}}
		<div class="col1">

			{{--Location Name--}}
			@hasoptions('field_business_information_witsage_primary_location')
			@options('field_business_information_witsage_primary_location')

				@hassub('location_name')
			<h2 class="font-bold locationName">
				@sub('location_name')
		</h2>
					@endsub
			@endoptions
			@endhasoptions
			<div class="businessAddress grandChildren:text-siteBlack">
			@include('fieldPartials.businessAddress')
			</div>
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
			<h2 class="font-bold locationName">
			@sub('location_name')
			</h2>
			@endsub
			@endoptions
			@endhasoptions

<div class="businessAddress grandChildren:text-siteBlack">
			@include('fieldPartials.businessSecondaryAddress')
		</div>

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
<div class="mb-6 lg:mb-6">
	@include('fieldPartials.socialIcons')
</div>

	{{--License Information --}}
	@notempty($licenseInformation)
		<div class="block license">@wpautokp($licenseInformation)</div>
	@endnotempty

</div> <!-- End of .contactInformation -->
