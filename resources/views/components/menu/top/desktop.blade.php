<!-- BEGIN: Top Menu -->
<nav class="top-nav">
    <ul>
        @foreach ($menus as $menu)
            <li>
                <a href="{{ $menu->url == "#" ? $menu->url : route($menu->url) }}" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="{{ $menu->icono }}"></i> </div>
                    <div class="top-menu__title"> {{ $menu->nombre }}
                        @if ($menu->sub_menus_cantidad > 0)
                            <div class="top-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        @endif
                    </div>
                </a>

                @if ($menu->sub_menus_cantidad > 0)
                    <ul class="">
                        @foreach ($menu->sub_menus as $sub_menu)
                            <li>
                                <a href="{{ $sub_menu->url == "#" ? $sub_menu->url : route($sub_menu->url) }}" class="top-menu">
                                    <div class="top-menu__icon"> <i data-feather="{{ $sub_menu->icono }}"></i> </div>
                                    <div class="top-menu__title"> {{ $sub_menu->nombre }}
                                        @if ($sub_menu->sub_menus_cantidad > 0)
                                            <div class="top-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                        @endif
                                    </div>
                                </a>
                                <ul>
                                    @foreach ($sub_menu->sub_menus as $sub_sub_menu)
                                        <li>
                                            <a href="{{ $sub_sub_menu->url == "#" ? $sub_sub_menu->url : route($sub_sub_menu->url) }}" class="top-menu">
                                                <div class="top-menu__icon"> <i data-feather="{{ $sub_sub_menu->icono }}"></i> </div>
                                                <div class="top-menu__title"> {{ $sub_sub_menu->nombre }}
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</nav>
<!-- END: Top Menu -->
