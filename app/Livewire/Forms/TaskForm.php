<?php

namespace App\Livewire\Forms;

use App\Actions\Task\CreateTask;
use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use App\Models\Project;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Livewire\Form;

class TaskForm extends Form
{
    public ?Project $project;

    public string $name = '';

    public string $description = '';

    public string $priority = '';

    public string $status = '';

    protected function rules(): array
    {
        return [
            'name' => ['required', 'max:50'],
            'description' => ['required', 'max:255'],
            'priority' => ['required', Rule::enum(TaskPriority::class)],
            'status' => ['required', Rule::enum(TaskStatus::class)],
        ];
    }

    /**
     * @throws ValidationException
     */
    public function store(CreateTask $createTask): void
    {
        $this->validate();

        $createTask->execute(
            $this->name,
            $this->description,
            TaskPriority::from($this->priority),
            TaskStatus::from($this->status),
            $this->project
        );

        $this->reset();
    }
}
