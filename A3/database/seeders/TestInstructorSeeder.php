<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestInstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructor= new Instructor();
        $instructor->document = '1116427912';
        $instructor->fullname = ' Fabiola Rodriguez Amaya';
        $instructor->sena_email= 'fabiolarma@sena.edu.co.com';
        $instructor->personañ_email='fabiola654@gmail.co';
        $instructor->phone = '3044276452';
        $instructor->password = 'password';
        $instructor->type = 'Planta';
        $instructor->profile = 'Habilidades blandas';
        $instructor->save();

    }
}
