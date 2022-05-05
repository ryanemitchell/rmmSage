{{-- ==========================================================================
* Filename: narrowIconContent.blade.php
* Description: Simple section with an icon Header and Pararaph on desktop and a single text link on mobile
* Fields Behavior: NA
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
<section class="justify-center items-center narrowIconContentflex rmmsection narrow-width my-halfMobileVGap lg:to-the-edge lg:my-halfDesktopVGap lg:bg-grey">
	<div class="flex justify-center items-center inner__wrapper lg:siteShadowedBox" data-aos="zoom-out">
		<div class="flex place-items-center content lg:w-[585px] lg:py-desktopVGap">
			<div class="hidden lg:block icon">
				@svg('images/expertair/icons_hiring_tools.svg', '')
			</div>
			<div class="ml-[22px]">
				<a href="#" class="hiringLink">
					<h2 class="flex items-center group text-1xl bold text-mt2 lg:text-dt1">
						Join the Experts. Now Hiring
						<span class="inline ml-1.5 lg:ml-2.5"><img src="{{$imageAsset}}/expertAir/icon_right_arrow_blue.svg" alt="" class="image h-[14px] w-[9px] lg:h-[21px] lg:w-[13.5px] group-hover:filter-to-secondary" loading="lazy" height="21px" width="13.5px"></span>
					</h2>
				</a>
				<p class="hidden lg:block lg:pt-4">We’re committed to building a team that helps our customers to be comfortable in their homes, which is why we work so hard to do quality work and to provide outstanding customer service.</p>
			</div>
		</div> <!-- End of .content -->


	</div>

</section>
