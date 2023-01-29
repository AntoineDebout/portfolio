/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: "jit",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
        'text-red-500',
        'text-green-500',
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
        extend: {},
    },
    plugins: [],
}
