<?php

namespace Database\Seeders;

use App\Models\EnvironmentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnvironmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EnvironmentType::insert([
            ['description'=>'Aula'],
            ['description'=>'Taller'],
            ['description'=>'Laboratorio'],
            ['description'=>'Aula virtual'],
            ['description'=>'Auditorio'],
            ['description'=>'Biblioteca'],
            ['description'=>'Campo deportivo'],
        ]);
    }
}
