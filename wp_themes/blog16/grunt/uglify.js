module.exports = {
  dist: {
    options: {
      beautify: false,
      mangle: false
    },
    files: {
      './build/main.min.js': ['./build/main.js']
    }
  }
};
