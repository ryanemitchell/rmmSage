@php
//	Template Name: City Page
@endphp@extends('layouts.app')

@section('content')
    {{-- Opening Content --}}
    @include('rmmSections.rmmSectionSplitPhotoContent')

    {{-- LogoBar --}}
    @include('rmmSections.logoBar.logoBarFull')

    {{-- Main Content --}}
    @include('rmmSections.rmmSectionCityPageMainContent' )

    {{-- Reviews --}}
    @include('rmmSections.rmmSectionSharedReviews')

    {{-- About --}}
    @include('rmmSections.rmmSectionSharedAbout')





    {{-- @while (have_posts()) --}}
    {{-- @php(the_post()) --}}
    {{-- @includeFirst(['partials.content-page', 'partials.content']) --}}
    {{-- @endwhile --}}
@endsection
