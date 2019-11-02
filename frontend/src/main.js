import components from './app/components'
import routes from './app/routes'

const superv = window.superv

superv.router().addRoutes(routes)
superv.registerComponents(components)

export default {}
