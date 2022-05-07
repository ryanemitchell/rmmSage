<div class="flex flex-col justify-center items-center bg-no-repeat shadow-common rounded-common min-h-[240px] bg-siteGrey smallBox-bg lg:w-[420px] mx-2 lg-mx-0 mb-4">
	<div class="w-full imageWrapper"> <!-- Start of .imageWrapper -->
		@notempty($image)
		<img src="{{$image['sizes']['shared-sidebarHeader-image']}}" alt="{{$imageALT}}" title="{{$imageTitle}}"class="image rounded-common" loading="lazy" height="{{$image['sizes']['shared-sidebarHeader-image-height']}}px" width="{{$image['sizes']['shared-sidebarHeader-image-width']}}px">
		@endnotempty


{{--		shared-sidebarHeader-image--}}

	</div> <!-- End of .imageWrapper -->

	<div class="flex flex-row flex-col items-center px-4 pt-3 pb-3 w-full lg:justify-center lg:pt-6 lg:pb-6 content">
		@notempty($tagline)
		<div class="tagline">{{$tagline}}</div>
		@endnotempty

		@notempty($header)
		<h2 class="mb-4 font-bold lg:mb-6 font-display">{{$header}}</h2>
		@endnotempty

@notempty($linksItems)
		<nav class="grid grid-cols-2 gap-y-2 gap-x-4 justify-center mb-4 lg:mb-6 locationsNav" data-tw-selected="1651538726585">

			@foreach($linksItems as $item)
				@notempty($item['linkURL'])

				<a href="{{$item['linkURL']}}" class="flex items-center text-siteBlack">{{$item['linkName']}} <!--?xml version="1.0" encoding="UTF-8"?-->
					<svg class="ml-2 linkIndicator" width="9px" height="13px" viewBox="0 0 9 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<title>icon / right_arrow_sm</title>
						<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g id="expert_air_assets-board" transform="translate(-85.000000, -662.000000)" fill="#00C295" fill-rule="nonzero">
								<g id="icon-/-right_arrow_sm" transform="translate(85.000000, 662.000000)">
									<polygon id="Path" points="4.11128599 0 0.338302009 0 5.39700028 6.33853642 0 13 3.77298398 13 7.52347005 8.24191563 7.52347005 8.24191563 9 6.36835627"></polygon>
								</g>
							</g>
						</g>
					</svg></a>
				@else
			<span class="flex items-center text-siteBlack">	{{$item['linkName']}}</span>

				@endnotempty

			@endforeach

		</nav>
		@endnotempty


@istrue($showCTA)
		<div class="cta grandChildren:self-start">
			<a href="#locations" class="btn btn-grad">View All Cities</a>
		</div>
		@endistrue
	</div>
</div>
