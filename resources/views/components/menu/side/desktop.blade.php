<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Logo de {{ config('app.name') }}" class="w-6"
            src="{{ global_asset('template/images/logo.svg') }}">
        <span class="hidden xl:block text-white text-lg ml-3">{{ config('app.name') }}</span>
    </a>
    <div class="side-nav__devider my-6"></div>

    <ul>
        @foreach ($menus as $menu)
            <li>
                <a href="{{ $menu->url == "#" ? $menu->url : route($menu->url) }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="{{ $menu->icono }}"></i> </div>
                    <div class="side-menu__title"> {{ $menu->nombre }}
                        @if ($menu->sub_menus_cantidad > 0)
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        @endif
                    </div>
                </a>

                @if ($menu->sub_menus_cantidad > 0)
                    <ul class="">
                        @foreach ($menu->sub_menus as $sub_menu)
                            <li>
                                <a href="{{ $sub_menu->url == "#" ? $sub_menu->url : route($sub_menu->url) }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="{{ $sub_menu->icono }}"></i> </div>
                                    <div class="side-menu__title"> {{ $sub_menu->nombre }}
                                        @if ($sub_menu->sub_menus_cantidad > 0)
                                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                        @endif
                                    </div>
                                </a>
                                <ul>
                                    @foreach ($sub_menu->sub_menus as $sub_sub_menu)
                                        <li>
                                            <a href="{{ $sub_sub_menu->url == "#" ? $sub_sub_menu->url : route($sub_sub_menu->url) }}" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="{{ $sub_sub_menu->icono }}"></i> </div>
                                                <div class="side-menu__title"> {{ $sub_sub_menu->nombre }}
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
<!-- END: Side Menu -->
