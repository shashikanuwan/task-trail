<?php

namespace App\Livewire\Forms;

use App\Actions\Project\CreateProject as ActionsCreateProject;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProjectForm extends Form
{
    #[Validate('required|max:50')]
    public string $name;

    #[Validate('required|max:255')]
    public string $description;

    /**
     * @throws ValidationException
     */
    public function store(ActionsCreateProject $createProject): void
    {
        $this->validate();

        $createProject->execute($this->name, $this->description);
    }
}
