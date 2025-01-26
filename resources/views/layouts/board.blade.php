<x-guest-layout>
    <div class="min-h-screen flex flex-col dark:bg-gray-900 dark:text-white bg-gray-50 text-gray-900">
        <x-board.top-navigation/>

        <div class="grid grid-cols-12 h-screen pt-16">
            <x-board.side-navigation/>

            <!-- Main Area -->
            <div class="col-span-10 px-6 dark:bg-gray-800 bg-gray-100">
                <x-board.sub-navigation/>

                <div class="flex gap-6">
                    <!-- Content Aria -->
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
