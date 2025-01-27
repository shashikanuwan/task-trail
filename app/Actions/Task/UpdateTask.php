<?php

namespace App\Actions\Task;

use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use App\Models\Task;

class UpdateTask
{
    public function execute(
        Task $task,
        string $name,
        string $description,
        TaskPriority $priority,
        TaskStatus $taskStatus,
    ): void {
        $task->name = $name;
        $task->description = $description;
        $task->priority = $priority;
        $task->status = $taskStatus;
        $task->save();
    }
}
