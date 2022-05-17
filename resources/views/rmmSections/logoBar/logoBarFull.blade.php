<div class="mt-8 mb-12 lg:my-8 logoBar logoBarFull">

	<div class="lg:flex lg:justify-between carousel disableOnDesktop"
	     data-flickity='{ "watchCSS": true, "freeScroll": false, "prevNextButtons": false, "fade": true }'>
		@notempty($logos)
		@foreach($logos as $logo)
			<div class="flex justify-center w-full lg:w-auto lg:h-28 carousel-cell h-[115px]" data-aos="fade-up">
			<img src="{{$logo['combo_image_with_alt_title']['image']['url']}}" alt="{{$logo['combo_image_with_alt_title']['alt']}}" title="{{$logo['combo_image_with_alt_title']['title']}}" class="self-center image" loading="lazy">
			</div>
		@endforeach
		@endnotempty($logos)

	</div>

</div>


{{--::after:content-['flickity'] ::after-hidden lg:flex lg::after:content-['']--}}
