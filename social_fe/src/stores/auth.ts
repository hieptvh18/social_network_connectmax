import { defineStore } from 'pinia'
import { login } from '@/api/auth'
import router from '@/router'

export const useAuthStore = defineStore('auth', {
  state: () => {
    return {
      authUser: {},
      isAuthenticated: false
    }
  },
  getters: {
    getData(){
        return 123;
    },
    authUser: (state) => state.authUser
  },
  actions: {
    async login(body: any) {
      try {
        const resp = await login(body)
        console.log(resp);
        
        if (resp.status == 200) {
          // store token
          let accessToken = resp.data.data.token;
          
          localStorage.setItem('token', accessToken)
          // set authUser
          this.authUser = resp.data.data;
          this.isAuthenticated = true;
        //   router.push({name:'page.newsfeed'});
        }
      } catch (error) {
        console.log(error);
        throw error
      }
    },

    async register() {},

    async forgotPassword(){},

    async logout() {

        // reset store
    }
  }
})
