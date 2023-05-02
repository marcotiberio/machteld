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
      green: '#45d316',
      darkgreen: '#252e2f',
      blue: '#0068ff',
      grey: '#f9f9f9',
      darkgrey: '#a3a3a3',
      current: 'currentColor',
      transparent: 'transparent'
    },
    fontSize: {
      bodySmall: ['1.15rem'],
      body: ['1.25rem'],
      bodyBold: ['1.25rem', {
        fontWeight: '500'
      }],
      button: ['1.25rem'],
      h1: ['7rem'],
      h2: ['5.625rem'],
      h3: ['2.5rem'],
      menu: ['1rem']
    },
    screens: {
      sm: '640px',
      md: '780px',
      lg: '1180px',
      xl: '1280px'
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
        xxl: '135px'
      }
    }
  },
  plugins: []
}
