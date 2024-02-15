<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;

use App\Models\Menu;

class PermisosController extends Controller
{

    public function generarMenu(){
        //Se llaman a todos los id de los permisos que son referentes a la vista de menu
        $permisos_id_menu = auth()
            ->user()
            ->getAllPermissions()
            ->filter(function ($permiso) {
                //Se Filtran aquellos que son solo para acceder o ver el menu
                return stristr($permiso->name, 'menu.acceder');
            })->map(function ($permiso) {
                //Se devuelven solo los valores de los id
                return substr($permiso->name, strlen('menu.acceder.'));
            })->toArray();

        //Se hace la consulta del menus con los id de los permisos
        $menus = Menu::where('cesdo', 1)
            //Mientras no tenga el rol de Super Administrador se usarán los permisos de menu asignados
            ->when(
                !auth()->user()->hasRole('Super Administrador'),
                 fn($query) => $query->whereIn('id', $permisos_id_menu)
                )
            ->orderBy('orden')->orderBy('main')
            ->get(['id', 'nombre', 'url', 'icono', 'id_menu', 'main', 'orden']);

        //Se mapea cada elemento de la coleccion con un arreglo de los submenus de cada uno
        $menus = $menus->map(function ($menu) use ($menus) {
            $menu->sub_menus = $this->estructura($menus, $menu->id);
            $menu->sub_menus_cantidad = count($menu->sub_menus);
            return $menu;
        });

        // Se elimina la redundancia al dejar solo los menus padres
        $menus = $menus->filter(function ($menu) {
            return $menu->main && is_null($menu->id_menu);
        });

        return $menus;
    }

    //Genera un arreglo con la estructura de un menu para un menu padre
    public function estructura($menus, $menu_padre = 0)
    {
        $estructura = [];

        foreach ($menus as $menu) {
            if ($menu->id_menu == $menu_padre) {
                $sub_menus = $this->estructura($menus, $menu->id);
                if ($sub_menus) {
                    $menu->sub_menus = $sub_menus;
                }
                $estructura[] = $menu;
            }
        }

        return $estructura;
    }
}
