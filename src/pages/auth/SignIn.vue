<template>
  <div class="auth-container mt-20 sm:mt-10">
    <h3 class="mb-5 text-center text-lg font-black sm:text-3xl">Sign In</h3>
    <p class="text-center text-sm sm:font-medium px-10 mb-5">
      Welcome back, you’ve been missed!
    </p>
    <div class="box-form my-0 mx-auto shadow-md p-10 md:w-full lg:w-2/5">
      <div class="">
        <div class="social-login flex justify-between gap-2 sm:gap-5 mb-10">
          <button
            class="flex w-full items-center justify-center px-2 sm:py-4 sm:px-9 bg-gray-200 font-medium rounded-lg sm:gap-3 gap-1 focus:bg-gray-300 hover:bg-gray-300 text-sm sm:text-base h-10 sm:h-auto"
          >
            <font-awesome-icon icon="fa-brands fa-google" />
            <span>Log in with Google</span>
          </button>
          <button
            class="flex w-full items-center justify-center px-2 sm:py-4 sm:px-9 bg-gray-200 font-medium rounded-lg sm:gap-3 gap-1 focus:bg-gray-300 hover:bg-gray-300 text-sm sm:text-base h-10 sm:h-auto"
          >
            <font-awesome-icon icon="fa-brands fa-apple" />
            <span>Log in with Apple</span>
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
            <input
              class="w-full p-3 pl-2 placeholder:text-sm focus:outline-none"
              required
              type="email"
              placeholder="Your Email"
            />
          </div>
          <div class="flex items-center gap-1 mb-5 border-solid border rounded-lg">
            <div class="w-auto pl-2"><font-awesome-icon :icon="['fas', 'lock']" /></div>
            <input
              ref="passwordField"
              class="w-full p-3 pl-2 placeholder:text-sm focus:outline-none"
              required
              type="password"
              placeholder="Your Password"
            />
            <button type="button" @click="showHidePassword" class="mr-3">
              <font-awesome-icon v-if="!isShowPassword" :icon="['far', 'eye-slash']" />
              <font-awesome-icon v-if="isShowPassword" :icon="['far', 'eye']" />
            </button>
          </div>
          <div class="flex justify-between mb-7">
            <div class="flex items-center gap-3">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember" class="text-sm">Remember</label>
            </div>
            <router-link class="text-primary" :to="{name:'page.forgot'}">Forgot password?</router-link>
          </div>
          <button
            class="bg-primary w-full text-white py-4 px-10 rounded-xl focus:bg-blue-900 hover:bg-blue-900"
          >
            Sign up
          </button>
        </form>
        <div class="flex justify-center gap-3 font-medium">
          <div class="">You haven't any account?</div>
          <router-link class="text-blue-600" :to="{name:'page.signup'}">Sign Up</router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { ref } from 'vue'
import VueDatePicker from '@vuepic/vue-datepicker'
import '@vuepic/vue-datepicker/dist/main.css'

export default {
  name: 'login',
  components: { VueDatePicker },
  data() {
    return {
      isShowPassword: false,
      date:ref(null)
    }
  },
  methods: {
    showHidePassword(e: object) {
      const type = this.$refs.passwordField.getAttribute('type')
      let typeSet = type == 'password' ? 'text' : 'password'
      this.$refs.passwordField.setAttribute('type', typeSet)
      this.isShowPassword = !this.isShowPassword
    }
  }
}
</script>
<style lang="scss" scoped>
input.dp__input{
  background-color: #000 !important;
}
</style>
