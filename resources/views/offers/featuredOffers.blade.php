<div class="offer bg-siteBlack shadow-common rounded-common">
	@notempty($offer->image)
	<div class="h-14 lg:h-[260px] h-[260px] w-full rounded-common bg-no-repeat bg-cover" style="background-image: url('{{$offer->image}}');"></div>
{{--	<img src="{{$offer->image}}" alt="photo" class="image" loading="auto" height="400px" width="400px">--}}
	@endnotempty
	<div class="p-4 lg:p-8 bg-siteBlack lg:h-[200px]">
	<div class="flex flex-col items-center justify-center inner__wrapper h-full justify-between"><!-- Start of .inner__wrapper -->
		<div class="flex flex-col items-center justify-center header"><!-- Start of .header -->
			<h2 class="text-center text-white lg:max-w-[70%] max-w-[100%]">{{$offer->title}}</h2>
			<div class="subtitle text-white">{{$offer->subTitle}}</div>
		</div><!-- End of .header -->
		<div class="flex flex-col items-center content text-white  mb-4 mt-4  lg:mt-0"><!-- Start of .content -->
			<span>	<?php echo $offer->cta ?></span>
		</div><!-- End of .content -->
		<div class="flex flex-col items-center footer"><!-- Start of .footer -->
			@notempty($offer->disclaimer)
			<div class="disclaimer text-white text-center">
				{{$offer->disclaimer}}
			</div>
			@endnotempty

			@notempty($offer->expirationText )
			<div class="expirationText text-white text-xs">
				{{$offer->expirationText}} {{$offer->expirationDisplay}}
			</div>
			@endnotempty
		</div><!-- End of .footer -->
	</div><!-- End of .inner__wrapper -->
	</div>
</div><!-- End of .offer -->
