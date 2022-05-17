@php
//	Template Name: Contact
@endphp

@extends('layouts.app')


@section('content')
    @while (have_posts())
        <div class="mb-6">
        @php(the_post())
        @php(the_content())`
        </div>
    @endwhile
        <div class="contactSection mt-4 grid gap-8 lg:mt-0 lg:grid-cols-2">
            <div class="col1 siteBoxed p-4 lg:p-8">
                <!-- Start of .col1 -->
                @include('witCommonSections.contactInformationMulti')
            </div> <!-- End of .col1 -->

            <div class="col2 siteBoxed p-4 lg:p-8">
                <!-- Start of .col2 -->


                @if (is_page(102) or is_page('contact'))
                    <h2 class="text-center">Contact Us</h2>
                    <?php echo FrmFormsController::show_form(2, $key = 'sf-contact', $title = false, $description = false); ?>
                @elseif(is_page(40) or is_page('schedule-service'))
                    <h2 class="text-center">Schedule Service</h2>
                    <?php echo FrmFormsController::show_form(4, $key = 'sf-schedule-service', $title = false, $description = false); ?>
                @endif

            </div> <!-- End of .col2 -->

        </div> <!-- End of .contactSection -->

    {{-- About --}}
    @include('rmmSections.rmmSectionSharedAbout')

@endsection
