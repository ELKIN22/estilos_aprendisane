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
    <meta name="keywords"
        content="{{ config('app.keyworks','Software') }}">
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
    <x-menu.side.mobile></x-menu.side.mobile>
    <div class="flex">
        <x-menu.side.desktop></x-menu.desktop>
        <!-- BEGIN: Content -->
        <div class="content">
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <x-navbar.migas>
                    @yield('migas-paginas')
                </x-navbar.migas>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                <x-usuario.perfil></x-usuario.perfil>
                <!-- END: Account Menu -->
            </div>
            <div class="grid grid-cols-12 gap-6 -intro-x">
                <div class="col-span-12 xxl:col-span-12">
                    <div class="grid grid-cols-12 gap-6" id="app">
                        <!-- BEGIN: Main Title -->
                        <div class="col-span-12 mt-3">
                            <div class="flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    @yield('sub-title')
                                </h2>
                            </div>
                        </div>
                        <!-- END: Main Title -->
                        <div class="col-span-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content -->
    </div>

    <!-- BEGIN: Scripts -->
    <script src="{{ global_asset('template/js/app.js') }}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    @yield('scripts')
    <!-- END: Scripts -->
</body>
</html>
