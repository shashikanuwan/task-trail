<x-board-layout >
    @foreach (\App\Enums\TaskStatus::cases() as $status)
        <div class="flex flex-col rounded-lg shadow-md p-4 w-1/4 h-[calc(100vh-12rem)] dark:bg-gray-700 bg-gray-200">
            <div class="text-lg font-semibold mb-4 text-center">
                {{ $status->label() }}
            </div>
            <div class="flex-1 overflow-y-auto space-y-4">
                @php
                    $tasks = [
                        ['id' => 1, 'status' => 'pending', 'title' => 'Task 1', 'user' => 'User 1'],
                    ];

                    $filteredTasks = array_filter($tasks, function ($task) use ($status) {
                        return $task['status'] === $status->value;
                    });
                @endphp

                @foreach ($filteredTasks as $task)
                    <div
                        class="bg-gray-50 text-gray-900 dark:bg-gray-800 dark:text-white p-4 shadow rounded-md cursor-pointer"
                        wire:click="editTask({{ $task['id'] }})">
                        <p class="font-bold text">{{ $task['title'] }}</p>
                        <p class="text-sm">Assigned to {{ $task['user'] }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    @endforeach
</x-board-layout>
