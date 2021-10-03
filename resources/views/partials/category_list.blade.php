<li><a href="/blog/{{ $item->full_url }}">{{ $item->name }}</a></li>
@if (!empty($item->children))
    <ul>
        @foreach($item->children as $item)
            @include('partials.category_list', compact($item))
        @endforeach
    </ul>
@endif