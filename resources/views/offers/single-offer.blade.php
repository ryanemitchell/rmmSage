<div class="p-4 offer">
	<div class="flex flex-col items-center p-8 bg-gray-400 inner__wrapper"><!-- Start of .inner__wrapper -->
		<div class="flex flex-col items-center header"><!-- Start of .header -->
			<h2>{{$offer->title}}</h2>
			<div class="subtitle">{{$offer->subTitle}}</div>
		</div><!-- End of .header -->
		<div class="flex flex-col items-center content"><!-- Start of .content -->
			<span> @wpautokp($offer->cta)</span>
			{{$offer->id}}
			@notempty($offer->image)
			<img src="{{$offer->image}}" alt="photo" class="image" loading="auto" height="400px" width="400px">
			@endnotempty

		</div><!-- End of .content -->
		<div class="flex flex-col items-center footer"><!-- Start of .footer -->
			@notempty($offer->disclaimer)
			<div class="disclaimer">
				{{$offer->disclaimer}}
			</div>
			@endnotempty

			@notempty($offer->expirationText )
			<div class="expirationText">
				{{$offer->expirationText}} :   {{$offer->expirationDisplay}} :  {{$offer->expiration}}
			</div>
			@endnotempty
		</div><!-- End of .footer -->
	</div><!-- End of .inner__wrapper -->
</div><!-- End of .offer -->
