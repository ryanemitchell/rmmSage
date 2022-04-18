@if ($pagi->hasPages())
  <nav class="flex items-center my-8" role="navigation" aria-label="pagination">
    @if (! $pagi->onFirstPage())
      <a
        href="{{ $pagi->previousPageUrl() }}"
        rel="prev"
        aria-label="Previous Page"
        class="py-1 px-4 mr-3 text-white bg-black rounded-sm border hover:text-white hover:bg-blue-600"
      >&larr; Previous</a>
    @endif

    <ul class="flex">
      @foreach ($pagi->elements() as $element)
        @if (is_string($element))
          <li class="disabled" aria-disabled="true">
            <span class="py-1 mr-3">&hellip;</span>
          </li>
        @endif

        @if (is_array($element))
          @foreach ($element as $page => $url)
            <li>
              @if ($page == $pagi->currentPage())
                <span
                  class="py-1 px-4 mr-3 text-white bg-blue-600 rounded-sm border"
                  aria-current="page"
                >{{ $page }}</span>
              @else
                <a
                  href="{{ $url }}"
                  class="py-1 px-4 mr-3 rounded-sm  bg-black text-white border hover:text-white hover:bg-blue-600"
                >{{ $page }}</a>
              @endif
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>

    @if ($pagi->hasMorePages())
      <a
        href="{{ $pagi->nextPageUrl() }}"
        rel="next"
        aria-label="Next Page"
        class="py-1 px-4 mr-3 rounded-sm bg-black text-white border hover:text-white hover:bg-blue-600"
      >Next &rarr;</a>
    @endif
  </nav>
@endif
