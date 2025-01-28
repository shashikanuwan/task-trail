<?php

use App\Livewire\Project\ShowProjects;
use App\Models\Project;
use Livewire\Livewire;

it('renders show projects', function () {
    Livewire::test(ShowProjects::class)
        ->assertStatus(200);
});

it('can show all projects', function () {
    /** @var Project $projects */
    $projects = Project::factory(5)->create();

    Livewire::test(ShowProjects::class)
        ->assertSee($projects->first()->name)
        ->assertSee($projects->last()->description)
        ->assertCount('projects', $projects->count());
});

it('renders the show projects view', function () {
    Livewire::test(ShowProjects::class)
        ->assertViewIs('livewire.project.show-projects');
});
