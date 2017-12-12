import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/login'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'login',
      component: HelloWorld
    }
  ]
})
