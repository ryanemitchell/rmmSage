<section  class="centeredMenu to-the-edge bg-contain my-halfMobileVGap to-the-edge lg:my-halfDesktopVGap  flex justify-center items-center relative place-items-center mobile-full-width">
		<div class="flex justify-center items-center place-items-center inner__wrapper ">
			<div class="flex flex-col place-items-center content">
@notempty($header)
<h2 class="mb-4 lg:mb-6">{{ $header }}</h2>
@endnotempty
@notempty($relatedPosts)
<div class="flex flex-col justify-center w-full md:flex-row featuredPosts text-center w-full">

		@foreach($relatedPosts as $relatedPost)

				<a href="@permalink($relatedPost->ID)" class="flex items-center mr-9 font-bold lg:border-r-2 lg:border-secondary only:border-none only:mr-0 last-of-type:border-none last-of-type:mr-0 lg:h-12 font-display">
					<div class="postTitle max-w-[200px]">{{$relatedPost->post_title}}</div>
					<div class="mr-10 postTitle">@svg('images/expertAir/arrow-small-green.svg', 'linkIndicator ml-2')</div>
				</a>

		@endforeach


</div> <!-- End of .relatedPosts -->
@endnotempty
			</div>
		</div>


</section>
