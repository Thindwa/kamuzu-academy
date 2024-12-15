<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Check if the 'admin' role already exists
        $roleExists = Role::where('name', 'admin')->exists();

        // If the 'admin' role doesn't exist, create it
        if (!$roleExists) {
            $role = Role::create(['name' => 'admin']);
        }

        // Create admin user
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' =>  Hash::make('admin123'),// Use bcrypt to hash the password
        ]);

        // Assign the 'admin' role to the user if it exists
        if (isset($role) && $role instanceof Role) {
            $permissions = Permission::pluck('id', 'id')->all();
            $role->syncPermissions($permissions);
            $user->assignRole([$role->id]);
        }
    }
}