// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import VueRouter from 'vue-router'
import http from './services/http.js'

import iView from 'iview';
import 'iview/dist/styles/iview.css';
import 'bootstrap/dist/css/bootstrap.css'

import Login from './components/Login.vue'
import Home from './components/Home.vue'

Vue.prototype.$http = http

Vue.use(VueRouter)
Vue.use(iView)

const routes = new VueRouter({
	mode: 'history',
	base:__dirname,
	routes:[{
		path:'/',
		component:Home,
		meta:{
			requireAuth:true
		}
	},
	{
		path:'/',
		component:Login
	}
	]
})

import Auth from './services/auth.js';
router.beforeEach((to,from,next) => {
	if (to.meta.requireAuth && ! Auth.authenticated()) {
		next({
			path:'/login',
			query:{redirect: to.fullPath}
		})
	}
	else{
		next()
	}
})

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
export default router
