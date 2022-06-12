@php
//	Template Name: Offers
@endphp

@extends('layouts.app')


@section('content')
    {{-- Intro Content --}}

     @while (have_posts())
     @php(the_post())
     @includeFirst(['partials.content-page', 'partials.content'])
         <br>
     @endwhile




{{--    <section--}}
{{--        class="rmmsection bg-hulk-800 to-the-edge mobile-to-the-edge lg:to-the-edge relative flex place-items-center items-center justify-center lg:my-halfDesktopVGap">--}}

{{--        <div class="inner__wrapper flex items-center justify-center">--}}
{{--            <div class="content flex w-full flex-col items-center justify-center lg:flex-row">--}}
{{--                <div class="lg:px-o mb-6 px-4 lg:mb-0">--}}
{{--                    <div class="tagline text-center text-[1.5rem] text-secondary">24/7 Emergency Services</div>--}}
{{--                    <h1 class="text-center lg:mb-4 lg:text-mt1">Air Conditioning Spring TX</h1>--}}
{{--                    <div class="mb-2 text-center lg:mb-4 lg:max-w-[480px]">--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
{{--                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
{{--                            laboris nisi ut aliquip ex ea commodo consequat..</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    {{-- @dump($featuredOffers) --}}

    @notempty($allOffers)
    <div class="featuredOffers">
        {{-- <h2 class="">Featured Offers</h2> --}}
        <div class="mb-4 grid grid-cols-1 gap-4 lg:grid-cols-2">
            @foreach ($featuredOffers as $offer)
                @include('offers.featuredOffers')
            @endforeach
        </div>
    </div>

    {{-- @dump($allOffers) --}}
    {{-- @dump($$allExceptFeatured) --}}

    <div class="allOffers">
        {{-- <h2 class="">All Offers</h2> --}}
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:auto-rows-fr">
            <!-- Start of .grid grid-cols-2 -->
            @foreach ($allExceptFeatured as $offer)
                @include('offers.allOffers')
            @endforeach
        </div> <!-- End of .grid grid-cols-2 -->

    </div>

    @endnotempty

    <div class="mt-4 lg:mt-6">
        @include('rmmSections.rmmSectionSharedReviews')
    </div>
    @include('rmmSections.rmmSectionSharedAbout')



@endsection


{{-- <div class="flex flex-col justify-center p-2 mx-auto w-11/12 bg-white rounded-sm shadow-sm devBox shadow-slate-300/60"> --}}
{{-- <h2>This Sections Fields</h2> --}}
{{-- @dump($sectionGroup) --}}
{{-- <br> --}}
{{-- <hr> --}}

{{-- <h2>This Sections Composer Fields</h2> --}}
{{--  --}}{{-- @dump($thisDump) --}}
{{-- <br> --}}
{{-- <hr> --}}

{{-- @include('dev.showAllPageFields') --}}
{{-- @include('dev.showAllAcfFields') --}}

{{-- </div> --}}


{{-- <?php--}}
{{--//--}}
{{--//$groups = acf_get_field_groups();--}}
{{--//foreach ( $groups as $group ) {--}}
{{--//	$fields = acf_get_fields( $group );--}}
{{--//	if ( $fields ) {--}}
{{--//		foreach ( $fields as $field ) {--}}
{{--//			var_dump( $field );--}}
{{--//		}--}}
{{--//	}--}}
{{--//}?> ?> ?> ?> ?> ?> ?> ?> ?> ?> --}}
