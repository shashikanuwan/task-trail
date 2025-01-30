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
    mock(ActionsCreateProject::class)
        ->shouldReceive('execute');

    Livewire::test(CreateProject::class)
        ->set('form.name', 'Test Project')
        ->set('form.description', 'Test Description')
        ->call('save')
        ->assertRedirect(route('dashboard'));

    expect(session()->get('status'))
        ->toBe('Project saved.');
});

it('throws validation errors for invalid data', function () {
    mock(ActionsCreateProject::class);

    Livewire::test(CreateProject::class)
        ->set('form.name', '')
        ->call('save')
        ->assertHasErrors(['form.name']);
});

it('renders the correct view', function () {
    Livewire::test(CreateProject::class)
        ->assertViewIs('livewire.project.create-project');
});
