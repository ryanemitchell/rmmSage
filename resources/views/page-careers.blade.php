@php
//	Template Name: Careers
@endphp

@extends('layouts.app')


@section('content')
    @while (have_posts())
        @php(the_post())

        <div class="grid gap-8 lg:grid-cols-2 contactSection">
            <div class="order-2 p-8 rounded-lg border-2 border-black lg:order-1 col1">
                <!-- Start of .col1 -->
                <h2 class="text-center">Job Listings</h2> @include(
                    'fieldModules.moduleViewJobsAccordion'
                )
            </div> <!-- End of .col1 -->
            <div class="order-1 p-8 rounded-lg border-2 border-black lg:order-2 col2">
                <!-- Start of .col2 -->

                <h2 class="text-center">Apply Now</h2>
                <?php echo FrmFormsController::show_form(3, $key = 'sf-job-application', $title = false, $description = false); ?>


            </div> <!-- End of .col2 -->

        </div> <!-- End of .contactSection -->
    @endwhile
@endsection
