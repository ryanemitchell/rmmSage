@php
//	Template Name: 🧙‍ Development Template
@endphp

@extends('layouts.app')


@section('content')
    {{-- @include('offers.alloffers') --}}
    @include('offers.offers')


    {{-- Offers: {{ $offers }} --}}

    {{-- @foreach ($offers as $offer) --}}

    {{-- {{ $offer->ID }} --}}

    {{-- @field('field_cpt_offers_offer_disclaimer',  {{ $offer->ID }}) --}}


    {{-- @php --}}
    {{-- var_dump($offer); --}}
    {{-- @endphp --}}
    {{-- @endforeach --}}


    @while (have_posts())
        @php(the_post())
        {{ $pageTitle }}





        @include('partials.content-page')




        {{-- <span class="inline-flex items-center siteDropShadow"> --}}
        {{-- asasxasxa --}}
        {{-- @svg('images.sage_character_head') --}}
        {{-- </span> --}}

        {{-- <{{ $blogTitleElement }} class="blogTitle"> --}}
        {{-- {{ $blogTitle }} --}}
        {{-- </{{ $blogTitleElement }}> --}}

        {{-- <img src="{{ $defaultFeaturedImage }}" alt="{{ $defaultFeaturedImageAlt }}" --}}
        {{-- title="{{ $defaultFeaturedImageTitle }}"> --}}

        {{-- {{ $imageAsset }} --}}
        {{-- @include('fieldPartials.socialIcons') --}}
        {{-- @include('fieldPartials.businessName') --}}
        {{-- @include('fieldPartials.businessAddress') --}}
        {{-- @include('fieldPartials.businessLicense') --}}
        {{-- @include('fieldPartials.businessPhoneNumber') --}}

        {{-- <h2>ShortCodes</h2> --}}
    @endwhile


    <div class="relative w-1/2">

        <div class="overlay grid h-[280px] place-items-center"
            style="background-image: url(https://images.unsplash.com/photo-1509473332032-f1ce823d92c4?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=3e2410208e8f8a78e4aa3550fddfbb44);">

            <div class="inner_wrapper flex flex-col items-center text-white">
                <div class="icon"></div>
                <h2 class="title text-xl">Hello</h2>
                <div class="content">$50 Off AC Tune-Up</div>
                <button>CTA</button>

            </div>
        </div>
    @endsection

    @section('sidebar')
        @include('sections.sidebar')
    @endsection
