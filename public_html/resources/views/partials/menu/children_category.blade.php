<ul class="submenu">
    @foreach ($categories as $category)
        <li><a href="{{ route('product.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
    @endforeach
</ul>