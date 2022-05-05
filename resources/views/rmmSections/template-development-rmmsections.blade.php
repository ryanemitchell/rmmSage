@php
//	Template Name: 🧙‍ Development Template RMM Sections
@endphp

@extends('layouts.app')
@section('content')


    @while (have_posts())
        @php(the_post())
    @endwhile


    <h2 class="font-bold">RMM Sections</h2>

    <section class="flex relative justify-center items-center place-items-center rmmsection bg-hulk-800 to-the-edge my-halfMobileVGap lg:to-the-edge lg:my-halfDesktopVGap">
        <div class="flex justify-center items-center text-white inner__wrapper bg-primary">
            <div class="content">
                Basic rmmSection
            </div>
        </div>
    </section>

    <section class="flex relative justify-center items-center place-items-center rmmsection bg-hulk-800 my-halfMobileVGap lg:my-halfDesktopVGap">
        <div class="flex flex-col gap-8 justify-between items-center text-white lg:flex-row inner__wrapper bg-primary">

            <div class="flex justify-center items-center lg:w-1/2 bg-siteBlack col1">
                <div class="content">
                    Column1
                </div>
            </div>

            <div class="flex justify-center items-center lg:w-1/2 col2 bl-white">
                <div class="content">
                    Column2
                </div>
            </div>

        </div>
    </section>

    <section class="flex relative justify-center items-center place-items-center rmmsection full-width bg-hulk-800 my-halfMobileVGap lg:my-halfDesktopVGap">
        <div class="flex justify-center items-center text-white inner__wrapper bg-primary">
            <div class="content">
                Full Width Inner
            </div>
        </div>
    </section>

    <section class="flex relative justify-center items-center place-items-center rmmsection full-width-bound bg-hulk-800 my-halfMobileVGap lg:my-halfDesktopVGap">
        <div class="flex justify-center items-center text-white inner__wrapper bg-primary">
            <div class="content">
                Full Width Bound Inner
            </div>
        </div>
    </section>

    <section class="flex relative justify-center items-center place-items-center rmmsection full-width-bound-wide bg-hulk-800 my-halfMobileVGap lg:my-halfDesktopVGap">
        <div class="flex justify-center items-center text-white inner__wrapper bg-primary">
            <div class="content">
                Full Width Bound WideInner
            </div>
        </div>
    </section>

    <!--       Content to the end Left -->
    <section class="flex relative justify-center items-center place-items-center rmmsection full-width to-the-edge bg-hulk-800 my-halfMobileVGap lg:my-halfDesktopVGap">
        <div class="flex justify-start items-center text-white inner__wrapper bg-primary">
            <div class="content-edge__wrapper">
                Full Width IMAGE TO THE EDGE Inner
            </div>

            <div class="flex justify-center items-center content__wrapper">
                <div class="content">
                    Full Width IMAGE TO THE EDGE Inner
                </div>
            </div>
        </div>
    </section>

    <!--       Content to the end Right -->
    <section class="flex relative justify-center items-center place-items-center rmmsection full-width to-the-edge bg-hulk-800 my-halfMobileVGap lg:my-halfDesktopVGap">
        <div class="flex justify-start items-center text-white inner__wrapper bg-primary">

            <div class="flex justify-center items-center content__wrapper">
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
    <section class="flex relative justify-center items-center place-items-center rmmsection full-width to-the-edge bg-hulk-800 my-halfMobileVGap lg:my-halfDesktopVGap">
        <div class="flex justify-start items-center text-white inner__wrapper bg-primary">

            <div class="content-edge__wrapper">
                Full Width IMAGE TO THE EDGE Inner
            </div>

            <div class="flex justify-center items-center content__wrapper">
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
        class="flex justify-center items-center h-40 rmmsection wide-width bg-hulk-800 my-halfMobileVGap lg:my-halfDesktopVGap">
        <div class="flex justify-center items-center text-white inner__wrapper bg-primary">
            <div class="content">
                Wide Width Inner
            </div>
        </div>
    </section>


    <section
        class="flex justify-center items-center h-40 rmmsection narrow-width bg-hulk-800 my-halfMobileVGap lg:my-halfDesktopVGap">
        <div class="flex justify-center items-center text-white inner__wrapper bg-primary">
            <div class="content">
                Narrow Width Inner
            </div>
        </div>
    </section>



    <section
        class="flex justify-center items-center bg-white rmmsection narrow-width my-halfMobileVGap lg:to-the-edge lg:my-halfDesktopVGap">
        <div class="flex justify-center items-center text-white inner__wrapper bg-primary">
            <div class="flex place-items-center content lg:w-[585px] lg:py-desktopVGap">
                <div class="hidden lg:block icon">
                    <img src="{{ $imageAsset }}placeholder.jpg" alt="placeholder" class="max-w-none h-100 w-100"
                        height="100px" width="100px" alt="Now Hiring Logo">
                </div>
                <div class="ml-[22px]">
                    <a href="#" class="hiringLink">
                        <h2 class="group text-1xl bold text-mt2 lg:text-dt1 hover:bg-siteBlack">Join the Experts. Now Hiring
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


