/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js,php}"],
  theme: {
    container: {
      center: true,
      screens: {
        sm: "720px",
        md: "960px",
        lg: "1280px",
        xl: "1840px",
      },
    },
    extend: {
      spacing: {
        128: "32rem",
      },
      backgroundImage: {
        gameplayer: "url(..//images/test.jpg)",
      },
    },
  },
  plugins: [],
};
