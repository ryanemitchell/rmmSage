{{-- Template Name: Development Template --}}

@extends('layouts.app')


@section('content')
    @while (have_posts())
        @php(the_post())
        {{ $pageTitle }}
        @include('partials.content-page')

        @include('fieldPartials.socialIcons')
        @include('fieldPartials.businessName')
        @include('fieldPartials.businessAddress')
        @include('fieldPartials.businessLicense')
        @include('fieldPartials.businessPhoneNumber')

        <h2>ShortCodes</h2>
    @endwhile
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection
