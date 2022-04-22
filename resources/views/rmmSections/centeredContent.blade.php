<section
		class="rmmsection {{$className}} {{$mobileDisplay}} {{$desktopDisplay}} bg-hulk-800 to-the-edge my-halfMobileVGap lg:to-the-edge lg:my-halfDesktopVGap flex justify-center items-center relative place-items-center">
	<div class="flex justify-center items-center text-white inner__wrapper bg-primary">
		<div class="content">
			ClassName: {{$className}} <br>
			Mobile Display: {{$mobileDisplay}} <br>
			Desktop Display: {{$desktopDisplay}} <br>

			@notempty($headerText)
			<{{$headerElement}} class
			='mainHeader'>
			{{$headerText}}
		</{{$headerElement}}>
		@endnotempty

		<div class="mainContent bg-blue"> <!-- Start of .mainContent bg-blue -->
			@notempty($content)
			@wpautokp($content)
			@endnotempty
		</div> <!-- End of .mainContent bg-blue -->

		<div class="cta bg-blue">
			@notempty($showCTA)
			Main CTA GOES HERE!
			@endnotempty
		</div>


		@notempty($listItems)
		<ul class="listItems grid grid-cols-{{$listMobileColumns}} lg:grid-cols-{{$listDesktopColumns}}">
			@foreach($listItems as $item)

				@notempty($item['listItem_url'])
				<li class="list-marker-{{$listStyle}}">
					<a href="  {{$item['listItem_url']}}" class=""> {{$item['listItem_name']}}</a>
				</li>
				@else
					<li class="list-marker-{{$listStyle}}">
						<span class="bg-[purple]">   {{$item['listItem_name']}}</span>
					</li>
					@endnotempty


					@endforeach
		</ul>
		@endnotempty

		<style>
            .list-marker-none::marker {
                content: 'check';
            }


            .list-marker-dot::marker {
                content: 'dot';
            }

            .list-marker-check {
                padding-left: 1rem;
            }


            .list-marker-check::marker {
                content: url('{{$imageAsset}}expertAir/icons_check.svg');
                padding-right: 3rem;
            }

            .list-marker-arrow::marker {
                content: 'arrow';
            }

            .list-marker-arrowAfter::after {
                content: 'arrowAfter';
            }

            .list-marker-marker::marker {
                content: 'marker';
            }

            .list-marker-marker::marker {
                content: 'disc';
            }

            .list-marker-circle::marker {
                content: 'circle';
            }

            .list-marker-square::marker {
                content: 'square';
            }


		</style>


	</div>
	{{--  END content--}}
	</div> {{--    END inner__wrapper--}}
</section>


{{--<div class="devBox mx-auto flex w-11/12 flex-col justify-center bg-white rounded-sm shadow-sm shadow-slate-300/60 p-2">--}}
{{--	<h2>This Sections Fields</h2>--}}
{{--	@dump($sectionGroup)--}}
{{--	<br>--}}
{{--	<hr>--}}

{{--	<h2>This Sections Composer Fields</h2>--}}
{{--	@dump($thisDump)--}}
{{--	<br>--}}
{{--	<hr>--}}

{{--	--}}{{--    @include('dev.showAllPageFields')--}}
{{--	--}}{{--    @include('dev.showAllAcfFields')--}}

{{--</div>--}}


<?php
//
//$groups = acf_get_field_groups();
//foreach ( $groups as $group ) {
//	$fields = acf_get_fields( $group );
//	if ( $fields ) {
//		foreach ( $fields as $field ) {
//			var_dump( $field );
//		}
//	}
//}?>
