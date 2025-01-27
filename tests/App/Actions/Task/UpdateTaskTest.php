<?php

use App\Actions\Task\UpdateTask;
use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use App\Models\Task;

use function Pest\Laravel\assertDatabaseHas;

it('can update task', function () {
    $task = Task::factory()->create();

    resolve(UpdateTask::class)
        ->execute(
            $task,
            'task 2',
            'description 2',
            TaskPriority::LOW,
            TaskStatus::IN_PROGRESS
        );

    assertDatabaseHas('tasks', [
        'name' => 'task 2',
        'description' => 'description 2',
        'priority' => TaskPriority::LOW,
        'status' => TaskStatus::IN_PROGRESS,
    ]);
});
