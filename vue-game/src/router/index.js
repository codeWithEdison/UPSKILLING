import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Notfound from '../views/404.vue'
import User from '../views/User.vue'
import Userdata from '../views/Userdata.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/:pathMatch(.*)*',
      name: '404',
      component: Notfound,
      // redirect: '/'
    },
    {
      path: '/User/:userId',
      name: 'User',
      component: User
    },
    {
      path: '/Userdata',
      name: 'Userdata',
      component: Userdata
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    }
  ]
})

export default router
