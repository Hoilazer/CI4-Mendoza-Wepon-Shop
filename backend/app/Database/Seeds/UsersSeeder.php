<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $users = [
            [
                'first_name'       => 'Angel',
                'middle_name'      => null,
                'last_name'        => 'Mendoza',
                'email'            => 'angel@gmail.com',
                'password_hash'    => $password,
                'type'             => 'client',
                'account_status'   => 1,
                'email_activated'  => 1,
                'newsletter'       => 1,
                'created_at'       => $now,
                'updated_at'       => $now,
            ],

            [
                'first_name'       => 'Pomni',
                'middle_name'      => null,
                'last_name'        => null,
                'email'            => 'pomni.mod@gmail.com',
                'password_hash'    => $password,
                'type'             => 'moderator', // or 'staff' if you add it to ENUM
                'account_status'   => 1,
                'email_activated'  => 1,
                'newsletter'       => 1,
                'created_at'       => $now,
                'updated_at'       => $now,
            ],

            [
                'first_name'       => 'Heloise',
                'middle_name'      => null,
                'last_name'        => 'Mortis',
                'email'            => 'heloise.manager@gmail.com',
                'password_hash'    => $password,
                'type'             => 'admin',
                'account_status'   => 1,
                'email_activated'  => 1,
                'newsletter'       => 1,
                'created_at'       => $now,
                'updated_at'       => $now,
            ],
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
