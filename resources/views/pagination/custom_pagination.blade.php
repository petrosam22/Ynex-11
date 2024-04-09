<nav>
    <ul class="ti-pagination sm:justify-end justify-center mb-0">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Previous</a></li>
        @else
            <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link px-3 py-[0.375rem]">{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item"><a class="page-link active px-3 py-[0.375rem]" href="javascript:void(0);">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="{{ $paginator->nextPageUrl() }}">Next</a></li>
        @else
            <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a></li>
        @endif
    </ul>
</nav>