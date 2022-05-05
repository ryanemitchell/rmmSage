<section class="rmmsection {{$className}} {{$mobileDisplay}} {{$desktopDisplay}} bg-hulk-800 to-the-edge my-halfMobileVGap lg:to-the-edge lg:my-halfDesktopVGap flex justify-center items-center relative place-items-center">
    <div class="flex justify-center items-center text-white inner__wrapper bg-primary">
        <div class="content">
            Basic rmmSection
<br>

            ClassName:  {{$className}} <br>
            Mobile Display: {{$mobileDisplay}} <br>
            Desktop Display:    {{$desktopDisplay}} <br>
            PLaceHolder:    {{$placeholderField}} <br>

            <br><hr><br>

            ClassName:  {{$CPclassName}} <br>
            Mobile Display: {{$CPmobileDisplay}} <br>
            Desktop Display:    {{$CPdesktopDisplay}} <br>
            PLaceHolder:    {{$CPplaceholderField}} <br>

            Ancestors: <br>
            @dump($RMMSectionStarterCopy_ancestors)
            <br><hr>




            Content Group: <br>
            @dump($contentGroup)


            <br><hr>

            <?php

            $bacon = get_field('RMMSectionStarterCopy_group' );

            var_dump($bacon['sectionContent']);

            ?>
{{--            @dump($bacon)--}}

{{--            @dump($RMMSectionStarterCopy_content['main_service_content'])--}}
{{--            @dump($RMMSectionStarterCopy_content['main_service_sidebar'])--}}

            @dump($locations)

{{--            @dump($ancestors)--}}




            <div class="flex flex-col justify-center mx-auto bg-white w-[420px] rounded-1xl">
                <!-- img -->
                <img class="object-cover object-center w-[420px] rounded-t-12xl" src="{{$headerImage}}" />

                <div class="flex flex-col justify-center items-center p-4 text-siteBlack inner_wrapper"> <!-- Start of .inner_wrapper -->

                    @notempty($subHeader)
                    <{{$subHeaderElement}} class="subheader">{{$subHeader}}</{{$subHeaderElement}}>
                @endnotempty

                @notempty($header)
                <{{$headerElement}} class="header">{{$header}}</{{$headerElement}}>
            @endnotempty
            {{--  Location Links --}}
            @notempty($locations)
            <div class="flex flex-wrap justify-center content-center items-center links__wrapper bg-[green]">
                @foreach($locations as $location)

                    @notempty($location['link_url'])
                    <a href="{{$location['link_url']}}" class="flex text-center basis-1/2 align-center">{{$location['link_name']}} @svg('images/expertAir/icons_right_arrow_lg.svg', 'group-hover:filter-aqua hidden lg:inline',)</a>

                    @else

                        <span class="text-center basis-1/2"> {{$location['link_name']}}</span>
                        @endnotempty

                        @endforeach
            </div> {{--  end links__wrapper--}}


            @else

                @endnotempty
                {{--  End Location Links --}}

                <a href="#" class="button">View All Cities</a>

        </div> <!-- End of .inner_wrapper -->
    </div> <!-- End of .linkBoxs -->





        </div>  {{--        end content--}}



    </div>
</section>


{{--@include('dev.showAllAcfFields')--}}

<?php

$fields = get_fields(1875);

if ($fields) : ?>
<ul>
    <?php foreach ($fields as $name => $value) : ?>
    <li><b><?php echo $name; ?></b> <?php var_dump($value); ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
