{{-- ==========================================================================
* Filename: rmmSectionSplitContentServices.blade.php
* Description: Simple section with header text, menu from wp-admin and footer text
* Fields Behavior: Choos+e to get fields from parent, current post or none.
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
<section class="flex relative justify-center items-center place-items-center pt-0 bg-no-repeat rmmsection to-the-edge full-width-bound bg-blueTriangle mb-mobileVGap lg:py-halfDesktopVGap">
	<div class="flex justify-center items-center pt-4 lg:pt-12 inner__wrapper">
		<div class="grid gap-x-6 justify-between items-center w-full lg:grid-cols-2">
			<div class="col1">
				<div class="promoCard">
					<div class="py-8 mb-6 bg-no-repeat bg-cover lg:mb-0 image hasBlueBlackOverlay" style='background-image:url("{{$imageAsset}}/expertAir/coupon_truck.jpg")'>
						<div class="flex flex-col justify-center items-center py-6 px-4 lg:py-0 lg:px-0 content text-siteWhite">
							@svg('images/expertAir/promotions_estimates.svg', 'icon lg:mb-4 mb-2')
							<h2 class="mb-4 text-center lg:mb-4 text-siteWhite">Free Estimates, No Commitments</h2>
							<div class="mb-4 text-center lg:mb-4 lg:max-w-[400px]">
								<p>Free Estimate on New Installs</p>
							</div>


							<div class="cta grandChildren:self-start">
								@include('fieldPartials.bookNowOnDark')
							</div>

						</div>
					</div>


				</div>
			</div>

			<div class="col2">

				<div class="promoCard">
					<div class="py-8 bg-no-repeat bg-cover image hasBlueBlackOverlay" style='background-image:url("{{$imageAsset}}/expertAir/coupon_ac_units.jpg")'>
						<div class="flex flex-col justify-center items-center py-6 px-4 lg:py-0 lg:px-0 content text-siteWhite">
						@svg('images/expertAir/promotions_x_icon.svg', 'icon lg:mb-4 mb-2')
						<h2 class="mb-4 text-center lg:mb-4 text-siteWhite">Save Time & Money with Expert Air</h2>
						<div class="mb-4 text-center lg:mb-4 lg:max-w-[400px]">
							<p>$50 Off AC Tune-Up</p>
						</div>


						<div class="cta grandChildren:self-start">
							<a href="#" class="btn btn-grad-onDark">View Promotions</a>
						</div>

					</div>
				</div>


			</div>








			</div>
		</div>
	</div>
</section>
