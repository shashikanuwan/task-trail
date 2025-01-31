<?php

namespace App\Actions\Task;

use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use App\Models\Project;
use App\Models\Task;

class CreateTask
{
    public function execute(
        string $name,
        string $description,
        TaskPriority $taskPriority,
        TaskStatus $taskStatus,
        Project $project
    ): void {
        $task = new Task;
        $task->name = $name;
        $task->description = $description;
        $task->priority = $taskPriority;
        $task->status = $taskStatus;
        $task->project()->associate($project);
        $task->save();
    }
}
