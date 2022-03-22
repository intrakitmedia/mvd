module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    screens: {
      'xs': '370px',
      'sm': '576px',
      'md': '768px',
      'lg': '1120px',
      'xl': '1425px',
    },
    extend: {
      colors: {},
    },
    spacing: {
      '0': '0',
      '1': '10px',
      '2': '15px',
      '3': '20px',
      '4': '25px',
      '5': '30px',
      '6': '35px',
    },
    container: {
      padding: {
        DEFAULT: '20px',
        sm: '20px',
        md: '20px',
        lg: '10px',
        xl: '20px',
      }
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
