{{-- Style with SCSS intead of Tailwind to provide consistant styling to widgets--}}

<div class='hidden lg:block w-[420px]'>
  @include('blog.category-switcher')
</div>

<div class='hidden lg:block w-[420px] mt-halfDesktopVGap'>
  <div class="flex flex-col justify-center items-center px-4 py-desktopVGap siteBoxed bg-siteBlack">
    <!-- Start of .categorySwitcher -->
    <h2>Need Help?</h2>

    <div class="mb-4 lg:mb-4 text-siteWhite">Call Expert Air today!</div>
    @include('fieldPartials.callNowOnDark')
  </div> <!-- End of .categorySwitcher -->
</div>

<?php dynamic_sidebar('sidebar-blog'); ?>
