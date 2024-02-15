<!DOCTYPE html>
<html lang="es">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ global_asset('template/images/logo.svg') }}" rel="shortcut icon">
    <title>
        @yield('title', config('app.name')) | {{ config('app.name') }}
    </title>
    <meta name="description" content="{{ config('app.description') }}">
    <meta
        name="keywords"
        content="{{ config('app.keyworks','Software') }}"
    >
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ global_asset('template/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    @yield('styles')
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main">
    <x-menu.top.mobile></x-menu.top.mobile>

    <!-- BEGIN: Top Bar -->
    <div class="border-b border-theme-29 -mt-10 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 pt-3 md:pt-0 mb-10">
        <div class="top-bar-boxed flex items-center justify-between">
            <!-- BEGIN: Logo -->
            <a href="" class="-intro-x hidden md:flex">
                <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="{{ global_asset('template/images/logo.svg') }}">
                <span class="text-white text-lg ml-3"> {{ config('app.name') }} </span>
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb breadcrumb--light mr-auto hidden md:flex">
                @yield('migas-paginas')
            </div>
            <!-- END: Breadcrumb -->
            <x-usuario.perfil></x-usuario.perfil>
        </div>
    </div>
    <!-- END: Top Bar -->

    <x-menu.top.desktop></x-menu.top.desktop>

    <!-- BEGIN: Content -->
    <div class="content">
        <h2 class="intro-y text-lg font-medium mt-10">
            @yield('sub-title')
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 mt-2" id="app">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content -->

    <!-- BEGIN: Scripts -->
    <script src="{{ global_asset('template/js/app.js') }}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    @yield('scripts')
    <!-- END: Scripts -->
</body>
</html>
