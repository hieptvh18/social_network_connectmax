import { createRouter, createWebHistory } from 'vue-router'
import login from '@/router/auth';
import newsfeed from '@/router/newsfeed';
import profile from '@/router/profile';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [...login,...newsfeed,...profile]
})

export default router
