/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
    "./resources/css/**/*.css",
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },
      screens: {
        '3xl': '120rem', // custom breakpoint
      },
      colors: {
        // Fonts
        'heading-dark': '#3a3a3a',
        'paragraph': '#7b7676',

        // UI Colors
        'blue-button': '#247bff',
        'card': '#f8f8f8',
        'lime': '#1ec515',
        'yellow-orange': '#ffb120',
        'danger': '#ed234f',
        'active': '#7adb37',

        // Avocado Palette
        'avocado-100': 'oklch(0.99 0 0)',
        'avocado-200': 'oklch(0.98 0.04 113.22)',
        'avocado-300': 'oklch(0.94 0.11 115.03)',
        'avocado-400': 'oklch(0.92 0.19 114.08)',
        'avocado-500': 'oklch(0.84 0.18 117.33)',
        'avocado-600': 'oklch(0.53 0.12 118.34)',
      },
      transitionTimingFunction: {
        fluid: 'cubic-bezier(0.3, 0, 0, 1)',
        snappy: 'cubic-bezier(0.2, 0, 0, 1)',
      },
    },
  },
  plugins: [],
}
