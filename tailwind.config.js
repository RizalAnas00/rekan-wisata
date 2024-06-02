/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/dashboard.blade.php",
    "./resources/views/rekomendasiWisata.blade.php",
    "./resources/views/detailWisata.blade.php",
    "./resources/views/login.blade.php",
    "./resources/views/daftar.blade.php",
    "./resources/views/DataDiri.blade.php",
    "./resources/views/jadwal.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      textweight: {
        'semi-bold': '750',
      },
      fontSize: {
        'xs': '.75rem',
        'sm': '.875rem',
        'tiny': '.875rem',
        'base': '1rem',
        'lg': '1.125rem',
        'xl': '1.25rem',
        '2xl': '1.5rem',
        '3xl': '1.875rem',
        '4xl': '2.25rem',
        '5xl': '3rem',
        '6xl': '4rem',
      },

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
