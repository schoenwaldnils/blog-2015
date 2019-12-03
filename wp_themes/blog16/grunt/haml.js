module.exports = {
  compile: {
    options: {
      enableDynamicAttributes: false
    },
    files: [
      {
        expand: true,
        cwd: 'templates/',
        src: ['**/*.haml'],
        dest: '',
        ext: '.php'
      },
      {
        expand: true,
        src: ['components_local/**/*.haml'],
        dest: '',
        extDot: 'last',
        ext: '.php'
      }
    ],
  },
};
