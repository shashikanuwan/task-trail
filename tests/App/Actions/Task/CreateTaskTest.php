<?php

use App\Actions\Task\CreateTask;
use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use App\Models\Project;
use App\Models\Task;

use function Pest\Laravel\assertDatabaseHas;

it('can create task', function () {
    /** @var Project $project */
    $project = Project::factory()->create();

    resolve(CreateTask::class)
        ->execute(
            'Implement calculation logic',
            'This is a description',
            TaskPriority::HIGH,
            TaskStatus::PENDING,
            $project
        );

    assertDatabaseHas(Task::class, [
        'name' => 'Implement calculation logic',
        'description' => 'This is a description',
        'priority' => TaskPriority::HIGH,
        'status' => TaskStatus::PENDING,
        'project_id' => $project->id,
    ]);
});
