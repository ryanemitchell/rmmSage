<?php

// Get post's featured image URL - use default from settings if missing from post
if (has_post_thumbnail()) {
    $featuredImageUrl = get_the_post_thumbnail_url();
} else {
    if (get_field('field_site_settings_blog_default_featuredimage', 'option')) {
        $featuredImageUrl = get_field('field_site_settings_blog_default_featuredimage', 'option');
    } else {
        $featuredImageUrl = '';
    }
}
?>



<article @php(post_class('mb-6 flex siteBoxed')) >

  <div class="flex flex-col justify-center items-center w-full lg:flex-row innerWrapper bg-left bg-[length:300px_100%] rounded-mobileCommon lg:rounded-desktopCommon bg-no-repeat flex lg:justify-start">
    <div class="pb-4 pl-4 w-full bg-no-repeat bg-cover lg:pb-0 lg:w-1/3 lg:h-full bg-siteBlack col1 rounded-tl-common h-[214px] min-h-[200px] lg:rounded-tl-common lg:rounded-bl-common lg:w-[200px]" style='background-image: url("<?php echo $featuredImageUrl; ?>");'>
    </div>

    <div class="px-4 col2 lg:w-[620px] lg:ml-halfDesktopVGap">
      <header>
        <h2 class="break-words entry-title">
          <a href="{{ get_permalink() }}">
            {!! get_the_title() !!}
          </a>
        </h2>

        @include('partials/entry-meta')
      </header>

      <div class="break-words entry-summary">
        @php(the_excerpt())
      </div>
    </div>
</article>
