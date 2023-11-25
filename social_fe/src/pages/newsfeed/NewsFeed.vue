<template>
  <div class="flex justify-between flex-col sm:flex-row">
    <!-- col left -->
    <div class="w-full sm:w-3/4 rounded-2xl bg-secondary1">
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
    <!-- col right -->
    <div class="bg-secondary1 sm:inline-block -order-1 sm:order-1 w-full sm:w-1/4 sm:bg-white sm:min-h-screen sm:px-5">
      <div class="bg-white mt-2 sm:mt-0 px-5 sm:px-0">
        <!-- box search friends -->
        <form-search-friend></form-search-friend>
        <!-- list story -->
        <stories-slider></stories-slider>
        <!-- friend list -->
        <friend-list></friend-list>
      </div>
    </div>
  </div>
</template>
<script lang="ts">
import StoriesSlider from '@/components/newsfeed/Story/Index.vue';
import FriendList from '@/components/newsfeed/FriendList.vue';
import CreateNewsFeed from '@/components/newsfeed/CreateNewsFeed.vue';
import RecentEvents from '@/components/newsfeed/RecentEvents.vue';
import YouMayLike from '@/components/newsfeed/YouMayLike.vue';
import BirthdayEvents from '@/components/newsfeed/BirthdayEvents.vue';
import PostItems from '@/components/newsfeed/PostItems.vue';
import FormSearchFriend from '@/components/common/FormSearchFriend.vue';

export default {
  name: 'newsfeed',
  components: {StoriesSlider,FriendList,CreateNewsFeed,RecentEvents,YouMayLike,BirthdayEvents,PostItems,FormSearchFriend},
  methods: {}
}
</script>
