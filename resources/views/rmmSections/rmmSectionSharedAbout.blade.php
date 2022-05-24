{{-- ==========================================================================
* Filename: rmmSectionSplitContentServices.blade.php
* Description: Simple section with header text, menu from wp-admin and footer text
* Fields Behavior: Choos+e to get fields from parent, current post or none.
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
<section class="flex relative justify-center items-center place-items-center bg-no-repeat rmmsection to-the-edge full-width-bound bg-blueTriangle pt-mobileVGap lg:mb-mobileVGap lg:pt-desktopVGap">
    <div class="flex justify-center items-center pt-4 lg:pt-12 inner__wrapper">
        <div class="flex flex-col justify-between items-center w-full lg:flex-row content">
            <div class="mb-6 w-11/12 lg:mb-0 lg:w-1/2 col1 flex justify-center <?php echo 'page' . $post->post_name;?>">
                @notempty($image)
                <img src="{{$image['sizes']['shared-about-image']}}" alt="{{$imageALT}}" title="{{$imageTitle}}"class="image aboutImage w-full lg:w-auto" loading="auto" height="{{$image['sizes']['shared-about-image-height']}}px" width="{{$image['sizes']['shared-about-image-width']}}px">
                @endnotempty
                <iframe loading="lazy" title="The Sansone Air Conditioning Story" width="500" height="281" data-src="https://www.youtube.com/embed/{{$videoID}}?feature=oembed" allow="" allowfullscreen="" class="lazy aboutVideo"></iframe>


                <!-- Embedded YouTube video Markup with the lazy class -->
                <script>
                    // Set the options globally
                    // to make LazyLoad self-initialize
                    window.lazyLoadOptions = {
                        // Your custom settings go here
                    };

                    // Listen to the initialization event
                    // and get the instance of LazyLoad
                    window.addEventListener("LazyLoad::Initialized", function (event) {
                        window.lazyLoadInstance = event.detail.instance;
                    }, false);
                </script>



                <style>

                    @if (is_front_page())
                        .aboutImage {
                        display: none;
                         }

                        .aboutVideo {
                             display: block;
                        }

                        @media screen and (max-width: 1024px) {
                            iframe {
                                height: 220px;
                                width: 100%;
                            }
                        }


                    @else
                        .aboutImage {
                            display: block;
                        }

                        .aboutVideo {
                            display: none;
                        }

                    @endif


                </style>


            </div>
            <div class="mb-0 w-11/12 lg:pl-14 lg:mb-0 lg:w-1/2 col2">
                <div class="tagline text-secondary text-[1.5rem]">{{$tagline}}</div>
                <h2 class="max-w-xs lg:mb-4 lg:max-w-fit lg:text-[32px]">{{$header}}</h2>
                <div class="mb-2 lg:mb-4 lg:max-w-[480px]">
                    @wpautokp($sharedaboutsection['content'])
                </div>
                <div class="cta grandChildren:self-start">
                    <a href="/about-us" class="lg:mb-2 btn mb-2">Learn More</a>
                </div>


            </div>
        </div>
    </div>
</section>

{{--@dump($sectionClasses)--}}
{{--@dump($mobileDisplay)--}}
{{--@dump($desktopDisplay)--}}
{{--@dump($thisPostsFields)--}}
