<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/May2020/qerzAYP3oK4fAKpmiNvW.',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hlnvxkmvGYaCkwxdfc78XOcqP4yhvBPAQS0tO3ie5FT9UaTbhK5N.',
                'remember_token' => '96hVS8L2edYEJsiFaiIacOXmBFl1HML855LViF3eSvoeHz48dWo1e08O9Yf5',
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-04-29 02:02:48',
                'updated_at' => '2020-05-03 19:28:55',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 4,
                'name' => 'Gerente',
                'email' => 'gerencial@ppg.com.br',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$M2sp7H8PTuE3nnCYiAQIUORMNxYli5B3h.GgwZuq.OrV6IOzVXLU6',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-01 13:34:48',
                'updated_at' => '2020-05-01 13:34:48',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 8,
                'name' => 'Recepcionista',
                'email' => 'recepcionista@pedalpowergym.com.br',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2ta8mXUlddJp5NVsmCph7OqIEHIVTjLyRdydxzGwyu4NhvRmwH8ki',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-01 14:07:28',
                'updated_at' => '2020-05-01 20:01:01',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 7,
                'name' => 'Sistema Touchscreen',
                'email' => 'sistema.touchscreen@pedalpowergym.com.br',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5N3ZZ4Y.HnCoHID8w8He7.czEAaE4eNy6kiZJRhmqlKBHgEkCyAzq',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-01 16:47:43',
                'updated_at' => '2020-05-01 20:00:48',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 6,
                'name' => 'Fisioterapeuta',
                'email' => 'fisioterapeuta@pedalpowergym.com.br',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Usijda4HkL1U2JPWmMns0OPLff9sERPWdZ4R2ruzzPhkgQapqA3I6',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-01 16:53:57',
                'updated_at' => '2020-05-01 20:00:40',
            ),
            5 => 
            array (
                'id' => 7,
                'role_id' => 3,
                'name' => 'Cliente 1',
                'email' => 'cliente1@ppg.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wZli0VUF4NQqOxYIMiDAS.0Ms74714tprONyLqdsGCkemwGxcJRQq',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-18 04:49:56',
                'updated_at' => '2020-05-18 04:50:37',
            ),
            6 => 
            array (
                'id' => 8,
                'role_id' => 3,
                'name' => 'Cliente 2',
                'email' => 'cliente2@ppg.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EZapCZ0owzddaI2XUDSVyuKi0Ii4kZcDR7R4bmDKvsTLrael9uvsK',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-18 04:50:23',
                'updated_at' => '2020-05-18 04:50:23',
            ),
        ));
        
        
    }
}