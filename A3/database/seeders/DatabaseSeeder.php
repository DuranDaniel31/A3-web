<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EnvironmentType;
use App\Models\Instructor;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CareerSeeder::class);
        $this->call(EnvironmentTypeSeeder::class);
        $this->call(LocationSeeder::class);

        Instructor::factory()->create([
            'type' => 'Contratista',
            'profile' => 'Instructor De Programacion'
        ]);
        Instructor::factory()->create([
            'type' => 'Contratista',
            'profile' => 'Instructor De Ingles'
        ]);

        Instructor::factory()->create([
            'type' => 'Planta',
            'profile' => 'Instructor De TICS'
        ]); 
        Instructor::factory()->create([
            'type' => 'Planta',
            'profile' => 'Instructor De Matematicas'
        ]);
         Instructor::factory()->create([
            'type' => 'Planta',
            'profile' => 'Instructor De Integralidad'
        ]);

        User::factory(5)->create();
    }
}
