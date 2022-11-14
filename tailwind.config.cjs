// https://tailwindcss.com/docs/configuration

module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      colors: {
        promo: {
          500: '#ff6096',
        },
        crown: {
          500: '#d39a7d',
        },
        'buy-button': '#3e8dfc',
      }, // Extend Tailwind's default colors
      spacing: {
        'dropdown-nav': '3.15rem',
      }, // Extend Tailwind's default spacing
      width: {
        '1/7': '14%',
        '6/7': '86%',
      },
    },
    screens: {
      'huge': '1600px',
    },
  },
  plugins: [],
};
