<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as Role;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Default data User
            $default_user_value = [
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ];
        
        // Membuat Data User
            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name' => 'admin',
            ],$default_user_value));
    
            $manager = User::create(array_merge([
                'email' => 'manager@gmail.com',
                'name' => 'manager',
            ],$default_user_value));

            $tester = User::create(array_merge([
                'email' => 'tester@gmail.com',
                'name' => 'tester',
            ],$default_user_value));


            // Membuat Role 
            $role_manager = Role::create(['name'=>'manager']);
            $role_admin = Role::create(['name'=>'admin']);
            $role_tester = Role::create(['name'=>'tester']);

            //Pemberian Role
            $admin->assignRole('admin');
            $manager->assignRole('manager');
            $tester->assignRole('tester');


            // Membuat Permission 
            $permission = Permission::create(['name'=>'read role']);
            $permission = Permission::create(['name'=>'create role']);
            $permission = Permission::create(['name'=>'update role']);        
            $permission = Permission::create(['name'=>'delete role']);
            $permission = Permission::create(['name'=>'read config']);

            // Memberikan Permission pada setiap Role 

            $role_admin->givePermissionTo('read role');
            $role_admin->givePermissionTo('create role');
            $role_admin->givePermissionTo('update role');
            $role_admin->givePermissionTo('delete role');
            $role_admin->givePermissionto('read config');



    }
}
