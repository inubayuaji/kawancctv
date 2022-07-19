module.exports = {
  content: [
    "source/_components/**/*.blade.php",
    "source/_layouts/**/*.blade.php",
    "source/_posts/**/*.md",
    "source/_posts/**/*.blade.php",
    "source/paket/**/*.blade.php",
    "source/blog.blade.php",
    "source/index.blade.php",
  ],
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
  plugins: [require("@tailwindcss/typography")],
};
