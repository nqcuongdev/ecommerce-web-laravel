@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li>
                <a href="#" aria-label="@lang('pagination.previous')"><i class="fa fa-angle-left"></i></a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')"><i class="fa fa-angle-left"></i></a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li>
                            <a class="active" href="#">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')"><i class="fa fa-angle-right"></i></a>
            </li>
        @else
            <li>
                <a href="#" aria-label="@lang('pagination.next')"><i class="fa fa-angle-right"></i></a>
            </li>
        @endif
    </ul>
@endif
