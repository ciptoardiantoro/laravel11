/** @type {import('tailwindcss').Config} */
const defaulttheme = require('tailwindcss/defaultTheme');
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
       
      fontFamily:{
        sans:["inter var",  ...defaulttheme.fontFamily.sans],
      },
    },
  },
  plugins: [],
}