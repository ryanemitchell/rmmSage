<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>
@include('sections.header')


@include('sections.page-header')
@include('sections.yoastBreadcrumbs')
<div id="main-container"
  class="flex flex-col flex-nowrap justify-between px-0 mx-auto lg:flex-row lg:px-0 content-container max-w-[1200px] relative">
  <!-- Start of #main-container -->

  <main id="main" class="flex flex-col mx-auto w-full main grow px-4 lg-px-0">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="lg:ml-desktopVGap lg:w-[370px] sidebar grow lg:grow-0">
      @yield('sidebar')
    </aside>
  @endif
</div> <!-- End of #main-container -->

@hasSection('prefooter')
  <div id="prefooter-container"  class="flex flex-col flex-nowrap justify-between px-0 mx-auto bg-blue-600 lg:flex-row lg:px-0 content-container max-w-[1200px] lg:mt-desktopVGap">
    <main id="main" class="flex flex-col mx-auto w-full main grow">
      @yield('prefooter')
    </main>

  </div>
@endif


@include('sections.footer')
@include('sections.bottom-bar')
