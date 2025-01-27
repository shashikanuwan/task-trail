import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    safelist: [
        "bg-rose-200", "text-rose-600",
        "bg-red-200", "text-red-600",
        "bg-slate-200", "text-slate-600",
        "bg-green-200", "text-green-600",
        "bg-amber-200", "text-amber-600",
        "bg-purple-200", "text-purple-600",
        "bg-violet-200", "text-violet-600",
        "bg-emerald-200", "text-emerald-600",
        "bg-yellow-200", "text-yellow-600"
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography],
};
