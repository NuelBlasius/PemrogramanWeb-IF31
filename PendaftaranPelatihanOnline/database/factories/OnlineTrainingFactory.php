<?php

namespace Database\Factories;

// use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OnlineTraining>
 */
class OnlineTrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // cara jalankan php artisan tinker
        // App\Models\Pendaftaean::factory()->create(); untuk 1 data
        // App\Models\Pendaftaean::factory(10)->create(); untuk 10 data
        return [
            'participant_name' => fake()->name(),
            'training_name' => fake()->word(),
            'training_date' => fake()->date(),
            'location' => fake()->address(),
            'category' => fake()->randomElement(['child', 'teen', 'adult']),

            // 'title' => fake()->sentence(),
            // 'author' => fake()->name(),
            // 'slug' => Str::slug(fake()->sentence()),
            // 'body' => fake()->text()
        ];
    }
}
