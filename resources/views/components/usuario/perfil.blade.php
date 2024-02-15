<div class="-intro-x dropdown w-8 h-8">
    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false">
        <img alt="Rubick Tailwind HTML Admin Template" src="/template/images/profile-6.jpg">
    </div>
    <div class="dropdown-menu w-56">
        <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
            <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                <div class="font-medium">
                    @auth
                        {{ auth()->user()->name }}
                    @endauth
                </div>
                {{-- Rol --}}
                <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">
                    @auth
                        {{ join(', ', auth()->user()->getRoleNames()->toArray()) }}
                    @endauth
                </div>
            </div>
            <div class="p-2">
                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Perfil </a>
                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Configuración </a>
                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Cambiar contraseña </a>
                <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Ayuda </a>
            </div>
            <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="flex items-center p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"><i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Cerrar sesión </button>
                </form>
            </div>
        </div>
    </div>
</div>
