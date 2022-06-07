@php
//	Template Name: Front Page
@endphp@extends('layouts.app')

@section('content')
    {{-- Content and Services --}}
    @include('rmmSections.rmmSectionSplitContentServices')

    {{-- PromoBxes --}}
    @include('rmmSections.SplitCardCard')

    {{-- Guarantees --}}
    @include('rmmSections.SplitStyledImageGuarantees')

    {{-- Locations --}}
    @include('rmmSections.SplitContentListImageOverlap')

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
