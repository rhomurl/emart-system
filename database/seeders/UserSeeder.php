<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $role1 = Role::create(['name' => 'customer']);
        $role2 = Role::create(['name' => 'admin']);
        $role3 = Role::create(['name' => 'super-admin']);


        $user = User::create([
            'firstname' => 'User',
            'lastname' => 'Test',
            'email' => 'user@ex.com',
            'password' => Hash::make('admin123456'),
            'contact_number' => '09156598878',
        ]);
        $user->assignRole($role1);

        $user = User::create([
            'firstname' => 'Super',
            'lastname' => 'Admin',
            'email' => 'admin@ex.com',
            'password' => Hash::make('admin123456'),
            'contact_number' => '09364649984',
        ]);
        $user->assignRole($role2);

        $user = User::create([
            'firstname' => 'Super',
            'lastname' => 'Admin',
            'email' => 'superadmin@ex.com',
            'password' => Hash::make('admin123456'),
            'contact_number' => '09104236698',
        ]);
        $user->assignRole($role3);

        $user = User::create([
            'firstname' => 'Ivan',
            'lastname' => 'Dimayuga',
            'email' => 'kyleivandimayuga20@gmail.com',
            'password' => Hash::make('kyle123!'),
            'contact_number' => '09550583958',
        ]);
        $user->assignRole($role1);
    }
}
