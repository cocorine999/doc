<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some sample permissions
        Permission::create([
            'name' => 'View Users',
            'slug' => 'view-users',
            'key' => 'view_users',
            'description' => 'Permission to view users',
        ]);

        Permission::create([
            'name' => 'Create Users',
            'slug' => 'create-users',
            'key' => 'create_users',
            'description' => 'Permission to create new users',
        ]);

        Permission::create([
            'name' => 'Edit Users',
            'slug' => 'edit-users',
            'key' => 'edit_users',
            'description' => 'Permission to edit existing users',
        ]);

        Permission::create([
            'name' => 'Delete Users',
            'slug' => 'delete-users',
            'key' => 'delete_users',
            'description' => 'Permission to delete users',
        ]);

        Permission::create([
            'name' => 'View Roles',
            'slug' => 'view-roles',
            'key' => 'view_roles',
            'description' => 'Permission to view roles',
        ]);
        
        Permission::create([
            'name' => 'Edit Roles',
            'slug' => 'edit-roles',
            'key' => 'edit_roles',
            'description' => 'Permission to edit roles',
        ]);
        
        Permission::create([
            'name' => 'Delete Roles',
            'slug' => 'delete-roles',
            'key' => 'delete_roles',
            'description' => 'Permission to delete roles',
        ]);
        
        Permission::create([
            'name' => 'View Permissions',
            'slug' => 'view-permissions',
            'key' => 'view_permissions',
            'description' => 'Permission to view permissions',
        ]);
        
        Permission::create([
            'name' => 'Edit Permissions',
            'slug' => 'edit-permissions',
            'key' => 'edit_permissions',
            'description' => 'Permission to edit permissions',
        ]);
        
        Permission::create([
            'name' => 'Delete Permissions',
            'slug' => 'delete-permissions',
            'key' => 'delete_permissions',
            'description' => 'Permission to delete permissions',
        ]);

    }
}
