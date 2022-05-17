<div class="flex justify-center items-center inner__wrapper">
<div class="flex flex-col items-center pl-4 mt-6 lg:pl-0 lg:mt-6 content">
	@notempty($pageTitle)
	<h2 class="mb-6 text-white lg:text-center font-display text-mxl max-w-[400px] lg:text-dxl lg:mb-[12px] lg:max-w-[800px] pageTitle">
		{{$pageTitle}}
	</h2>
	@endnotempty

	<div class="flex lg:flex-col lg:items-center">
		<div class="inline mb-11 lg:block lg:order-2 lg:mb-8 ">
			@include('fieldPartials.pageHeaderBookNowOnDark')
		</div>

		<div class="inline mb-2 ml-2 lg:block lg:order-1 lg:mb-4 lg:ml-0 children:font-[24px]">
			@include('fieldPartials.pageHeaderCallNowOnDark')
		</div>
	</div>

</div>
</div>
