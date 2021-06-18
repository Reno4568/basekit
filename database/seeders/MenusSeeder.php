<?php

namespace Database\Seeders;

use App\Models\Menus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'name'          => 'Section Menu',
                'information'   => '',
                'created_at'    => '2021-03-15 00:00:00',
                'updated_at'    => '2021-03-15 00:00:00',
            ],
            [
                'name'          => 'Dashboard',
                'information'   => '',
                'created_at'    => '2021-03-15 00:00:00',
                'updated_at'    => '2021-03-15 00:00:00',
            ],
            [
                'name'          => 'User',
                'information'   => '',
                'created_at'    => '2021-03-15 00:00:00',
                'updated_at'    => '2021-03-15 00:00:00',
            ],
            [
                'name'          => 'Role',
                'information'   => '',
                'created_at'    => '2021-03-15 00:00:00',
                'updated_at'    => '2021-03-15 00:00:00',
            ],
            [
                'name'          => 'Permission',
                'information'   => '',
                'created_at'    => '2021-03-15 00:00:00',
                'updated_at'    => '2021-03-15 00:00:00',
            ],
            [
                'name'          => 'Category',
                'information'   => '',
                'created_at'    => '2021-03-15 00:00:00',
                'updated_at'    => '2021-03-15 00:00:00',
            ],
            [
                'name'          => 'UI Kits',
                'information'   => '',
                'created_at'    => '2021-03-15 00:00:00',
                'updated_at'    => '2021-03-15 00:00:00',
            ],
        ];

        Menus::insert($menus);
    }
}
