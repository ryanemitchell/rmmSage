<section
		class="flex relative justify-center items-center place-items-center rmmsection full-width to-the-edge lg:my-halfDesktopVGap mb-4">
	<div class="flex flex-col justify-start items-center text-white lg:flex-row inner__wrapper bg-siteBlack">

		<div class="content-edge__wrapper bg-siteBlack">
			{{--			<img src="{{$imageAsset}}/expertAir/tech1_guarantees.jpg" alt="Expert Air Truck" class="image clipDownArrow lg:clipRightArrow" loading="lazy" height="484px" width="auto">--}}
			{{--			<img src="https://unsplash.it/480/480?random" alt="photo" class="image clipDownArrow lg:clipRightArrow" loading="auto" data-aos="fade-right">--}}

			@notempty($image)
			<img src="{{$image['url']}}" alt="{{$imageALT}}" title="{{$imageTitle}}"
			     class="image clipDownArrow lg:clipRightArrow" loading="lazy" height="{{$image['height']}}px"
			     width="{{$image['width']}}px">
			@endnotempty

		</div>


		<div class="flex justify-center items-center content__wrapper">
			<div class="flex flex-col justify-center items-center py-6 px-4 lg:py-0 lg:py-14 lg:px-0 content text-siteWhite"
			     data-aos="fade-left">
				@notempty($tagline)
				<div class="tagline text-secondaryOnDark mb-2 lg:mb-1">{{$tagline}}</div>
				@endnotempty

				@notempty($header)
				<h2 class="largeHeader mb-6 text-white lg:mb-8 text-center">{{$header}}</h2>
				@endnotempty

				@notempty($highlights)
				<div class="mb-6 beCool lg:mb-12">

					<div class="flex flex-col lg:flex-row lg:gap-12 beCoolList">

						@foreach($highlights as $item)
							<div class="flex flex-col justify-center items-center mb-6 w-full lg:mb-0 guarantee last-of-type:mb-0">
								@notempty($item['combo_image_with_alt_title']['image'])
								<div class="iconWrapper mb-2">
									<img src="{{$item['combo_image_with_alt_title']['image']['url']}}"
									     alt="{{$item['combo_image_with_alt_title']['alt']}}"
									     title="{{$item['combo_image_with_alt_title']['title']}}" class=""
									     loading="lazy"
									     height="{{$item['combo_image_with_alt_title']['image']['height']}}px"
									     width="{{$item['combo_image_with_alt_title']['image']['width']}}px">
								</div>
								@endnotempty

								@notempty($item['title'])
								<h3 class="text-white text-center whitespace-no-wrap w-[240px] text-[20px] lg:text-[24px]">{{$item['title']}}</h3>
								@endnotempty

								@notempty($item['description'])
								<div class="text-center w-[220px]">{{$item['description']}}</div>
								@endnotempty
							</div>

						@endforeach


					</div>

				</div>
				@endnotempty


				@istrue($showCTA)
				<div class="mb-2 lg:mb-0">


				<span class="flex flex-col callnow self-center">

        <a href="tel:{{$primaryPhoneNumber}}" class="hidden mb-4 lg:inline callNow group text-[20px]">
            <span class="font-bold text-siteWhite font-display">Save Money and Join Now!</span>&nbsp;<span
			        class="font-bold text-siteWhite group-hover:text-secondaryOnDark">{{$primaryPhoneNumberDisplay}}</span>
        </a>
  <div class="mb-4 lg:hidden font-display font-bold text-[20px] self-center">Save Money and Join Now!</div>
        <a href="tel:{{$primaryPhoneNumber}}" class="mb-2 lg:hidden btn btn-grad-onDark self-center">Call Now</a>


</span>

				</div>
				@endistrue
			</div>
		</div>


	</div>
</section>
