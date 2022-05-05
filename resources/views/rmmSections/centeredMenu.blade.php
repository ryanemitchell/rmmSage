{{-- ==========================================================================
* Filename: centeredMenu.blade.php
* Description: Simple section with header text, menu from wp-admin and footer text
* Fields Behavior: Choos+e to get fields from parent, current post or none.
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}

<section  class="rmmsection {{$className}} {{$mobileDisplay}} {{$desktopDisplay}} bg-siteBlack to-the-edge bg-contain my-halfMobileVGap to-the-edge lg:my-halfDesktopVGap shadow-common flex justify-center items-center relative place-items-center lr:rounded-common mobile-full-width">
	<div class="w-full bg-no-repeat bg-contain bgImageHolder bg-hero-pattern bg-[-2rem_center] rounded-common lg:bg-[1rem_center]">
	<div class="flex justify-center items-center place-items-center my-24 text-white inner__wrapper lg:my-50px">
		<div class="flex flex-col place-items-center content">

			{{--== Header ==--}}
		@notempty($headerText)
			<{{$headerElement}} class="mb-16 lg:mb-24 header text-mh2 lg:text-h2">
				{{$headerText}}
			</{{$headerElement}}>
		@endnotempty

		{{--== Menu ==--}}

		@notempty($menu)
		<div class="mb-16 lg:mb-24 serviceNavWrapper">
			{{--== Menu is styled in SCSS @ resources/styles/menus/services-navigation.scss ==--}}
			{!! wp_nav_menu([
				'menu_class' => 'menu interior-menu',
				'container' => 'nav',
				'container_id' => 'services-navigation',
				'container_class' => 'services-navigation',
				'depth' => '1',
				'add_li_class'  => '',
			]) !!}
		</div>
		@endnotempty

		{{--== Footer ==--}}
		@notempty($footerText)
		<div class="footer bg-blue">
			{{$footerText}}
		</div>
		@endnotempty


			<a href="#" class="btn">@svg('images.sage_character_head') Book Now</a>



			<a href="#" class="btn btn-grad">@svg('images.sage_character_head', 'iconBefore') Book Now</a>



			<a href="#" class="btn btn-grad-onDark">Book Now</a>



			<a href="#"class="btn btn-white-onDark" >Book Now</a>
		<a href="#" class="btn">@svg('images.sage_character_head') Book Now</a>



		<a href="#" class="btn btn-grad">@svg('images.sage_character_head', 'iconBefore') Book Now</a>



		<a href="#" class="btn btn-grad-onDark">Book Now</a>



		<a href="#"class="btn btn-white-onDark" >Book Now</a>


	</div>
	</div>
	{{--  END content--}}
	</div> {{--    END inner__wrapper--}}
</section>
