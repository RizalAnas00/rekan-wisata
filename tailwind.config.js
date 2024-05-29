/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/dashboard.blade.php",
    "./resources/views/login.blade.php",
    "./resources/views/daftar.blade.php",
    "./resources/views/DataDiri.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        green: {
          900: '#064e3b',
          700: '#065f46',
          600: '#047857',
        },
      },
    },
  },
  plugins: [],
}
