<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'nano',
                'username' => 'nano1234',
                'email' => 'nano@gmail.com',
                'password' => Hash::make('nano1234'),
                'level' => 'user',
                'tanggal_lahir' => '2000-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Super Admin',
                'username' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('superadmin'),
                'level' => 'super_admin',
                'tanggal_lahir' => '2000-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin',
                'username' => 'admin123',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'level' => 'admin',
                'tanggal_lahir' => '2000-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Finance',
                'username' => 'finance1',
                'email' => 'finance@gmail.com',
                'password' => Hash::make('finance1'),
                'level' => 'finance',
                'tanggal_lahir' => '2000-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Crew',
                'username' => 'crew1234',
                'email' => 'crew@gmail.com',
                'password' => Hash::make('crew1234'),
                'level' => 'crew',
                'tanggal_lahir' => '2000-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}