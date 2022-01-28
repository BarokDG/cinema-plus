module.exports = {
  content: ["**/*.php", "*.php", "**/*.html", "*.html"],
  theme: {
    extend: {
      fontFamily: {
        spice: "Spicy Rice",
        sans: "Open Sans",
      },
      gridTemplateColumns: {
        single: "1fr 200px",
      },
      colors: {
        primary: "#efcf4f",
        secondary: "#c25934",
        tertiary: "#0c4b65",
        tertiaryDark: "#0a3f55",
      },
    },
  },
  plugins: [],
};
