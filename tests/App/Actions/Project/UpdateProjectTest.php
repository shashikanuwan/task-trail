<?php

use App\Actions\Project\UpdateProject;
use App\Models\Project;

use function Pest\Laravel\assertDatabaseHas;

it('can update project', function () {
    /** @var Project $project */
    $project = Project::factory()->create();

    resolve(UpdateProject::class)
        ->execute($project, 'Updated Project Name', 'Updated Project Description');

    assertDatabaseHas('projects', [
        'id' => $project->id,
        'name' => 'Updated Project Name',
        'description' => 'Updated Project Description',
    ]);
});
