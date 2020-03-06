<<<<<<< HEAD
require('browser-env')()
const hooks = require('require-extension-hooks')
const Vue = require('vue')

Vue.config.productionTip = false

// https://github.com/nuxt/create-nuxt-app/issues/180#issuecomment-463069941
window.Date = global.Date = Date

hooks('vue').plugin('vue').push()
hooks(['vue', 'js']).exclude(({ filename }) => filename.match(/\/node_modules\//)).plugin('babel').push()
=======
require('browser-env')()
const hooks = require('require-extension-hooks')
const Vue = require('vue')

Vue.config.productionTip = false

// https://github.com/nuxt/create-nuxt-app/issues/180#issuecomment-463069941
window.Date = global.Date = Date

hooks('vue').plugin('vue').push()
hooks(['vue', 'js']).exclude(({ filename }) => filename.match(/\/node_modules\//)).plugin('babel').push()
>>>>>>> 78f73c664159341f41233d9d1aff2c31be21e3a9
