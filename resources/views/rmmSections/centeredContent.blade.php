<section class="rmmsection to-the-edge my-halfMobileVGap lg:to-the-edge lg:my-halfDesktopVGap flex justify-center items-center relative place-items-center">
	<div class="flex justify-center items-center inner__wrapper bg-siteGrey shadow-common rounded-common ">
		<div class="content py-4 lg:py-6">

			@notempty($header)
			<h2 class="text-center text-primary mb-4 lg:mb-6">{{ $header }}</h2>
			@endnotempty

			@notempty($content)
				<div class="mainContent text-center lg:max-w-[500px] mb-4 lg:mb-6">
					@wpautokp($content)
				</div>
			@endnotempty

			@notempty($listItems)
			<ul class="listItems grid grid-cols-{{$listMobileColumns}} lg:grid-cols-{{$listDesktopColumns}} mb-4 lg:mb-6 lg:max-w-[500px]">
				@foreach($listItems as $item)

					@notempty($item['listItem_url'])
						<li class="list-marker-{{$listStyle}}">
							<a href="  {{$item['listItem_url']}}" class=""> {{$item['listItem_name']}}</a>
						</li>
					@else
						<li class="list-marker-{{$listStyle}}">
							<span class="">   {{$item['listItem_name']}}</span>
						</li>
					@endnotempty

				@endforeach
			</ul>
			@endnotempty

			@istrue($showCTA)
			<div class="cta w-full text-center">
				@include('fieldPartials.callNow')
			</div>
			@endistrue

		</div> {{-- END content--}}
	</div> {{--  END inner__wrapper--}}
</section>
