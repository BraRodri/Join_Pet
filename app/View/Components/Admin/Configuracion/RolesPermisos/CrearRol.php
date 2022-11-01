<?php

namespace App\View\Components\Admin\Configuracion\RolesPermisos;

use Illuminate\View\Component;
use Spatie\Permission\Models\Permission;

class CrearRol extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $permisos = Permission::all();
        return view('components.admin.configuracion.roles-permisos.crear-rol', compact('permisos'));
    }
}
