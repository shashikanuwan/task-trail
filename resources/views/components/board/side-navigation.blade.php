<div class="col-span-2 dark:bg-gray-800 dark:text-white bg-gray-100 text-gray-900 flex flex-col justify-between">
    <div class="p-6">
        <h2 class="text-2xl font-semibold mb-4">Projects</h2>
        <ul class="space-y-2">
            <x-board.fetch-projects/>
        </ul>
    </div>
    <div class="p-6">
        <livewire:project.create-project/>
    </div>
</div>
