<section class="rmmsection splitPhotoContent {{$className}} {{$mobileDisplay}} {{$desktopDisplay}} bg-hulk-800 to-the-edge my-halfMobileVGap lg:to-the-edge lg:my-halfDesktopVGap flex justify-center items-center relative place-items-center">


	<div class="flex flex-col gap-8 justify-between items-center text-white lg:flex-row inner__wrapper bg-primary">

		<div class="flex justify-center items-center lg:w-1/2 col1">

			<div class="content">


				@notempty($image)

				<img src="{{$image}}" alt="{{$imageAlt}}" title="{{$imageTitle}}" height="{{$imageHeight}}" width="{{$imageWidth}}" loading="lazy"/>

				@endnotempty


			</div>
		</div>

		<div class="flex justify-center items-center lg:w-1/2 col2">
			<div class="content">
				@notempty($headerText)
				<{{$headerElement}} class="header">
				{{$headerText}}
			</{{$headerElement}}>
				@endnotempty

				@notempty($content)
			@wpautokp($content)

				@endnotempty

			@notempty($showCTA)
CTA GOES HERE!
			@endnotempty
			</div>
		</div>

	</div>






</section>

{{--@dump($DisplayGroup)--}}

{{--@dump($sectionGroup)--}}

{{--@dump($post)--}}
