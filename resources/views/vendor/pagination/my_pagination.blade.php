@if ($paginator->hasPages())

        <div class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a class="disabled" aria-disabled="true"><span>{{ $element }}</span></a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="active" aria-current="page"><span class="pagination__item active">{{ $page }}</span></a>
                        @else
                            <a class="pagination__item" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
            @else
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            @endif
        </div>

@endif
