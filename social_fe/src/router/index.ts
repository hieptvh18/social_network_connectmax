import { createRouter, createWebHistory } from 'vue-router'
import login from '@/router/auth'
import newsfeed from '@/router/newsfeed'
import profile from '@/router/profile'
import notification from '@/router/notification'
import message from '@/router/message'
import setting from '@/router/setting'
import errors from '@/router/errors'
import NotFound from '@/pages/errors/NotFound.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [...login, ...newsfeed, ...profile, ...notification, ...message, ...setting,...errors,
    {
       path: '/:pathMatch(.*)*',
       component: NotFound,
       meta:{
        title:'Page NotFound'
       } 
    },
  ]
})

router.beforeEach((to, from, next) => {
  document.title = to.meta.title;
  next();
})

export default router
