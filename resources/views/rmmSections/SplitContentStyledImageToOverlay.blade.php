<section class="flex relative justify-center items-center place-items-center rmmsection full-width to-the-edge">
	<div class="flex flex-col justify-start items-center text-white lg:flex-row inner__wrapper bg-siteBlack">

		<div class="flex order-2 justify-center items-center content__wrapper lg:order1">
			<div class="image hasDarkOverlay lg:!bg-none bg-contain" style='background-image:url("{{$imageAsset}}/expertAir/tech_customer_24h.jpg")'>
			<div class="flex flex-col justify-center items-center py-6 px-4 lg:py-0 lg:px-0 content text-siteWhite" data-aos="fade-right">
				@svg('images/expertAir/icons_24h.svg', 'icon lg:mb-4 mb-2')
				<h2 class="mb-4 lg:mb-4 text-siteWhite">Always Ready to Help</h2>
				<div class="mb-4 text-left lg:mb-4 lg:text-center lg:max-w-[400px]">
					<p>Day or night, the Expert Air team can fix your problem. Call us right away for your HVAC emergencies!</p>
				</div>


					<div class="cta grandChildren:self-start">
						@include('fieldPartials.callNowOnDark')
					</div>

			</div>
		</div>
		</div>

		<div class="hidden order-1 lg:block lg:order-2 content-edge__wrapper bg-siteBlack">
			<img src="{{$imageAsset}}/expertAir/tech_customer_24h.jpg" alt="Expert Air Truck" class="image lg:clipLeftArrow" loading="lazy" height="360px" width="627px" data-aos="fade-left">
		</div>

	</div>
</section>
