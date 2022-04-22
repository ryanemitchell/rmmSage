@php
//	Template Name: Offers
@endphp

@extends('layouts.app')


@section('content')
    @include('offers.offers', ['includeOffers' => 'selected'])




    @while (have_posts())
        @php(the_post())
    @endwhile
@endsection
