/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
  plugins: [require('daisyui')],

//Apabila warna background tampilan web menjadi hitam, tambahkan kode berikut
daisyui: {
  themes: ["light"],
},
}