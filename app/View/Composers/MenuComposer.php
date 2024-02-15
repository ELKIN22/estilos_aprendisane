<?php

namespace App\View\Composers;

use App\Http\Controllers\WEB\PermisosController;

use Illuminate\View\View;

class MenuComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */

    protected $menus;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Http\Controllers\WEB\PermisosController  $permisos
     * @return void
     */
    public function __construct(PermisosController $permisos)
    {
        $this->menus = $permisos->generarMenu();
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menus', $this->menus);
    }
}
