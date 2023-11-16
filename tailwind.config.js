/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors:{
        secondary:{
          DEFAULT:"var(--secondary-color)",
          33:"#4E5D7833",
          "4e": "#4E5D7899"
        },
        secondary1:"#4E5D7808",
        secondary2:"#4E5D7899",
        primary: "#377DFF"
      },
      spacing:{
        30:"30px",
        50:"50px",
      }
    },
  },
  plugins: [],
}
