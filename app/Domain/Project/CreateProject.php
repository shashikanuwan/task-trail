<?php

namespace TaskTrail\Project;

class CreateProject
{
    public function execute(
        string $name,
        string $description
    )
    {
        $project = new Project();
        $project->name = $name;
        $project->description = $description;
        $project->save();
    }
}
