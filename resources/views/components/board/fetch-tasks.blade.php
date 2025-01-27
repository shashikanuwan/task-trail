<div class="overflow-x-auto">
    <div class="grid grid-flow-col auto-cols-[22rem] gap-4">
        @foreach (\App\Enums\TaskStatus::cases() as $status)
            <div class="flex flex-col rounded-lg shadow-md p-4 h-[calc(100vh-12rem)] dark:bg-gray-700 bg-gray-200">
                <!-- Status Label -->
                <div class="text-lg font-semibold mb-4 text-center">
                    {{ $status->label() }}
                </div>

                <!-- Tasks List -->
                <div class="flex-1 overflow-y-auto space-y-4">
                    @forelse ($tasks->where('status', $status) as $task)
                        <div class="bg-gray-50 text-gray-900 dark:bg-gray-800 dark:text-white p-4 shadow rounded-md cursor-pointer"
                            wire:click="editTask({{ $task->id }})">
                            <p class="font-bold">{{ $task->name }}</p>
                            <p class="text-sm">{{ $task->description }}</p>
                        </div>
                    @empty
                        <p class="text-gray-500 dark:text-gray-400 text-center">No tasks available</p>
                    @endforelse
                </div>
            </div>
        @endforeach
    </div>
</div>
