module.exports = {
  options: {
    html: './templates/misc/favicon.html',
    trueColor: true,
    precomposed: true,
    appleTouchBackgroundColor: '#fff',
    coast: true,
    windowsTile: true,
    tileBlackWhite: false,
    tileColor: 'auto',
    HTMLPrefix: '/sites/all/themes/##themeName##/build/images/favicons/'
  },
  icons: {
    src: [
      './assets/images/logo/favicon.png'
    ],
    dest: [
      './build/images/favicons/'
    ]
  }
};
