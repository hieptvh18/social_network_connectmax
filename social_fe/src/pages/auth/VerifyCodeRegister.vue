<template>
    <div class="auth-container mt-20">
      <h3 class="mb-5 text-center text-lg font-black sm:text-3xl">Enter the code from your email
</h3>
      <p class="text-center text-sm sm:font-medium px-10 mb-5">
        We’ve sent code to your email address: ahmed@gmail.com 
      </p>
      <div class="box-form my-0 mt-30 mx-auto px-10 md:w-full lg:w-2/5">
        <div class="">
          <form class="mb-10">
            <input type="text"
            placeholder="Enter code"
             class="border-2 bg-secondary1 w-full text-black py-4 px-10 rounded-xl focus:border-blue-900 mb-30">
            <button
              class="bg-primary w-full text-white py-4 px-10 rounded-xl focus:bg-blue-900 hover:bg-blue-900"
            >
              Send
            </button>
          </form>
          <div class="flex justify-center font-medium gap-3">
            <span>Didn’t receive an email?</span>
            <button type="button" class="text-blue-600 flex items-center gap-3">
              Resend
            </button>
          </div>
        </div>
      </div>
    </div>
  </template>
  
<script lang="ts" setup>
console.log('mounted verify code register account');

</script>