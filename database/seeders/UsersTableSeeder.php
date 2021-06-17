<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name'           => 'Admin',
                'email'          => 'admin@mail.com',
                'password'       => '$2y$10$jA0iQrNaBwxrqITQEETQeOADwQZxyqo0BSfi6ngEuNz9H8MF.8vYG', //Admin@12345
                'remember_token' => null,
                'created_at'     => '2021-03-15 00:00:00',
                'updated_at'     => '2021-03-15 00:00:00',
            ],
        ];

        User::insert($users);
    }
}
