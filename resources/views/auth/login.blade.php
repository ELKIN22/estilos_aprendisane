<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="/images/template/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Login</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ global_asset('template/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x items-center pt-5">
                        <div class="flex">
                            <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="{{ global_asset('template/images/logo.svg') }}">
                            <span class="text-white text-lg ml-3">{{ config('app.slug') }}</span>
                        </div>
                    </a>
                    <div class="my-auto">
                        <img alt="Rubick Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ global_asset('template/images/illustration.svg') }}">
                        <div class="-intro-x text-white font-bold text-4xl leading-tight mt-10">
                            {{ config('app.name') }}
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">
                            {{ config('app.description') }}
                        </div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Inicia Sesión
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">
                            {{ config('app.description') }}
                        </div>
                        <form action="/login" method="post">
                            @csrf
                            <div class="intro-x mt-8">
                                <input type="email" name="email" class="intro-x login__input form-control py-3 px-4 border-gray-300 block" placeholder="Correo electrónico" required>
                                @error('email')
                                    <span class="block mt-2 ml-2 text-xs text-primary-3">{{ $message }}</span>
                                @enderror
                                <input type="password" name="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Contraseña" required>
                            </div>
                            <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                                <div class="flex items-center mr-auto">
                                    <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                    <label class="cursor-pointer select-none" for="remember-me">Recuerdame</label>
                                </div>
                                <a href="#">¿Olvidé mi contraseña?</a>
                            </div>
                            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                                <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" type="submit">
                                    Entrar
                                </button>
                            </div>
                        </form>
                        <div class="intro-x mt-10 xl:mt-24 text-gray-700 dark:text-gray-600 text-center xl:text-left">
                            Al utilizar nuestra plataforma debes estar de acuerdo con nuestros
                            <a class="text-theme-1 dark:text-theme-10" href="#">Términos y Condiciones</a> & <a class="text-theme-1 dark:text-theme-10" href="#">Políticas de Privacidad</a>
                        </div>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{ global_asset('template/js/app.js') }}"></script>
    </body>
</html>
