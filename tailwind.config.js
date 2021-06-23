const colors = require('tailwindcss/colors')

module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './src/**/*.php',
      './template-parts/**/*.php',
      './*.php',
      './inc/**/*.php',
      './inc/*.php',
      './src/**/*.js',
      './assets/js/script.js',
    ],
  },
  darkMode: false, //you can set it to media(uses prefers-color-scheme) or class(better for toggling modes via a button)
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.trueGray,
      indigo: colors.indigo,
      purple: colors.violet,
      red: colors.rose,
      yellow: colors.amber,
      green: colors.green,
      pink: colors.pink, 
      lime: colors.lime,
      emerald: colors.emnerald, 
    },
    extend: {},
    
    fontSize: {
      '2xs': '.60rem',
      'xs': '.75rem',
      'sm': '.875rem',
      'tiny': '.875rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2.25rem',
      '5xl': '3rem',
      '6xl': '4rem',
      '7xl': '5rem',
    }

  },
  variants: {},
  plugins: [
    require('tailwindcss-textshadow'),
    function ({ addComponents }) {
      addComponents({
        '.container': {
          maxWidth: '100%',
          '@screen sm': {
            maxWidth: '100%',
          },
          '@screen md': {
            maxWidth: '100%',
          },
          '@screen lg': {
            maxWidth: '100%',
          },
          '@screen xl': {
            maxWidth: '90%',
          },
        }
      })
    } /* ending func addComponents */

  ],
}