<?php

namespace App\Actions\Task;

use App\Enums\TaskPriority;
use App\Models\Task;

class UpdateTask
{
    public function execute(
        Task $task,
        string $name,
        string $description,
        TaskPriority $priority
    ): void {
        $task->name = $name;
        $task->description = $description;
        $task->priority = $priority;
        $task->save();
    }
}
