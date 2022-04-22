@php
//	Template Name: 🧙‍ Development Template RMM Sections
@endphp

@extends('layouts.app')


@section('content')
    <pre>
<?php

print_r(get_body_class());

add_filter('body_class', function ($classes) {
    return array_merge($classes, ['class-name']);
});

?>
</pre>
    @while (have_posts())
        @php(the_post())
    @endwhile


    RMM Section
    <x-testing.testcomponent></x-testing.testcomponent>
    <section
        class="rmmsection bg-hulk-800 to-the-edge lg:to-the-edge relative my-halfMobileVGap flex place-items-center items-center justify-center lg:my-halfDesktopVGap">
        <div class="inner__wrapper bg-primary flex items-center justify-center text-white">
            <div class="content">
                Wit section
            </div>
        </div>
    </section>

    <section
        class="rmmsection bg-hulk-800 relative my-halfMobileVGap flex place-items-center items-center justify-center lg:my-halfDesktopVGap">
        <div class="inner__wrapper bg-primary flex flex-col items-center justify-between gap-8 text-white lg:flex-row">

            <div class="col1 flex items-center justify-center bg-black lg:w-1/2">
                <div class="content">
                    Column1
                </div>
            </div>

            <div class="col2 bl-white flex items-center justify-center lg:w-1/2">
                <div class="content">
                    Column2
                </div>
            </div>

        </div>
    </section>

    <section
        class="rmmsection full-width bg-hulk-800 relative my-halfMobileVGap flex place-items-center items-center justify-center lg:my-halfDesktopVGap">
        <div class="inner__wrapper bg-primary flex items-center justify-center text-white">
            <div class="content">
                Full Width Inner
            </div>
        </div>
    </section>

    <section
        class="rmmsection full-width-bound bg-hulk-800 relative my-halfMobileVGap flex place-items-center items-center justify-center lg:my-halfDesktopVGap">
        <div class="inner__wrapper bg-primary flex items-center justify-center text-white">
            <div class="content">
                Full Width Bound Inner
            </div>
        </div>
    </section>

    <section
        class="rmmsection full-width-bound-wide bg-hulk-800 relative my-halfMobileVGap flex place-items-center items-center justify-center lg:my-halfDesktopVGap">
        <div class="inner__wrapper bg-primary flex items-center justify-center text-white">
            <div class="content">
                Full Width Bound WideInner
            </div>
        </div>
    </section>

    <!--       Content to the end Left -->
    <section
        class="rmmsection full-width to-the-edge bg-hulk-800 relative my-halfMobileVGap flex place-items-center items-center justify-center lg:my-halfDesktopVGap">
        <div class="inner__wrapper bg-primary flex items-center justify-start text-white">
            <div class="content-edge__wrapper">
                Full Width IMAGE TO THE EDGE Inner
            </div>

            <div class="content__wrapper flex items-center justify-center">
                <div class="content">
                    Full Width IMAGE TO THE EDGE Inner
                </div>
            </div>
        </div>
    </section>

    <!--       Content to the end Right -->
    <section
        class="rmmsection full-width to-the-edge bg-hulk-800 relative my-halfMobileVGap flex place-items-center items-center justify-center lg:my-halfDesktopVGap">
        <div class="inner__wrapper bg-primary flex items-center justify-start text-white">

            <div class="content__wrapper flex items-center justify-center">
                <div class="content">
                    Full Width IMAGE TO THE EDGE Inner
                </div>
            </div>

            <div class="content-edge__wrapper">
                Full Width IMAGE TO THE EDGE Inner
            </div>

        </div>
    </section>

    <!--       Content to the end both -->
    <section
        class="rmmsection full-width to-the-edge bg-hulk-800 relative my-halfMobileVGap flex place-items-center items-center justify-center lg:my-halfDesktopVGap">
        <div class="inner__wrapper bg-primary flex items-center justify-start text-white">

            <div class="content-edge__wrapper">
                Full Width IMAGE TO THE EDGE Inner
            </div>

            <div class="content__wrapper flex items-center justify-center">
                <div class="content">
                    Full Width IMAGE TO THE EDGE Inner
                </div>
            </div>

            <div class="content-edge__wrapper">
                Full Width IMAGE TO THE EDGE Inner
            </div>

        </div>
    </section>

    <section
        class="rmmsection wide-width bg-hulk-800 my-halfMobileVGap flex h-40 items-center justify-center lg:my-halfDesktopVGap">
        <div class="inner__wrapper bg-primary flex items-center justify-center text-white">
            <div class="content">
                Wide Width Inner
            </div>
        </div>
    </section>


    <section
        class="rmmsection narrow-width bg-hulk-800 my-halfMobileVGap flex h-40 items-center justify-center lg:my-halfDesktopVGap">
        <div class="inner__wrapper bg-primary flex items-center justify-center text-white">
            <div class="content">
                Narrow Width Inner
            </div>
        </div>
    </section>



    <section
        class="rmmsection narrow-width lg:to-the-edge my-halfMobileVGap flex items-center justify-center bg-white lg:my-halfDesktopVGap">
        <div class="inner__wrapper bg-primary flex items-center justify-center text-white">
            <div class="content flex place-items-center lg:w-[585px] lg:py-desktopVGap">
                <div class="icon hidden lg:block">
                    <img src="{{ $imageAsset }}placeholder.jpg" alt="placeholder" class="h-100 w-100 max-w-none"
                        height="100px" width="100px" alt="Now Hiring Logo">
                </div>
                <div class="ml-[22px]">
                    <a href="#" class="hiringLink">
                        <h2 class="group text-1xl bold text-mt2 hover:bg-black lg:text-dt1">Join the Experts. Now Hiring
                            @svg('images/sage_character_head.svg', 'group-hover:filter-aqua hidden lg:inline',)</h2>
                    </a>
                    <p class="hidden lg:block lg:pt-4">We’re commited to building a team that helps our customers to be
                        comfortable in their homes, which is
                        why we work so hard to do quality work and to provide outstanding customer service.</p>
                </div>
            </div> <!-- End of .content -->


        </div>

    </section>
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection
