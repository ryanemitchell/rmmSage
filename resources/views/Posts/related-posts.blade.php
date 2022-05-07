@dump($testies)

@notempty($relatedPosts)
<div class="flex flex-col justify-center w-full md:flex-row featuredPosts">

	@foreach($relatedPosts as $relatedPost)

			<a href="@permalink($relatedPost->ID)" class="flex items-center mr-9 font-bold border-r-2 border-black only:border-none only:mr-0 last-of-type:border-none last-of-type:mr-0">
				<div class="postTitle max-w-[100px]">{{$relatedPost->post_title}}</div>
				<div class="mr-10 postTitle">^</div>
			</a>

	@endforeach
</div> <!-- End of .relatedPosts -->


@else
	There are no Related Posts
	@endnotempty
