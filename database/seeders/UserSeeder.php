<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name'              => 'Admin',
                'phone'             => '01761852000',
                'email'             => 'admin@admin.com',
                'password'          => bcrypt('admin@admin'),
                'email_verified_at' => now(),
            ],
            [
                'name'              => 'Rion',
                'phone'             => '01633418906',
                'email'             => 'rion@admin.com',
                'password'          => bcrypt('rion@admin'),
                'email_verified_at' => now(),
                
            ],
            [
                'name'              => 'Sourov',
                'phone'             => '01727857065',
                'email'             => 'sourov@admin.com',
                'password'          => bcrypt('sourov@admin'),
                'email_verified_at' => now(),
            ],
        ]);
    }
}
