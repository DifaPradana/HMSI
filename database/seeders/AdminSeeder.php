<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'difa@gmail.com',
            'email_verified_at' => now(),
            'is_admin' => true,
            'no_telepon' => '081234567890',
            'password' => bcrypt('asdasdasd'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
