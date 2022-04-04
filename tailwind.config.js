module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {},
    },
  },
  variants: {
    extend: {
      // ...
      filter: ['hover'],
    }
  },
  plugins: [
      require('tw-elements/dist/plugin')
  ],
  safelist: [
    'alignFull',
  ]
};
