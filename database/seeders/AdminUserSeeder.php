<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Petfinder',
            'email' => 'admin@example.com',
            'password' => Hash::make('holamundo'),
            'tipo' => 'admin',
        ]);
    }
}
