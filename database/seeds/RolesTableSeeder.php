<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('voyager::seeders.roles.admin'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'user']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('voyager::seeders.roles.user'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'manager']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Gerencial'),
            ])->save();
        }


    //     ['display_name' => 'Administrador', 'name' => 'admin'],
    //     ['display_name' => 'Gerente', 'name' => 'manager'],
    //     ['display_name' => 'Cliente', 'name' => 'customer'],
    //     ['display_name' => 'Sistema de Touchscreen', 'name' => 'touchscreen_system'],
    //     ['display_name' => 'Fisioterapeuta', 'name' => 'physiotherapist'],
    //     ['display_name' => 'Recepcionista', 'name' => 'hostess'],
    }
}
