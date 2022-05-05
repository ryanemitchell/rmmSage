<section class="flex relative justify-center items-center place-items-center rmmsection to-the-edge my-halfMobileVGap mobile-to-the-edge lg:to-the-edge lg:my-halfDesktopVGap lg:mb-halfDesktopVGap">
	<div class="flex flex-row flex-col justify-center items-center w-full cursor-pointer lg:justify-center inner__wrapper service bg-siteGrey shadow-common rounded-common">
		<div class="flex flex-col justify-center items-center lg:py-12 lg:px-12 content">

		<h3 class="mb-6 lg:mb-8">
			You benefit when you join the Be Cool Club!
		</h3> {{--== End of .mainContent bg-blue ==--}}


		<ul class="grid grid-cols-1 lg:grid-cols-2 listItems list-marker-none">


			<li class="mb-4 list-marker-check">
				<span class="">You will receive $380 towards any annual accessory purchase - A great value and upgrade to your home!</span>
			</li>

			<li class="mb-4 list-marker-check">
				<span class="">You will receive $380 towards any annual accessory purchase - A great value and upgrade to your home!</span>
			</li>

			<li class="mb-4 list-marker-check">
				<span class="">You will receive $380 towards any annual accessory purchase - A great value and upgrade to your home!</span>
			</li>

			<li class="mb-4 list-marker-check">
				<span class="">You will receive $380 towards any annual accessory purchase - A great value and upgrade to your home!</span>
			</li>
			</ul>
			<ul class="grid hidden grid-cols-1 lg:grid lg:grid-cols-2 listItems hiddenList">

				<li class="mb-4 list-marker-check">
					<span class="">You will receive $380 towards any annual accessory purchase - A great value and upgrade to your home!</span>
				</li>

				<li class="mb-4 list-marker-check">
					<span class="">You will receive $380 towards any annual accessory purchase - A great value and upgrade to your home!</span>
				</li>

				<li class="mb-4 list-marker-check">
					<span class="">You will receive $380 towards any annual accessory purchase - A great value and upgrade to your home!</span>
				</li>

				<li class="mb-4 list-marker-check">
					<span class="">You will receive $380 towards any annual accessory purchase - A great value and upgrade to your home!</span>
				</li>

			</ul>

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



		<style>
            .list-marker-none::marker {
                content: 'check';
            }


            .list-marker-dot::marker {
                content: 'dot';
            }

            .list-marker-check {
                padding-left: 1rem;
                list-style-position: outside;
                padding-right: 3rem;
	            margin-left: 3rem;
	            position: relative;
            }

            .list-marker-check::marker {
             content: '';
            }

            .list-marker-check::before {
	            display: block!important;
	            position: absolute;
	            left: -16px;
	            top: 4px;
                content: url('{{$imageAsset}}expertAir/icons_check.svg');
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



