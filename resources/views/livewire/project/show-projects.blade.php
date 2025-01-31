<div>
    @foreach ($this->projects as $project)
        <li class="relative group my-2">
            <a href="{{ route('project.tasks', $project) }}"
               wire:navigate
               class="block py-2 px-3 rounded-md
               {{ request()->is('project/' . $project->slug . '/tasks') ? 'font-bold  bg-zinc-400 dark:bg-zinc-500' : 'bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600' }}">
                {{ $project->name }}
            </a>
            <!-- Edit and Delete Buttons -->
            <div class="absolute top-0 right-0 hidden group-hover:flex space-x-2 mt-2 mr-2">
                <livewire:project.edit-project :project="$project"/>
                <livewire:project.delete-project :$project/>
            </div>
        </li>
    @endforeach
</div>
