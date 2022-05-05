@extends('layouts.app')

@section('content')
    {{-- @include('partials.page-header') --}}

    @if (!have_posts())
        <div class="mt-4 flex flex-col items-center lg:mt-0">
            <h1 class="mb-3 text-primary">404: Page Not Found</h1>
            <p class="mb-3 text-center">Sorry, we can’t find the page you’re looking for. Questions? Give us a call!</p>
            <div class="mb-4">@include('fieldPartials.callNow')</div>

        </div>

        @if (has_nav_menu('not_found_navigation'))
            <div id="404-menu-wrapper" class="mb-6">
                {!! wp_nav_menu([
    'theme_location' => 'not_found_navigation',
    'depth' => 1,
    'container' => 'nav',
    'fallback_cb' => false,
    'menu_class' => 'grid grid-cols-1 lg:grid-cols-4 gap-4 text-center w-full',
    'add_li_class' => 'w-full cursor-pointer py-5 px-10 transition-[background] duration-500',
]) !!}
            </div>
        @endif {{-- end not_found_navigation --}}
    @endif

    <script>
        var element = document.getElementById('back-link');
        element.setAttribute('href', document.referrer);
        element.onclick = function() {
            history.back();
            return false;
        }
    </script>

@endsection
