{{-- Template Name: Development Template - Accordion --}}

@extends('layouts.app')


@section('content')
    @while (have_posts())
        @php(the_post())
        @include('partials.content-page')

        {{-- BEGIN Accordion --}}


        {{-- https://github.com/michu2k/Accordion --}}

        {{-- https://github.com/michu2k/Accordion/issues/8 --}}

        <div class="accordion-container">
            <div class="ac">
                <h2 class="ac-header">
                    <button type="button" class="ac-trigger">Lorem ipsum dolor sit amet.</button>
                </h2>
                <div class="ac-panel">
                    <p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="ac">
                <h2 class="ac-header">
                    <button type="button" class="ac-trigger">Lorem ipsum dolor sit amet.</button>
                </h2>
                <div class="ac-panel">
                    <p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="ac">
                <h2 class="ac-header">
                    <button type="button" class="ac-trigger">Lorem ipsum dolor sit amet.</button>
                </h2>
                <div class="ac-panel">
                    <p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>

        <div class="accordion">
            <div class="ac">
                <h2 class="ac-header">
                    <button type="button" class="ac-trigger">Lorem ipsum dolor sit amet.</button>
                </h2>
                <div class="ac-panel">
                    <p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="ac">
                <h2 class="ac-header">
                    <button type="button" class="ac-trigger">Lorem ipsum dolor sit amet.</button>
                </h2>
                <div class="ac-panel">
                    <p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="ac">
                <h2 class="ac-header">
                    <button type="button" class="ac-trigger">Lorem ipsum dolor sit amet.</button>
                </h2>
                <div class="ac-panel">
                    <p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>



        <script>
            // window.addEventListener("load", onLoadFunction);
            // window.addEventListener("resize", onLoadFunction);
            //
            // function onLoadFunction(e){
            //     if (document.getElementsByClassName('accordion-container').length > 0) {
            //
            //
            //         // Check if desktop and initialize - of mobile destroy
            //         if (window.matchMedia("(min-width: 1200px)").matches) {
            //
            //             const accordion = new Accordion(('.accordion-container'), {
            //                 duration: 400,
            //                 showMultiple: true,
            //             });
            //             accordion.closeAll();
            //             accordion.update();
            //         } else {
            //             const accordion = new Accordion('.accordion-container');
            //             accordion.destroy();
            //             accordion.detachEvents();
            //
            //         }
            //
            //
            //
            //     }
            //
            //
            //
            //
            //
            // }


            // window.addEventListener('load', function () {
            //     const accordions = Array.from(document.querySelectorAll('.accordion'));
            //
            //     if (accordions) {
            //         let count = 0;
            //         let id = null;
            //
            //         accordions.forEach(item => {
            //             id = 'accordion' + count;
            //             item.id = id;
            //
            //             new Accordion('#' + id, {
            //                 duration: 300,
            //             });
            //             count++;
            //         });
            //     }
            // }, false);
            //
        </script>
    @endwhile

    <div class="w-[500px]">
        <?php
  $rows = get_field('silde');
  if( $rows ) { ?>
        <div class="swiper newSwiper">
            <div class="swiper-wrapper">

                <?php
                foreach ($rows as $row) {
                    $content = $row['content'];
                    echo '<div class="swiper-slide">';
                    echo $content;
                    echo '</div>';
                }
                echo '</div>'; ?>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>







            <?  }
                ?>

        </div>
    @endsection
