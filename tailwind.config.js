/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        spacing: {
            '136': '35rem',
        },
        borderRadius: {
            'large': '40%',
        }
    },
  },
  plugins: [],
  darkMode: 'class',
}

