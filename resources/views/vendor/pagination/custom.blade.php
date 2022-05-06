@if($paginator->hasPage)
    <ul class="pagination">
        @if ($paginator->onFirstPage())
        @else
            <li class="page-item"><a class="page-link" href="{{$paginator->previousPageUrl()}}" rel="prev"><i class="fas-fa-arrow-left"></i></a>
        @endif
        @foreach($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{$element}}</span><i class="fas-fa-arrow-left"></i></li>

            @endif

            @if (is_array($element))
            @foreach ($element as $page =>$url )
                @if ($page==$paginator->currentPage())
                <li class="page-item active my-active"><span class="page-link">{{$page}}</span></li>
                @else


                <li class="page-item"><a class="page-link" href="{{$url}}">{{$page}}</a></li>
                @endif
            @endforeach
            @if ($paginator->hasMorePAges())

            @endif

            @endif

    </ul>
@endif
