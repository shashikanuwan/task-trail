<?php

namespace Database\Factories;

use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'priority' => $this->faker->randomElement(TaskPriority::cases()),
            'status' => $this->faker->randomElement(TaskStatus::cases()),
            'project_id' => Project::factory(),
        ];
    }
}
