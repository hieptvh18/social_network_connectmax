<template>
  <div class="auth-container mt-20">
    <h3 class="mb-5 text-center text-lg font-black sm:text-3xl">Check your email</h3>
    <p class="text-center text-sm sm:font-medium px-10 mb-5">
      We’ve sent a link to your email address: ahmed@gmail.com 
    </p>
    <div class="box-form my-0 mx-auto px-10 md:w-full lg:w-2/5">
      <div class="">
        <form action="" method="POST" class="mb-10">
          <button
            class="bg-blue-600 w-full text-white py-4 px-10 rounded-xl focus:bg-blue-900 hover:bg-blue-900"
          >
            Skip now
          </button>
        </form>
        <div class="flex justify-center font-medium gap-3">
          <span>Didn’t receive an email?</span>
          <router-link class="text-blue-600 flex items-center gap-3" :to="{name:'page.signin'}">
            Resend
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
export default {
  name: 'login',
  components: {  },
}
</script>
<style lang="scss" scoped>

</style>
