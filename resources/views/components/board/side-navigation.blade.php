<div class="col-span-2 dark:bg-gray-800 dark:text-white bg-indigo-100 text-gray-900 flex flex-col justify-between">
    <div class="p-6">
        <h2 class="text-2xl font-semibold mb-4">Projects</h2>
        <ul class="space-y-2">
            <x-board.fetch-projects/>
        </ul>
    </div>
    <div class="p-6">
        <button
            class="w-full py-2 px-4 rounded-lg dark:bg-blue-500 dark:hover:bg-blue-600 dark:text-white bg-blue-400 hover:bg-blue-500 text-gray-900">
            + Create Project
        </button>
    </div>
</div>
