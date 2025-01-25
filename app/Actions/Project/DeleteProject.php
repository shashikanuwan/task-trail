<?php

namespace App\Actions\Project;

use App\Models\Project;

class DeleteProject
{
    public function execute(
        Project $project,
    ): void {
        $project->delete();
    }
}
