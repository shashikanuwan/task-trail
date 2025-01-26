<?php

use App\Actions\Task\DeleteTask;
use App\Models\Task;

use function Pest\Laravel\assertDatabaseMissing;

it('can delete task', function () {
    /** @var Task $task */
    $task = Task::factory()->create();

    resolve(DeleteTask::class)
        ->execute($task);

    assertDatabaseMissing('tasks', [
        'id' => $task->id,
    ]);
});
