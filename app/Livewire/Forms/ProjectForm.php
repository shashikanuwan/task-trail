<?php

namespace App\Livewire\Forms;

use App\Actions\Project\CreateProject;
use App\Actions\Project\UpdateProject;
use App\Models\Project;
use Illuminate\Validation\ValidationException;
use Livewire\Form;

class ProjectForm extends Form
{
    public ?Project $project;

    public string $name = '';

    public string $description = '';

    protected function rules(): array
    {
        return [
            'name' => ['required', 'max:50'],
            'description' => ['required', 'max:255'],
        ];
    }

    public function setProject(Project $project): void
    {
        $this->project = $project;

        $this->name = $project->name;

        $this->description = $project->description;
    }

    /**
     * @throws ValidationException
     */
    public function store(CreateProject $createProject): Project
    {
        $this->validate();

        $project = $createProject->execute($this->name, $this->description);

        $this->reset();

        return $project;
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
