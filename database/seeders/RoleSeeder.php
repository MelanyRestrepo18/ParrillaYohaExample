<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Mesero']);
        $role3 = Role::create(['name' => 'Cajero']);

        Permission::create(['name' =>'empleadoIndex'])->syncRoles([$role1]);
        Permission::create(['name' =>'empleadoEliminar'])->syncRoles([$role1]);
        Permission::create(['name' =>'empleadocrear'])->syncRoles([$role1]);
        Permission::create(['name' =>'empleadoFormulario'])->syncRoles([$role1]);
        Permission::create(['name' =>'empleadoEditar'])->syncRoles([$role1]);
        Permission::create(['name' =>'empleadoActualizar'])->syncRoles([$role1]);


        Permission::create(['name' =>'listarInsumo']);

        Permission::create(['name' =>'vistaCrearVenta']);

    }
}
