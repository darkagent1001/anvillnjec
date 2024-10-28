/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./templates/**/*.php", "./assets/js/*.js"],
  darkMode: "class",
  theme: {
    fontFamily: {
      title: "Inter",
      body: "Inter",
    },
    colors: {
      transparent: "transparent",
      black: "#000000",
      "dimmed-black": "#565656",
      "dimmed-white": "#bbbbbb",
      primary: {
        50: "#eef2ff",
        100: "#e0e7ff",
        200: "#c7d2fe",
        300: "#a5b4fc",
        400: "#818cf8",
        500: "#6366f1",
        600: "#4f46e5",
        700: "#4338ca",
        800: "#3730a3",
        900: "#312e81",
        950: "#1e1b4b",
      },
      error: {
        50: "#fef2f2",
        100: "#fde3e3",
        200: "#fccccc",
        300: "#f9a8a8",
        400: "#f26363",
        500: "#e94a4a",
        600: "#d62c2c",
        700: "#b42121",
        800: "#951f1f",
        900: "#7c2020",
        950: "#430c0c",
      },
      success: {
        50: "#effef6",
        100: "#dafeea",
        200: "#b8fad6",
        300: "#63f2a6",
        400: "#42e68f",
        500: "#1acd6f",
        600: "#0faa59",
        700: "#0f8649",
        800: "#12693c",
        900: "#115633",
        950: "#03301b",
      },
      midnight: {
        50: "#737381",
        100: "#696977",
        200: "#5f5f6d",
        300: "#555563",
        400: "#4b4b59",
        500: "#41414f",
        600: "#373745",
        700: "#2d2d3b",
        800: "#232331",
        900: "#191927",
        950: "#080816",
      },
      white: {
        50: "#ffffff",
        100: "#fbfbfb",
        200: "#f4f4f4",
        300: "#ededed",
        400: "#e6e6e6",
        500: "#dedede",
        600: "#656565",
        700: "#525252",
        800: "#464646",
        900: "#3d3d3d",
        950: "#292929",
      },
    },
    borderRadius: {
      DEFAULT: "0.5rem",
      none: "0",
      sm: "0.25rem",
      md: "0.75rem",
      lg: "1rem",
      full: "1000rem",
    },
    boxShadow: {
      DEFAULT:
        "0px 3px 11px -1px rgba(0, 0, 0, 0.10), 0px 4px 4px -4px rgba(0, 0, 0, 0.32)",
      sm: "0px 4px 11px -2px rgba(0, 0, 0, 0.05), 0px 4px 4px -4px rgba(0, 0, 0, 0.32)",
      md: "0px 5px 8px 0px rgba(0, 0, 0, 0.05), 0px 3px 11px -1px rgba(0, 0, 0, 0.10), 0px 4px 4px -4px rgba(0, 0, 0, 0.32)",
      lg: "0px 4px 9.9px 3px rgba(0, 0, 0, 0.03), 0px 5px 8px 0px rgba(0, 0, 0, 0.05), 0px 3px 11px -1px rgba(0, 0, 0, 0.10), 0px 4px 4px -4px rgba(0, 0, 0, 0.32)",
      "inner-effect": "0px 0px 51.6px -14px rgba(255, 255, 255, 0.10) inset",
      none: "none",
    },
    extend: {},
  },
  plugins: [],
};
