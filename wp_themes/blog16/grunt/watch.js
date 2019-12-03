module.exports = {
  css: {
    tasks: [
      'dev'
    ],
    files: [
      './assets/styles/**/*.css',
      './components_local/**/*.css'
    ]
  },
  js: {
    tasks: [
      'dev'
    ],
    files: [
      './assets/scripts/**/*.js',
      './components_local/**/*.js'
    ]
  },
  tpl: {
    tasks: [
      'haml'
    ],
    files: [
      './templates/*.haml',
      './components_local/**/*.haml'
    ]
  },
  components: {
    tasks: [
      'dev'
    ],
    files: [
      './components_local/**/*.json',
      './component.json'
    ],
    options: {
      event: [
        'added',
        'deleted',
        'changed'
      ]
    },
  },
  iconfont: {
    tasks: [
      'iconfont',
      'dev'
    ],
    files: [
      './assets/images/icons/*.svg',
    ],
  }
};
