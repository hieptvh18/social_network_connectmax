import { createRouter, createWebHistory } from 'vue-router'
import login from '@/router/auth';
import newsfeed from '@/router/newsfeed';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [...login,...newsfeed]
})

export default router
