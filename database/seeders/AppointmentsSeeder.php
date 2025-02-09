<?php

namespace Database\Seeders;

use App\Models\Appointments;
use Database\Factories\AppointmentsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointments::factory()->count(10)->create();
    }
}
