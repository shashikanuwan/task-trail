<?php

namespace App\Actions\Project;

use App\Models\Project;

class UpdateProject
{
    public function execute(
        Project $project,
        string $name,
        string $description
    ): void {
        $project->name = $name;
        $project->description = $description;
        $project->save();
    }
}
