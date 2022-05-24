<div class="offer bg-siteBlack shadow-common rounded-common">
	@notempty($offer->image)
	<div class="h-14 lg:h-[200px] w-full rounded-common bg-no-repeat bg-cover" style="background-image: url('{{$offer->image}}');"></div>
{{--	<img src="{{$offer->image}}" alt="photo" class="image" loading="auto" height="400px" width="400px">--}}
	@endnotempty
	<div class="p-4 p-8 bg-siteBlack">
	<div class="flex flex-col items-center justify-center inner__wrapper"><!-- Start of .inner__wrapper -->
		<div class="flex flex-col items-center justify-center header"><!-- Start of .header -->
			<h2 class="text-center text-white">{{$offer->title}}</h2>
			<div class="subtitle text-white">{{$offer->subTitle}}</div>
		</div><!-- End of .header -->
		<div class="flex flex-col items-center content text-white  mb-4"><!-- Start of .content -->
			<span> @wpautokp($offer->cta)</span>
		</div><!-- End of .content -->
		<div class="flex flex-col items-center footer"><!-- Start of .footer -->
			@notempty($offer->disclaimer)
			<div class="disclaimer text-white text-center">
				{{$offer->disclaimer}}
			</div>
			@endnotempty

			@notempty($offer->expirationText )
			<div class="expirationText text-white">
				{{$offer->expirationText}} {{$offer->expirationDisplay}}
			</div>
			@endnotempty
		</div><!-- End of .footer -->
	</div><!-- End of .inner__wrapper -->
	</div>
</div><!-- End of .offer -->
