<?php

// Get post's featured image URL - use default from settings if missing from post
if (has_post_thumbnail()) {
    $featuredImageUrl .= get_the_post_thumbnail_url();
} else {
    if (get_field('default_featured_image', 'option')) {
        $featuredImageUrl = get_field('default_featured_image', 'option');
    } else {
        $featuredImageUrl = '';
    }
}
?>



<article @php(post_class())>

  <div class="flex flex-col justify-center items-center w-full lg:flex-row innerWrapper">
    <div class="pb-4 pl-4 lg:pb-0 lg:w-1/3 col1" style='background-image: url("<?php echo $featuredImageUrl; ?>");'>
      <?php
      //    $thumbnail_id = get_post_thumbnail_id( $post->ID );
      //    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
      ?>
    </div>

    <div class="lg:w-2/3 col2">
      <header>
        <h2 class="entry-title">
          <a href="{{ get_permalink() }}">
            {!! $title !!}
          </a>
        </h2>

        @include('partials/entry-meta')
      </header>

      <div class="entry-summary">
        @php(the_excerpt())
      </div>
    </div>
</article>
