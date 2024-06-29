{{-- resources/views/partials/menu-item.blade.php --}}
<li id="menu-item-{{ $item->id }}" class="menu-item {{ isset($item->children) ? 'menu-item-has-children animated-submenu' : '' }}" role="none">
    <a href="{{ $item->url }}" class="ct-menu-link" role="menuitem">{{ $item->title }}</a>

    @if (isset($item->children))
        <button class="ct-toggle-dropdown-desktop-ghost" aria-label="Expand dropdown menu" aria-haspopup="true" aria-expanded="false"></button>
        <ul class="sub-menu" role="menu">
            @foreach ($item->children as $child)
                @include('partials.menu-item', ['item' => $child])
            @endforeach
        </ul>
    @endif
</li>
