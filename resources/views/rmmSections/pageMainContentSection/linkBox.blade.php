<div class="flex flex-col justify-center mx-auto bg-white w-[420px] rounded-1xl">
	<!-- img -->
	<img class="object-cover object-center w-[420px] rounded-t-12xl" src="{{$headerImage}}" />

	<div class="flex flex-col justify-center items-center p-4 text-siteBlack inner_wrapper"> <!-- Start of .inner_wrapper -->

		@notempty($subHeader)
		<{{$subHeaderElement}} class="subheader">{{$subHeader}}</{{$subHeaderElement}}>
	@endnotempty

	@notempty($header)
	<{{$headerElement}} class="header">{{$header}}</{{$headerElement}}>
@endnotempty
{{--  Location Links --}}
@notempty($locations)
<div class="flex flex-wrap justify-center content-center items-center links__wrapper bg-[green]">
	@foreach($locations as $location)

		@notempty($location['link_url'])
		<a href="{{$location['link_url']}}" class="flex text-center basis-1/2 align-center">{{$location['link_name']}} @svg('images/expertAir/icons_right_arrow_lg.svg', 'group-hover:filter-aqua hidden lg:inline',)</a>

		@else

			<span class="text-center basis-1/2"> {{$location['link_name']}}</span>
			@endnotempty

			@endforeach
</div> {{--  end links__wrapper--}}


@else

	@endnotempty
	{{--  End Location Links --}}

	<a href="#" class="button">View All Cities</a>

	</div> <!-- End of .inner_wrapper -->
	</div> <!-- End of .linkBoxs -->
