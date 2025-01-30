<?php

use App\Actions\Project\CreateProject;

it('can create project', function () {
    resolve(CreateProject::class)
        ->execute(
            'Todo app',
            'This is a description'
        );

    $this->assertDatabaseHas('projects', [
        'name' => 'Todo app',
        'description' => 'This is a description',
    ]);
});
