<?php

use App\Actions\Project\CreateProject;

it('can create project', function () {
    resolve(CreateProject::class)
        ->execute('Project Name', 'Project Description');

    $this->assertDatabaseHas('projects', [
        'name' => 'Project Name',
        'description' => 'Project Description',
    ]);
});
