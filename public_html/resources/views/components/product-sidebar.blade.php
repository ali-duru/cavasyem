<ul class="list">
    @foreach ($categories as $category)
        <li class="list__item">
            <a class="list__item__link" href="{{ route('product.index', ['category' => $category->slug]) }}">{{ $category->name }}</a>
            {{-- <ul>
                @foreach ($category->sub_categories as $sub_category)
                    <li>
                        <a href="{{ route('product.show', [$sub_category->category->slug, $sub_category->slug]) }}">{{ $sub_category->name }}</a>
                        <span>({{ count($sub_category->products) }})</span>
                    </li>
                @endforeach
            </ul> --}}
        </li>
    @endforeach
</ul>