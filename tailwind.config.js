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
      colors: {
        "safety-1": "#ef2f02",
        "safety-2": "#ef2f02",
        "safety-3": "#e75903",
        "safety-4": "#e08e04",
        "safety-5": "#d1a703",
        "safety-6": "#bebc05",
        "safety-7": "#a9d005",
        "safety-8": "#8cdf07",
        "safety-9": "#63f107",
        "safety-10": "#63f107",
      },
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
        lg: '40px',
        xl: '40px',
      }
    }
  },
  variants: {
    extend: {
    },
  },
  plugins: [],
};
