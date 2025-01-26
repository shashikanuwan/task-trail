<div x-data="{
        isDarkMode: localStorage.getItem('darkMode') === 'true' || localStorage.getItem('darkMode') === null
    }"
     x-init="
        if (isDarkMode) { document.body.classList.add('dark'); }
    "
     x-effect="
        document.body.classList.toggle('dark', isDarkMode);
        localStorage.setItem('darkMode', isDarkMode);
    ">
    <label class="flex items-center cursor-pointer">
        <div class="relative w-12 h-6">
            <input type="checkbox" class="sr-only peer" x-model="isDarkMode">
            <div
                class="absolute inset-0 rounded-full ring-2 ring-indigo-300 dark:ring-indigo-800
                       bg-indigo-200 dark:bg-gradient-to-r from-indigo-500 to-gray-200 transition-all duration-500">
            </div>
            <div class="absolute top-1/2 left-1 peer-checked:left-6 transform -translate-y-1/2 w-4 h-4
                        flex items-center justify-center rounded-full
                        shadow-md transition-all duration-500">
                <template x-if="!isDarkMode">
                    <x-icon.cloud class="w-3 h-3 text-gray-800 dark:text-indigo-400 transition-opacity duration-500" />
                </template>
                <template x-if="isDarkMode">
                    <x-icon.moon class="w-3 h-3 text-gray-800 dark:text-indigo-400 transition-opacity duration-500" />
                </template>
            </div>
        </div>
        <span class="ms-6 text-sm font-medium">
            <template x-if="!isDarkMode">Light Mode</template>
            <template x-if="isDarkMode">Dark Mode</template>
        </span>
    </label>
</div>
