<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
//        Permission::create(['name' => 'access-panel']);
//        Permission::create(['name' => 'access-users']);

        // create roles
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        // assign created permissions
//        $admin->givePermissionTo('access-panel');
//        $admin->givePermissionTo('access-users');

        // $user->givePermissionTo('access users');
    }
}
