module.exports = {
  // purge: [], // for production
  purge: [ 
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ], // for dev
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
