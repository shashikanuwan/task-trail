<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ShowProjects extends Component
{
    #[Computed]
    public function projects(): Collection
    {
        return Project::query()->get();
    }
}
