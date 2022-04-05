module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
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
