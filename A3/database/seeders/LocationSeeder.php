<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::insert([
            ['name'=>'sagrado corazon','address'=>'cra25 #24-47','status'=>'ACTIVO'],
            ['name'=>'colegio salesiano','address'=>'cl. 34 #cra26','status'=>'ACTIVO'],
            ['name'=>'Clem','address'=>'KM/2 via tulua-buga','status'=>'INACTIVO'],
        ]);
    }
}
