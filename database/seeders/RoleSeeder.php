<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. Create an admin role
        // 2. and assign all permission on it
        $adminPermissions = Permission::select('id')->get();


        Role::updateOrCreate([
            'role_name' => 'Admin',
            'role_slug' => 'admin',
            'role_note' => 'admin has all permissions',
            'is_deleteable' => false,
        ])->permissions()->sync($adminPermissions->pluck('id'));



        //1. Create a user role
        Role::updateOrCreate([
            'role_name' => 'User',
            'role_slug' => 'user',
            'role_note' => 'user has limited permissions',
            'is_deleteable' => true,
        ]);
    }
}
