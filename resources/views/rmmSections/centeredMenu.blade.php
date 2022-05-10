{{-- ==========================================================================
* Filename: centeredMenu.blade.php
* Description: Simple section with header text, menu from wp-admin and footer text
* Fields Behavior: Choos+e to get fields from parent, current post or none.
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
<section  class="centeredMenu bg-siteBlack to-the-edge bg-contain my-halfMobileVGap to-the-edge lg:my-halfDesktopVGap shadow-common flex justify-center items-center relative place-items-center lr:rounded-common mobile-full-width bg-watermark-x bg-no-repeat">
	<div class="w-full bg-no-repeat bg-contain bgImageHolder bg-hero-pattern bg-[-2rem_center] rounded-common lg:bg-[1rem_center]">
	<div class="flex justify-center items-center place-items-center text-white inner__wrapper ">
		<div class="flex flex-col place-items-center content my-[60px]">

			{{--== Header ==--}}
		@notempty($header)
			<h2 class="mb-6 lg:mb-4 header text-mh2 lg:text-h2 text-siteWhite">
				{{$header}}
			</h2>
		@endnotempty

		{{--== Menu ==--}}

		@notempty($menu)
		<div class="mb-6 lg:mb-6 serviceNavWrapper">

			{{--== Menu is styled in SCSS @ resources/styles/menus/services-navigation.scss ==--}}
			{!! wp_nav_menu([
				'menu' => $menu->term_id,
				'menu_class' => 'menu interior-menu',
				'container' => 'nav',
				'container_id' => 'services-navigation',
				'container_class' => 'services-navigation',
				'depth' => '1',
				'add_li_class'  => 'children:text-siteWhite',
			]) !!}
		</div>
		@endnotempty

		{{--== Footer ==--}}
			@notempty($showCTA)
			<div class="mb-4 cta grandChildren:self-start">
				@include('fieldPartials.bookNowOnDark')
			</div>
			@endnotempty





	</div>
	</div>
	{{--  END content--}}
	</div> {{--    END inner__wrapper--}}
</section>
