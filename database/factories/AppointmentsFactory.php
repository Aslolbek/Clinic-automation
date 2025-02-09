<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\appointments>
 */
class AppointmentsFactory extends Factory
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
            'user_id' => User::all()->random()->id, // Tasodifiy doktor ID-si
            'name' => $this->faker->name(), // Ism
            'phone' => $this->faker->phoneNumber(), // Telefon raqami
            'email' => $this->faker->unique()->safeEmail(), // Email
            'appointment_times' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'), // Taqvim vaqti
            'diagnos' => $this->faker->word(), // Diagnos
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
