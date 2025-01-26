<?php

namespace App\Actions\Task;

use App\Models\Task;

class DeleteTask
{
    public function execute(
        Task $task
    ): void {
        $task->delete();
    }
}
