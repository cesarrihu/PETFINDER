<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publicacion;

class PublicacionSeeder extends Seeder
{
   
    public function run(): void
    {
        Publicacion::factory()->count(20)->create(); 
    }
}

