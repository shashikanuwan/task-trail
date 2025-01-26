<?php

use App\Actions\Task\UpdateTask;
use App\Enums\TaskPriority;
use App\Models\Task;

use function Pest\Laravel\assertDatabaseHas;

it('can update task', function () {
    $task = Task::factory()->create();

    resolve(UpdateTask::class)
        ->execute(
            $task,
            'task 2',
            'description 2',
            TaskPriority::LOW
        );

    assertDatabaseHas('tasks', [
        'name' => 'task 2',
        'description' => 'description 2',
        'priority' => TaskPriority::LOW,
    ]);
});
