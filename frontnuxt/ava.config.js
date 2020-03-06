<<<<<<< HEAD
export default {
  require: ['./test/ava.setup.js'],
  sources: ['**/*.{js,vue}'],
  babel: {
    testOptions: {
      plugins: [
        [
          'module-resolver',
          {
            root: ['.'],
            alias: {
              '@': '.',
              '~': '.'
            }
          }
        ]
      ]
    }
  },
  tap: true,
  verbose: true
}
=======
export default {
  require: ['./test/ava.setup.js'],
  sources: ['**/*.{js,vue}'],
  babel: {
    testOptions: {
      plugins: [
        [
          'module-resolver',
          {
            root: ['.'],
            alias: {
              '@': '.',
              '~': '.'
            }
          }
        ]
      ]
    }
  },
  tap: true,
  verbose: true
}
>>>>>>> 78f73c664159341f41233d9d1aff2c31be21e3a9
