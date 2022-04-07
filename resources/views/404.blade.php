@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @if (!have_posts())
        <x-alert type="warning">
            {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
        </x-alert>

        @php
            $args = [
                'theme_location' => 'not_found_navigation',
                'menu_id' => 'not-found-navigation',
                'menu_class' => 'error404-nav',
                'container_id' => 'primary_mobile_navigation',
            ];
            wp_nav_menu($args);
        @endphp

        {!! get_search_form(false) !!}
    @endif
@endsection
