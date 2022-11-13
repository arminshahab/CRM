<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'user_id' => User::pluck('id')->random(),
            'client_id' => Client::pluck('id')->random(),
            'project_id' => Project::pluck('id')->random(),
            'deadline' => fake()->dateTimeBetween('+1 month', '+6 month'),
            'status' => fake()->randomElement(Task::STATUS),
        ];
    }
}
