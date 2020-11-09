<?php

namespace Database\Seeders;

use Badzohreh\RolePermission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Permission::$PERMISSIONS as $permissionName) {
            Permission::create([
                "name" => $permissionName,
            ]);
        }
    }
}
