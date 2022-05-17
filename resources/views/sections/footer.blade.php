<footer class="flex relative justify-center items-center place-items-center bg-siteBlack rmmsection full-width to-the-edge mt-halfMobileVGap lg:mt-halfDesktopVGap lg:bg-grad-greyBlack">
	<div class="flex flex-col justify-between items-center w-full text-white lg:flex-row">

		<div class="flex justify-center items-center w-full bg-no-repeat bg-contain lg:w-1/2 lg:bg-none text-siteBlack content__wrapper bg-grey bg-footer-arrows lg:h-[333px]">
			<div class="content">
				<div class="flex flex-col items-center lg:h-auto footer-col-inner">

					<!-- Start of .footer-col-inner -->
					<div class="my-6 lg:hidden mobileLogo">
						<a href="{!! Site_url() !!}" class="" class="block flex justify-center items-center">
							<img src="{{$imageAsset}}expertAir/expert_air_logo_mobile_footer.png" alt="Expert Air Logo"
							     class="" loading="lazy" width="311px" height="64px">
						</a>

					</div>
					<div class="hidden lg:block lg:mb-4 desktopLogo">
						<a href="{!! Site_url() !!}">
							<img src="{{$imageAsset}}expertAir/expert_air_logo_desktop_footer.png" alt="Expert Air Logo"

							     class="" loading="lazy" width="311px" height="64px">
						</a>
					</div>

					<div class="flex flex-col items-center mb-6 lg:mb-4 cta">

						<div class="lg:mb-4">@include('fieldPartials.callNow')</div>
						<div class="">@include('fieldPartials.bookNow')</div>

					</div>

					<div class="mb-6 lg:mb-0"> @include('fieldPartials.socialIcons')</div>

				</div> <!-- End of .footer-col-inner -->
			</div>
		</div>

		<div class="flex justify-center items-center pt-8 pb-4 h-full text-white lg:py-0 lg:w-1/2 content__wrapper pt1">
			<div class="flex flex-col justify-start items-center w-full text-white lg:flex-row">
				<div class="lg:mt-11 lg:mb-4 lg:ml-20 connect">
					<h2 class="mb-6 text-center text-white lg:text-left text-mt1 lg:text-dt1">Connect</h2>
					<div class="mb-6 lg:mb-4 hours">
						<div class="flex items-start mb-6 lg:mb-4 businessHours 'color' : theme("colors.siteBlack"),">
							<div>@svg('images/expertAir/icons_clock.svg', 'block mt-2')</div>
							<div class="ml-2 "> @wpautokp($businessHours)</div>
						</div>

						<div class="flex items-start mb-6 lg:mb-4 primaryAddress">
							<div>@svg('images/expertAir/icons_pin.svg', 'block mt-2')</div>
							<div class="ml-2 grandChildren:text-white grandChildren:hover:text-secondaryOnDark">@include('fieldPartials.businessAddress')</div>
						</div>

						<div class="flex items-start mb-6 lg:mb-4 secondaryAddress">
							<div>@svg('images/expertAir/icons_pin.svg', 'block mt-2')</div>
							<div class="ml-2 grandChildren:text-white grandChildren:hover:text-secondaryOnDark"> @include('fieldPartials.businessSecondaryAddress')</div>
						</div>

					</div>
				</div>

				<a href="/about-us/maintenance-plans" class="lg:ml-36 rmmShimmer" title="Expert Air Maintenance Plan">
					<img src="{{$imageAsset}}expertAir/maintenance_plan.png" alt="Expert Air Maintenance Plan"
					     title="Expert Air Maintenance Plan"
					     class="transition duration-500 cursor-pointer hover:scale-105" loading="lazy" width="273px"
					     height="143px">
				</a>

			</div>
		</div>

	</div>
</footer>

