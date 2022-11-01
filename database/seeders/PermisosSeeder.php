<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = array(
            'Ver Roles y Permisos',
            'Crear Roles',
            'Editar Roles',

            'Ver Categorias',
            'Crear Categorias',
            'Editar Categorias',
            'Eliminar Categorias',
        );

        foreach ($permisos as $key => $value) {
            Permission::create([ 'name' => $value ]);
        }
    }
}
