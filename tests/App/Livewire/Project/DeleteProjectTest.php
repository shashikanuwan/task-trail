<?php

use App\Actions\Project\DeleteProject as ActionsDeleteProject;
use App\Livewire\Project\DeleteProject;
use App\Models\Project;
use Livewire\Livewire;

it('renders delete project', function () {
    Livewire::test(DeleteProject::class)
        ->assertStatus(200);
});

it('can delete a project and redirect', function () {
    /** @var Project $project */
    $project = Project::factory()->create();

    $mockAction = mock(ActionsDeleteProject::class)
        ->shouldReceive('execute')
        ->withArgs(function ($arg) use ($project) {
            return $arg->id === $project->id;
        });

    Livewire::test(DeleteProject::class, ['projectId' => $project->id])
        ->call('delete', $mockAction)
        ->assertRedirect(route('dashboard'));

    expect(session()->get('status'))->toBe('Project deleted.');
});

it('renders the delete project view', function () {
    Livewire::test(DeleteProject::class)
        ->assertViewIs('livewire.project.delete-project');
});
