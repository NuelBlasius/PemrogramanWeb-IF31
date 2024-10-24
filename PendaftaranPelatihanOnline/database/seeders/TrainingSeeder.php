<?php

namespace Database\Seeders;

use App\Models\OnlineTraining;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            OnlineTraining::create([
                'participant_name' => $faker->name,
                'training_name' => $faker->sentence,
                'training_date' => $faker->sentence,
                'location' => $faker->sentence,
                'category' => $faker->sentence,
            ]);
        }
    }
}
