{{--@dump($parentHeader)--}}
{{--@dump($parentMenu)--}}
<div class="flex flex-col justify-center items-center bg-no-repeat shadow-common rounded-common min-h-[240px] bg-siteGrey smallBox-bg lg:w-[420px] mx-2 lg-mx-0 mb-4">
	<div class="flex flex-row flex-col items-center px-4 pt-3 pb-3 w-full lg:justify-center lg:pt-6 lg:pb-6 content">
		@notempty($header)
		<h2 class="mb-4 font-bold lg:mb-6 font-display">{{$header}}</h2>
		@endnotempty




		@if($linksItems)
		<nav class="grid grid-cols-2 gap-y-2 gap-x-4 justify-between items-center mb-4 lg:mb-6 locationsNav" data-tw-selected="1651538726585">

			@foreach($linksItems as $item)
				@notempty($item['linkURL'])

				<a href="{{$item['linkURL']}}" class="flex items-center text-primary font-bold font-display">{{$item['linkName']}}</a>
				@else
			<span class="flex items-center text-primary font-bold font-display text-center">	{{$item['linkName']}}</span>

				@endnotempty

			@endforeach

		</nav>

			@elseif($parentMenu)


			{!! wp_nav_menu([
					'menu' => $parentMenu->term_id,
					'menu_class' => 'menu interior-menu',
					'container' => 'nav',
					'container_id' => 'services-navigation',
					'container_class' => 'services-navigation',
					'depth' => '1',
					'add_li_class'  => '',
				]) !!}




			@endif


@istrue($showCTA)
		<div class="cta grandChildren:self-start lg:mt-6">
			@include('fieldPartials.bookNow')
		</div>
		@endistrue
	</div>
</div>
