<?php

use App\Actions\Task\UpdateTask;
use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use App\Models\Task;

use function Pest\Laravel\assertDatabaseHas;

it('can update task', function () {
    /** @var Task $task */
    $task = Task::factory()->create();

    resolve(UpdateTask::class)
        ->execute(
            $task,
            'Fix translation issue',
            'Translation issue description',
            TaskPriority::LOW,
            TaskStatus::IN_PROGRESS
        );

    assertDatabaseHas(Task::class, [
        'id' => $task->id,
        'name' => 'Fix translation issue',
        'description' => 'Translation issue description',
        'priority' => TaskPriority::LOW,
        'status' => TaskStatus::IN_PROGRESS,
    ]);
});
