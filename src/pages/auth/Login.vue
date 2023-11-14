<template>
  <div class="auth-container">
    <h3 class="mb-2 text-center font-black text-3xl">Getting Started</h3>
    <p class="text-center font-medium">Create an account to continue and connect with the people.</p>
    <div class="box-form my-0 mx-auto shadow-md p-10 md:w-full lg:w-2/5">
      <div class="">
        <div class="social-login flex justify-between gap-5 mb-10">
          <button
            class="flex w-full items-center justify-center py-4 px-9 bg-gray-200 font-medium rounded-lg gap-3 focus:bg-gray-300 hover:bg-gray-300"
          >
            <font-awesome-icon icon="fa-brands fa-google" />
            <span>Log in with Google</span>
          </button>
          <button
            class="flex w-full items-center justify-center py-4 px-9 bg-gray-200 font-medium rounded-lg gap-3 focus:bg-gray-300 hover:bg-gray-300"
          >
            <font-awesome-icon icon="fa-brands fa-apple" />
            <span>Log in with Google</span>
          </button>
        </div>
        <div class="line-or mb-10 flex items-center gap-5">
          <div class="h-px w-full bg-slate-200"></div>
          <div class="font-bold">OR</div>
          <div class="h-px w-full bg-slate-200"></div>
        </div>
        <form action="" method="POST" class="mb-10">
          <div class="flex items-center gap-1 mb-5 border-solid border rounded-lg">
            <div class="w-auto pl-2">@</div>
            <input class="w-full p-3 pl-2 placeholder:text-sm focus:outline-none" required type="text" placeholder="Your Email" />
          </div>
          <div class="flex items-center gap-1 mb-5 border-solid border rounded-lg">
            <div class="w-auto pl-2"><font-awesome-icon :icon="['far', 'face-smile']" /></div>
            <input class="w-full p-3 pl-2 placeholder:text-sm focus:outline-none" required type="text" placeholder="Your Name" />
          </div>
          <div class="flex items-center gap-1 mb-5 border-solid border rounded-lg">
            <div class="w-auto pl-2"><font-awesome-icon :icon="['fas', 'lock']" /></div>
            <input ref="passwordField" class="w-full p-3 pl-2 placeholder:text-sm focus:outline-none" required 
            type="password" placeholder="Your Password"
             />
             <button type="button" @click="showHidePassword" class="pr-3">
                <font-awesome-icon v-if="!isShowPassword" :icon="['far', 'eye-slash']" />
                <font-awesome-icon v-if="isShowPassword" :icon="['far', 'eye']" />
            </button>
          </div>

          <button class="bg-blue-600 w-full text-white py-4 px-10 rounded-xl focus:bg-blue-900 hover:bg-blue-900">
            Sign up
          </button>
        </form>
        <div class="flex justify-center gap-3 font-medium">
          <div class="">Already have an account?</div>
          <a class="text-blue-600" href="">Sign In</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { ref } from 'vue';

export default {
  name: 'login',
  components: {},
  data(){
    return {
        isShowPassword:false
    }
  },
  methods:{
    showHidePassword(e: object){
        const type = this.$refs.passwordField.getAttribute('type');
        let typeSet = type == 'password' ? 'text' : 'password';
        this.$refs.passwordField.setAttribute('type',typeSet );
        this.isShowPassword = !this.isShowPassword;
    }
  }
}
</script>
