<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doctor_id' => Doctor::all()->random()->id, // Tasodifiy doktor ID-si
            'user_id' => User::all()->random()->id,     // Tasodifiy user ID-si
            'about' => $this->faker->text(200),         // Sharh matni (about)
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
