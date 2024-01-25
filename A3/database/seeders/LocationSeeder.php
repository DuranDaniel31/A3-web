<?php

namespace Database\Seeders;

use App\Models\location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        location::insert([
            ['description'=>'sagrado corazon','adress'=>'cra25 #24-47','status'=>'ACTIVO'],
            ['description'=>'colegio salesiano','adress'=>'cl. 34 #cra26','status'=>'ACTIVO'],
            ['description'=>'Clem','adress'=>'KM/2 via tulua-buga','status'=>'INACTIVO'],
        ]);
    }
}
