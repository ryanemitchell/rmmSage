@php
//	Template Name: Maintenance Plan
@endphp@extends('layouts.app')

@section('content')
    {{-- Intro Content --}}
    @include('rmmSections.rmmSectionSplitPhotoContent')

    {{-- Maintenance Plan Highlights --}}
    @include('rmmSections.SplitStyledImageMaintenancePlan')

    {{-- Club List --}}
    @include('rmmSections.centeredListsWitMore')

    {{-- Main Content --}}
    @include(
        'rmmSections.pageMainContentSection.cityPageMainContentSection'
    )







    {{-- @while (have_posts()) --}}
    {{-- @php(the_post()) --}}
    {{-- @includeFirst(['partials.content-page', 'partials.content']) --}}
    {{-- @endwhile --}}
@endsection
