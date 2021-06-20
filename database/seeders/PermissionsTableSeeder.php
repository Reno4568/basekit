<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'title'      => 'dashboard_access',
                'menus_id'   => '2',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'dashboard_filter',
                'menus_id'   => '2',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'management_access',
                'menus_id'   => '1',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'user_access',
                'menus_id'   => '3',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'user_table',
                'menus_id'   => '3',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'user_create',
                'menus_id'   => '3',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'user_edit',
                'menus_id'   => '3',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'user_show',
                'menus_id'   => '3',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'user_delete',
                'menus_id'   => '3',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'user_filter',
                'menus_id'   => '3',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'user_reset_password',
                'menus_id'   => '3',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'role_access',
                'menus_id'   => '4',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'role_table',
                'menus_id'   => '4',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'role_create',
                'menus_id'   => '4',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'role_edit',
                'menus_id'   => '4',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'role_show',
                'menus_id'   => '4',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'role_delete',
                'menus_id'   => '4',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'permission_access',
                'menus_id'   => '5',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'permission_table',
                'menus_id'   => '5',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'permission_create',
                'menus_id'   => '5',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'permission_edit',
                'menus_id'   => '5',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'permission_show',
                'menus_id'   => '5',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'permission_delete',
                'menus_id'   => '5',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'permission_filter',
                'menus_id'   => '5',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'master_data_access',
                'menus_id'   => '1',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'category_access',
                'menus_id'   => '6',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'category_table',
                'menus_id'   => '6',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'category_create',
                'menus_id'   => '6',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'category_edit',
                'menus_id'   => '6',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'category_show',
                'menus_id'   => '6',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'category_delete',
                'menus_id'   => '6',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'workspace_access',
                'menus_id'   => '1',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'ui_kit_access',
                'menus_id'   => '7',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'ui_kit_table',
                'menus_id'   => '7',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'ui_kit_create',
                'menus_id'   => '7',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'ui_kit_edit',
                'menus_id'   => '7',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'ui_kit_show',
                'menus_id'   => '7',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'ui_kit_delete',
                'menus_id'   => '7',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'ui_kit_filter',
                'menus_id'   => '7',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'spackages_access',
                'menus_id'   => '8',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'spackages_table',
                'menus_id'   => '8',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'spackages_create',
                'menus_id'   => '8',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'spackages_edit',
                'menus_id'   => '8',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'spackages_show',
                'menus_id'   => '8',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'spackages_delete',
                'menus_id'   => '8',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
            [
                'title'      => 'spackages_filter',
                'menus_id'   => '8',
                'created_at' => '2021-03-15 00:00:00',
                'updated_at' => '2021-03-15 00:00:00',
            ],
        ];

        Permission::insert($permissions);
    }
}