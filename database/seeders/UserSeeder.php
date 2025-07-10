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
                'id' => 1,
                'department_id' => 3, // IT
                'manager_id' => null,
                'name' => 'Alice Admin',
                'email' => 'alice@example.com',
                'position' => 'System Administrator',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'remember_token' => \Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'department_id' => 3, // IT
                'manager_id' => 1, // Alice is manager
                'name' => 'Bob Developer',
                'email' => 'bob@example.com',
                'position' => 'Developer',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'remember_token' => \Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'department_id' => 2, // Finance
                'manager_id' => null,
                'name' => 'Carol Accountant',
                'email' => 'carol@example.com',
                'position' => 'Accountant',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'remember_token' => \Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
