<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{

    public function run(): void
    {
        // Create admin role (with guard name)
        $adminRole = Role::firstOrCreate(
            ['name' => 'admin', 'guard_name' => 'web']
        );

        // Create Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Super Admin',
                'phone' => '9876543210',
                'address' => 'Admin Office',
                'encode_password' => '12345678',
                'password' => Hash::make('12345678')
            ]
        );

        // Assign Role to the User
        if (!$admin->hasRole('admin')) {
            $admin->assignRole($adminRole);
        }
    }
}
