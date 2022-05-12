{{-- ==========================================================================
* Filename: SplitContentListImageOverlap.blade.php
* Description: Normal width section with header text, list of links and and overlapping image on desktop
* Fields Behavior:
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
<section class="@notempty($sectionClasses){{$sectionClasses }}@endnotempty flex relative justify-center items-center place-items-center bg-no-repeat rmmsection to-the-edge full-width-bound pt-mobileVGap lg:py-halfDesktopVGap">
	<div class="flex justify-center items-center pt-4 lg:pt-12 inner__wrapper">
		<div class="mx-auto w-full wrap">
			<div class="flex flex-col lg:block">
				<div class="flex flex-row order-2  justify-center self-center py-6 lg:w-[941px]  w-full bg-contain lg:order-1 lg:items-center bg-siteBlack bg-watermark-x bg-left-center bg-no-repeat lg:h-[400px] h-[209px]">
					<div class="flex flex-col justify-center items-center location lg:pr-[240px]">
						@notempty($tagline)
						<div class="tagline text-secondaryOnDark text-taglineMobile lg:text-[1.5rem]">{{$tagline}}</div>
						@endnotempty

						@notempty($header)
						<h2 class="mb-4 text-white lg:mb-4">{{$header}}</h2>
						@endnotempty

						@notempty($links)
						<nav class="grid grid-cols-2 gap-y-2 gap-x-4 justify-center mb-4 lg:mb-6 locationsNav">
							@foreach($links as $item)
								@notempty($item['link_url'])
									<a href="{{$item['link_url']}}" class="flex items-center text-white">{{$item['link_name']}} @svg('images/expertAir/arrow-small-green.svg', 'linkIndicator ml-2')</a>
								@else
									<span class="flex items-center text-white">{{$item['link_name']}}</span>
									@endnotempty
							@endforeach
						</nav>

						@endnotempty

						@istrue($showCTA)
						<a href="/service-areas" class="btn btn-grad-onDark">View All Cities</a>
						@endistrue




					</div>

					@notempty($image)
					<div class="order-1 col-span-[12] col-start-[7] row-span-full self-center text-white lg:order-2 col-end-20 absolute right-0 hidden lg:block">
						<img src="{{$image['url']}}" alt="{{$imageALT}}" title="{{$imageTitle}}"class="image" loading="lazy" height="{{$image['height']}}px" width="{{$image['width']}}px">
					</div>
					@endnotempty



				</div>

				@notempty($image)
				<div class="order-1 self-center text-white lg:absolute lg:right-0 lg:hidden">
					<img src="{{$image['url']}}" alt="{{$imageALT}}" title="{{$imageTitle}}" class="image w-full" loading="lazy" height="{{$image['height']}}px" width="{{$image['width']}}px">
				</div>
				@endnotempty

			</div>
		</div>
	</div>
</section>



