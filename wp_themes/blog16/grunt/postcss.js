module.exports = {
  options: {
    map: {
      inline: false,
      annotation: './build'
    },
    processors: [
      require('postcss-each'),
      // require('postcss-bem-linter'),
      require('postcss-sprites')({
        stylesheetPath: './build/',
        spritePath: './build/sprite.png',
        retina: false
      }),
      require('postcss-custom-media'),
      require('postcss-custom-properties'),
      require('postcss-calc'),
      require('autoprefixer')({
        browsers: 'last 2 versions'
      }),
    ]
  },
  dist: {
    src: './build/main.css'
  }
};
