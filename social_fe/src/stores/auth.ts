import { defineStore } from 'pinia'
import { login, logout } from '@/api/auth'
import { getUser } from '@/api/user'
import { resetAllPiniaStores } from '.'
import router from '@/router'

export const useAuthStore = defineStore('auth', {
  state: () => {
    return {
      authUser: {},
      isAuthenticated: false
    }
  },
  getters: {
    isAuth: (state) => state.isAuthenticated,
    user: (state) => state.authUser
  },
  actions: {
    async login(body: any) {
      try {
        const resp = await login(body)
        
        if (resp.status == 200) {
          let accessToken = resp.data.data.token;
          localStorage.setItem('token', accessToken)
          // set authUser
          this.authUser = resp.data.data.data;
          this.isAuthenticated = true;
          router.push({name:'page.newsfeed'});
        }
      } catch (error) {
        console.log(error);
        throw error
      }
    },

    async register() {},

    async forgotPassword(){},

    async logout() {
        try{
            const resp = await logout();
            console.log(resp);
            
            if(resp.status == 200){
                localStorage.removeItem('token');
                router.push({name:'page.sigin'});
            }
        }catch(error){
            throw error;
        }
        // reset store
        resetAllPiniaStores();
    },

    // load user from token
    async loadlUserState(){
      if(this.isAuthenticated) return;
      if(!localStorage.getItem('token')) return;

      const res = await getUser();
      if( res.status == 200){
        this.authUser = res.data.user;
        this.isAuthenticated = true;
      }
    }
  }
})
