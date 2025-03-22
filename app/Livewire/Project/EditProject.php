<?php

namespace App\Livewire\Project;

use App\Actions\Project\UpdateProject;
use App\Livewire\Forms\ProjectForm;
use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class EditProject extends Component
{
    public ProjectForm $form;

    public bool $showModal = false;

    public Project $project;

    public function mount(Project $project): void
    {
        $this->form->setProject($project);
    }

    /**
     * @throws ValidationException
     */
    public function save(UpdateProject $updateProject): void
    {
        $this->form->update($updateProject);

        session()->flash('status', 'Project updated.');

        $this->project->refresh();

        $this->redirectRoute('projects.tasks', [
            'project' => $this->project,
        ], navigate: true);
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
        return view('livewire.project.edit-project');
    }
}
