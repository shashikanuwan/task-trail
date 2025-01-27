<?php

use App\Actions\Task\CreateTask;
use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use App\Models\Project;

use function Pest\Laravel\assertDatabaseHas;

it('can create task', function () {
    /** @var Project $project */
    $project = Project::factory()->create();

    resolve(CreateTask::class)
        ->execute(
            'task 1',
            'description 1',
            TaskPriority::HIGH,
            TaskStatus::PENDING,
            $project
        );

    assertDatabaseHas('tasks', [
        'name' => 'task 1',
        'description' => 'description 1',
        'priority' => TaskPriority::HIGH,
        'status' => TaskStatus::PENDING,
        'project_id' => $project->id,
    ]);
});
