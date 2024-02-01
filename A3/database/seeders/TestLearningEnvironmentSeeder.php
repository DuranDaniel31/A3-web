<?php

namespace Database\Seeders;

use App\Models\EnvironmentType;
use App\Models\LearningEnvironment;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestLearningEnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $learning_environment = new LearningEnvironment();
        $learning_environment->name = 'Aula 205';
        $learning_environment->capacity = 30;
        $learning_environment->area_mt2 = 30 ;
        $learning_environment->floor = '2';
        $learning_environment->inventory = '1 tv, 1 tablero, 30 pc';

        $enviroment_type = EnvironmentType :: find(1);
        $learning_environment->type_id = $enviroment_type->id;
        $location = Location:: find(1);
        $learning_environment->location_id = $location->id;

        $learning_environment->status = 'ACTIVO';
        $learning_environment->save();
    
}
}

