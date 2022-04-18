@extends('layouts.app')

@section('content')

	@if (!have_posts())
		<x-alert type="warning">
			{!! __('Sorry, no results were found.', 'sage') !!}
		</x-alert>

		{!! get_search_form(false) !!}
	@else
		<div class='lg:hidden'>
			@include('blog.category-switcher-mobile')
		</div>


		@while (have_posts())
			@php(the_post())
			@includeFirst(['blog.content-single',])
		@endwhile

	@endif
@endsection

@section('sidebar')
	@include('blog.sidebar-blog')
@endsection

@section('prefooter')
	@include('blog.prefooter-blog')
@endsection
