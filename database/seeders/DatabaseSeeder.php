<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'difa@gmail.com',
            'is_admin' => true,
            'no_telepon' => '081234567890',
            'password' => bcrypt('asdasdasd'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
