<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'view-user']);
        
        Permission::create(['name' => 'create-tulisan']);
        Permission::create(['name' => 'edit-tulisan']);
        Permission::create(['name' => 'delete-tulisan']);
        Permission::create(['name' => 'view-tulisan']);


        Role::firstorCreate(['name' => 'SuperAdmin']);
        Role::firstorCreate(['name' => 'Admin']);

        $roleSuperAdmin = Role::findByName('SuperAdmin');
        $roleSuperAdmin->givePermissionTo(Permission::all());

        $roleAdmin = Role::findByName('Admin');
        $roleAdmin->givePermissionTo([
            'create-tulisan',
            'edit-tulisan',
            'delete-tulisan',
            'view-tulisan',
        ]);  
    }
}
