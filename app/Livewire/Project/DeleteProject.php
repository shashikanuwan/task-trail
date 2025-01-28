<?php

namespace App\Livewire\Project;

use App\Actions\Project\DeleteProject as ActionsDeleteProject;
use App\Models\Project;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class DeleteProject extends Component
{
    #[Locked]
    public int $projectId;

    public function delete(ActionsDeleteProject $deleteProject): void
    {
        $deleteProject->execute(Project::query()->find($this->projectId));

        session()->flash('status', 'Project deleted.');

        $this->redirectRoute('dashboard', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.project.delete-project');
    }
}
