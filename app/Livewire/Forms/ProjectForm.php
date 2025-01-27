<?php

namespace App\Livewire\Forms;

use App\Actions\Project\CreateProject;
use App\Actions\Project\UpdateProject;
use App\Models\Project;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProjectForm extends Form
{
    public ?Project $project;

    #[Validate('required|max:50')]
    public string $name = '';

    #[Validate('required|max:255')]
    public string $description = '';

    public function setProject(Project $project): void
    {
        $this->project = $project;

        $this->name = $project->name;

        $this->description = $project->description;
    }

    /**
     * @throws ValidationException
     */
    public function store(CreateProject $createProject): void
    {
        $this->validate();

        $createProject->execute($this->name, $this->description);

        $this->reset();
    }

    /**
     * @throws ValidationException
     */
    public function update(UpdateProject $updateProject): void
    {
        $this->validate();

        $updateProject->execute(
            $this->project,
            $this->name,
            $this->description
        );

        $this->reset();
    }
}
