@dump($sectionFields)

<section class="flex relative justify-center items-center place-items-center rmmsection to-the-edge my-halfMobileVGap mobile-to-the-edge lg:to-the-edge lg:my-halfDesktopVGap lg:mb-halfDesktopVGap">
	<div class="flex flex-row flex-col justify-center items-center w-full cursor-pointer lg:justify-center inner__wrapper service bg-siteGrey shadow-common rounded-common">
		<div class="flex flex-col justify-center items-center lg:py-12 lg:px-12 content">

			@notempty($header)
			<h3 class="mb-6 lg:mb-8">
				{{$header}}
			</h3> {{--== End of .mainContent bg-blue ==--}}
			@endnotempty

			@notempty($benefits)

			<ul class="grid grid-cols-1 lg:grid-cols-2 listItems list-marker-none">

		 @foreach($benefits as $item)

						<li class="mb-4 list-marker-check">
							<span class="">{{$item['title']}}</span>
						</li>

{{--	If more than 4 items, close the list and start a new one to hide them on mobile. Provide a toggle below the second list to display them. --}}
							@if (count($benefits) > 4)
								@if ($loop->iteration == 4)
									</ul>   {{--close the first list--}}

									<ul class="grid hidden grid-cols-1 lg:grid lg:grid-cols-2 listItems hiddenList">
								@endif
							@endif




			@endforeach

			</ul>
			{{--	If more than 4 items, provide toggle and the script for it to function. --}}
			@if (count($benefits) > 4)
				<div class="mb-8 lg:hidden btn" id="moreTrigger">More Benefits</div>


			<script>
                document.getElementById("moreTrigger").addEventListener('click', function() {
                    const hiddenListItems = document.querySelectorAll('.hiddenList');

                    hiddenListItems.forEach(item => {
                        slideToggle(item, 200);
                    });

                    const toggleText = document.getElementById("moreTrigger");
                    if (toggleText.innerHTML === "More Benefits") {
                        toggleText.innerHTML = "Close";
                    } else {
                        toggleText.innerHTML = "More Benefits";
                    }

                });
			</script>
			@endif



@endnotempty
		</div>
		{{--  END content--}}
	</div> {{--    END inner__wrapper--}}
</section>



