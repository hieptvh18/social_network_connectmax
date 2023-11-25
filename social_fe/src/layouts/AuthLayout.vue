<template>
  <div class="auth-layout-container mb-10">
    <header class="flex justify-between items-center m-7">
      <div class="box-logo">
        <router-link :to="{name:'page.newsfeed'}" class="logo flex align-middle">
          <img src="@/assets/images/Logo.png" class="mr-2" alt="logo" />
          <span class="text-sm sm:text-lg font-bold">Connect Max</span>
        </router-link>
      </div>
      <div class="lang">
        <select
          id="underline_select"
          class="block w-full py-2 px-2 text-sm sm:text-md text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer shadow-sm"
        >
          <option selected value="UK">English (UK)</option>
          <option value="US">United States</option>
          <option value="CA">Canada</option>
          <option value="FR">France</option>
          <option value="DE">Germany</option>
        </select>
      </div>
    </header>
    <main>
      <router-view></router-view>
    </main>
  </div>
</template>
<script lang="ts">
export default {
  name: 'auth-layout'
}
</script>
<style lang="scss">
    .auth-layout-container{
        color: #4E5D78;
    }
</style>
