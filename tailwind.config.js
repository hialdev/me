/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: ["./public/src/**/*.{html,js}","./resources/**/*.{html,js,vue}", "./resources/views/**/*.{blade.php,php,html,js}"],
  theme: {
    extend: {
      animation: {
        'infinite-scroll': 'infinite-scroll 25s linear infinite',
      },
      keyframes: {
        'infinite-scroll': {
          from: { transform: 'translateX(0)' },
          to: { transform: 'translateX(-100%)' },
        }
      }
    },
  },
  plugins: [],
}
