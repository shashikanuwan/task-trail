<?php

namespace App\Livewire\Task;

use App\Actions\Task\CreateTask as ActionsCreateTask;
use App\Livewire\Forms\TaskForm;
use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreateTask extends Component
{
    public bool $showModal = false;

    public TaskForm $form;

    public Project $project;

    public function mount(Project $project): void
    {
        $this->form->project = $project;
    }

    /**
     * @throws ValidationException
     */
    public function save(ActionsCreateTask $createTask): void
    {
        $this->form->store($createTask);

        session()->flash('status', 'Task saved.');

        $this->redirectRoute('projects.tasks', $this->project, navigate: true);
    }

    public function openModal(): void
    {
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
    }

    public function render(): View
    {
        return view('livewire.task.create-task');
    }
}
