<section class="flex relative justify-center items-center place-items-center rmmsection full-width to-the-edge lg:my-halfDesktopVGap">
	<div class="flex flex-col justify-start items-center text-white lg:flex-row inner__wrapper bg-siteBlack">

		<div class="content-edge__wrapper bg-siteBlack">
{{--			<img src="{{$imageAsset}}/expertAir/tech1_guarantees.jpg" alt="Expert Air Truck" class="image clipDownArrow lg:clipRightArrow" loading="lazy" height="484px" width="auto">--}}
			<img src="https://unsplash.it/480/480?random" alt="photo" class="image clipDownArrow lg:clipRightArrow" loading="auto" data-aos="fade-right">
		</div>




		<div class="flex justify-center items-center content__wrapper">
			<div class="flex flex-col justify-center items-center py-6 px-4 lg:py-0 lg:py-20 lg:px-0 content text-siteWhite" data-aos="fade-left">
				<div class="tagline text-secondaryOnDark">Reasons to Join the Club</div>
				<h2 class="mb-6 text-white lg:mb-8">Be Cool, Save Money</h2>

				<div class="mb-6 beCool">

					<div class="flex flex-col lg:flex-row lg:gap-12 beCoolList">


							<div class="flex flex-col justify-center items-center mb-6 w-full lg:mb-0 guarantee last-of-type:mb-0">
								<div class="iconWrapper">
									@svg('images/expertAir/guarantee_lifetime.svg', '')
								</div>

								<h2 class="text-2xl text-white">Lifetime Guarantee</h2>
								<div class="text-center w-[240px]">You receive a lifetime guarantee on service repairs.</div>
							</div>

						<div class="flex flex-col justify-center items-center mb-6 w-full lg:mb-0 guarantee last-of-type:mb-0">
							<div class="iconWrapper">
								@svg('images/expertAir/guarantee_overtime.svg', '')
							</div>

							<h2 class="text-2xl text-white">No Overtime Fees</h2>
							<div class="text-center w-[220px]">No overtime fees as long as you are a member.</div>
						</div>

						<div class="flex flex-col justify-center items-center mb-6 w-full lg:mb-0 guarantee last-of-type:mb-0">
							<div class="iconWrapper">
								@svg('images/expertAir/guarantee_scheduling.svg', '')
							</div>

							<h2 class="text-2xl text-white">Priority Scheduling</h2>
							<div class="text-center w-[240px]">Go to the front of the line with priority service scheduling.</div>
						</div>

					</div>

				</div>


				<div class="mb-8 lg:mb-0">
				<span class="flex flex-col callnow">

        <a href="tel:{{$primaryPhoneNumber}}" class="hidden mb-4 lg:inline callNow group text-[20px]">
            <span class="font-bold text-siteWhite font-display">Call to Join Today!</span>&nbsp;<span class="font-bold text-siteWhite group-hover:text-secondaryOnDark">{{$primaryPhoneNumberDisplay}}</span>
        </a>

        <a href="tel:{{$primaryPhoneNumber}}" class="mb-2 lg:hidden btn btn-grad-onDark">Call Now</a>


</span>
</div>
			</div>
		</div>



	</div>
</section>
