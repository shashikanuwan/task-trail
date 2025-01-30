<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ShowTask extends Component
{
    public Task $task;

    public bool $showModal = false;

    public function openModal(): void
    {
        $this->showModal = true;
    }

    public function render(): View
    {
        return view('livewire.task.show-task');
    }
}
