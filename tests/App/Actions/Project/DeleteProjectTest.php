<?php

use App\Actions\Project\DeleteProject;
use App\Models\Project;

use function Pest\Laravel\assertDatabaseMissing;

it('can delete project', function () {
    /** @var Project $project */
    $project = Project::factory()->create();

    resolve(DeleteProject::class)->execute($project);

    assertDatabaseMissing('projects', [
        'id' => $project->id,
    ]);
});
