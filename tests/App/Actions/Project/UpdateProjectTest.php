<?php

use App\Actions\Project\UpdateProject;
use App\Models\Project;

use function Pest\Laravel\assertDatabaseHas;

it('can update project', function () {
    /** @var Project $project */
    $project = Project::factory()->create();

    resolve(UpdateProject::class)
        ->execute(
            $project,
            'Task app',
            'This is a description'
        );

    assertDatabaseHas(Project::class, [
        'id' => $project->id,
        'name' => 'Task app',
        'description' => 'This is a description',
    ]);
});
