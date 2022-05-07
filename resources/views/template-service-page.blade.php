@php
//  Template Name: Service Page
@endphp

@extends('layouts.app')

@section('content')
	{{-- Opening Content --}}
	@include('rmmSections.rmmSectionSplitPhotoContent')
	{{--        @include('partials.content-page')--}}



{{--	 Service Menu--}}
{{--	 @include('rmmSections.centeredMenu')--}}

{{--	 Main Content --}}
	        @include('rmmSections.pageMainContentSection.rmmSectionServicePageMainContent')

	{{-- Club Promo --}}
	@include('rmmSections.shared.RMMSectionSharedMaintenancePlan')

	{{-- Closing Content --}}
	{{-- @include('rmmSections.centeredContent') --}}
	{{-- Related Pasts --}}

	{{-- @include('rmmSections.rmmSectionStarter') --}}


	{{-- @include('dev.showAllAcfFields') --}}

	        @include('Posts.related-posts')

{{--    @while (have_posts())--}}
{{--        @php(the_post())--}}

{{--    @endwhile--}}




@endsection
