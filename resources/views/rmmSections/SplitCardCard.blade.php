{{-- ==========================================================================
* Filename: SplitCardCard.blade.php
* Description: 2 cards with image backgrounds  side by side, stacked on mobile
* Fields Behavior:
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
<section
		class="@notempty($sectionClasses){{$sectionClasses}}@endnotempty flex relative justify-center items-center place-items-center pt-0 bg-no-repeat rmmsection to-the-edge full-width-bound bg-blueTriangle mb-mobileVGap lg:py-halfDesktopVGap">
	<div class="flex justify-center items-center pt-4 lg:pt-12 inner__wrapper">
		<div class="grid gap-x-6 justify-between items-center w-full lg:grid-cols-2">
			<div class="col1">
				<div class="promoCard">
					<div class="py-8 mb-6 bg-no-repeat bg-cover lg:mb-0 image hasBlueBlackOverlay"
					     @notempty($leftPromoImage)style='background-image:url("{{$leftPromoImage['url']}}")'@endnotempty>
						<div class="flex flex-col justify-center items-center py-6 px-4 lg:py-0 lg:px-0 content text-siteWhite">
							@notempty($leftPromoIcon)
							<div class="imageWrapper icon lg:mb-4 mb-2 " data-aos="fade-up">
								<img src="{{$leftPromoIcon['url']}}" alt="{{$leftPromoIconALT}}"
								     title="{{$leftPromoIconTitle}}" class="image" loading="lazy"
								     height="{{$leftPromoIcon['height']}}px" width="{{$leftPromoIcon['width']}}px">
							</div>
							@endnotempty

							@notempty($leftPromoHeader)
							<h2 class="mb-4 text-center lg:mb-4 text-siteWhite" data-aos="fade-up">{{$leftPromoHeader}}</h2>
							@endnotempty
							@notempty($leftPromoContent)
							<div class="mb-4 text-center lg:mb-4 lg:max-w-[400px]" data-aos="fade-up">
								@wpautokp($leftPromoContent)
							</div>
							@endnotempty

							@istrue($leftPromoShowCTA)
							<div class="cta grandChildren:self-start" data-aos="fade-up">
								@include('fieldPartials.bookNowOnDark')
							</div>
							@endistrue

						</div>
					</div>


				</div>
			</div>

			<div class="col2">

				<div class="py-8 mb-6 bg-no-repeat bg-cover lg:mb-0 image hasBlueBlackOverlay"
				     @notempty($rightPromoImage)style='background-image:url("{{$rightPromoImage['url']}}")'@endnotempty>
					<div class="flex flex-col justify-center items-center py-6 px-4 lg:py-0 lg:px-0 content text-siteWhite">
						@notempty($rightPromoIcon)
						<div class="imageWrapper icon lg:mb-4 mb-2" data-aos="fade-up">
							<img src="{{$rightPromoIcon['url']}}" alt="{{$rightPromoIconALT}}"
							     title="{{$rightPromoIconTitle}}" class="image" loading="lazy"
							     height="{{$rightPromoIcon['height']}}px" width="{{$rightPromoIcon['width']}}px">
						</div>
						@endnotempty

						@notempty($rightPromoHeader)
						<h2 class="mb-4 text-center lg:mb-4 text-siteWhite" data-aos="fade-up">{{$rightPromoHeader}}</h2>
						@endnotempty
						@notempty($rightPromoContent)
						<div class="mb-4 text-center lg:mb-4 lg:max-w-[400px]" data-aos="fade-up">
							@wpautokp($rightPromoContent)
						</div>
						@endnotempty

						@istrue($rightPromoShowCTA)
						<div class="cta grandChildren:self-start" data-aos="fade-up">
						<a href="/about-us/coupons" class="btn btn-grad-onDark">View Promotions</a>
						</div>
						@endistrue

					</div>
				</div>


			</div>


		</div>
	</div>
</section>
