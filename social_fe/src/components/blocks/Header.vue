<template>
  <div class="flex justify-between items-center gap-5 sm:gap-1  ">
    <router-link class="hidden sm:inline-block" :to="{ name: 'page.newsfeed' }">
      <div class="logo flex items-center">
        <div class=""><img src="@/assets/images/Logo.png" class="mr-2" alt="logo" /></div>
        <span class="hidden md:inline-block text-sm sm:text-sm md:text-lg text-secondary font-bold">Connect Max</span>
      </div>
    </router-link>
    <!-- row reverse if sreen = mobile -->
    <div class="flex justify-between flex-row-reverse sm:flex-row w-11/12 sm:w-10/12 gap-5">
      <div class="w-full sm:w-1/2 h-8 sm:h-10 flex items-center gap-3 border border-solid rounded-lg border-gray-300 px-2">
        <div class="">
            <img src="@/assets/images/search.svg" alt="">
        </div>
        <input placeholder="Search for something here..." type="text" 
        class="focus:outline-none rounded-lg h-full w-full placeholder:text-xs sm:placeholder:text-sm" />
      </div>
      <div class="flex items-center gap-5">
        <router-link class="font-medium hidden text-secondary sm:inline-block" :to="{name:'page.profile', params:{username: auth.user.username ?? ''}}"
          >{{ auth.user.name }}</router-link
        >
        <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg overflow-hidden">
          <router-link :to="{name:'page.profile', params:{username: auth.user.username ?? ''}}"
          >
          <img
          :src="auth.user.avatar"
          class="w-full"
            alt="simon"
          />
          </router-link
        >
        </div>
      </div>
    </div>

    <!-- if screen mobile -> show -->
    <div class="w-4 h-4 sm:hidden">
      <router-link :to="{name:'page.profile', params:{username: auth.user.username ?? ''}}">
            <img src="@/assets/images/Message.svg" class="w-full object-cover" alt="">
        </router-link>
    </div>
  </div>
</template>
<script setup lang="ts">
import { useAuthStore } from '@/stores/auth';

const auth = useAuthStore();
</script>
