<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ShowProjects extends Component
{
    public Collection $projects;

    public function mount(): void
    {
        $this->projects = Project::query()->get();
    }

    public function render(): View
    {
        return view('livewire.project.show-projects');
    }
}
