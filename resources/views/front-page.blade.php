@php
//	Template Name: Front Page
@endphp@extends('layouts.app')

@section('content')
    {{-- Content and Services --}}
    @include('rmmSections.rmmSectionSplitContentServices')


    {{-- Locations --}}
    @include('rmmSections.SplitContentListImageOverlap')

    {{-- Guarantees --}}
    @include('rmmSections.SplitStyledImageGuarantees')

    {{-- PromoBxes --}}
    @include('rmmSections.SplitCardCard')

    {{-- Reviews --}}
    @include('rmmSections.rmmSectionSharedReviews')

    {{-- LogoBAr --}}
    @include('rmmSections.logoBar.logoBarFull')

    {{-- Emergency Services --}}
    @include('rmmSections.SplitContentStyledImageToOverlay')

    {{-- About --}}
    @include('rmmSections.rmmSectionSharedAbout')

    {{-- Now Hring --}}
    @include('rmmSections.narrowIconContent')


    @while (have_posts())
        @php(the_post())
        @includeFirst(['partials.content-page', 'partials.content'])
    @endwhile
@endsection
