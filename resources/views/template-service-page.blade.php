@php
//  Template Name: Service Page
@endphp

@extends('layouts.app')

@section('content')
    @while (have_posts())
        @php(the_post())
        @include('partials.content-page')

        {{--  Opening Content--}}
{{--        @include('rmmSections.splitPhotoContent')--}}

        {{-- Service Menu --}}

        {{--  Main Content--}}
{{--        @include('rmmSections.servicePageMain.servicePageMain')--}}

        {{-- Club Promo --}}


        {{-- Closing Content --}}
        @include('rmmSections.centeredContent')
        {{-- Related Pasts --}}

{{--        @include('rmmSections.rmmSectionStarter')--}}


{{--         @include('dev.showAllAcfFields')--}}

{{--         @include('Posts.related-posts')--}}
    @endwhile



    <?php
    print_r(the_post());
    ?>
@endsection
