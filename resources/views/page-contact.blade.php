@php
//	Template Name: Contact
@endphp

@extends('layouts.app')


@section('content')
    @while (have_posts())
        @php(the_post())

        <div class="contactSection grid gap-8 lg:grid-cols-2">
            <div class="col1 rounded-lg border-2 border-black p-8">
                <!-- Start of .col1 -->
                @include('witCommonSections.contactInformationMulti')
            </div> <!-- End of .col1 -->

            <div class="col2 rounded-lg border-2 border-black p-8">
                <!-- Start of .col2 -->


                @if (is_page(36) or is_page('contact'))
                    <h2 class="text-center">Contact Us</h2>
                    <?php echo FrmFormsController::show_form(2, $key = 'sf-contact', $title = false, $description = false); ?>
                @elseif(is_page(40) or is_page('schedule-service'))
                    <h2 class="text-center">Schedule Service</h2>
                    <?php echo FrmFormsController::show_form(4, $key = 'sf-schedule-service', $title = false, $description = false); ?>
                @endif

            </div> <!-- End of .col2 -->

        </div> <!-- End of .contactSection -->
    @endwhile
@endsection
