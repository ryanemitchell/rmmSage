<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>
@include('sections.header')
@include('sections.page-header')
@include('sections.yoastBreadcrumbs')
<div id="main-container"
  class="content-container mx-auto max-w-[1200px] px-0 lg:px-0 flex flex-col lg:flex-row flex-nowrap bg-blue-500 justify-between bg-orange">
  <!-- Start of #main-container -->

  <main id="main" class="main mx-auto grow w-full flex flex-col">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar lg:w-52 lg:ml-16 grow lg:grow-0">
      @yield('sidebar')
    </aside>
  @endif
</div> <!-- End of #main-container -->

@include('sections.footer')
@include('sections.bottom-bar')
