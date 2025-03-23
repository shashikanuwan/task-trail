<?php

namespace App\Actions\Project;

use App\Models\Project;

class CreateProject
{
    public function execute(
        string $name,
        string $description
    ): Project {
        $project = new Project;
        $project->name = $name;
        $project->description = $description;
        $project->save();

        return $project;
    }
}
