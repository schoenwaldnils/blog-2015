module.exports = {
  symbol: {
    cwd: './assets/images/svg',
    src: ['*.svg'],
    dest: './build/svg_sprite',
    options: {
      mode: {
        symbol: {
          render: {
            css: true
          },
          example: true
        }
      }
    }
  }
};
