{{-- ==========================================================================
* Filename: rmmSectionSplitContentServices.blade.php
* Description: Simple section with header text, menu from wp-admin and footer text
* Fields Behavior: Choos+e to get fields from parent, current post or none.
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
{{--@dump($sectionFields)--}}
{{--@dump($sectionClasses)--}}
{{--@dump($testing)--}}
<section class="@notempty($sectionClasses){{$sectionClasses}} @endnotempty  rmmsection  flex relative justify-center items-center place-items-center  to-the-edge rmmsection full-width-bound bg-blueTriangle  bg-no-repeat pt-mobileVGap lg:pt-desktopVGap mb-mobileVGap">
	<div class="flex justify-center items-center pt-4 lg:pt-12 inner__wrapper">
		<div class="flex flex-col justify-between items-center w-full lg:flex-row content">
			<div class="mb-6 w-11/12 lg:mb-0 lg:w-1/2 col1">
				@notempty($tagline)
				<div class="tagline text-secondary text-[1.5rem]">{{$tagline}}</div>
				@endnotempty
				@notempty($header)
				<h1 class="max-w-xs lg:mb-2 lg:max-w-xs mx">{{$header}}</h1>
				@endnotempty

				@notempty($content)
				<div class="mb-2 lg:mb-2 lg:max-w-[480px]">
					@wpautop($content)
				</div>
				@endnotempty

				@istrue($showCTA)
				<div class="cta grandChildren:self-start">
					@include('fieldPartials.callNow')
				</div>
				@endistrue
			</div>

			<div class="w-11/12 lg:flex lg:justify-end lg:w-1/2 col2">
				<div class="grid gap-4 lg:gap-6 services lg:w-[544px]"> <!-- Start of .services -->
					<div class="flex flex-col justify-center items-center pt-4 pb-8 lg:pt-6 lg:pb-6 featuredService bg-siteGrey shadow-common rounded-common">
						<a href="{{$featuredServiceLink}}" class="imageWrapper h-[50px} w-[50px] flex items-end flex-col">
							<img src="{{$featuredServiceImage['url']}}" alt="{{$featuredServiceImage['alt']}}" title="{{$featuredServiceImage['title']}}" class="" loading="lazy" height="{{$featuredServiceImage['height']}}px" width="{{$featuredServiceImage['width']}}px">
						</a>

						<a href="{{$featuredServiceLink}}"><h2 class="lg:mb-2 text-[1.25rem]">{{$featuredServiceTitle}}</h2></a>
						<nav class="flex justify-items-center text-base text-siteBlack">
							<a href="{{$subService1Link}}" class="hasDivider text-siteBlack hover:noShiftBoldPrimary" title="{{$subService1Title}}">{{$subService1Title}}</a>
							<a href="{{$subService2Link}}" class="hasDivider text-siteBlack hover:noShiftBoldPrimary" title="{{$subService2Title}}">{{$subService2Title}}</a>
							<a href="{{$subService3Link}}" class="hasDivider text-siteBlack hover:noShiftBoldPrimary" title="{{$subService1Title}}">{{$subService3Title}}</a>
						</nav>
					</div>


				<div class="grid gap-4 lg:grid-cols-3 lg:gap-6 additionalServices">
					<a href="{{$serviceOneLink}}" class="flex flex-row items-center px-4 pt-3 pb-3 cursor-pointer lg:flex-col lg:justify-center lg:pt-6 lg:pb-6 service bg-siteGrey shadow-common rounded-common group hover:bg-grad-blue-green"> <!-- Start of .service -->
						<div class="imageWrapper h-[50px} w-[50px] flex items-end flex-col">
							<img src="{{$serviceOneImage['url']}}" alt="{{$serviceOneImage['alt']}}" title="{{$serviceOneImage['title']}}" class="image group-hover:filter-white" loading="lazy" height="{{$serviceOneImage['height']}}px" width="{{$serviceOneImage['width']}}px">
						</div>

						<h2 class="ml-4 lg:ml-0 group-hover:text-white grow text-[1.25rem]">{{$serviceOneTitle}}</h2>
						<span class="lg:hidden"><img src="{{$imageAsset}}/expertAir/icon_right_arrow_blue.svg" alt="photo" class="image" loading="auto" height="18px" width="11px"></span>
					</a>

					<a href="{{$serviceTwoLink}}" class="flex flex-row items-center px-4 pt-3 pb-3 cursor-pointer lg:flex-col lg:justify-center lg:pt-6 lg:pb-6 service bg-siteGrey shadow-common rounded-common group hover:bg-grad-blue-green"> <!-- Start of .service -->
						<div class="imageWrapper h-[50px} w-[50px] flex items-end flex-col">
							<img src="{{$serviceTwoImage['url']}}" alt="{{$serviceTwoImage['alt']}}" title="{{$serviceTwoImage['title']}}" class="image group-hover:filter-white" loading="lazy" height="{{$serviceTwoImage['height']}}px" width="{{$serviceTwoImage['width']}}px">
						</div>

						<h2 class="ml-4 lg:ml-0 group-hover:text-white grow text-[1.25rem]">{{$serviceTwoTitle}}</h2>
						<span class="lg:hidden"><img src="{{$imageAsset}}/expertAir/icon_right_arrow_blue.svg" alt="photo" class="image" loading="auto" height="18px" width="11px"></span>
					</a>

					<a href="{{$serviceThreeLink}}" class="flex flex-row items-center px-4 pt-3 pb-3 cursor-pointer lg:flex-col lg:justify-center lg:pt-6 lg:pb-6 service bg-siteGrey shadow-common rounded-common group hover:bg-grad-blue-green"> <!-- Start of .service -->
						<div class="imageWrapper h-[50px} w-[50px] flex items-end flex-col">
							<img src="{{$serviceThreeImage['url']}}" alt="{{$serviceThreeImage['alt']}}" title="{{$serviceThreeImage['title']}}" class="image group-hover:filter-white" loading="lazy" height="{{$serviceThreeImage['height']}}px" width="{{$serviceThreeImage['width']}}px">
						</div>

						<h2 class="ml-4 lg:ml-0 group-hover:text-white grow text-[1.25rem]">{{$serviceThreeTitle}}</h2>
						<span class="lg:hidden"><img src="{{$imageAsset}}/expertAir/icon_right_arrow_blue.svg" alt="photo" class="image" loading="auto" height="18px" width="11px"></span>
					</a>




				</div>

				</div>
			</div>
		</div>
	</div>
</section>
