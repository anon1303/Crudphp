module.exports = {
  prefix: 'tw-',
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {}
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ],
.btn-danger {
    color: #fff;
    background-color: #dc3545 !important;
    border-color: #dc3545;
}

}
