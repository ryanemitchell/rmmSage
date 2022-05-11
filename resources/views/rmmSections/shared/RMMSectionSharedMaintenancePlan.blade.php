{{-- ==========================================================================
* Filename: RMMSectionSharedMaintenancePlan.blade.php
* Description:
* Fields Behavior:
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
{{--@dump($MaintenancePlanFields)--}}
<section class="@notempty($sectionClasses){{$sectionClasses}}@endnotempty flex relative justify-center items-center place-items-center rmmsection full-width to-the-edge">
    <div class="flex flex-col justify-start items-center text-white lg:flex-row inner__wrapper bg-siteBlack">

        <div class="flex order-2 justify-center items-center content__wrapper lg:order1">
            <div class="flex flex-col justify-center items-center py-6 px-4 lg:py-0 lg:px-0 content text-siteWhite" data-aos="fade-right">
                @svg('images/expertAir/x_icon_dual_tone.svg', 'icon lg:mb-4 mb-2')
                @notempty($header)
                <h2 class="mb-4 lg:mb-4 text-siteWhite">{{$header}}</h2>
                @endnotempty
                @notempty($content)
                <div class="mb-4 text-left lg:mb-4 lg:text-center lg:max-w-[400px]">
                    @wpautokp($content)
                </div>


                @endnotempty


                <div class="cta grandChildren:self-start">
                    <a href="#" class="mb-2 btn btn-grad-onDark" data-aos="flip-up">Learn More</a>
                </div>

            </div>
        </div>

        @notempty($image)
        <div class="order-1 lg:order-2 content-edge__wrapper bg-siteBlack">
            <img src="{{$image['url']}}" alt="{{$imageALT}}" title="{{$imageTitle}}"class="image image lg:clipLeftArrow w-full lg:w-auto" loading="lazy" height="" width="" data-aos="fade-left">



        </div>
        @endnotempty

    </div>
</section>

{{--@dump($sectionClasses)--}}
{{--@dump($mobileDisplay)--}}
{{--@dump($desktopDisplay)--}}
{{--@dump($thisPostsFields)--}}
