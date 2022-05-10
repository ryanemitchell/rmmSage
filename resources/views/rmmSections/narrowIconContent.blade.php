{{-- ==========================================================================
* Filename: narrowIconContent.blade.php
* Description: Simple section with an icon Header and Pararaph on desktop and a single text link on mobile
* Fields Behavior: NA
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
{{--@dump($topGroupFields)--}}
<section class="justify-center items-center narrowIconContentflex rmmsection narrow-width my-halfMobileVGap lg:to-the-edge lg:my-halfDesktopVGap lg:bg-grey">
	<div class="flex justify-center items-center inner__wrapper lg:siteShadowedBox" data-aos="zoom-out">
		<div class="flex place-items-center content lg:w-[585px] lg:py-desktopVGap">

			@notempty($image)
			<div class="hidden lg:block">
			<img src="{{$image['url']}}" alt="{{$imageALT}}" title="{{$imageTitle}}"class="image" loading="lazy" height="{{$image['height']}}px" width="{{$image['width']}}px">
			</div>
			@endnotempty

			<div class="ml-[22px]">
				<a href="/about-us/careers" class="hiringLink">
					@notempty($header)
					<h2 class="flex items-center group text-1xl bold text-mt2 lg:text-dt1">
						{{$header}}
						<span class="inline ml-1.5 lg:ml-2.5"><img src="{{$imageAsset}}/expertAir/icon_right_arrow_blue.svg" alt="" class="image h-[14px] w-[9px] lg:h-[21px] lg:w-[13.5px] group-hover:filter-to-secondary" loading="lazy" height="21px" width="13.5px"></span>
					</h2>
					@endnotempty

				</a>
				@notempty($content)
				<div class="content hidden lg:block lg:pt-4">
				    @wpautokp($content)
				</div>
				@endnotempty

			</div>
		</div> <!-- End of .content -->


	</div>

</section>
