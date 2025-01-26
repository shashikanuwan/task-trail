<?php

namespace App\Livewire\Project;

use App\Actions\Project\CreateProject as ActionsCreateProject;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateProject extends Component
{
    public bool $showModal = false;

    #[Validate('required|max:50')]
    public string $name;

    #[Validate('required|max:255')]
    public string $description;

    public function createProject(ActionsCreateProject $createProject): void
    {
        $this->validate();
        $createProject->execute($this->name, $this->description);

        session()->flash('success', 'Project successfully created.');

        $this->redirectRoute('dashboard', navigate: true);
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
