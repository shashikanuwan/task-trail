<div>
    <button class="text-xs text-white bg-blue-500 hover:bg-blue-600 py-1 px-2 rounded" wire:click="openModal">
        {{__('Edit')}}
    </button>

    <x-modal wire:model="showModal" maxWidth="md">
        <div class="px-6 py-4">
            <h2 class="text-lg font-bold mb-4 text-gray-900 dark:text-white">{{__('Create New Project')}}</h2>

            <form wire:submit="save">
                <div class="mb-4">
                    <x-label for="form.name">{{ __('Name') }}</x-label>
                    <input type="text"
                           wire:model="form.name"
                           class="w-full px-4 py-2 border rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Enter project name">
                    <x-input-error for="form.name" class="mt-2"/>
                </div>

                <div class="mb-4">
                    <x-label for="form.description">{{ __('Description') }}</x-label>
                    <textarea type="text"
                              wire:model="form.description"
                              rows="3"
                              class="w-full px-4 py-2 border rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Enter project description"></textarea>
                    <x-input-error for="form.description" class="mt-2"/>
                </div>

                <div class="flex justify-end space-x-2">
                    <button type="submit" class="px-4 py-2 rounded-md bg-blue-500 hover:bg-blue-600 text-white">
                        {{__('Create')}}
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
</div>

