<?php

use App\Actions\Project\UpdateProject;
use App\Models\Project;

it('can update project', function () {
    $project = Project::factory()->create();

    resolve(UpdateProject::class)
        ->execute($project, 'Updated Project Name', 'Updated Project Description');

    $this->assertDatabaseHas('projects', [
        'id' => $project->id,
        'name' => 'Updated Project Name',
        'description' => 'Updated Project Description',
    ]);
});
