{{--@dump($sectionFields)--}}
<section class="@notempty($sectionClasses){{$sectionClasses}}@endnotempty flex relative justify-center items-center place-items-center rmmsection bg-hulk-800 to-the-edge my-halfMobileVGap mobile-to-the-edge lg:to-the-edge lg:my-halfDesktopVGap">

	<div class="flex flex-col gap-8 justify-between items-start lg:flex-row inner__wrapper">

		<div class="flex justify-center items-center w-full order-2 lg:order-2 col1 lg:w-[420px] lg:ml-[130px]">

			<div class="w-full lg:w-auto content">

{{--				@istrue($showLocationsNavBox)--}}
{{--					@include('rmmSections.serviceNavBox')--}}
{{--				@endistrue--}}

				@istrue($showLocationsNavBox)
					@include('rmmSections.shared.sectionsSharedLocationsNavBox')
				@endistrue

{{--				@istrue($showGuaranteesBox)--}}
{{--					<div class="bg-no-repeat shadow-common rounded-common min-h-[240px] bg-siteBlack smallBox-bg lg:w-[420px] p-8 mx-2 lg-mx-0 bg-watermark-x">--}}
{{--						@include('rmmSections.guarantees.guaranteesSlider')--}}
{{--					</div>--}}
{{--				@endistrue--}}

				@istrue($showSinglePromoBox)
					@include('rmmSections.pageMainContentSection.sidebarBoxSinglePromotion')
				@endistrue

			</div>
		</div>

		<div class="flex order-1 justify-center items-center lg:order-1 col1 lg:grow">
			<div class="px-4 w-full lg:px-0 content">
				@notempty($topHeader)
				<h2 class="mb-4">{{$topHeader}}</h2>
				@endnotempty

				@notempty($topContent)
				<div class="mb-4">
					@wpautokp($topContent)
				</div>
				@endnotempty

				@notempty($topShowCTA)
				<div class="mb-4 cta grandChildren:self-start">
					@include('fieldPartials.maintenancePlanCallNow')
				</div>
				@endnotempty

				<div class="mb-4">

					@include('rmmSections.accordions.mobileOnlyAccordionListContent')

				</div>

				@notempty($bottomHeader)
				<h2 class="mb-4">{{$bottomHeader}}</h2>
				@endnotempty

				@notempty($bottomContent)
				<div class="mb-4">
					@wpautokp($bottomContent)
				</div>
				@endnotempty

				@notempty($bottomShowCTA)
				<div class="mb-4 cta grandChildren:self-start">
					@include('fieldPartials.maintenancePlanCallNow')
				</div>
				@endnotempty

				@notempty($downloadFile)
				<a href="{{$downloadFile}}" class="btn btn-grad">Download PDF</a>
				@endnotempty

			</div>
		</div>

	</div>

</section>
