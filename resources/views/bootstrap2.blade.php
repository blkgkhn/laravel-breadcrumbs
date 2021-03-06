@unless ($breadcrumbs->isEmpty())

    <ul class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($loop->last)

                <li class="active">
                    {{ $breadcrumb->title }}
                </li>

            @elseif ($breadcrumb->url)

                <li>
                    <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                    <span class="divider">/</span>
                </li>

            @else

                {{-- Using .active to give it the right colour (grey by default) --}}
                <li class="active">
                    {{ $breadcrumb->title }}
                    <span class="divider">/</span>
                </li>

            @endif
        @endforeach
    </ul>

@endunless
