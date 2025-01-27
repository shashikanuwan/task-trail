<?php

namespace App\Livewire\Task;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ShowTasks extends Component
{
    public Collection $tasks;

    public function mount(Project $project): void
    {
        $this->tasks = $project->tasks;
    }

    public function render(): View
    {
        return view('livewire.task.show-tasks');
    }
}
