module.exports = {
  purge: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
  theme: {
    screens: {
      sm: "600px",
      md: "728px",
      lg: "964px",
      xl: "1180px",
      "2xl": "1496px",
    },
    fontFamily: {
      sans: ['"Work Sans"'],
      heading: ["Montserrat"],
      body: ['"Work Sans"'],
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
