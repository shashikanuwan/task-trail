<?php

namespace App\View\Components\Board;

use App\Models\Task;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class FetchTasks extends Component
{
    public Collection $tasks;

    public function __construct()
    {
        $this->tasks = Task::query()
            ->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.board.fetch-tasks');
    }
}
