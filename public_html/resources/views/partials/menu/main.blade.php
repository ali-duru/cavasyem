<ul>
    @foreach($items as $menu_item)
        <li class="{{ Nav::isResource($menu_item->link()) }} @if($menu_item->title == 'Ürünler') has-submenu @endif">
            <a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
            @includewhen(sizeof($menu_item->children),'partials.menu.children', ['items' => $menu_item->children])
            @includeWhen($menu_item->title == 'Ürünler', 'partials.menu.children_category')
            @includeWhen($menu_item->title == 'PÜF Noktalar', 'partials.menu.children_trick')
        </li>
    @endforeach
    <li class="li-btn">
        <a href="#" target="_blank"><i class="fontello-youtube"></i></a>
    </li>
    <li class="li-btn">
        <a href="#" target="_blank"><i class="fontello-facebook"></i></a>
    </li>
    <li class="li-btn">
        <a href="tel:+905433045120" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </li>
</ul>