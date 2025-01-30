<div>
    <button wire:click="openModal">
        {{'Edit'}}
    </button>

    <x-modal wire:model="showModal" maxWidth="2xl">
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg p-6 overflow-y-auto max-h-[80vh]">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">
                {{ $task->name }}
            </h2>

            <div class="grid grid-cols-1 gap-4">
                <div class="flex items-center space-x-2">
                    <span class="block font-bold text-gray-600 dark:text-gray-300 w-32">Status</span>
                    <div>{!! $task->status->getHtml() !!}</div>
                </div>

                <div class="flex items-center space-x-2">
                    <span class="block font-bold text-gray-600 dark:text-gray-300 w-32">Priority</span>
                    <div>{!! $task->priority->getHtml() !!}</div>
                </div>

                <div class="flex items-center space-x-2">
                    <span class="block font-bold text-gray-600 dark:text-gray-300 w-32">Assignee</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Empty</span>
                </div>

                <div class="flex items-center space-x-2">
                    <span class="block font-bold text-gray-600 dark:text-gray-300 w-32">Estimated Hours</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">10</span>
                </div>

                <div class="flex items-center space-x-2">
                    <span class="block font-bold text-gray-600 dark:text-gray-300 w-32">Due Date</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Empty</span>
                </div>

                <div class="flex items-center space-x-2">
                    <span class="block font-bold text-gray-600 dark:text-gray-300 w-32">Created By</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Shashika</span>
                </div>

                <div class="flex items-center space-x-2">
                    <span class="block font-bold text-gray-600 dark:text-gray-300 w-32">Date Created</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">March 01, 2024</span>
                </div>

                <div class="flex items-center space-x-2">
                    <span class="block font-bold text-gray-600 dark:text-gray-300 w-32">Type</span>
                    <span class="text-sm px-2 py-1 rounded bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300">Frontend</span>
                </div>
            </div>
        </div>
    </x-modal>
</div>

