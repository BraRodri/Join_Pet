<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Para el super admin
        $role_administrador = Role::create(['name' => 'Super Administrador']);
        $permisos = Permission::all();
        if(count($permisos) > 0){
            foreach ($permisos as $key => $value) {
                $role_administrador->givePermissionTo($value->name);
            }
        }

        //Demas Roles
        $roles = array(
            'Tienda',
        );
        foreach ($roles as $key => $rol) {
            Role::create([ 'name' => $rol ]);
        }
    }
}
