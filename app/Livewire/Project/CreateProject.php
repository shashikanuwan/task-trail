<?php

namespace App\Livewire\Project;

use App\Actions\Project\CreateProject as ActionsCreateProject;
use App\Livewire\Forms\ProjectForm;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

/**
 * @method emit(string $string)
 */
class CreateProject extends Component
{
    public bool $showModal = false;

    public ProjectForm $form;

    /**
     * @throws ValidationException
     */
    public function save(ActionsCreateProject $createProject): void
    {
        $this->form->store($createProject);

        session()->flash('status', 'Post saved.');

        $this->redirectRoute('dashboard');
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
        return view('livewire.project.create-project');
    }
}
