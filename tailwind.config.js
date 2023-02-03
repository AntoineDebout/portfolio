/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: "jit",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
        'p-2',
        'ml-4',
        'text-xs',
        'text-red-500',
        'text-green-500',
        'text-green-100',
        'text-blue-500',
        'bg-green-100',
        'bg-blue-100',
        'bg-red-100',
        'rounded-full',
    ],
    theme: {
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
        },
        extend: {
            animation: {
                typing: 'typing 5s infinite steps(28)',
            },
            keyframes: {
                typing: {
                    '0%': {
                        width: '0',
                    },
                    '100%': {
                        width: '28ch',
                    },
                },
            },
        },
    },
    plugins: [],
}
