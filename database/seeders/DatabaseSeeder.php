<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'first_name' => 'Armin',
            'last_name' => 'Shahab',
            'phone_number' => '34873487384',
            'address' => 'Soran, Erbil',
            'email' => 'armin@gmail.com',
        ]);

        \App\Models\User::factory(10)->create();
        \App\Models\Client::factory(10)->create();
        \App\Models\Project::factory(10)->create();
        \App\Models\Task::factory(10)->create();
    }
}
