<article @php(post_class('bg-white')) >
  <header>
     <h1 class="entry-title">
     {!! $title !!}
     </h1>

     @include('partials/entry-meta')
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>



{{--  @php(comments_template())--}}
</article>
