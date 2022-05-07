@php
//	Template Name: Maintenance Plan
@endphp@extends('layouts.app')

@section('content')
    {{-- Intro Content --}}
    @include('rmmSections.rmmSectionSplitPhotoContent')

{{-- Maintenance Plan Highlights --}}
    @include('rmmSections.maintenancePlan.styledImagePlanHighlights')

{{-- Club List --}}
    @include('rmmSections.maintenancePlan.planBenefits')

{{-- Main Content --}}
    @include('rmmSections.rmmSectionMaintenancePlanPageMainContent')


`



    {{-- @while (have_posts()) --}}
    {{-- @php(the_post()) --}}
    {{-- @includeFirst(['partials.content-page', 'partials.content']) --}}
    {{-- @endwhile --}}
@endsection
