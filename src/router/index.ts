import { createRouter, createWebHistory } from 'vue-router'
import login from '@/router/auth';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [...login]
})

export default router
