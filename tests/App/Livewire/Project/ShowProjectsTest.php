<?php

use App\Livewire\Project\ShowProjects;
use App\Models\Project;
use Livewire\Livewire;

it('renders show projects', function () {
    Livewire::test(ShowProjects::class)
        ->assertStatus(200);
});

it('retrieves projects as a computed property', function () {
    /** @var Project $projects */
    $projects = Project::factory(5)->create();

    Livewire::test(ShowProjects::class)
        ->assertSee($projects->first()->name)
        ->assertSee($projects->last()->description)
        ->assertCount('projects', $projects->count());
});
