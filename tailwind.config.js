/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: "jit",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
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
