<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2020-04-29 02:02:47',
                'updated_at' => '2020-04-29 02:02:47',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'customer',
                'display_name' => 'Cliente',
                'created_at' => '2020-04-29 02:04:30',
                'updated_at' => '2020-04-29 02:04:30',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'manager',
                'display_name' => 'Gerencial',
                'created_at' => '2020-04-29 02:04:59',
                'updated_at' => '2020-04-29 02:04:59',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'physiotherapist',
                'display_name' => 'Fisioterapeuta',
                'created_at' => '2020-05-01 16:55:37',
                'updated_at' => '2020-05-01 16:55:37',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'touchscreen_system',
                'display_name' => 'Sistema Touchcreen',
                'created_at' => '2020-05-01 16:55:49',
                'updated_at' => '2020-05-01 16:55:49',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'hostess',
                'display_name' => 'Recepcionista',
                'created_at' => '2020-05-01 16:56:10',
                'updated_at' => '2020-05-01 16:56:10',
            ),
        ));
        
        
    }
}