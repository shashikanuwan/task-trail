<?php

namespace App\View\Components\Board;

use App\Models\Project;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class FetchProjects extends Component
{
    public Collection $projects;

    public function __construct()
    {
        $this->projects = Project::query()->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.board.fetch-projects');
    }
}
