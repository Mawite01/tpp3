<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'Admin')->first();
      
        $adminRole->syncPermissions([
            'dashboard' ,
            'category_listing',
            'category_create',
            'category_edit',
            'category_delete',
            'product_listing',
            'product_create',
            'product_edit',
            'product_delete'
        ]);

        $editorRole = Role::where('name', 'Editor')->first();
        $editorRole->syncPermissions([
            'product_listing',
            'product_create',
            'product_edit',
            'product_delete'
        ]);
    }
}
