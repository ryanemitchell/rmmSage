{{-- ==========================================================================
* Filename: rmmSectionSplitContentServices.blade.php
* Description: Simple section with header text, menu from wp-admin and footer text
* Fields Behavior: Choos+e to get fields from parent, current post or none.
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
<section class="flex relative justify-center items-center place-items-center bg-no-repeat rmmsection to-the-edge full-width-bound pt-mobileVGap lg:py-halfDesktopVGap">
	<div class="flex justify-center items-center pt-4 lg:pt-12 inner__wrapper">
		<div class="mx-auto w-full wrap">
			<div class="flex flex-col w-full lg:grid lg:grid-cols-6">
				<div class="flex flex-col order-2 col-span-12 col-start-1 row-span-full justify-center self-center py-6 w-full bg-no-repeat bg-contain lg:order-1 lg:items-center lg:pt-0 bg-siteBlack bg-watermark-x bg-left-center lg:h-[400px] lg:pr-[278px]">
					<div class="flex flex-col justify-center items-center location">
						<div class="tagline text-secondaryOnDark text-taglineMobile lg:text-[1.5rem]">Keeping Texans Cool</div>
						<h2 class="mb-4 text-white lg:mb-4">Serving Greater Houston</h2>

						<nav class="grid grid-cols-2 gap-y-2 gap-x-4 justify-center mb-4 lg:mb-6 locationsNav">
							<a href="#" class="flex items-center text-white">Baytown @svg('images/expertAir/arrow-small-green.svg', 'linkIndicator ml-2')</a>
							<a href="#" class="flex items-center text-white">The Woodlands</a>
							<a href="#" class="flex items-center text-white">Humble @svg('images/expertAir/arrow-small-green.svg', 'linkIndicator ml-2')</a>
							<a href="#" class="flex items-center text-white">Spring @svg('images/expertAir/arrow-small-green.svg', 'linkIndicator ml-2')</a>
						</nav>

						<a href="{{$bookingLink}}" class="btn btn-grad-onDark">View All Cities</a>


					</div>
				</div>
				<div class="order-1 col-span-12 col-start-7 row-span-full self-center text-white lg:order-2 col-end-20">
					<img src="{{$imageAsset}}/expertAir/houston_mural.jpg" alt="photo" class="image" loading="lazy" height="304px" width="550px">
				</div>
			</div>
		</div>
	</div>
</section>



