<?php

namespace Tests\App\Livewire;

use App\Actions\Project\CreateProject as ActionsCreateProject;
use App\Livewire\Project\CreateProject;
use Livewire\Livewire;

it('can renders create project', function () {
    Livewire::test(CreateProject::class)
        ->assertStatus(200);
});

it('can open and close the modal', function () {
    Livewire::test(CreateProject::class)
        ->call('openModal')
        ->assertSet('showModal', true)
        ->call('closeModal')
        ->assertSet('showModal', false);
});

it('validates and stores project data', function () {
    $mockAction = mock(ActionsCreateProject::class)
        ->shouldReceive('execute')
        ->once()
        ->getMock();

    Livewire::test(CreateProject::class)
        ->set('form.name', 'Test Project')
        ->set('form.description', 'Test Description')
        ->call('save', $mockAction)
        ->assertRedirect(route('dashboard'));

    expect(session()->get('status'))
        ->toBe('Project saved.');
});

it('throws validation errors for invalid data', function () {
    $mockAction = mock(ActionsCreateProject::class);

    Livewire::test(CreateProject::class)
        ->set('form.name', '')
        ->call('save', $mockAction)
        ->assertHasErrors(['form.name']);
});

it('renders the correct view', function () {
    Livewire::test(CreateProject::class)
        ->assertViewIs('livewire.project.create-project');
});
