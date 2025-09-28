/** @type {import('tailwindcss').Config} */

module.exports = {
    prefix: 'fic-',
    darkMode: 'selector', // or 'media' or 'class',
    content: [
        './src/Sections/**/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                primary: 'rgb(var(--fictionary-primary-color) / <alpha-value>)',
                accent: {
                    50: 'rgb(var(--fictionary-accent-color-50) / <alpha-value>)',
                    100: 'rgb(var(--fictionary-accent-color-100) / <alpha-value>)',
                    200: 'rgb(var(--fictionary-accent-color-200) / <alpha-value>)',
                    300: 'rgb(var(--fictionary-accent-color-300) / <alpha-value>)',
                    400: 'rgb(var(--fictionary-accent-color-400) / <alpha-value>)',
                    500: 'rgb(var(--fictionary-accent-color-500) / <alpha-value>)',
                    600: 'rgb(var(--fictionary-accent-color-600) / <alpha-value>)',
                    700: 'rgb(var(--fictionary-accent-color-700) / <alpha-value>)',
                    800: 'rgb(var(--fictionary-accent-color-800) / <alpha-value>)',
                    900: 'rgb(var(--fictionary-accent-color-900) / <alpha-value>)',
                    950: 'rgb(var(--fictionary-accent-color-950) / <alpha-value>)',
                }
            },
        },
    },
}
