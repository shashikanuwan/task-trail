<div>
    @foreach ($projects as $project)
        <li class="relative group">
            <a href="#" class="block py-2 px-3 rounded-md hover:bg-indigo-300 dark:hover:bg-indigo-700">
                {{ $project->name }}
            </a>
            <!-- Edit and Delete Buttons -->
            <div class="absolute top-0 right-0 hidden group-hover:flex space-x-2 mt-2 mr-2">
                <button class="text-xs text-white bg-blue-500 hover:bg-blue-600 py-1 px-2 rounded">Edit</button>
                <livewire:project.delete-project :projectId="$project->id"/>
            </div>
        </li>
    @endforeach
</div>

