<ul class="submenu">
    @foreach ($tricks as $trick)
        <li><a href="{{ route('trick.show', [$trick->slug]) }}">{{ $trick->name }}</a></li>
    @endforeach
</ul>