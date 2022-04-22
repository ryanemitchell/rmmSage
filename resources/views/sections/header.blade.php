<header class="px-4 bg-red-800 lg:px-6 main-header sticky-top z-100">
  <div class="flex justify-between items-center text-white inner__wrapper bg-primary">
    <div class="lg:hidden">
      P
    </div>


    <div class="col1">


      <div class="lg:hidden mobileLogo">
        <a href="{!! Site_url() !!}"><img src="https://source.unsplash.com/category/buildings/202x42/" loading="eager" alt="{{$siteName}}" height="" width=""></a>
      </div>
      <div class="hidden lg:block desktopLogo">
      <a href="{!! Site_url() !!}"><img src="https://source.unsplash.com/category/buildings/202x42/" loading="eager" alt="{{$siteName}}" height="" width=""></a>
      </div>
    </div>

    <div class="flex flex-col items-end col2">

            <div id="mobile-menu-toggle" class="p-0 bg-none border-none lg:hidden menu-toggle" aria-controls="primary-menu"
              aria-expanded="false">
              <div></div>
            </div>


      <div class="flex hidden justify-end lg:block topCtaWrapper"> <!-- Start of .topCta -->
        CTA Section
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

      <div class="flex relative flex-col items-stretch lg:hidden zeynep right">
      <div id="mobile-menu-wrapper" class="l">
        {!! wp_nav_menu([
          'theme_location' => 'primary_mobile_navigation',
  		 'menu_id' => 'primary-mobile-menu',
  		 'menu_class' => 'navbar-nav',
  		 'container_id' => 'primary_mobile_navigation',
  		 'walker' => new RMM_Mobile_Menu_Walker(),
          ]) !!}
        <div class="bg-blue-500">

          <div id="mobile-menu-close" class="p-0 bg-none border-none lg:hidden menu-toggle" aria-controls="primary-menu"
            aria-expanded="false">
            close
          </div>

          <div class="flex place-items-center w-full bg-green-400 mobileMenuCTA">
            <button>Book Now</button>
          </div>


        </div>
      </div>

      </div>

    </div>
    @endif   {{--end mobile navigation --}}




</header>




{{--<header class="w-full main-header z-100 sticky-top">--}}

{{--  <div class="flex justify-between">--}}

{{--    <div class="col1">--}}
{{--      <!-- Start of .col1 -->--}}

{{--    </div> <!-- End of .col1 -->--}}


{{--    <div class="col2">--}}
{{--      <!-- Start of .col1 -->--}}
{{--      <a href="/contact/schedule-service" class="btn iconCalendar false"><span>Schedule Now</span></a>--}}

{{--      <div id="mobile-menu-toggle" class="p-0 bg-none border-none lg:hidden menu-toggle" aria-controls="primary-menu"--}}
{{--        aria-expanded="false">--}}
{{--        <div></div>--}}
{{--      </div>--}}

{{--    </div> <!-- End of .col1 -->--}}

{{--  </div>--}}


{{--  <div class="flex justify-between">--}}
{{--  </div>--}}





{{--   Desktop Navigation--}}


{{--   end desktop navigation--}}




{{--   Mobile Navigation--}}

{{--   Menu button--}}
{{--  <div class="flex z-10 items-center lg:hidden bg-prima btn-open mobileMenuButton"></div>--}}

{{--  <div class="flex relative flex-col items-stretch lg:hidden zeynep right">--}}


{{--    @if (has_nav_menu('primary_mobile_navigation'))--}}


{{--    <div id="mobile-menu-wrapper">--}}
{{--      {!! wp_nav_menu([--}}
{{--        'theme_location' => 'primary_mobile_navigation',--}}
{{--		 'menu_id' => 'primary-mobile-menu',--}}
{{--		 'menu_class' => 'navbar-nav',--}}
{{--		 'container_id' => 'primary_mobile_navigation',--}}
{{--		 'walker' => new RMM_Mobile_Menu_Walker(),--}}
{{--        ]) !!}--}}
{{--      <div class="bg-blue-500">--}}

{{--        <div id="mobile-menu-close" class="p-0 bg-none border-none lg:hidden menu-toggle" aria-controls="primary-menu"--}}
{{--          aria-expanded="false">--}}
{{--          close--}}
{{--        </div>--}}

{{--      </div>--}}

{{--    </div>--}}

{{--  </div>--}}
{{--  @endif   end mobile navigation--}}



{{--</header>--}}



