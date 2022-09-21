<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserWithRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'Administrator';
        $admin->email = 'admin@gmail.com';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('12345678');
        $admin->role = 'admin';
        $admin->save();

        $admin = new User;
        $admin->name = 'Resepsionis';
        $admin->email = 'resepsionis@gmail.com';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('12345678');
        $admin->role = 'resepsionis';
        $admin->save();

        $admin = new User;
        $admin->name = 'User';
        $admin->email = 'user@gmail.com';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('12345678');
        $admin->role = 'user';
        $admin->save();
    }
}
