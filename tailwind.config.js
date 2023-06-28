/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './storage/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

