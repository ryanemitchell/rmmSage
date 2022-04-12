@extends('layouts.app')

@section('content')
    {{-- @include('partials.page-header') --}}

    @if (!have_posts())
        <x-alert type="warning">
            {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
        </x-alert>

        <?php echo get_page_template(); ?>

        @if (has_nav_menu('not_found_navigation'))
            <div id="404-menu-wrapper">
                {!! wp_nav_menu([
    'theme_location' => 'not_found_navigation',
    'depth' => 1,
    'fallback_cb' => false,
    'menu_class' => 'grid grid-cols-1 lg:grid-cols-4 gap-4 text-center w-full',
    'add_li_class' => 'w-full bg-blue-100 hover:bg-blue-500 cursor-pointer py-5 px-10 transition-[background] duration-500',
]) !!}


            </div>
        @endif {{-- end not_found_navigation --}}
    @endif
@endsection
