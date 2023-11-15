<template>
  <div class="auth-container mt-20">
    <h3 class="mb-5 text-center text-lg font-black sm:text-3xl">Forgot Password?</h3>
    <p class="text-center text-sm sm:font-medium px-10 mb-5">
      Enter your details to receive a rest link
    </p>
    <div class="box-form my-0 mx-auto shadow-md p-10 md:w-full lg:w-2/5">
      <div class="">
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
          
          <button
            class="bg-blue-600 w-full text-white py-4 px-10 rounded-xl focus:bg-blue-900 hover:bg-blue-900"
          >
            Send
          </button>
        </form>
        <div class="flex justify-center font-medium">
          <router-link class="text-blue-600 flex items-center gap-3" :to="{name:'page.signin'}">
            <font-awesome-icon :icon="['fas', 'chevron-left']" />
            <span>Back to Sign In</span>
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { ref } from 'vue'

export default {
  name: 'forgot-password',
  components: {  },
  methods: {
   
  }
}
</script>
<style lang="scss" scoped>
input.dp__input{
  background-color: #000 !important;
}
</style>
