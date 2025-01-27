<div>
    @foreach ($projects as $project)
        <li class="relative group">
            <a href="#" class="block py-2 px-3 rounded-md hover:bg-indigo-300 dark:hover:bg-indigo-700">
                {{ $project->name }}
            </a>
            <!-- Edit and Delete Buttons -->
            <div class="absolute top-0 right-0 hidden group-hover:flex space-x-2 mt-2 mr-2">
                <livewire:project.edit-project :project="$project"/>
                <livewire:project.delete-project :projectId="$project->id"/>
            </div>
        </li>
    @endforeach
</div>
