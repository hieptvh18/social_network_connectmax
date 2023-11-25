<template>
  <div class="flex gap-30 justify-between flex-col sm:flex-row rounded-2xl bg-secondary1">
    <!-- col left -->
    <div class="w-full sm:w-1/3 mt-30 ml-30 rounded-2xl bg-white">
        <div class="flex items-center justify-between gap-5 m-5">
            <div class="w-full">
                <form-search-friend></form-search-friend>
            </div>
            <button class="">
              <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="42" height="42" rx="10" fill="white"/>
              <rect width="42" height="42" rx="10" fill="#4E5D78" fill-opacity="0.03"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M21 25.3036L18.0692 26.9137C17.7184 27.1064 17.2845 26.9655 17.1001 26.5989C17.0267 26.453 17.0013 26.2858 17.028 26.1232L17.5878 22.7129L15.2167 20.2976C14.9329 20.0085 14.9271 19.5338 15.2037 19.2372C15.3139 19.1192 15.4582 19.0423 15.6144 19.0186L18.8911 18.521L20.3565 15.4182C20.5319 15.0468 20.9621 14.8943 21.3175 15.0776C21.459 15.1506 21.5736 15.2703 21.6434 15.4182L23.1088 18.521L26.3855 19.0186C26.7777 19.0781 27.0494 19.4587 26.9924 19.8685C26.9698 20.0317 26.8962 20.1825 26.7832 20.2976L24.4122 22.7129L24.9719 26.1232C25.0389 26.5314 24.7765 26.919 24.386 26.9891C24.2304 27.0169 24.0704 26.9905 23.9307 26.9137L21 25.3036Z" fill="#38CB89"/>
              </svg>
            </button>
        </div> 
    </div>
    <!-- col right -->
    <div class="w-full sm:w-2/3 mt-30 mr-30 rounded-2xl bg-white">
      <div class="flex gap-30 justify-between min-h-screen sm:mx-30 mt-2 sm:mt-30">
        <div class="w-full lg:w-[64%]">
          <create-news-feed></create-news-feed>
          <!-- slider story if screen =  -->
          <post-items></post-items>
        </div>
        <div class="hidden lg:inline-block lg:w-[36%]">
          <you-may-like></you-may-like>
          <recent-events></recent-events>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
import FormSearchFriend from '@/components/common/FormSearchFriend.vue';
</script>