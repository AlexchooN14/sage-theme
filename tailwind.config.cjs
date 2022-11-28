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
        'newsletter-pink': '#ffc0cb',
        'newsletter-border': '#ffa4a5',
        'theme-pink': '#fccdce',
        'dark-overlay': 'rgba(0, 0, 0, 0.6)',
      }, // Extend Tailwind's default colors

      spacing: {
        'dropdown-nav': '3.15rem',
      }, // Extend Tailwind's default spacing

      padding: {
        '15': '60px',
        '18': '70px',
      },

      margin: {
        '15': '60px',        
      },

      width: {
        '1/7': '14%',
        '6/7': '86%',
      },

      fontSize: {
        'megamenu-small': '13px',
        'megamenu-bigger': '13.5px',
      },
      
    },
    screens: {
      'huge': '1600px',
    },
  },
  plugins: [],
};
