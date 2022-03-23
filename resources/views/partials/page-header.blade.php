<div class="page-header">
  <h1>{!! $title !!}</h1>

  @if (is_front_page())
Front Page
    @elseif (is_404())
 404
    @endif

</div>
