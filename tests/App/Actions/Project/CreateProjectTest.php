<?php

use App\Actions\Project\CreateProject;
use App\Models\Project;

it('can create project', function () {
    resolve(CreateProject::class)
        ->execute(
            'Todo app',
            'This is a description'
        );

    $this->assertDatabaseHas(Project::class, [
        'name' => 'Todo app',
        'description' => 'This is a description',
    ]);
});
