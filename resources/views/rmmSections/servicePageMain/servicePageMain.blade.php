<section class="rmmsection {{$className}} {{$mobileDisplay}} {{$desktopDisplay}} bg-hulk-800 to-the-edge my-halfMobileVGap lg:to-the-edge lg:my-halfDesktopVGap flex justify-center items-center relative place-items-center">


    <div class="flex flex-col gap-8 justify-between items-center text-white lg:flex-row inner__wrapper bg-primary">

        <div class="flex justify-center items-center lg:w-1/2 col1 lg:order-2">


            <div class="content">
                @include('rmmSections.servicePageMain.linkBox')
                @include('rmmSections.servicePageMain.singleOfferBox')
            </div>
        </div>

        <div class="flex justify-center items-center lg:w-1/2 col2  lg:order-1">
            <div class="content">
                @include('rmmSections.servicePageMain.flexibleContent')
            </div>
        </div>

    </div>






</section>

