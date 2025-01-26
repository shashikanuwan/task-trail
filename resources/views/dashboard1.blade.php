<x-guest-layout>
    <div class="min-h-screen flex flex-col dark:bg-gray-900 dark:text-white bg-gray-50 text-gray-900">
        <!-- Navbar -->
        <nav class="dark:bg-gray-900 dark:text-white fixed top-0 w-full z-10">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <div class="text-xl font-semibold">
                    taskTrail
                </div>
                <div class="flex space-x-6 items-center">
                    <span>User Name</span>
                    <x-modes />
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="grid grid-cols-12 h-screen pt-16">
            <!-- Sidebar -->
            <div class="col-span-2 dark:bg-gray-800 dark:text-white bg-indigo-100 text-gray-900 flex flex-col justify-between">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-4">Projects</h2>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="block py-2 px-3 rounded-md hover:bg-indigo-300 dark:hover:bg-indigo-700">Project 1</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 rounded-md hover:bg-indigo-300 dark:hover:bg-indigo-700">Project 2</a>
                        </li>
                    </ul>
                </div>
                <div class="p-6">
                    <button
                        class="w-full py-2 px-4 rounded-lg dark:bg-blue-500 dark:hover:bg-blue-600 dark:text-white bg-blue-400 hover:bg-blue-500 text-gray-900">
                        + Create Project
                    </button>
                </div>
            </div>

            <!-- Main Area -->
            <div class="col-span-10 px-6 dark:bg-gray-800 bg-gray-100">
                <div class="flex justify-between items-center py-4">
                    <h1 class="text-2xl font-bold">Project Management Tool</h1>
                    <button
                        class="py-2 px-4 rounded-lg dark:bg-blue-500 dark:hover:bg-blue-600 dark:text-white bg-blue-400 hover:bg-blue-500 text-gray-900"
                        wire:click="$emit('openModal')">
                        + New Task
                    </button>
                </div>

                <!-- Status Columns -->
                <div class="flex gap-6">
                    @foreach (['Not Started', 'In Progress', 'Blocked', 'Completed'] as $status)
                        <div class="flex flex-col rounded-lg shadow-md p-4 w-1/4 h-[calc(100vh-12rem)] dark:bg-gray-700 bg-gray-200">
                            <div class="text-lg font-semibold mb-4 text-center">
                                {{ $status }}
                            </div>
                            <div class="flex-1 overflow-y-auto space-y-4">
                                @php
                                    $tasks = [
                                        ['id' => 1, 'status' => 'Not Started', 'title' => 'Task 1', 'user' => 'User 1'],
                                        ['id' => 1, 'status' => 'Not Started', 'title' => 'Task 1', 'user' => 'User 1'],
                                        ['id' => 1, 'status' => 'Not Started', 'title' => 'Task 1', 'user' => 'User 1'],
                                        ['id' => 2, 'status' => 'In Progress', 'title' => 'Task 2', 'user' => 'User 2'],
                                    ];

                                    // Filter tasks by the desired status
                                    $filteredTasks = array_filter($tasks, function ($task) use ($status) {
                                        return $task['status'] === $status;
                                    });
                                @endphp

                                @foreach ($filteredTasks as $task)
                                    <div class="bg-gray-50 text-gray-900 dark:bg-gray-800 dark:text-white p-4 shadow rounded-md cursor-pointer" wire:click="editTask({{ $task['id'] }})">
                                        <p class="font-bold text">{{ $task['title'] }}</p>
                                        <p class="text-sm">Assigned to {{ $task['user'] }}</p>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Task Modal -->
        @stack('modals')
    </div>
</x-guest-layout>
