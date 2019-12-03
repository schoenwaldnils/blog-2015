module.exports = {
  icons: {
    src: './assets/images/icons/*.svg',
    dest: './build/fonts',
    destCss: './components_local/icon',
    options: {
      stylesheet: 'css',
      relativeFontPath: '../../../build/fonts',
      template: 'grunt/webfont/suit.css'
    }
  }
};
