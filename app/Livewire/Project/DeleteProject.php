<?php

namespace App\Livewire\Project;

use App\Actions\Project\DeleteProject as ProjectDeleteProject;
use App\Models\Project;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class DeleteProject extends Component
{
    public $projectId;

    public function delete(ProjectDeleteProject $deleteProject)
    {
        $deleteProject->execute(Project::query()->find($this->projectId));

        session()->flash('success', 'Project successfully deleted.');

        $this->redirectRoute('dashboard', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.project.delete-project');
    }
}
