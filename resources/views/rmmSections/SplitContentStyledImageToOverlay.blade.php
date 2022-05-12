<section
		class="@notempty($sectionClasses){{$sectionClasses}}@endnotempty relative justify-center items-center place-items-center rmmsection full-width to-the-edge">
	<div class="flex flex-col justify-start items-center text-white lg:flex-row inner__wrapper bg-siteBlack">

		<div class="flex order-2 justify-center items-center content__wrapper lg:order1">
			<div class="image hasDarkOverlay lg:!bg-none bg-cover bg-no-repeat"
			     @notempty($image)style="background-image:url({{$image['url']}})"@endnotempty>
				<div class="flex flex-col justify-center items-center py-6 px-4 lg:py-0 lg:px-0 content text-siteWhite"
				     data-aos="fade-right">
					@svg('images/expertAir/icons_24h.svg', 'icon lg:mb-4 mb-2')
					@notempty($header)
					<h2 class="mb-4 lg:mb-4 text-siteWhite">{{$header}}</h2>
					@endnotempty

					@notempty($content)
					<div class="mb-4 text-left lg:mb-4 lg:text-center lg:max-w-[400px]">
						@wpautokp($content)
					</div>
					@endnotempty

					@istrue($showCTA)
					<div class="cta grandChildren:self-start">
						@include('fieldPartials.callNowOnDark')
					</div>
					@endistrue
				</div>
			</div>
		</div>

		@notempty($image)
		<div class="hidden order-1 lg:block lg:order-2 content-edge__wrapper bg-siteBlack">
			<img src="{{$image['url']}}" alt="{{$imageALT}}" title="{{$imageTitle}}" class="image lg:clipLeftArrow"
			     loading="lazy" height="{{$image['height']}}px" width="{{$image['width']}}px" data-aos="fade-left">
		</div>
		@endnotempty

	</div>
</section>
