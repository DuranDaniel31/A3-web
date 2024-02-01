<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestCareerSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $career = Career::fin(1);
        $career->name = 'Auxiliar de enfermeria';
        $career->type ='Tecnico';
        $career->save();
    }
}
