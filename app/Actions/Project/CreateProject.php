<?php

namespace App\Actions\Project;

use App\Models\Project;

class CreateProject
{
    public function execute(
        string $name,
        string $description
    ): void {
        $project = new Project;
        $project->name = $name;
        $project->description = $description;
        $project->save();
    }
}
