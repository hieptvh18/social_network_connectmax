<template>
  <div class="flex justify-between">
    <!-- col left -->
    <div class="w-full sm:w-3/4 rounded-2xl bg-secondary1">
      <div class="flex gap-30 justify-between min-h-screen mx-30 mt-30">
        <div class="w-full lg:w-[64%]">
          <create-news-feed></create-news-feed>
          <post-items></post-items>
        </div>
        <div class="hidden lg:inline-block lg:w-[36%]">
          <you-may-like></you-may-like>
          <recent-events></recent-events>
        </div>
      </div>
    </div>
    <!-- col right -->
    <div class="hidden sm:inline-block w-1/4 bg-white min-h-screen px-5">
        <!-- box search friends -->
      <div
        class="w-full sm:w-full h-8 mx- sm:h-10 flex items-center gap-3 border border-solid rounded-lg border-gray-300 px-2 mb-30"
      >
        <div class="">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.6266 11.5128L16 14.8855L14.8855 16L11.5128 12.6266C10.2579 13.6325 8.69706 14.1797 7.08871 14.1774C3.17574 14.1774 0 11.0017 0 7.08871C0 3.17574 3.17574 0 7.08871 0C11.0017 0 14.1774 3.17574 14.1774 7.08871C14.1797 8.69706 13.6325 10.2579 12.6266 11.5128ZM11.0466 10.9284C12.0462 9.90047 12.6044 8.52254 12.6021 7.08871C12.6021 4.04214 10.1345 1.57527 7.08871 1.57527C4.04214 1.57527 1.57527 4.04214 1.57527 7.08871C1.57527 10.1345 4.04214 12.6021 7.08871 12.6021C8.52254 12.6044 9.90047 12.0462 10.9284 11.0466L11.0466 10.9284Z" fill="white"/>
            <path d="M12.6266 11.5128L16 14.8855L14.8855 16L11.5128 12.6266C10.2579 13.6325 8.69706 14.1797 7.08871 14.1774C3.17574 14.1774 0 11.0017 0 7.08871C0 3.17574 3.17574 0 7.08871 0C11.0017 0 14.1774 3.17574 14.1774 7.08871C14.1797 8.69706 13.6325 10.2579 12.6266 11.5128ZM11.0466 10.9284C12.0462 9.90047 12.6044 8.52254 12.6021 7.08871C12.6021 4.04214 10.1345 1.57527 7.08871 1.57527C4.04214 1.57527 1.57527 4.04214 1.57527 7.08871C1.57527 10.1345 4.04214 12.6021 7.08871 12.6021C8.52254 12.6044 9.90047 12.0462 10.9284 11.0466L11.0466 10.9284Z" fill="#4E5D78"/>
            </svg>
        </div>
        <input
          placeholder="Search friends"
          type="text"
          class="focus:outline-none rounded-lg h-full w-full placeholder:text-xs sm:placeholder:text-sm"
        />
      </div>
      <!-- list story -->
      <stories-slider></stories-slider>
      <!-- friend list -->
      <friend-list></friend-list>
    </div>
  </div>
</template>
<script lang="ts">
import StoriesSlider from '@/components/newsfeed/StoriesSlider.vue';
import FriendList from '@/components/newsfeed/FriendList.vue';
import CreateNewsFeed from '@/components/newsfeed/CreateNewsFeed.vue';
import RecentEvents from '@/components/newsfeed/RecentEvents.vue';
import YouMayLike from '@/components/newsfeed/YouMayLike.vue';
import BirthdayEvents from '@/components/newsfeed/BirthdayEvents.vue';
import PostItems from '@/components/newsfeed/PostItems.vue';

export default {
  name: 'newsfeed',
  components: {StoriesSlider,FriendList,CreateNewsFeed,RecentEvents,YouMayLike,BirthdayEvents,PostItems},
  methods: {}
}
</script>
