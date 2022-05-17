<div class="mb-12 guarantees guaranteesFlat">

	<div class="flex flex-col lg:flex-row lg:gap-8 guaranteesList">

@notempty($guarantees)
		@foreach($guarantees as $guarantee)
			<div class="flex flex-col justify-center items-center mb-6 w-full lg:mb-0 guarantee last-of-type:mb-0">
				<img src="{{$guarantee['combo_image_with_alt_title']['image']['url']}}" alt="{{$guarantee['combo_image_with_alt_title']['alt']}}" title="{{$guarantee['combo_image_with_alt_title']['title']}}" class="self-center image lg:mb-4" loading="lazy">
				@notempty($guarantee['guarantee_name'])
				<h2 class="text-white text-[1.25rem] lg:text-[1.5rem]">{{$guarantee['guarantee_name']}}</h2>
				@endnotempty

				@notempty($guarantee['guarantee_description'])
				<div class="text-center w-[250px]">{{$guarantee['guarantee_description']}}</div>
				@endnotempty

			</div>
		@endforeach {{--  End foreach $guarantees as $guarantee --}}
		@else
			No guarantees!
			@endnotempty
	</div>

</div>
