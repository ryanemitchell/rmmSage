<section class=" flex relative justify-center items-center place-items-center bg-center bg-no-repeat bg-cover bg-siteBlack rmmsection page-header full-width-bound bg-geometricReversed">

	<div class="flex flex-col gap-8 justify-between items-center text-white lg:flex-row inner__wrapper">

		<div class="flex justify-center items-center pt-8 lg:w-1/2 col1 lg:py-[87px]">
			<div class="flex flex-col justify-center items-center content" data-aos="fade-right">
				<img src="{{$imageAsset}}/expertAir/icons_google_stars.png" alt="Google Reviews" class="mb-4 image" loading="lazy" height="45px" width="326px">

				<h2 class="text-center text-white lg:mb-8 max-w-[350px] lg:text-[32px] lg:leading-[36px]">{{$header}}</h2>
				<div class="hidden mb-4 lg:block cta grandChildren:self-start">
					<a href="/about-us/reviews" class="mb-2 btn btn-white-onDark">Read Reviews</a>
				</div>

			</div>
		</div>

		<div class="flex justify-center items-center lg:w-1/2 col2 mb">
			<div class="flex flex-col justify-center items-center content" data-aos="fade-left">
				<div class="reviewsWrapper lg:w-[400px]">
					@shortcode($reviewsShortcode)
				</div>

				<div class="mb-4 lg:hidden cta grandChildren:self-start">
					<a href="/about-us/reviews" class="mb-2 btn btn-white-onDark">Read Reviews</a>
				</div>

			</div>


		</div>

	</div>

</section>
