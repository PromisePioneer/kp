<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => '']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => '']);
        $role->givePermissionTo('');

        // or may be done by chaining
        $role = Role::create(['name' => ''])
            ->givePermissionTo([' ', '']);

        //this can be done as admin litterly
        $role = Role::create(['name' => '']);
        $role->givePermissionTo(Permission::all());
    }
}