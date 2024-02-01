<?php

namespace Database\Seeders;

use App\Models\EnvironmentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestEnvironmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $environment_type = new EnvironmentType();
        $environment_type->description = 'Aula';
        $environment_type->save();
    }
}
