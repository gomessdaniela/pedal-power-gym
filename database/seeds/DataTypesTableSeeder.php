<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'Usuário/a',
                'display_name_plural' => 'Usuários',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-29 02:02:47',
                'updated_at' => '2020-05-04 06:22:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-29 02:02:47',
                'updated_at' => '2020-04-29 02:02:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-29 02:02:47',
                'updated_at' => '2020-04-29 02:02:47',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-29 02:02:48',
                'updated_at' => '2020-04-29 02:02:48',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'customers',
                'slug' => 'customers',
                'display_name_singular' => 'Cliente',
                'display_name_plural' => 'Clientes',
                'icon' => 'voyager-barbell',
                'model_name' => 'App\\Customer',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-29 05:23:20',
                'updated_at' => '2020-05-18 05:29:47',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'instructors',
                'slug' => 'instructors',
                'display_name_singular' => 'Instrutor/a',
                'display_name_plural' => 'Instrutores',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Instructor',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-30 00:33:09',
                'updated_at' => '2020-05-04 06:21:42',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'group_classes',
                'slug' => 'group-classes',
                'display_name_singular' => 'Aula',
                'display_name_plural' => 'Aulas',
                'icon' => 'voyager-people',
                'model_name' => 'App\\GroupClass',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-05-02 20:36:10',
                'updated_at' => '2020-05-04 06:21:22',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'customers_has_group_classes',
                'slug' => 'customers-has-group-classes',
                'display_name_singular' => 'Ata de Presença',
                'display_name_plural' => 'Ata de Presença',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\CustomersHasGroupClass',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-05-03 23:35:35',
                'updated_at' => '2020-05-04 04:31:13',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'plans',
                'slug' => 'plans',
                'display_name_singular' => 'Plano',
                'display_name_plural' => 'Planos',
                'icon' => 'voyager-ticket',
                'model_name' => 'App\\Plan',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-05-10 16:41:28',
                'updated_at' => '2020-05-18 09:37:56',
            ),
            9 => 
            array (
                'id' => 27,
                'name' => 'payments',
                'slug' => 'payments',
                'display_name_singular' => 'Pagamento',
                'display_name_plural' => 'Pagamentos',
                'icon' => NULL,
                'model_name' => 'App\\Payment',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-05-12 05:56:40',
                'updated_at' => '2020-05-18 09:12:34',
            ),
        ));
        
        
    }
}