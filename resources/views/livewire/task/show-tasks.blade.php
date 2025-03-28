<div class="overflow-x-auto">

    <x-board.sub-navigation>
        <livewire:task.create-task :project="$this->project"/>
    </x-board.sub-navigation>

    <div class="grid grid-flow-col auto-cols-[22rem] gap-4">
        @foreach (\App\Enums\TaskStatus::cases() as $status)
            <div class="flex flex-col rounded-lg shadow-md p-4 h-[calc(100vh-12rem)] dark:bg-gray-700 bg-gray-200">
                <!-- Status Label -->
                <div class="text-lg font-semibold mb-4 text-center">
                    {!! $status->getHtml() !!}
                </div>

                <!-- Tasks List -->
                <div class="flex-1 overflow-y-auto space-y-4">
                    @forelse ($tasks->where('status', $status) as $task)
                        <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 p-6 shadow-lg rounded-lg cursor-pointer hover:shadow-md hover:dark:shadow-xl">
                            <div class="mb-3">
                                <p class="text-lg font-semibold">{{ $task->name }}</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">
                                    {!! $task->priority->getHtml() !!}
                                </p>
                            </div>
                            <p class="text-sm text-gray-700 dark:text-gray-300 line-clamp-3">{{ $task->description }}</p>

                            <div class="flex justify-center">
                                <livewire:task.show-task :$task />
                            </div>
                        </div>
                    @empty

                    @endforelse
                </div>
            </div>
        @endforeach
    </div>
</div>
