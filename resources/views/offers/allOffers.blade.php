<div class="p-4 offer lg:p-8 bg-siteBlack shadow-common">
	<div class="flex flex-col items-center justify-between inner__wrapper h-full"><!-- Start of .inner__wrapper -->
		<div class="flex flex-col items-center justify-center header"><!-- Start of .header -->
			<h2 class="text-center text-white lg:max-w-[70%]">{{$offer->title}}</h2>
			<div class="subtitle text-white">{{$offer->subTitle}}</div>
		</div><!-- End of .header -->
		<div class="flex flex-col items-center content text-white my-4"><!-- Start of .content -->
			<?php echo $offer->content ?>


		</div><!-- End of .content -->
		<div class="flex flex-col items-center cta text-white mb-4"><!-- Start of .content -->

			<?php echo $offer->cta ?>

		</div><!-- End of .content -->
		<div class="flex flex-col items-center footer"><!-- Start of .footer -->
			@notempty($offer->disclaimer)
			<div class="disclaimer text-white text-center text-xs">
				{{$offer->disclaimer}}
			</div>
			@endnotempty

			@notempty($offer->expirationText )
			<div class="expirationText text-white text-center text-xs">
				{{$offer->expirationText}} {{$offer->expirationDisplay}}
			</div>
			@endnotempty
		</div><!-- End of .footer -->
	</div><!-- End of .inner__wrapper -->
</div><!-- End of .offer -->
