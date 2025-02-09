<?php

namespace Database\Seeders;

// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //    \App\Models\Doctor::factory(10)->create();
    //    \App\Models\User::factory(10)->create();
    //    \App\Models\Appointments::factory(10)->create();
    //    \App\Models\Doctor::factory(10)->create();

        $this->call([
            ProfessionSeeder::class,
            DoctorSeeder::class,
            UserSeeder::class,
            AppointmentsSeeder::class,
            CommentSeeder::class,
            AdminSeeder::class,
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
