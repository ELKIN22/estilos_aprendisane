<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Logo de {{ config('app.name') }}" class="w-6" src="{{ global_asset('template/images/logo.svg') }}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>

    <ul class="border-t border-theme-29 py-5" style="display: none">
        @foreach ($menus as $menu)
            <li>
                <a href="{{ $menu->url == "#" ? $menu->url : route($menu->url) }}" class="menu">
                    <div class="menu__icon"> <i data-feather="{{ $menu->icono }}"></i></div>
                    <div class="menu__title">
                        {{ $menu->nombre }}
                        @if ($menu->sub_menus_cantidad > 0)
                            <i data-feather="chevron-down" class="menu__sub-icon"></i>
                        @endif
                    </div>
                </a>

                @if ($menu->sub_menus_cantidad > 0)
                    <ul class="">
                        @foreach ($menu->sub_menus as $sub_menu)
                            <li>
                                <a href="{{ $sub_menu->url == "#" ? $sub_menu->url : route($sub_menu->url) }}" class="menu">
                                    <div class="menu__icon"> <i data-feather="{{ $sub_menu->icono }}"></i></div>
                                    <div class="menu__title">
                                        {{ $sub_menu->nombre }}
                                        @if ($sub_menu->sub_menus_cantidad > 0)
                                            <i data-feather="chevron-down" class="menu__sub-icon"></i>
                                        @endif
                                    </div>
                                </a>

                                @if ($sub_menu->sub_menus_cantidad > 0)
                                    <ul>
                                        @foreach ($sub_menu->sub_menus as $sub_sub_menu)
                                            <li>
                                                <a href="{{ $sub_sub_menu->url == "#" ? $sub_sub_menu->url : route($sub_sub_menu->url) }}" class="menu">
                                                    <div class="menu__icon"> <i data-feather="{{ $sub_sub_menu->icono }}"></i> </div>
                                                    <div class="menu__title"> {{ $sub_sub_menu->nombre }}
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</div>
<!-- END: Mobile Menu -->
