const config = require('config')

const API_PORT = config.get('api.port')

module.exports = {
  srcDir: __dirname,
  loading: {
    color: '#d9534f'
  },
  manifest: {
    lang: 'fa',
    name: 'اسنپ',
    short_name: 'snapp',
    description: 'ارزونترین مسیر',
    theme_color: '#2780e3'
  },
  modules: [
    '@nuxtjs/axios',
    '@nuxtjs/bootstrap-vue',
    '@nuxtjs/proxy',
    ['@nuxtjs/pwa', { workbox: false }]
  ],
  plugins: [
    './plugins/maps.js'
  ],
  css: [
    '~/assets/fonts/sahel/font-face.css'
  ],
  proxy: [
    process.env.API_URL || `http://localhost:${API_PORT}/api`
  ]
}
