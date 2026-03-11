@if ($paginator->hasPages())
<div class="pagination-wrap">
    <nav aria-label="Page navigation">
        <ul class="pagination">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item page-item-control disabled">
                    <span class="page-link" aria-label="Previous">
                        <span class="icon" aria-hidden="true"></span>
                    </span>
                </li>
            @else
                <li class="page-item page-item-control">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                        <span class="" aria-hidden="true">&larr;</span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item page-item-control">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <span class="" aria-hidden="true">&rarr;</span>
                    </a>
                </li>
            @else
                <li class="page-item page-item-control disabled">
                    <span class="page-link" aria-label="Next">
                        <span class="icon" aria-hidden="true"></span>
                    </span>
                </li>
            @endif

        </ul>
    </nav>
</div>
@endif
