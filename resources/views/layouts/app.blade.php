{{--@dump($allFields)--}}
@include('sections.header')
@include('sections.page-header')
@include('sections.yoastBreadcrumbs')
<div id="main-container"
  class="flex relative flex-col flex-nowrap justify-between px-0 mx-auto lg:flex-row lg:px-0 content-container max-w-[1200px]">
  <!-- Start of #main-container -->

  <main id="main" class="flex flex-col px-4 mx-auto mt-0 w-full lg:px-0 main grow">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar grow lg:ml-desktopVGap lg:w-[370px] lg:grow-0">
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
