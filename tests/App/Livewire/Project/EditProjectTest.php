<?php

use App\Actions\Project\UpdateProject;
use App\Livewire\Project\EditProject;
use App\Models\Project;
use Livewire\Livewire;

it('renders edit project', function () {
    $project = Project::factory()->create();

    Livewire::test(EditProject::class, ['project' => $project])
        ->assertStatus(200);
});

it('can open and close the edit modal', function () {
    $project = Project::factory()->create();

    Livewire::test(EditProject::class, ['project' => $project])
        ->call('openModal')
        ->assertSet('showModal', true)
        ->call('closeModal')
        ->assertSet('showModal', false);
});

it('can update project and redirect', function () {
    /** @var Project $project */
    $project = Project::factory()->create([
        'name' => 'Project 1',
        'description' => 'Description 1',
    ]);

    mock(UpdateProject::class)->shouldReceive('execute');

    Livewire::test(EditProject::class, ['project' => $project])
        ->set('form.name', 'name updated')
        ->set('form.description', 'description updated')
        ->call('save')
        ->assertRedirect(route('projects.tasks', $project->refresh()));

    expect(session()->get('status'))
        ->toBe('Project updated.');
});

it('throws validation errors for invalid data', function () {
    /** @var Project $project */
    $project = Project::factory()->create();

    mock(UpdateProject::class);

    Livewire::test(EditProject::class, ['project' => $project])
        ->set('form.name', '')
        ->call('save')
        ->assertHasErrors(['form.name']);
});

it('renders the edit project view', function () {
    $project = Project::factory()->create();

    Livewire::test(EditProject::class, ['project' => $project])
        ->assertViewIs('livewire.project.edit-project');
});
