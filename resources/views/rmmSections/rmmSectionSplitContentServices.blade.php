{{-- ==========================================================================
* Filename: rmmSectionSplitContentServices.blade.php
* Description: Simple section with header text, menu from wp-admin and footer text
* Fields Behavior: Choos+e to get fields from parent, current post or none.
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
<section class="rmmsection {{$className}} {{$mobileDisplay}} {{$desktopDisplay}} flex relative justify-center items-center place-items-center  to-the-edge rmmsection full-width-bound bg-blueTriangle  bg-no-repeat pt-mobileVGap lg:pt-desktopVGap mb-mobileVGap">
	<div class="flex justify-center items-center pt-4 lg:pt-12 inner__wrapper">
		<div class="flex flex-col justify-between items-center w-full lg:flex-row content">
			<div class="mb-6 w-11/12 lg:mb-0 lg:w-1/2 col1">
				<div class="tagline text-secondary text-[1.5rem]">24/7 Emergency Services</div>
				<h1 class="max-w-xs lg:mb-2 lg:max-w-xs mx">Delivering Service Beyond Expectations</h1>
				<div class="mb-2 lg:mb-2 lg:max-w-[480px]">
					<p>Expert Air offers the best air conditioning and heating services to Baytown, Humble, Spring & The Woodlands. Our techs use the latest technology to provide you a fast diagnostic of your AC unit, so you can choose the best option for your home.</p>
				</div>
				<div class="cta grandChildren:self-start">
					<span class="flex flex-col callnow">

        <a href="tel:{{$primaryPhoneNumber}}" class="hidden mb-4 lg:inline callNow group text-[20px] group-hover:text-secondary">
            <span class="font-bold text-siteBlack font-display group-hover:text-primary">Call Now</span>&nbsp;<span class="font-bold text-primary group-hover:text-secondary">{{$primaryPhoneNumberDisplay}}</span>
        </a>

        <a href="#" class="mb-2 lg:hidden btn btn-grad">Call Now</a>


</span>
				</div>
			</div>

			<div class="w-11/12 lg:flex lg:justify-end lg:w-1/2 col2">
				<div class="grid gap-4 lg:gap-6 services lg:w-[544px]"> <!-- Start of .services -->
					<div class="flex flex-col justify-center items-center pt-4 pb-8 lg:pt-6 lg:pb-6 featuredService bg-siteGrey shadow-common rounded-common">
						<div class="imageWrapper h-[50px} w-[50px] flex items-end flex-col">
							<img src="{{$imageAsset}}/expertAir/services_ac.svg" alt="Air Conditioning Services" class="image" loading="lazy" height="41px" width="41px">
						</div>

						<a href=""><h2 class="lg:mb-2">Air Conditioning</h2></a>
						<nav class="flex justify-items-center text-base text-siteBlack">
							<a href="#" class="hasDivider text-siteBlack hover:noShiftBoldPrimary" title="Repair">Repair</a>
							<a href="#" class="hasDivider text-siteBlack hover:noShiftBoldPrimary" title="Maintenance">Maintenance</a>
							<a href="#" class="text-siteBlack hover:noShiftBoldPrimary">Installation</a>
						</nav>
					</div>


				<div class="grid gap-4 lg:grid-cols-3 lg:gap-6 additionalServices">
					<a class="flex flex-row items-center px-4 pt-3 pb-3 cursor-pointer lg:flex-col lg:justify-center lg:pt-6 lg:pb-6 service bg-siteGrey shadow-common rounded-common group hover:bg-grad-blue-green"> <!-- Start of .service -->
						<div class="imageWrapper h-[50px} w-[50px] flex items-end flex-col">
							<img src="{{$imageAsset}}/expertAir/services_heat.svg" alt="heating Services icon" class="image group-hover:filter-white" loading="lazy" height="41px" width="56px">
						</div>

						<h2 class="ml-4 lg:ml-0 group-hover:text-white grow text-[1.25rem]">Heating</h2>
						<span class="lg:hidden"><img src="{{$imageAsset}}/expertAir/icon_right_arrow_blue.svg" alt="photo" class="image" loading="auto" height="18px" width="11px"></span>
					</a> <!-- End of .service -->

					<a class="flex flex-row items-center px-4 pt-3 pb-3 cursor-pointer lg:flex-col lg:justify-center lg:pt-6 lg:pb-6 service bg-siteGrey shadow-common rounded-common group hover:bg-grad-blue-green"> <!-- Start of .service -->
						<div class="imageWrapper h-[50px} w-[50px] flex items-end flex-col">
							<img src="{{$imageAsset}}/expertAir/services_air_quality.svg" alt="Air Quality Services Icon" class="image group-hover:filter-white" loading="lazy" height="41px" width="59px">
						</div>
						<h2 class="ml-4 lg:ml-0 group-hover:text-white grow text-[1.25rem]">Air Quality</h2>
						<span class="lg:hidden"><img src="{{$imageAsset}}/expertAir/icon_right_arrow_blue.svg" alt="photo" class="image" loading="auto" height="18px" width="11px"></span>
					</a> <!-- End of .service -->

					<a class="flex flex-row items-center px-4 pt-3 pb-3 cursor-pointer lg:flex-col lg:justify-center lg:pt-6 lg:pb-6 service bg-siteGrey shadow-common rounded-common group hover:bg-grad-blue-green"> <!-- Start of .service -->
						<div class="imageWrapper h-[50px} w-[50px] flex items-end flex-col">
							<img src="{{$imageAsset}}/expertAir/services_insulation.svg" alt="Insulation Services icon" class="image group-hover:filter-white" loading="lazy" height="41px" width="51px">
						</div>
						<h2 class="ml-4 lg:ml-0 group-hover:text-white grow text-[1.25rem]">Insulation</h2>
						<span class="lg:hidden"><img src="{{$imageAsset}}/expertAir/icon_right_arrow_blue.svg" alt="photo" class="image" loading="auto" height="18px" width="11px"></span>
					</a> <!-- End of .service -->



				</div> <!-- End of .additionalServices -->

				</div> <!-- End of .services -->
			</div>
		</div>
	</div>
</section>
