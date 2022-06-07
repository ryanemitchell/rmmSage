<section class="flex relative justify-center items-center place-items-center bg-center bg-no-repeat bg-cover bg-siteBlack rmmsection page-header full-width-bound bg-home-hero-mobile mt-[-91px] pt-[120px] lg:pt-[171px] lg:bg-home-hero ">
{{--	<div class="flex justify-center items-center text-white inner__wrapper">--}}

		@if (is_front_page())
			@include('sections.pageHeaders.homePageHeader')
		@elseif (is_home())
			@include('sections.pageHeaders.blogHomePageHeader')
		@elseif (is_404())
			@include('sections.pageHeaders.notFoundPageHeader')
		@elseif (is_page_template('template-service-page.blade.php'))
			@include('sections.pageHeaders.servicePageHeader')
		@elseif (is_category())
			@include('sections.pageHeaders.blogCategoryPageHeader')
		@elseif (is_single())
			@include('sections.pageHeaders.blogPostPageHeader')
		@elseif (is_page(27))
		@include('sections.pageHeaders.financePageHeader')
		@else
			@include('sections.pageHeaders.defaultPageHeader')
		@endif
{{--	</div>--}}
</section>
