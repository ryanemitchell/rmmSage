@php
//	Template Name: 🧙‍ Development Template - Flickity
@endphp

@extends('layouts.app')


@section('content')

    <div class="carousel ::after:content-['flickity'] ::after-hidden lg:flex lg::after:content-['']" data-flickity='{ "watchCSS": true }'>
        <div class="carousel-cell">a</div>
        <div class="carousel-cell">b</div>
        <div class="carousel-cell">c</div>
        <div class="carousel-cell">d</div>
        <div class="carousel-cell">e</div>
    </div>

{{--   @include('offers.alloffers')--}}
{{--   @include('offers.selectedOffers')--}}


{{--   Offers: {{ $offers }}--}}

{{--   @foreach($offers as $offer)--}}

{{--       {{ $offer->ID }}--}}

{{--       @field('field_cpt_offers_offer_disclaimer',  {{ $offer->ID }})--}}


{{--       @php--}}
{{--           var_dump($offer);--}}
{{--       @endphp--}}
{{--   @endforeach--}}


    @while (have_posts())
        @php(the_post())
        {{ $pageTitle }}





        @include('partials.content-page')




{{--        <span class="inline-flex items-center siteDropShadow">--}}
{{--            asasxasxa--}}
{{--            @svg('images.sage_character_head')--}}
{{--        </span>--}}

{{--        <{{ $blogTitleElement }} class="blogTitle">--}}
{{--            {{ $blogTitle }}--}}
{{--            </{{ $blogTitleElement }}>--}}

{{--            <img src="{{ $defaultFeaturedImage }}" alt="{{ $defaultFeaturedImageAlt }}"--}}
{{--                title="{{ $defaultFeaturedImageTitle }}">--}}

{{--            {{ $imageAsset }}--}}
{{--            @include('fieldPartials.socialIcons')--}}
{{--            @include('fieldPartials.businessName')--}}
{{--            @include('fieldPartials.businessAddress')--}}
{{--            @include('fieldPartials.businessLicense')--}}
{{--            @include('fieldPartials.businessPhoneNumber')--}}

{{--            <h2>ShortCodes</h2>--}}
    @endwhile


    <div class="relative w-1/2">

        <div class="grid place-items-center overlay h-[280px]"
            style="background-image: url(https://images.unsplash.com/photo-1509473332032-f1ce823d92c4?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=3e2410208e8f8a78e4aa3550fddfbb44);">

            <div class="flex flex-col items-center text-white inner_wrapper">
                <div class="icon"></div>
                <h2 class="text-xl title">Hello</h2>
                <div class="content">$50 Off AC Tune-Up</div>
                <button>CTA</button>

            </div>
        </div>
    @endsection

    @section('sidebar')
        @include('sections.sidebar')
    @endsection
