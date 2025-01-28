<?php

use App\Livewire\Task\ShowTasks;
use App\Models\Project;
use App\Models\Task;
use Livewire\Livewire;

it('renders show tasks', function () {
    Livewire::test(ShowTasks::class)
        ->assertStatus(200);
});

it('can show project related tasks', function () {
    /** @var Project $projects */
    $projects = Project::factory(2)
        ->has(Task::factory()->count(5))
        ->create();

    $firstProject = $projects->first();

    Livewire::test(ShowTasks::class, ['project' => $firstProject])
        ->assertSee($firstProject->tasks->first()->name)
        ->assertSee($firstProject->tasks->first()->description)
        ->assertSeeHtml($firstProject->tasks->first()->priority->getHtml())
        ->assertSeeHtml($firstProject->tasks->first()->status->getHtml())
        ->assertCount('tasks', $firstProject->tasks->count());
});

it('renders the show tasks view', function () {
    Livewire::test(ShowTasks::class)
        ->assertViewIs('livewire.task.show-tasks');
});
