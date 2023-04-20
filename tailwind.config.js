/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    '*.php',
    'templates/**/*.{php,twig}',
    './Components/**/*.{php,twig}'
  ],
  theme: {
    colors: {
      white: '#fff',
      black: '#000',
      green: '#1d4443',
      orange: '#ff7300',
      grey: '#e0dfde',
      darkgrey: '#c4bdb5',
      current: 'currentColor',
      transparent: 'transparent'
    },
    fontSize: {
      body: ['1.5rem'],
      button: ['1.5rem'],
      h1: ['7rem'],
      h2: ['4rem'],
      h3: ['2.5rem'],
      menu: ['1.5rem']
    },
    screens: {
      sm: '640px',
      md: '780px',
      lg: '1180px',
      xl: '1440px'
    },
    extend: {
      aspectRatio: {
        '4/3': '4 / 3',
        '3/4': '3 / 4',
        '2/1': '2 / 1'
      },
      borderWidth: {
        DEFAULT: '1px',
        0: '0',
        2: '2px',
        3: '3px',
        4: '4px'
      },
      spacing: {
        sm: '20px',
        md: '40px',
        lg: '60px',
        xl: '100px',
        xxl: '200px'
      }
    }
  },
  plugins: []
}
