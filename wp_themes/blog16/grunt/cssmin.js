module.exports = {
  target: {
    files: [{
      expand: true,
      cwd: './build',
      src: [
        'main.css',
        '!*.min.css',
        ],
      dest: './build',
      ext: '.min.css'
    }]
  }
};
