<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'title'      => 'Admin',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'User',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'Member',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
        ];

        Role::insert($roles);
    }
}
