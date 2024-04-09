<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = collect([
            'Super Admin',
            'One Management',
            'One Family',
            'One Wilayah',
            'One Kecamatan',
            'One Desa/Kelurahan',
            'One TPS',
            'One Pro',
        ]);

        $roles->each(function ($role) {
            Role::create([
                'name' => $role
            ]);
        });

        $permissions = collect([
            'setting_show',
            'data_show',
            'logistic_show',

            'role_show',
            'role_create',
            'role_edit',
            'role_delete',

            'user_show',
            'user_create',
            'user_edit',
            'user_delete',

            'menu_show',
            'menu_create',
            'menu_edit',
            'menu_delete',

            'region_show',
            'region_create',
            'region_edit',
            'region_delete',

            'district_show',
            'district_create',
            'district_edit',
            'district_delete',

            'village_show',
            'village_create',
            'village_edit',
            'village_delete',

            'tps_show',
            'tps_create',
            'tps_edit',
            'tps_delete',

            'one_show',
            'one_create',
            'one_edit',
            'one_delete',

            'voter_show',
            'voter_create',
            'voter_edit',
            'voter_delete',

            'request_show',
            'request_create',
            'request_edit',
            'request_delete',

            'category_show',
            'category_create',
            'category_edit',
            'category_delete',

            'product_show',
            'product_create',
            'product_edit',
            'product_delete',

            'stock_show',
            'stock_create',
            'stock_edit',
            'stock_delete',

            'report_show',
            'report_create',
            'report_edit',
            'report_delete',
        ]);

        $permissions->each(function ($permission) {
            Permission::create([
                'name' => $permission
            ]);
        });


//        $data = [
//            ['permission_id' => 2, 'role_id' => 7],
//            ['permission_id' => 3, 'role_id' => 7],
//            ['permission_id' => 20, 'role_id' => 7],
//            ['permission_id' => 24, 'role_id' => 7],
//            ['permission_id' => 28, 'role_id' => 7],
//            ['permission_id' => 32, 'role_id' => 7],
//            ['permission_id' => 33, 'role_id' => 7],
//            ['permission_id' => 34, 'role_id' => 7],
//            ['permission_id' => 35, 'role_id' => 7],
//            ['permission_id' => 36, 'role_id' => 7],
//            ['permission_id' => 37, 'role_id' => 7],
//            ['permission_id' => 38, 'role_id' => 7],
//            ['permission_id' => 39, 'role_id' => 7],
//            ['permission_id' => 40, 'role_id' => 7],
//            ['permission_id' => 41, 'role_id' => 7],
//            ['permission_id' => 42, 'role_id' => 7],
//            ['permission_id' => 43, 'role_id' => 7],
//            ['permission_id' => 48, 'role_id' => 7],
//            ['permission_id' => 52, 'role_id' => 7],
//            ['permission_id' => 2, 'role_id' => 8],
//            ['permission_id' => 3, 'role_id' => 8],
//            ['permission_id' => 24, 'role_id' => 8],
//            ['permission_id' => 28, 'role_id' => 8],
//            ['permission_id' => 32, 'role_id' => 8],
//            ['permission_id' => 33, 'role_id' => 8],
//            ['permission_id' => 34, 'role_id' => 8],
//            ['permission_id' => 35, 'role_id' => 8],
//            ['permission_id' => 36, 'role_id' => 8],
//            ['permission_id' => 37, 'role_id' => 8],
//            ['permission_id' => 38, 'role_id' => 8],
//            ['permission_id' => 39, 'role_id' => 8],
//            ['permission_id' => 40, 'role_id' => 8],
//            ['permission_id' => 41, 'role_id' => 8],
//            ['permission_id' => 42, 'role_id' => 8],
//            ['permission_id' => 43, 'role_id' => 8],
//            ['permission_id' => 48, 'role_id' => 8],
//            ['permission_id' => 2, 'role_id' => 9],
//            ['permission_id' => 3, 'role_id' => 9],
//            ['permission_id' => 28, 'role_id' => 9],
//            ['permission_id' => 30, 'role_id' => 9],
//            ['permission_id' => 32, 'role_id' => 9],
//            ['permission_id' => 33, 'role_id' => 9],
//            ['permission_id' => 34, 'role_id' => 9],
//            ['permission_id' => 35, 'role_id' => 9],
//            ['permission_id' => 36, 'role_id' => 9],
//            ['permission_id' => 37, 'role_id' => 9],
//            ['permission_id' => 38, 'role_id' => 9],
//            ['permission_id' => 39, 'role_id' => 9],
//            ['permission_id' => 40, 'role_id' => 9],
//            ['permission_id' => 41, 'role_id' => 9],
//            ['permission_id' => 42, 'role_id' => 9],
//            ['permission_id' => 43, 'role_id' => 9],
//            ['permission_id' => 48, 'role_id' => 9],
//            ['permission_id' => 52, 'role_id' => 9],
//            ['permission_id' => 3, 'role_id' => 10],
//            ['permission_id' => 36, 'role_id' => 10],
//            ['permission_id' => 37, 'role_id' => 10],
//            ['permission_id' => 38, 'role_id' => 10],
//            ['permission_id' => 39, 'role_id' => 10],
//            ['permission_id' => 40, 'role_id' => 10],
//            ['permission_id' => 41, 'role_id' => 10],
//            ['permission_id' => 42, 'role_id' => 10],
//            ['permission_id' => 43, 'role_id' => 10],
//            ['permission_id' => 48, 'role_id' => 10],
//            ['permission_id' => 52, 'role_id' => 10],
//
//        ];
//        foreach ($data as $row) {
//            DB::table('role_has_permissions')->insert($row);
//        };
    }
}
