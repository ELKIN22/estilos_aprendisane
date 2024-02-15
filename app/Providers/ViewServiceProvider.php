<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;

Use App\View\Composers\MenuComposer;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //Para todas las vistas de menu se comparte la informacion para crear el menu
        View::composer('components.menu.*', MenuComposer::class);
    }
}
