{{-- ==========================================================================
* Filename: rmmSectionSplitContentServices.blade.php
* Description: Simple section with header text, menu from wp-admin and footer text
* Fields Behavior: Choos+e to get fields from parent, current post or none.
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
<section class="@notempty($sectionClasses){{$sectionClasses}}@endnotempty flex narrow-width relative justify-center items-center place-items-center rmmsection bg-hulk-800 to-the-edge mobile-to-the-edge lg:to-the-edge">

    <div class="flex justify-center items-center inner__wrapper">
        <div class="flex flex-col justify-between items-center w-full lg:flex-row content">
            <div class="mb-6 lg:mb-0 lg:w-1/2 col1 flex justify-center <?php echo'page-'.$post->post_name;?> w-full lg:w-auto">
                @notempty($image)
                <img src="{{$image['sizes']['split-content-image']}}" alt="{{$imageALT}}" title="{{$imageTitle}}"class="image aboutImage p-4 pb-0 lg:p-0" loading="auto" height="{{$image['sizes']['split-content-image-height']}}px" width="{{$image['sizes']['split-content-image-width']}}px">
                @endnotempty
            </div>
            <div class="px-4 mb-6 lg:pl-0 lg:mb-0 lg:w-1/2 col2 lg:px-o">

                @notempty($tagline)
                <div class="tagline text-secondary text-[1.5rem]">{{$tagline}}</div>
                @endnotempty

                @notempty($header)
                <h1 class="max-w-xs lg:mb-4 lg:max-w-fit ">{{$header}}</h1>
                @endnotempty

                @notempty($content)
                <div class="mb-2 lg:mb-4 lg:max-w-[480px]">
                    @wpautokp($content)
                </div>
                @endnotempty

                @istrue($showCTA)
                <div class="cta grandChildren:self-start">

                    @if (is_page_template('page-maintenance-plan.blade.php'))
                        @include('fieldPartials.maintenancePlanCallNow')
                    @else
                        @include('fieldPartials.callNow')
                    @endif



                </div>
                @endistrue


            </div>
        </div>
    </div>
</section>

