/** @type {import('tailwindcss').Config} */

module.exports = {
    prefix: 'fic-',
    darkMode: false, // or 'media' or 'class',
    content: [
        './src/Sections/**/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                primary: 'rgb(var(--fictionary-primary-color) / <alpha-value>)',
            },
        },
    },
}
