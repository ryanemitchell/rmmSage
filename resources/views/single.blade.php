@extends('layouts.app')

@section('content')
    {{--  @include('partials.page-header')--}}

    <div class='lg:hidden'>
        @include('blog.category-switcher-mobile')
    </div>


    @if (! have_posts())
        <x-alert type="warning">
            {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>

        {!! get_search_form(false) !!}
    @endif

    @while(have_posts()) @php(the_post())
    @include('blog.content-single')
    @endwhile

    <div class="flex justify-center items-center mt-8 w-full">
        <?php witsage_numeric_posts_nav(); ?>
    </div>

    {{--  {!! get_the_posts_navigation() !!}--}}
@endsection

@section('sidebar')
	@include('blog.sidebar-blog')
@endsection


@section('prefooter')
	@include('partials.blog.prefooter-blog')
@endsection

