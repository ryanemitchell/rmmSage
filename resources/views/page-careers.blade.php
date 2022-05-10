@php
//	Template Name: Careers
@endphp

@extends('layouts.app')


@section('content')
    <section
        class="contactSection rmmsection mobile-to-the-edge my-halfMobileVGap flex items-center justify-center bg-white lg:my-halfDesktopVGap">
        <div class="inner__wrapper flex items-center justify-center">
            <div class="grid gap-8 lg:grid-cols-2">

                <div class="col1 lg:p-8">
                    <!-- Start of .col1 -->
                    <h2 class="text-center">Job Listings</h2>

                    @include('fieldModules.moduleViewJobsAccordion')
                </div> <!-- End of .col1 -->
                <div class="col2 bg-siteGrey p-8 lg:siteBoxed lg:bg-none">
                    <!-- Start of .col2 -->

                    <h2 class="text-center">Apply Now</h2>
                    <?php echo FrmFormsController::show_form(3, $key = 'sf-job-application', $title = false, $description = false); ?>


                </div> <!-- End of .col2 -->



            </div> <!-- End of .content -->
        </div>

    </section>

    <div class="mt-4 lg:mt-6">
        @include('rmmSections.rmmSectionSharedReviews')
    </div>

    @include('rmmSections.rmmSectionSharedAbout')




    @while (have_posts())
        @php(the_post())
    @endwhile
@endsection
