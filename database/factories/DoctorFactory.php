<?php

namespace Database\Factories;

use App\Models\Profession;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'profession_id' => Profession::all()->random()->id,
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'password' => Hash::make('Asrorbek1'), // Default parol (o'zgartirish mumkin)
            'email' => $this->faker->unique()->safeEmail(),
            'about' => $this->faker->optional()->paragraph(),
            'photo' => $this->faker->imageUrl(200, 200, 'people'),
            'role' => 'doctor',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
