<header class="sticky top-0 px-4 w-full bg-transparent transition-all lg:px-6 lg:px-40 main-header z-[200] duration-2000 lg:h[100px]">

<div class="flex justify-between items-center text-white inner__wrapper ">
    <div class="lg:hidden">
      <a href="#" class=""> @svg('images/expertAir/icons_phone_white.svg', 'phoneIcon')</a>
    </div>


    <div class="col1">


      <div class="lg:hidden mobileLogo">
        <a href="{!! Site_url() !!}" class="" class="block flex justify-center items-center">
            <img src="{{$imageAsset}}expertAir/expertair_logo_white_mobile.svg" alt="Expert Air Logo in white" class="default" loading="eager" height="30px" width="144px">
            <img src="{{$imageAsset}}expertAir/expertair_logo_color_mobile.svg" alt="Expert Air Logo in color" class="scrolled" loading="lazy" height="25px" width="120px">
        </a>

      </div>
      <div class="hidden lg:block desktopLogo">
      <a href="{!! Site_url() !!}">
          <img src="{{$imageAsset}}expertAir/expertair_logo_white_desktop.svg" alt="Expert Air Logo in white" class="default" loading="eager" height="42px" width="202px">
          <img src="{{$imageAsset}}expertAir/expertair_logo_color_desktop.svg" alt="Expert Air Logo in color" class="scrolled" loading="lazy" height="42px" width="202px">
      </a>
      </div>
    </div>

    <div class="flex flex-col items-end col2">

            <div id="mobile-menu-toggle" class="p-0 bg-none border-none lg:hidden menu-toggle filter" aria-controls="primary-menu"
              aria-expanded="false">
              <div></div>
            </div>


      <div class="flex hidden justify-end lg:block topCtaWrapper"> <!-- Start of .topCta -->
          <a href="tel:{{$primaryPhoneNumber}}" class="hidden mb-4 lg:inline callNow group text-[20px]">
              <span class="font-bold text-white font-display group-hover:text-secondaryOnDark">Call Now</span>&nbsp;<span class="font-bold text-secondaryOnDark">{{$primaryPhoneNumberDisplay}}</span>
          </a>


          @notempty($bookingLink)
          <a href="{{$bookingLink}}" class="inline-flex items-center ml-6 font-bold text-white text-[20px] font-display booking hover:text-secondaryOnDark">Book Now @svg('images/expertAir/icons_right_arrow_lg.svg', 'lg:inline ml-1.5')</a>
          @endnotempty

      </div> <!-- End of .topCta -->

      <div class="hidden relative z-20 justify-end lg:flex topMenuWrapper">
        <!-- Start of .relative z-20 -->


        @if (has_nav_menu('primary_desktop_navigation'))
          {!! wp_nav_menu([
		'theme_location' => 'primary_desktop_navigation',
		'menu_id' => 'primary-desktop-menu',
		'menu_class' => 'menu p-0 m-0',
		'container' => 'none',
	]) !!}
        @endif
      </div> <!-- End of .relative z-20 -->

    </div>
  </div>


      @if (has_nav_menu('primary_mobile_navigation'))

      <div class="flex relative flex-col lg:hidden zeynep right">
      <div id="mobile-menu-wrapper" class="flex">
        {!! wp_nav_menu([
          'theme_location' => 'primary_mobile_navigation',
  		 'menu_id' => 'primary-mobile-menu',
  		 'menu_class' => 'navbar-nav',
  		 'container_id' => 'primary_mobile_navigation',
  		 'walker' => new RMM_Mobile_Menu_Walker(),
          ]) !!}
        <div class="mobileMenuFooter">



          <div class="flex justify-center self-center text-center mobileMenuCTA">
            <a href="/schedule-now" class="btn btn-white-onDark">Book Now</a>
          </div>

            <div id="mobile-menu-close" class="flex justify-center items-center self-center pt-8 text-xs text-center text-white menu-toggle" aria-controls="primary-menu"
                 aria-expanded="false">
                <span class="closeToggle"></span><span>Close</span>
            </div>


        </div>
      </div>

      </div>


    @endif   {{--end mobile navigation --}}




</header>





