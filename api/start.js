const config = require('config')
const expressListRoutes = require('express-list-routes')

const { app, router } = require('./index')

// Listen
const API_PORT = config.get('api.port')
app.listen(API_PORT)
console.log(`[API] Listening on http://localhost:${API_PORT}`)

// Print routes
expressListRoutes({ prefix: '/api' }, 'API:', router)
