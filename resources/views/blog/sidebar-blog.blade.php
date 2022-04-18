{{-- Style with SCSS intead of Tailwind to provide consistant styling to widgets--}}

<div class='hidden lg:block'>
  @include('blog.category-switcher')
</div>

<?php dynamic_sidebar('sidebar-blog'); ?>
