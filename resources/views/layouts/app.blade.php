<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')


<div id="main-container" class="content-container mx-auto max-w-[1200px] px-0 lg:px-0 flex "> <!-- Start of #main-container -->

  <main id="main" class="main">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif
</div> <!-- End of #main-container -->

@include('sections.footer')
@include('sections.bottom-bar')
