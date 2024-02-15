<!DOCTYPE html>
<html lang="es">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ global_asset('/images/template/favicon.png') }}" rel="shortcut icon">
    <title>
        @yield('title', 'Gestion Documental') | {{ config('app.name') }}
    </title>
    <meta name="description" content="{{ config('app.description') }}">
    <meta name="keywords"
        content="{{ config('app.keyworks','Sofwware, Gestión Documental, Dependencias, Terceros, Documentos, Anexos, Organización') }}">
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ global_asset('css/font-awesome/all.min.css') }}">
    <!-- Vuetify -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- END: CSS Assets-->

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>    
    @yield('scripts')
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<!-- END: Head -->

<body class="main">
    <div class="flex">
        <!-- BEGIN: Content -->
        <div class="content">
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <x-breadcrumb>
                    @yield('migas-paginas')
                </x-breadcrumb>
                <!-- END: Breadcrumb -->
            </div>
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 xxl:col-span-9">
                    <div class="grid grid-cols-12 gap-6" id="app">
                        <!-- BEGIN: Main Title -->
                        <div class="col-span-12 mt-3">
                            <div class="intro-x flex items-center h-10">
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
</body>
</html>
