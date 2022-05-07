<div class="sidebarBoxSinglePromotion flex flex-col justify-center items-center shadow-common rounded-common min-h-[240px] bg-siteBlack smallBox-bg   text-siteWhite lg:w-[420px] mx-2 lg-mx-0 mb-4">

	@notempty($singlePromoImage)
	<div class="w-full imageWrapper flex justify-center">
		<img src="{{$singlePromoImage['url']}}" alt="{{$singlePromoImageALT}}" title="{{$singlePromoImageTitle}}" class="image rounded-common" loading="lazy" height="{{$singlePromoImage['height']}}px" width="{{$singlePromoImage['width']}}px">
	</div>
	@endnotempty

	@notempty($singlePromoHeader)
	<h2 class="mb-4 font-bold lg:mb-6 font-display text-siteWhite">{{$singlePromoHeader}}</h2>
	@endnotempty

	@istrue($singlePromoShowCTA)
	<div class="cta grandChildren:self-start">
		@include('fieldPartials.callNowOnDark')
	</div>
	@endistrue
</div>
