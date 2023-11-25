import { createRouter, createWebHistory } from 'vue-router'
import login from '@/router/auth';
import newsfeed from '@/router/newsfeed';
import profile from '@/router/profile';
import notification from '@/router/notification';
import message from '@/router/message';
import Message from 'primevue/message';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [...login,...newsfeed,...profile,...notification,...message]
})

export default router
 