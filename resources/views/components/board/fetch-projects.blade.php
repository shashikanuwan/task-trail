<div>
    @foreach ($projects as $project)
        <li>
            <a href="#" class="block py-2 px-3 rounded-md hover:bg-indigo-300 dark:hover:bg-indigo-700">{{ $project->name }}</a>
        </li>
    @endforeach
</div>
