<ul>
    @foreach($items as $menu_item)
        <li class="{{ Nav::isResource($menu_item->link()) }}" style="padding-bottom: 6px">
            <a href="{{ route('index') }}">{{ $menu_item->title }}</a>
        </li>
    @endforeach
</ul>